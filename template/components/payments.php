<?php
    session_start();
    require_once(dirname(__FILE__) . './../data/models/data_provider.php');
    $pro = new DataProvider();
    $isloged = $pro->isLoged();
    if(!$isloged){
        $pro->redirect("./../../index.php");
        die();
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
        include_once('dashboard.php');
        include_once('../../assets/data/tables.php');
    ?>

    <!-- main body -->
    <main class="absolute p-2 my-5 lg:top[60px] xl:top-[62px] 2xl:top[82px] top-[60px] lg:left-[270px] xl:left-[300px] 2xl:left-[400px] left-0 lg:w-[calc(100%-270px)] xl:w-[calc(100%-300px)] 2xl:w-[calc(100%-400px)] w-[100%]">

        <div class="px-3 flex justify-between items-center">
            <h2 class="text-[22px] font-bold">payment Details</h2>
            <span class="">
                <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6002 11.375H1.40023C0.157725 11.375 -0.472275 12.8574 0.411475 13.7211L6.01148 19.2211C6.55835 19.7582 7.44648 19.7582 7.99335 19.2211L13.5934 13.7211C14.4684 12.8574 13.8427 11.375 12.6002 11.375ZM7.00023 18.25L1.40023 12.75H12.6002L7.00023 18.25ZM1.40023 8.625H12.6002C13.8427 8.625 14.4727 7.14257 13.589 6.2789L7.98898 0.7789C7.4421 0.241791 6.55398 0.241791 6.0071 0.7789L0.4071 6.2789C-0.4679 7.14257 0.157725 8.625 1.40023 8.625ZM7.00023 1.74999L12.6002 7.24999H1.40023L7.00023 1.74999Z" fill="#00C1FE"/>
                    </svg>
            </span>
        </div>
        
        <hr class="mx-3 my-2 border-zinc-400">

        <div class='overflow-x-auto w-full'>
            <table class='mx-auto max-w-4xl w-full whitespace-nowrap overflow-hidden'>
                <thead>
                    <tr class="text-[#000] text-[12px] capitalize text-left">
                        <?php foreach($PaymentDetails[0] as $key=>$value){?>
                            <th class="text-sm pr-6 pl-2 py-3" <?php if($key == 'Date') echo "colspan=\"2\"" ?> >
                            <?php if($key != 'vue') echo $key ?></th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($PaymentDetails as $payment){?>
                    <tr class="bg-white text-slate-800 text-[14px]">
                        <?php foreach($payment as $key=>$value){
                            if($key == 'vue'){?>
                                <td class="pr-6 pl-2 py-3">
                                    <a href="#" title="Vue">
                                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.49999 6.875C7.94201 6.875 8.36594 6.69063 8.6785 6.36244C8.99106 6.03425 9.16665 5.58913 9.16665 5.125C9.16665 4.66087 8.99106 4.21575 8.6785 3.88756C8.36594 3.55937 7.94201 3.375 7.49999 3.375C7.47394 3.375 7.45103 3.38156 7.42577 3.38293C7.50608 3.61516 7.52164 3.86664 7.47063 4.10783C7.41961 4.34903 7.30413 4.56994 7.13774 4.74465C6.97136 4.91935 6.76096 5.04061 6.53125 5.09417C6.30154 5.14774 6.06205 5.1314 5.84087 5.04707C5.84087 5.07441 5.83332 5.09848 5.83332 5.125C5.83332 5.35481 5.87643 5.58238 5.96019 5.7947C6.04394 6.00702 6.16671 6.19993 6.32147 6.36244C6.63403 6.69063 7.05796 6.875 7.49999 6.875ZM14.9094 5.60078C13.4971 2.70754 10.7013 0.75 7.49999 0.75C4.29868 0.75 1.50207 2.70891 0.0906108 5.60105C0.0310383 5.72479 0 5.86149 0 6.00014C0 6.13878 0.0310383 6.27549 0.0906108 6.39922C1.50285 9.29246 4.29868 11.25 7.49999 11.25C10.7013 11.25 13.4979 9.29109 14.9094 6.39895C14.9689 6.27521 15 6.13851 15 5.99986C15 5.86122 14.9689 5.72451 14.9094 5.60078ZM7.49999 1.625C8.15926 1.625 8.80372 1.83027 9.35188 2.21486C9.90005 2.59944 10.3273 3.14607 10.5796 3.78561C10.8319 4.42515 10.8979 5.12888 10.7693 5.80782C10.6407 6.48675 10.3232 7.11039 9.85701 7.59987C9.39083 8.08936 8.79689 8.4227 8.15029 8.55775C7.50368 8.6928 6.83346 8.62349 6.22437 8.35858C5.61529 8.09367 5.09469 7.64507 4.72842 7.0695C4.36215 6.49392 4.16665 5.81723 4.16665 5.125C4.16762 4.19705 4.51912 3.3074 5.14403 2.65125C5.76894 1.99509 6.61623 1.62601 7.49999 1.625ZM7.49999 10.375C4.70415 10.375 2.14946 8.69855 0.833319 6C1.57354 4.47419 2.7573 3.23556 4.21301 2.46363C3.66952 3.20246 3.33332 4.11793 3.33332 5.125C3.33332 6.28532 3.77231 7.39812 4.55371 8.21859C5.33511 9.03906 6.39492 9.5 7.49999 9.5C8.60505 9.5 9.66486 9.03906 10.4463 8.21859C11.2277 7.39812 11.6667 6.28532 11.6667 5.125C11.6667 4.11793 11.3305 3.20246 10.787 2.46363C12.2427 3.23556 13.4264 4.47419 14.1667 6C12.8508 8.69855 10.2958 10.375 7.49999 10.375Z" fill="#00C1FE"/>
                                        </svg>
                                        <span class="hidden"><?php echo $value?></span>
                                    </a>
                                </td>
                            <?php }
                            else{?>
                                <td class="pr-6 pl-2 py-3"><?php echo $value?></td>
                            <?php }?>
                        <?php }?>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </main>
    <!-- end main body -->
    <script src="./../js/main.js"></script>
</body>

</html>