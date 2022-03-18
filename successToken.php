<?php
    session_start();
    require_once(dirname(__FILE__) . './template/data/models/data_provider.php');
    $pro = new DataProvider();
    $isloged = $pro->isLoged();
    if($isloged){
        $pro->redirect("./template/components/home.php");
        die();
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
        <h2 class="fs-1 fw-bolder">You're almost done!</h2>
        <p class="mt-4 fs-4">We sent a launch code to <span class="bg-success text-white rounded-3 py-1 px-2 fs-5"><?= $_COOKIE['email'] ?></span></p>
        <div class="text-decoration-none">
            <p class="fs-6">Didn't get your email? 
                <a href="#">Resend the code</a> 
                <span class="fs-5">or</span>
                <a href="signUp.php">update your email address. </a>
            </p>
            <p>Sign in to E-classe? <a href="./" class="fs-5"> Sign in.</a></p>
        </div>
        </div>
    </main>
</body>

</html>