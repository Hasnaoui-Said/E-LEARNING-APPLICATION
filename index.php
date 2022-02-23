<?php
    session_start();
    
    require_once(dirname(__FILE__) . './template/data/models/data_provider.php');
    $pro = new DataProvider();

    
    $isloged = $pro->isLoged();
    if($isloged){
        $pro->redirect("./template/components/home.php");
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['pass'])){
            extract($_POST);
            require_once(dirname(__FILE__) . './template/data/models/users.php');
            $new_Users = new Users();
            $isUsers = $new_Users->getUsersByPassAndEmail($email, hash('ripemd160',$pass));
            $renember = $_POST['renember'] ?? "";
            // echo "renember ".$renember;
            if($renember == 'on'){
                setcookie("email", $email, time() + 3600 * 24 * 30);
                setcookie("password", $pass, time() + 3600 * 24 * 30);
            }else{
                setcookie("email");
                setcookie("password");
            }
            if($isUsers != null){
                $_SESSION['auth'] = array(
                    'session_gc_lifetime'=> time(),
                    'email'=> $email,
                    'pass'=> hash('ripemd160',($pass)),
                    'role'=> $isUsers['role'],
                    'firstName'=> $isUsers['firstName']
                );
                header('Location: ./template/components/home.php');
            }
            else{
                $status = 'Email or password incorrect';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in</title>
    <link rel="stylesheet" href="template/css/style.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">
        <div class="row justify-content-center m-3">
            <div class="col-lg-5 col-md-7 col-sm-9 card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo mx-4 my-3">
                            <strong>E-Classe</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center d-flex justify-content-center flex-column">
                        <div class=""><h1 class="h1">SIGN IN</h1></div>
                        <div class="">
                            <p>Enter your credentials to access your account</p>
                        </div>
                        <?php if(isset($status)){ ?>
                            <small class="py-2 alert alert-danger"><?php echo $status . $_SESSION['auth']['session_gc_lifetime'] ?? ""; ?></small>
                        <?php } ?>
                    </div>
                </div>
                <div class="row m-2">
                    <form class="form" action="index.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label class="form-label" for="email">Email</label>
                                    <input id="email" name="email" type="email" required value="<?=$_COOKIE['email'] ?? ""; ?>" class="form-control" placeholder="email@example.com" />
                                </div>
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between"> 
                                        <label class="form-label" for="pass">Password</label>
                                        <a class="text-secondary text-info text-decoration-none" href="#">Forgot password?</a>
                                    </div>
                                    <input id="pass" name="pass" type="password" required value="<?=$_COOKIE['password'] ?? ""; ?>" class="form-control" placeholder="Password" />
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input name='renember' type="checkbox" class="form-check-input" checked>
                                        <label class="form-check-label">Check me out</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2 d-grid gap-2">
                                <button type="submit" class="btn btn-primary">SIGN IN</button>
                            </div>
                            <div class="col-md-12 mt-3 mb-2">
                                <div class="text-secondary d-flex justify-content-center">
                                    <p>New to E-classe?</p><a href="./signUp.php">Create an account.</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>