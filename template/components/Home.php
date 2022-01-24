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
    <link rel="stylesheet" href="../css/dash.css" />
</head>

<body class="font-[Montserrat] bg-[#E5E5E5]">
    <?php
        include('dashboard.php');
    ?>
    <!-- main body -->
    <main class="absolute p-2 my-5 lg:top[60px] xl:top-[62px] 2xl:top[82px] top-[60px] lg:left-[270px] xl:left-[300px] 2xl:left-[400px] left-0 lg:w-[calc(100%-270px)] xl:w-[calc(100%-300px)] 2xl:w-[calc(100%-400px)] w-[100%]">

        <div class="flex sm:flex-row sm:flex-wrap md:flex-nowrap lg:flex-row xl:flex-row 2xl:flex-row flex-col items-center justify-evenly gap-y-3 gap-x-2">

            <div class="bg-[#F0F9FF] py-3 px-3 rounded-[8px] flex justify-around flex-col w-[90%] h-[157px]">
                <span class="">
                    <svg class="cursor-pointer" width="48" height="29" viewBox="0 0 20 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M19.13 2.81219L10.8488 0.134689C10.2922 -0.0449982 9.70813 -0.0449982 9.15156 0.134689L0.870313 2.81219C0.341875 2.98313 0 3.44938 0 4C0 4.55063 0.341875 5.01688 0.87 5.18781L1.79844 5.48781C1.69531 5.68094 1.61906 5.88875 1.56938 6.10656C1.23531 6.26844 1 6.60375 1 7C1 7.39781 1.23656 7.735 1.57281 7.89594L1.00875 11.3916C0.958437 11.7038 1.13094 12 1.36312 12H2.63656C2.86875 12 3.04156 11.7038 2.99094 11.3916L2.42719 7.89594C2.76344 7.735 3 7.39781 3 7C3 6.66875 2.82844 6.38938 2.58031 6.20719C2.62687 6.06156 2.69906 5.93031 2.78562 5.80688L4.45656 6.34719L4 10C4 11.1047 6.68625 12 10 12C13.3138 12 16 11.1047 16 10L15.5434 6.34719L19.13 5.1875C19.6581 5.01688 20 4.55063 20 4C20 3.44938 19.6581 2.98313 19.13 2.81219ZM14.9838 9.93313C14.6475 10.2872 12.9388 11 10 11C7.06125 11 5.3525 10.2872 5.01625 9.93313L5.42531 6.66031L9.15156 7.865C9.23281 7.89125 9.95531 8.15344 10.8488 7.865L14.575 6.66031L14.9838 9.93313ZM18.8213 4.23688L10.54 6.91438C10.1866 7.02875 9.81344 7.02875 9.46 6.91438L3.97031 5.13938L10.0919 3.99125C10.3634 3.94063 10.5422 3.67938 10.4913 3.40781C10.4406 3.13594 10.1737 2.95813 9.90812 3.00875L3.54 4.2025C3.1525 4.275 2.80531 4.44156 2.50625 4.66594L1.17844 4.23656C0.933125 4.15688 0.945312 3.83844 1.17844 3.76313L9.45969 1.08563C9.93156 0.933127 10.3297 1.01781 10.5397 1.08563L18.8209 3.76313C19.0519 3.83781 19.0681 4.15688 18.8213 4.23688Z"
                        fill="#74C1ED" />
                    </svg>
                </span>
                <h2 class="pl-2 text-[14px] text-[#6C6C6C]">Students</h2>
                <p class="text-right"><span class="w-min text-[32px] text-[#000] font-bold">243</span></p>
            </div>

            <div class="bg-[#FEF6FB] py-3 px-3 rounded-[8px] flex justify-around flex-col w-[90%] h-[157px]">
                <span class="">
                    <svg class="cursor-pointer" width="48" height="29" viewBox="0 0 28 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 0H24.5C26.433 0 28 1.46904 28 3.28125V35L14 27.3438L0 35V3.28125C0 1.46904 1.56698 0 3.5 0ZM2.33333 31.1915L14 24.8113L25.6667 31.1915V3.28125C25.6667 2.67818 25.1433 2.1875 24.5 2.1875H3.5C2.85673 2.1875 2.33333 2.67818 2.33333 3.28125V31.1915Z" fill="#EE95C5"/>
                    </svg>
                </span>
                <h2 class="pl-2 text-[14px] text-[#6C6C6C]">Cours</h2>
                <p class="text-right"><span class="w-min text-[32px] text-[#000] font-bold">13</span></p>
            </div>

            <div class="bg-[#FEFBEC] py-3 px-3  rounded-[8px] flex justify-around flex-col w-[90%] h-[157px]">
                <span class="">
                    <svg class="cursor-pointer" width="48" height="29" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.6484 17.5859L15.0234 16.0078C14.0781 15.7422 13.4141 14.8828 13.4141 13.9219C13.4141 12.7266 14.4141 11.75 15.6406 11.75H19.1562C20.0312 11.75 20.8672 12.0312 21.5469 12.5391C21.7969 12.7266 22.1406 12.6953 22.3594 12.4766L23.2422 11.5781C23.5078 11.3125 23.4766 10.875 23.1797 10.6406C22.0391 9.73438 20.6328 9.24219 19.1484 9.24219H18.75V6.11719C18.75 5.77344 18.4688 5.49219 18.125 5.49219H16.875C16.5312 5.49219 16.25 5.77344 16.25 6.11719V9.24219H15.6406C13.0391 9.24219 10.9141 11.3359 10.9141 13.9141C10.9141 15.9922 12.3281 17.8359 14.3438 18.4062L19.9688 19.9844C20.9141 20.25 21.5781 21.1094 21.5781 22.0703C21.5781 23.2656 20.5781 24.2422 19.3516 24.2422H15.8359C14.9609 24.2422 14.125 23.9609 13.4453 23.4531C13.1953 23.2656 12.8516 23.2969 12.6328 23.5156L11.75 24.4141C11.4844 24.6797 11.5156 25.1172 11.8125 25.3516C12.9531 26.2578 14.3594 26.75 15.8438 26.75H16.25V29.875C16.25 30.2188 16.5312 30.5 16.875 30.5H18.125C18.4688 30.5 18.75 30.2188 18.75 29.875V26.75H19.3594C21.9609 26.75 24.0859 24.6562 24.0859 22.0781C24.0781 20 22.6719 18.1562 20.6484 17.5859ZM31.25 0.5H3.75C1.67969 0.5 0 2.17969 0 4.25V31.75C0 33.8203 1.67969 35.5 3.75 35.5H31.25C33.3203 35.5 35 33.8203 35 31.75V4.25C35 2.17969 33.3203 0.5 31.25 0.5ZM32.5 31.75C32.5 32.4375 31.9375 33 31.25 33H3.75C3.0625 33 2.5 32.4375 2.5 31.75V4.25C2.5 3.5625 3.0625 3 3.75 3H31.25C31.9375 3 32.5 3.5625 32.5 4.25V31.75Z" fill="#00C1FE"/>
                    </svg>
                </span>
                <h2 class="pl-2 text-[14px] text-[#6C6C6C]">Payments</h2>
                <p class="text-right">DHS<span class="w-min text-[32px] text-[#000] font-bold">556,000</span></p>
            </div>

            <div class="py-3 px-3 rounded-[8px] flex justify-around flex-col w-[90%] h-[157px]"
                style="background: linear-gradient(69.66deg, #00c1fe 19.39%, #faffc1 96.69%);">
                <span>
                    <svg class="cursor-pointer" width="48" height="29" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 2.125C21.1039 2.125 24.4375 5.45859 24.4375 9.5625C24.4375 13.6664 21.1039 17 17 17C12.8961 17 9.5625 13.6664 9.5625 9.5625C9.5625 5.45859 12.8961 2.125 17 2.125ZM25.5 23.375C29.0129 23.375 31.875 26.2371 31.875 29.75V31.875H2.125V29.75C2.125 26.2371 4.98711 23.375 8.5 23.375C14.1445 23.375 12.9691 24.4375 17 24.4375C21.0441 24.4375 19.8488 23.375 25.5 23.375ZM17 0C11.7207 0 7.4375 4.2832 7.4375 9.5625C7.4375 14.8418 11.7207 19.125 17 19.125C22.2793 19.125 26.5625 14.8418 26.5625 9.5625C26.5625 4.2832 22.2793 0 17 0ZM25.5 21.25C19.3641 21.25 20.7852 22.3125 17 22.3125C13.2281 22.3125 14.6293 21.25 8.5 21.25C3.80508 21.25 0 25.0551 0 29.75V31.875C0 33.0504 0.949609 34 2.125 34H31.875C33.0504 34 34 33.0504 34 31.875V29.75C34 25.0551 30.1949 21.25 25.5 21.25Z" fill="white"/>
                    </svg>
                </span>
                <h2 class="text-[14px] pl-2 text-[#fff]">Users</h2>
                <p class="text-right"><span class="w-min text-[32px] text-[#000] font-bold">3</span></p>
            </div>

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