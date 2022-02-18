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
            $isUsers = $new_Users->getUsersByPassAndEmail($email, $pass);
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
                    'email'=> $email,
                    'pass'=> $pass,
                    'role'=> $isUsers['role']
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
        <div class="sign_up card h-auto col-xl-7 col-lg-6 col-md-8 col-sm-10 px-4 py-3">
            <div class="logo">
                <strong>E-Classe</strong>
            </div>
            <div class="text-center">
                <h1 class="">SIGN UP</h1>
                <p>Create your account</p>
            </div>
            <div class="">
                <form class="form" action="index.php" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label" for="email">Email:</label>
                                <input id="email" name="email" type="email" required class="form-control" placeholder="email@example.com" />
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="LastName">Last Name:</label>
                                <input id="LastName" name="lastName" type="text" class="form-control" placeholder="Last Name" />
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="firstName">First Name:</label>
                                <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name" />
                            </div>
                            <div class="mb-1 pwd row d-flex gap-1">
                                <div class="col">
                                    <label class="form-label" for="pass">Password:</label>
                                    <input id="pass" name="pass" type="password" class="form-control" placeholder="Password" />
                                </div>
                                <div class="col">
                                    <label class="form-label" for="confermepass">Confermation Password:</label>
                                    <input id="confermepass" name="confermepass" type="password" class="form-control" placeholder="Confermation Password" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2 d-grid gap-2">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
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
</body>

</html>