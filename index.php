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
                        <div class="logo m-4">
                            <strong>E-Classe</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row text-center">
                        <div class="col-md-12"><h1 class="h1">SIGN IN</h1></div>
                        <div class="col-md-12">
                            <p>Enter your credentials to access your account</p>
                        </div>
                    </div>
                </div>
                <div class="row m-2">
                    <form class="form" action="template/components/dashboard.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label class="form-label">Email</label>
                                    <input type="email" required class="form-control" placeholder="email@example.com" />
                                </div>
                                <div class="mb-1">
                                    <label class="form-label">Password</label>
                                    <input type="password" required class="form-control" placeholder="Entrer your password" />
                                </div>
                            </div>
                            <div class="col-md-12 mt-4 d-grid gap-2">
                                <button type="submit" class="btn btn-primary">SIGN IN</button>
                            </div>
                            <div class="col-md-12 mt-3 mb-5 text-center">
                                <div class="text-secondary">Forgot your password? 
                                    <a href="#">Reset Password</a>
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