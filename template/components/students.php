<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payments</title>
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
                <p class="ml-3 px-3 py-1 text-white rounded-[4px] uppercase bg-[#00C1FE]">Add new student</p>
            </div>
        </div>
        
        <hr class="mx-3 my-2 border-zinc-400">

        <div class='overflow-x-auto w-full'>
            <table class='[border-spacing:0_10px] border-separate mx-auto max-w-4xl w-full whitespace-nowrap overflow-hidden'>
                <thead>
                    <tr class="text-[#000] text-[12px] capitalize text-left">
                        <?php foreach($students as $student){
                            foreach($student as $key=>$value){ ?>
                                <?php 
                                if($key == 'profil'){}
                                else if($key == 'name'){?>
                                <th class="text-sm pr-6 pl-2 py-3 text-right" colspan="2"><?php echo $key?></th>
                                <?php }
                                else if($key == 'actions'){?>
                                <th class="text-sm pr-6 pl-2 py-3" colspan="2"><?php echo $key?></th>
                                <?php }
                                else{?>
                                <th class="text-sm pr-6 pl-2 py-3"><?php echo $key?></th>
                                <?php }
                             }
                            break;
                        }?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $student){ ?>
                    <tr class="bg-white text-slate-800 text-[14px]">
                        <?php foreach($student as $key=>$value){
                        if($key == "profil"){?>
                        <td class="pr-6 pl-2 py-3">
                            <img src="<?php echo $value;?>" alt="profil">
                        </td>
                        <?php }
                        else if($key == "actions"){?>
                        <td class="pr-6 pl-2">
                            <div class="flex gap-6">
                            <a href="#" title="Update">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.3033 2.08777L16.9113 0.695801C16.4478 0.231934 15.8399 0 15.2321 0C14.6242 0 14.0164 0.231934 13.5525 0.69543L0.475916 13.772L0.00462689 18.0107C-0.0547481 18.5443 0.365701 19 0.88783 19C0.920858 19 0.953885 18.9981 0.987654 18.9944L5.22332 18.5265L18.3036 5.44617C19.231 4.51881 19.231 3.01514 18.3033 2.08777ZM4.67818 17.3924L1.2259 17.775L1.61035 14.3175L11.4031 4.52475L14.4747 7.59629L4.67818 17.3924ZM17.4639 4.60676L15.3141 6.7565L12.2426 3.68496L14.3923 1.53521C14.6164 1.31107 14.9148 1.1875 15.2321 1.1875C15.5494 1.1875 15.8474 1.31107 16.0719 1.53521L17.4639 2.92719C17.9266 3.39031 17.9266 4.14363 17.4639 4.60676Z" fill="#00C1FE"/>
                                </svg>
                                <span class="hidden">Update</span>
                            </a>
                            <a href="#" title="Delete">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.285713 2.25H4L5.2 0.675C5.35968 0.465419 5.56674 0.295313 5.80478 0.178154C6.04281 0.0609948 6.30529 0 6.57143 0L9.42857 0C9.69471 0 9.95718 0.0609948 10.1952 0.178154C10.4333 0.295313 10.6403 0.465419 10.8 0.675L12 2.25H15.7143C15.7901 2.25 15.8627 2.27963 15.9163 2.33238C15.9699 2.38512 16 2.45666 16 2.53125V3.09375C16 3.16834 15.9699 3.23988 15.9163 3.29262C15.8627 3.34537 15.7901 3.375 15.7143 3.375H15.0393L13.8536 16.4637C13.8152 16.8833 13.6188 17.2737 13.3029 17.558C12.987 17.8423 12.5745 17.9999 12.1464 18H3.85357C3.42554 17.9999 3.01302 17.8423 2.69711 17.558C2.38121 17.2737 2.18477 16.8833 2.14643 16.4637L0.960713 3.375H0.285713C0.209937 3.375 0.137264 3.34537 0.083683 3.29262C0.0301008 3.23988 0 3.16834 0 3.09375V2.53125C0 2.45666 0.0301008 2.38512 0.083683 2.33238C0.137264 2.27963 0.209937 2.25 0.285713 2.25ZM9.88571 1.35C9.8323 1.28034 9.76324 1.22379 9.68393 1.18475C9.60463 1.14572 9.51723 1.12527 9.42857 1.125H6.57143C6.48277 1.12527 6.39537 1.14572 6.31606 1.18475C6.23676 1.22379 6.1677 1.28034 6.11429 1.35L5.42857 2.25H10.5714L9.88571 1.35ZM3.28571 16.3617C3.29748 16.5019 3.36245 16.6325 3.46768 16.7277C3.57292 16.8228 3.7107 16.8754 3.85357 16.875H12.1464C12.2893 16.8754 12.4271 16.8228 12.5323 16.7277C12.6376 16.6325 12.7025 16.5019 12.7143 16.3617L13.8929 3.375H2.10714L3.28571 16.3617Z" fill="#00C1FE"/>
                                </svg>
                                <span class="hidden">Delete</span>
                            </a>
                            </div>
                        </td>
                        <?php }
                        else{?>
                        <td class="pr-6 pl-2 py-3"><?php echo $value ;?></td>
                        <?php }?>
                        <?php }?>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </main>
    <!-- end main body -->
    <script>
        function Opppen() {
            document.querySelector(".sidebar").classList.toggle("left-[-270px]");
        }
    </script>
</body>

</html>