<?php
    session_start();
    require_once(dirname(__FILE__) . './../data/models/data_provider.php');
    $pro = new DataProvider();
    $isloged = $pro->isLoged();
    if(!$isloged){
        $pro->redirect("./../../index.php");
        die();
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $enroll = $_GET['enroll'] ?? "";
        $type = $_GET['type'] ?? "";
        if($type === 'update'){ 
            if(isset($enroll)){ 
                require_once(dirname(__FILE__) . './../data/models/student.php');
                $new_student = new Student();
                $myStudent = $new_student->getStudentByEnroll($enroll);
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
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- style -->
</head>

<body class="font-[Montserrat] bg-[#E5E5E5]">
    <?php
        include('dashboard.php');
    ?>
    <!-- main body -->
    <div class="absolute p-2 my-5 lg:top[60px] xl:top-[62px] 2xl:top[82px] top-[60px] lg:left-[270px] xl:left-[300px] 2xl:left-[400px] left-0 lg:w-[calc(100%-270px)] xl:w-[calc(100%-300px)] 2xl:w-[calc(100%-400px)] w-[100%]">
        <div class="flex justify-center align-items">
            <div class="w-full max-w-lg">
                <form action="./../data/userTraitement.php?type=update&enroll=<?php echo $enroll; ?>" method="POST" class="bg-[#FAFFC1] shadow rounded border border-bg-[#00C1FE] px-8 pt-6 pb-8 mb-4 capitalize">
                    <h3 class="mb-5 text-[17px] font-bold">
                        Update Student: Name of Students
                    </h3>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Name:
                        </label>
                        <input required type="text" name="name" value="<?php echo $myStudent['name'] ?? ""; ?>" placeholder="name" class="shadow appearance-none border focus:border-[#00C1FE] focus:outline-none focus:outline-none rounded w-full px-3 py-2 text-gray-700 leading-tight focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email:
                        </label>
                        <input required type="Email" name="email" value="<?php echo $myStudent['email'] ?? ""; ?>" placeholder="email" class="shadow appearance-none border focus:border-[#00C1FE] focus:outline-none rounded w-full px-3 py-2 text-gray-700 mb-2 leading-tight focus:shadow-outline">
                     </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Phone:
                        </label>
                        <input type="text" name="phone" value="<?php echo $myStudent['phone'] ?? ""; ?>" placeholder="Phone" class="shadow appearance-none border focus:border-[#00C1FE] focus:outline-none rounded w-full px-3 py-2 text-gray-700 mb-2 leading-tight focus:shadow-outline">
                     </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Solde:
                        </label>
                        <input type="number" name="solde" value="<?php echo $myStudent['solde'] ?? ""; ?>" placeholder="Solde" class="shadow appearance-none border focus:border-[#00C1FE] focus:outline-none rounded w-full px-3 py-2 text-gray-700 mb-2 leading-tight focus:shadow-outline">
                     </div>
                    <div class="flex items-center justify-center">
                    <button type="submit" class="bg-[#00C1FE] hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end main body -->
    <script src="./../js/main.js"></script>
</body>

</html>