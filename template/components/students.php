<?php
    session_start();
    require_once(dirname(__FILE__) . './../data/models/data_provider.php');
    $pro = new DataProvider();
    $isloged = $pro->isLoged();
    if(!$isloged){
        $pro->redirect("./../../index.php");
        die();
    }
    $enroll = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- style -->
    <style>
        table{
            border-collapse: separate;
            border-spacing: 0 12px;
        }
    </style>
</head>

<body class="font-[Montserrat] bg-[#E5E5E5]">
    <?php
        include('dashboard.php');
        include('../../assets/data/tables.php');
    ?>
    <!-- main body -->
    <main class="absolute p-2 my-5 lg:top[60px] xl:top-[62px] 2xl:top[82px] top-[60px] lg:left-[270px] xl:left-[300px] 2xl:left-[400px] left-0 lg:w-[calc(100%-270px)] xl:w-[calc(100%-300px)] 2xl:w-[calc(100%-400px)] w-[100%]">

        <div class="px-3 flex sm:flex-row flex-col justify-between items-center">
            <h1 class="text-[22px] font-bold">Students list</h1>
            <div class="flex justify-between items-center">
                <svg class="mr-3" width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6002 11.375H1.40023C0.157725 11.375 -0.472275 12.8574 0.411475 13.7211L6.01148 19.2211C6.55835 19.7582 7.44648 19.7582 7.99335 19.2211L13.5934 13.7211C14.4684 12.8574 13.8427 11.375 12.6002 11.375ZM7.00023 18.25L1.40023 12.75H12.6002L7.00023 18.25ZM1.40023 8.625H12.6002C13.8427 8.625 14.4727 7.14257 13.589 6.2789L7.98898 0.7789C7.4421 0.241791 6.55398 0.241791 6.0071 0.7789L0.4071 6.2789C-0.4679 7.14257 0.157725 8.625 1.40023 8.625ZM7.00023 1.74999L12.6002 7.24999H1.40023L7.00023 1.74999Z" fill="#00C1FE"/>
                </svg>
                <p class="ml-3 px-3 py-1 text-white cursor-pointer rounded-[4px] uppercase bg-[#00C1FE]" onclick="openModeLAddStu()">Add new students</p>
            </div>
        </div>
        <hr class="mx-3 my-2 border-zinc-400">

        <div class='overflow-x-auto w-full'>
            <table class='[border-spacing:0_10px] border-separate mx-auto max-w-4xl w-full whitespace-nowrap overflow-hidden'>
                <thead>
                    <tr class="text-[#000] text-[12px] capitalize text-left">
                        <th class="text-sm pr-6 pl-2 py-3">Image</th>
                        <th class="text-sm pr-6 pl-2 py-3">name</th>
                        <th class="text-sm pr-6 pl-2 py-3">email</th>
                        <th class="text-sm pr-6 pl-2 py-3">phone</th>
                        <th class="text-sm pr-6 pl-2 py-3">enroll number</th>
                        <th class="text-sm pr-6 pl-2 py-3">solde</th>
                        <th class="text-sm pr-6 pl-2 py-3">date of admission</th>
                        <th class="text-sm pr-6 pl-2 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($students as $student){?>
                    <tr class="bg-white text-slate-800 text-[14px] capitalize">
                        <td class="pr-6 pl-2 py-3">
                            <img src="../../assets/images/studentimg.png" alt="profil">
                        </td>
                        <td class="text-sm pr-6 pl-2 py-3"><?php echo $student['name']?></td>
                        <td class="text-sm pr-6 pl-2 py-3"><?php echo $student['email']?></td>
                        <td class="text-sm pr-6 pl-2 py-3"><?php echo $student['phone']?></td>
                        <td class="text-sm pr-6 pl-2 py-3"><?php echo $student['enroll_Number']?></td>
                        <td class="text-sm pr-6 pl-2 py-3"><?php echo $student['solde']?></td>
                        <td class="text-sm pr-6 pl-2 py-3"><?php echo $student['date_admission']?></td>
                        <td class="pr-6 pl-2">
                            <div class="flex gap-5">
                            <a href="./updateStudent.php?type=update&enroll=<?php echo $student['enroll_Number'];?>" class="py-1">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3033 2.08777L16.9113 0.695801C16.4478 0.231934 15.8399 0 15.2321 0C14.6242 0 14.0164 0.231934 13.5525 0.69543L0.475916 13.772L0.00462689 18.0107C-0.0547481 18.5443 0.365701 19 0.88783 19C0.920858 19 0.953885 18.9981 0.987654 18.9944L5.22332 18.5265L18.3036 5.44617C19.231 4.51881 19.231 3.01514 18.3033 2.08777ZM4.67818 17.3924L1.2259 17.775L1.61035 14.3175L11.4031 4.52475L14.4747 7.59629L4.67818 17.3924ZM17.4639 4.60676L15.3141 6.7565L12.2426 3.68496L14.3923 1.53521C14.6164 1.31107 14.9148 1.1875 15.2321 1.1875C15.5494 1.1875 15.8474 1.31107 16.0719 1.53521L17.4639 2.92719C17.9266 3.39031 17.9266 4.14363 17.4639 4.60676Z" fill="#00C1FE"/>
                                </svg>
                            </a>
                            <a href="./students.php?type=delete&enroll=<?php echo $student['enroll_Number'];?>" class="py-1" onclick="open_confermation_delete_stu()">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.285713 2.25H4L5.2 0.675C5.35968 0.465419 5.56674 0.295313 5.80478 0.178154C6.04281 0.0609948 6.30529 0 6.57143 0L9.42857 0C9.69471 0 9.95718 0.0609948 10.1952 0.178154C10.4333 0.295313 10.6403 0.465419 10.8 0.675L12 2.25H15.7143C15.7901 2.25 15.8627 2.27963 15.9163 2.33238C15.9699 2.38512 16 2.45666 16 2.53125V3.09375C16 3.16834 15.9699 3.23988 15.9163 3.29262C15.8627 3.34537 15.7901 3.375 15.7143 3.375H15.0393L13.8536 16.4637C13.8152 16.8833 13.6188 17.2737 13.3029 17.558C12.987 17.8423 12.5745 17.9999 12.1464 18H3.85357C3.42554 17.9999 3.01302 17.8423 2.69711 17.558C2.38121 17.2737 2.18477 16.8833 2.14643 16.4637L0.960713 3.375H0.285713C0.209937 3.375 0.137264 3.34537 0.083683 3.29262C0.0301008 3.23988 0 3.16834 0 3.09375V2.53125C0 2.45666 0.0301008 2.38512 0.083683 2.33238C0.137264 2.27963 0.209937 2.25 0.285713 2.25ZM9.88571 1.35C9.8323 1.28034 9.76324 1.22379 9.68393 1.18475C9.60463 1.14572 9.51723 1.12527 9.42857 1.125H6.57143C6.48277 1.12527 6.39537 1.14572 6.31606 1.18475C6.23676 1.22379 6.1677 1.28034 6.11429 1.35L5.42857 2.25H10.5714L9.88571 1.35ZM3.28571 16.3617C3.29748 16.5019 3.36245 16.6325 3.46768 16.7277C3.57292 16.8228 3.7107 16.8754 3.85357 16.875H12.1464C12.2893 16.8754 12.4271 16.8228 12.5323 16.7277C12.6376 16.6325 12.7025 16.5019 12.7143 16.3617L13.8929 3.375H2.10714L3.28571 16.3617Z" fill="#00C1FE"/>
                                </svg>
                            </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- Modale  onclick="openModeLAddStu()" -->
        <div class="hidden openModeLAddStu flex overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full">
            <div class="relative px-4 w-full max-w-md h-full md:h-auto">

                <div class="relative flex flex-col rounded-lg drop-shadow-2xl bg-gray-300">

                    <div class="flex justify-end p-0">
                        <button type="button"  onclick="closeModeLAddStu()"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="">
                        <button onclick="add__user()" type="button" class="add__stu bg-gray-200 text-black hover:bg-[#00C1FE] rounded focus:ring-4 focus:ring-[#00C1FE] font-medium px-5 py-2 text-center m-0">
                            Add User
                        </button>
                        <button onclick="add__upload()" type="button" class="up__stus text-black hover:bg-[#00C1FE] rounded focus:ring-4 focus:ring-[#00C1FE] font-medium px-5 py-2 text-center m-0">
                            Uplaod files
                        </button>
                    </div>

                    <div class="text-start block">
                        <form class=" px-6 pt-2 pb-8 mb-4 w-[100%]" action="./../data/userTraitement.php?type=add" method="POST">
                            <div class=" add__users">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                        Name:
                                    </label>
                                    <input required type="text" placeholder="Username" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                                <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                    Email:
                                </label>
                                <input required type="email" placeholder="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                                <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                    Phone (Optionel):
                                </label>
                                <input type="text" placeholder="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                            </div>
                            <div class="upload__file hidden">
                                <div class="mb-4">
                                <label class="text-gray-700 text-md font-bold mb-2" for="password">
                                    Chose file (CVG, MXL, JSON):
                                </label>
                                <input  type="file" placeholder="" name="file_upload" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-6">
                                <button type="submit" class="hover:text-black text-white bg-[#00C1FE] rounded-lg text-md px-5 py-2 text-center mr-2">
                                    Add User
                                </button>
                                <a  onclick="closeModeLAddStu()" class="text-black hover:text-white hover:bg-[#00C1FE] rounded-lg text-sm px-5 py-2 text-center mr-2 cursor-pointer">
                                    Close
                                </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Delete Student Modal -->
        <div class="hamid hidden flex overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center">
            <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center p-2 bg-[#FAFFC1]">
                        <h3 class="text-lg font-normal text-slate-900 ">Warning!</h3>
                        <a href="./students.php" onclick="open_confermation_delete_stu()" class="text-slate-900 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-md text-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 pt-0 flex flex-col text-center">
                        <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                            Are you sure you want to delete this student?
                        </h3>
                        <form action="./../data/userTraitement.php?type=delete&enroll=<?php echo $_GET['enroll'] ?? ""; ?>"  method="POST" class="flex justify-end">
                            <a href="./students.php" onclick="open_confermation_delete_stu()" class="cursor-pointer text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 mr-2">
                                No, cancel
                            </a>
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end main body -->
    <script src="./../js/main.js"></script>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $enroll = $_GET['enroll'] ?? "";
            $type = $_GET['type'] ?? "";
            if($type === 'delete'){ 
                if(isset($enroll)){ ?>
                <script>
                    open_confermation_delete_stu();
                </script>
            <?php
                }
            }
        }
    ?>
</body>

</html>