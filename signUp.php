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
        include_once('./template/data/models/users.php');
        if(isset($_POST['createUser'])){
            extract($_POST);//
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['phone'] = $phone;
            if(!empty($email) && !empty($pass) && !empty($confermepass)){
                if($pass == $confermepass){
                    $user = new User();
                    $isExistMail = $user->getUsersByEmail($email);
                    $isExistUserName = $user->getUsersByUserName($username);
                    if($isExistMail != null  || $isExistUserName != null){
                        if($isExistMail != null)
                            $_SESSION['validate']['email'] = 'Email is already taken';
                        else 
                            unset($_SESSION['validate']['email']);
                        if($isExistUserName != null)
                            $_SESSION['validate']['username'] = 'Username is already taken';
                        else 
                            unset($_SESSION['validate']['username']);
                    }else{
                        session_unset();
                        session_destroy();
                        setcookie("email", $email, time() + 3600);
                        setcookie("password", $pass, time() + 3600);
                        $pass = hash('ripemd160',($pass));
                        $createAcount = new User();
                        $createAcount->setUser($email, $pass, $username, $phone);
                        header('location: successToken.php');
                    }
                }
            }
        }
    }else{
        session_unset();
        session_destroy();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="./template/css/style_up.css"/>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center">
        <div class="sign_up card h-auto col-xl-7 col-lg-6 col-md-8 col-sm-10 px-4 pt-3">
            <div class="logo">
                <strong>E-Classe</strong>
            </div>
            <div class="text-center">
                <h1 class="fw-bold">SIGN UP</h1>
                <p>Create your account</p>
            </div>
            <div class="">
                <form class="form" action="" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label" for="username">Username:
                                    <?php if(isset($_SESSION['validate']['username'])){?>
                                    <small class="alert alert-danger p-1"><?php echo $_SESSION['validate']['username'] ?></small>
                                    <?php } ?>
                                </label><span class="invalidUsername"></span>
                                <input id="username" name="username" type="text" value="<?php echo $_SESSION['username'] ?? ""; ?>" class="form-control" placeholder="User name" />
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="email">Email:
                                    <?php if(isset($_SESSION['validate']['email'])){?>
                                    <small class="alert alert-danger p-1"><?php echo $_SESSION['validate']['email'] ?></small>
                                    <?php } ?>
                                </label><span class="invalidEmail"></span>
                                <input id="email" name="email" type="email" value="<?=$_SESSION['email'] ?? ""; ?>" class="form-control" placeholder="email@example.com" />
                            </div>
                            <div class="mb-1 pwd row d-flex gap-1">
                                <div class="col">
                                    <label class="form-label" for="pass">Password:</label><span class="invalidPass"></span>
                                    <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" />
                                </div>
                                <div class="col">
                                    <label class="form-label" for="confermepass">Confermation Password:</label><span class="invalidConfermePass"></span>
                                    <input id="confermepass" name="confermepass" type="password" class="form-control" placeholder="Confermation Password" />
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="phone">Phone (Optionel):</label><span class="invalidPhone"></span>
                                <input id="phone" name="phone" type="text" value="<?=$_SESSION['phone'] ?? ""; ?>" class="form-control" placeholder="Phone"/>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2 d-grid gap-2">
                            <button type="submit" name="createUser" class="btn btn-primary">SIGN UP</button>
                        </div>
                        <div class="col-md-12 mt-3 mb-2">
                            <div class="text-secondary d-flex justify-content-center">
                                <p>Sign in to E-classe?</p><a href="./">Sign in.</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="signup.js"></script>
</body>

</html>