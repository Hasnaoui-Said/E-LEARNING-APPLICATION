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
    <link rel="stylesheet" href="../css/dash.css"/>
</head>

<body class="font-[Montserrat] bg-[#E5E5E5]">
    <nav id="mon-sidebar">
        <ul class="sidebar p-3 z-50 fixed flex flex-col items-center top-0 bottom-0 lg:left-0 left-[-270px] xl:w-[300px] 2xl:w-[400px] w-[270px] overflow-y-auto text-center text-black bg-[#FAFFC1]">
            <li class="list-none p-3 text-black text-xl w-[200px] flex lg:justify-start lg:ml-[-10px] justify-between items-center">
                    <h1 class="pl-2 bold text-[25px] border-l-[4px] border-[#00C1FE] cursor-pointer">
                        E-classe
                    </h1>
                    <i class="bi bi-x px-3 py-1 text-black cursor-pointer lg:hidden" onclick="Opppen()"></i>
            </li>
            <li class="list-none p-2.5 m-3 flex flex-col items-center rounded-md px-4 duration-300 text-black">
                <img class="rounded-full cursor-pointer" src="../../assets/images/pexels-photo.png" alt="" width="90" />
                <span class="lg:text-[20px] xl:text-[19px] 2xl:text-[25px] text-[17] cursor-pointer mt-1">Admin name</span>
                <a href="#" class="lg:text-[17px] xl:text-[18px] 2xl:text-[23px] text-[15px] hover:text-[#00C1FE] cursor-pointer mt-0">Admin</a>
            </li>

            <li
                class="list-none sm:hidden block lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[240px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#fff] text-black">
                <input
                    class="p-3 text-[14px] text-[#000] w-[100%] h-[37px] bg-transparent border-[1px] border-r-0 rounded-[8px] rounded-r-none focus:outline-none"
                    type="search" placeholder="search" />
                <i class="bi bi-search text-sm text-[#C4C4C4] text-[21px] border-[1px] rounded-[8px] border-l-0 rounded-l-none p-1.5 h-[37px] bg-transparente"></i>
            </li>

            <li class="list-none">
            <a href="Home.php" class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                <svg class="ml-[41px] cursor-pointer" width="25" height="22" viewBox="0 0 19 17" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.9171 7.30102L10.2457 0.264952C10.035 0.0927557 9.77185 -0.00123024 9.50042 -0.00123024C9.229 -0.00123024 8.96583 0.0927557 8.7551 0.264952L0.0837115 7.30102C0.060804 7.31944 0.0417585 7.34225 0.0276807 7.36813C0.0136029 7.39401 0.00477327 7.42245 0.00170444 7.4518C-0.00136439 7.48114 0.00138873 7.51081 0.00980395 7.53908C0.0182192 7.56734 0.0321288 7.59364 0.0507254 7.61645L0.519128 8.19751C0.537742 8.22064 0.560703 8.23984 0.586698 8.25403C0.612693 8.26822 0.641212 8.27711 0.670623 8.28019C0.700034 8.28328 0.729761 8.28049 0.758103 8.272C0.786444 8.26351 0.812845 8.24948 0.835795 8.23071L2.11137 7.19511V16.4681C2.11137 16.609 2.16697 16.7441 2.26595 16.8437C2.36493 16.9434 2.49917 16.9993 2.63915 16.9993H16.3614C16.5013 16.9993 16.6356 16.9434 16.7346 16.8437C16.8335 16.7441 16.8891 16.609 16.8891 16.4681V7.19843L18.169 8.23735C18.2154 8.27518 18.2748 8.29292 18.3342 8.2867C18.3935 8.28047 18.448 8.25078 18.4857 8.20415L18.9538 7.6231C18.9894 7.57477 19.0055 7.51459 18.9987 7.45478C18.9919 7.39496 18.9627 7.33999 18.9171 7.30102ZM7.91692 15.9368V10.6243H11.0836V15.9368H7.91692ZM15.8336 15.9368H12.1391V10.0931C12.1391 9.95218 12.0835 9.81705 11.9846 9.71743C11.8856 9.6178 11.7513 9.56183 11.6114 9.56183H7.38915C7.24917 9.56183 7.11493 9.6178 7.01595 9.71743C6.91697 9.81705 6.86137 9.95218 6.86137 10.0931V15.9368H3.16692V6.33847L9.35875 1.31151C9.39783 1.27931 9.44678 1.26171 9.49729 1.26171C9.5478 1.26171 9.59675 1.27931 9.63583 1.31151L15.8336 6.34112V15.9368Z"
                        fill="black" />
                </svg>
                <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-4 cursor-pointer">Home</span>
                </a>
            </li>

            <li class="list-none">
                <a href="Home.php"
                class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                <svg class="ml-[41px] cursor-pointer" width="25" height="22" viewBox="0 0 12 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.5 0H10.5C11.3284 0 12 0.62959 12 1.40625V15L6 11.7188L0 15V1.40625C0 0.62959 0.671562 0 1.5 0ZM1 13.3678L6 10.6334L11 13.3678V1.40625C11 1.14779 10.7757 0.9375 10.5 0.9375H1.5C1.22431 0.9375 1 1.14779 1 1.40625V13.3678Z"
                        fill="black"/>
                </svg>
                <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-4 cursor-pointer">Course</span>
            </a>
            </li>

            <li class="list-none">
                <a href="students.php"
                class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                <svg class="ml-[41px] cursor-pointer" width="25" height="22" viewBox="0 0 20 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.13 2.81219L10.8488 0.134689C10.2922 -0.0449982 9.70813 -0.0449982 9.15156 0.134689L0.870313 2.81219C0.341875 2.98313 0 3.44938 0 4C0 4.55063 0.341875 5.01688 0.87 5.18781L1.79844 5.48781C1.69531 5.68094 1.61906 5.88875 1.56938 6.10656C1.23531 6.26844 1 6.60375 1 7C1 7.39781 1.23656 7.735 1.57281 7.89594L1.00875 11.3916C0.958437 11.7038 1.13094 12 1.36312 12H2.63656C2.86875 12 3.04156 11.7038 2.99094 11.3916L2.42719 7.89594C2.76344 7.735 3 7.39781 3 7C3 6.66875 2.82844 6.38938 2.58031 6.20719C2.62687 6.06156 2.69906 5.93031 2.78562 5.80688L4.45656 6.34719L4 10C4 11.1047 6.68625 12 10 12C13.3138 12 16 11.1047 16 10L15.5434 6.34719L19.13 5.1875C19.6581 5.01688 20 4.55063 20 4C20 3.44938 19.6581 2.98313 19.13 2.81219ZM14.9838 9.93313C14.6475 10.2872 12.9388 11 10 11C7.06125 11 5.3525 10.2872 5.01625 9.93313L5.42531 6.66031L9.15156 7.865C9.23281 7.89125 9.95531 8.15344 10.8488 7.865L14.575 6.66031L14.9838 9.93313ZM18.8213 4.23688L10.54 6.91438C10.1866 7.02875 9.81344 7.02875 9.46 6.91438L3.97031 5.13938L10.0919 3.99125C10.3634 3.94063 10.5422 3.67938 10.4913 3.40781C10.4406 3.13594 10.1737 2.95813 9.90812 3.00875L3.54 4.2025C3.1525 4.275 2.80531 4.44156 2.50625 4.66594L1.17844 4.23656C0.933125 4.15688 0.945312 3.83844 1.17844 3.76313L9.45969 1.08563C9.93156 0.933127 10.3297 1.01781 10.5397 1.08563L18.8209 3.76313C19.0519 3.83781 19.0681 4.15688 18.8213 4.23688Z"
                        fill="black" />
                </svg>
                <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-4 cursor-pointer">Students</span>
                </a>
            </li>

            <li class="list-none">
                <a href="payments.php"
                class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                <svg class="ml-[41px] cursor-pointer" width="25" height="22" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.84933 7.32402L6.43862 6.65332C6.03348 6.54043 5.74888 6.1752 5.74888 5.7668C5.74888 5.25879 6.17745 4.84375 6.70312 4.84375H8.20982C8.58482 4.84375 8.94308 4.96328 9.23437 5.1791C9.34152 5.25879 9.48884 5.24551 9.58259 5.15254L9.96094 4.7707C10.0748 4.65781 10.0614 4.47188 9.93415 4.37227C9.44531 3.98711 8.84263 3.77793 8.20647 3.77793H8.03571V2.4498C8.03571 2.30371 7.91518 2.18418 7.76786 2.18418H7.23214C7.08482 2.18418 6.96429 2.30371 6.96429 2.4498V3.77793H6.70312C5.58817 3.77793 4.67745 4.66777 4.67745 5.76348C4.67745 6.64668 5.28348 7.43027 6.14732 7.67266L8.55804 8.34336C8.96317 8.45625 9.24777 8.82148 9.24777 9.22988C9.24777 9.73789 8.8192 10.1529 8.29353 10.1529H6.78683C6.41183 10.1529 6.05357 10.0334 5.76228 9.81758C5.65513 9.73789 5.50781 9.75117 5.41406 9.84414L5.03571 10.226C4.92187 10.3389 4.93527 10.5248 5.0625 10.6244C5.55134 11.0096 6.15402 11.2188 6.79018 11.2188H6.96429V12.5469C6.96429 12.693 7.08482 12.8125 7.23214 12.8125H7.76786C7.91518 12.8125 8.03571 12.693 8.03571 12.5469V11.2188H8.29688C9.41183 11.2188 10.3225 10.3289 10.3225 9.2332C10.3192 8.35 9.71652 7.56641 8.84933 7.32402ZM13.3929 0.0625H1.60714C0.719866 0.0625 0 0.776367 0 1.65625V13.3438C0 14.2236 0.719866 14.9375 1.60714 14.9375H13.3929C14.2801 14.9375 15 14.2236 15 13.3438V1.65625C15 0.776367 14.2801 0.0625 13.3929 0.0625ZM13.9286 13.3438C13.9286 13.6359 13.6875 13.875 13.3929 13.875H1.60714C1.3125 13.875 1.07143 13.6359 1.07143 13.3438V1.65625C1.07143 1.36406 1.3125 1.125 1.60714 1.125H13.3929C13.6875 1.125 13.9286 1.36406 13.9286 1.65625V13.3438Z"
                        fill="black" />
                </svg>
                <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-4 cursor-pointer">Payment</span>
                </a>
            </li>

            <li class="list-none">
                <a href="#"
                class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                <svg class="ml-[41px] cursor-pointer" width="25" height="22" viewBox="0 0 13 17" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.60417 10.625H4.0625C3.91354 10.625 3.79167 10.7445 3.79167 10.8906V14.0781C3.79167 14.2242 3.91354 14.3438 4.0625 14.3438H4.60417C4.75313 14.3438 4.875 14.2242 4.875 14.0781V10.8906C4.875 10.7445 4.75313 10.625 4.60417 10.625ZM6.77083 7.4375H6.22917C6.08021 7.4375 5.95833 7.55703 5.95833 7.70312V14.0781C5.95833 14.2242 6.08021 14.3438 6.22917 14.3438H6.77083C6.91979 14.3438 7.04167 14.2242 7.04167 14.0781V7.70312C7.04167 7.55703 6.91979 7.4375 6.77083 7.4375ZM8.125 9.82812V14.0781C8.125 14.2242 8.24688 14.3438 8.39583 14.3438H8.9375C9.08646 14.3438 9.20833 14.2242 9.20833 14.0781V9.82812C9.20833 9.68203 9.08646 9.5625 8.9375 9.5625H8.39583C8.24688 9.5625 8.125 9.68203 8.125 9.82812ZM12.5227 3.25324L9.68297 0.468164C9.37828 0.169336 8.96526 0 8.53565 0H1.62466C0.727865 0.00332031 0 0.717188 0 1.59674V15.4066C0 16.2861 0.727865 17 1.62466 17H11.3753C12.2721 17 13 16.2861 13 15.4066V4.38182C13 3.96047 12.8273 3.55207 12.5227 3.25324ZM8.66768 1.08209C8.76247 1.10533 8.84711 1.15182 8.9182 1.22154L11.7579 4.00662C11.829 4.07635 11.8764 4.15936 11.9001 4.25232H8.66768V1.08209ZM11.917 15.4066C11.917 15.6988 11.6733 15.9378 11.3753 15.9378H1.62466C1.32674 15.9378 1.08299 15.6988 1.08299 15.4066V1.59674C1.08299 1.30455 1.32674 1.0625 1.62466 1.0625H7.58435V4.51795C7.58435 4.95955 7.94659 5.3125 8.39685 5.3125H11.917V15.4066Z"
                        fill="black" />
                </svg>
                <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-4 cursor-pointer">Report</span>
                </a>
            </li>

            <li class="list-none">
                <a href="#"
                class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                <svg class="ml-[41px] cursor-pointer" width="25" height="22" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.3929 0.0625H1.60714C0.719866 0.0625 0 0.776367 0 1.65625V13.3438C0 14.2236 0.719866 14.9375 1.60714 14.9375H13.3929C14.2801 14.9375 15 14.2236 15 13.3438V1.65625C15 0.776367 14.2801 0.0625 13.3929 0.0625ZM13.9286 13.3438C13.9286 13.6359 13.6875 13.875 13.3929 13.875H1.60714C1.3125 13.875 1.07143 13.6359 1.07143 13.3438V1.65625C1.07143 1.36406 1.3125 1.125 1.60714 1.125H13.3929C13.6875 1.125 13.9286 1.36406 13.9286 1.65625V13.3438ZM6.69643 4.3125H5.35714V3.25C5.35714 3.03086 5.17634 2.85156 4.95536 2.85156H4.6875C4.46652 2.85156 4.28571 3.03086 4.28571 3.25V4.3125H2.94643C2.50446 4.3125 2.14286 4.67109 2.14286 5.10938V6.70312C2.14286 7.14141 2.50446 7.5 2.94643 7.5H4.28571V11.3516C4.28571 11.5707 4.46652 11.75 4.6875 11.75H4.95536C5.17634 11.75 5.35714 11.5707 5.35714 11.3516V7.5H6.69643C7.13839 7.5 7.5 7.14141 7.5 6.70312V5.10938C7.5 4.67109 7.13839 4.3125 6.69643 4.3125ZM6.42857 6.4375H3.21429V5.375H6.42857V6.4375ZM12.0536 7.5H10.7143V3.25C10.7143 3.03086 10.5335 2.85156 10.3125 2.85156H10.0446C9.82366 2.85156 9.64286 3.03086 9.64286 3.25V7.5H8.30357C7.86161 7.5 7.5 7.85859 7.5 8.29688V9.89062C7.5 10.3289 7.86161 10.6875 8.30357 10.6875H9.64286V11.3516C9.64286 11.5707 9.82366 11.75 10.0446 11.75H10.3125C10.5335 11.75 10.7143 11.5707 10.7143 11.3516V10.6875H12.0536C12.4955 10.6875 12.8571 10.3289 12.8571 9.89062V8.29688C12.8571 7.85859 12.4955 7.5 12.0536 7.5ZM11.7857 9.625H8.57143V8.5625H11.7857V9.625Z"
                        fill="black" />
                </svg>
                <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-4 cursor-pointer">Setting</span>
                </a>
            </li>

            <li class="list-none xl:absolute xl:bottom-3 2xl:bottom-5 relative">
                <a href="../../index.php"
                    class="lg:p-1.5 xl:p-3 2xl:p-4 p-1 w-[193px] flex items-center justify-start rounded-md duration-300 cursor-pointeur hover:bg-[#00C1FE] text-black">
                    <span class="lg:text-[15px] xl:text-[16px] 2xl:text-[23px] text-[14px] ml-[41px] cursor-pointer">Logout</span>
                    <svg class="ml-4 cursor-pointer" width="25" height="22" viewBox="0 0 17 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.3125 5.2084C5.3125 4.91621 5.55156 4.67715 5.84375 4.67715H10.625V1.55937C10.625 1.32363 10.9105 1.2041 11.0766 1.37012L15.7781 6.12148C15.9873 6.33066 15.9873 6.66602 15.7781 6.8752L11.0766 11.6266C10.9105 11.7926 10.625 11.6764 10.625 11.4373V8.31953H5.84375C5.55156 8.31953 5.3125 8.08047 5.3125 7.78828V5.2084ZM4.25 5.2084V7.78828C4.25 8.66816 4.96387 9.38203 5.84375 9.38203H9.5625V11.4373C9.5625 12.616 10.9902 13.2137 11.827 12.377L16.5318 7.62891C17.1561 7.00469 17.1561 5.99531 16.5318 5.37109L11.827 0.619727C10.9936 -0.213672 9.5625 0.377344 9.5625 1.55937V3.61465H5.84375C4.96387 3.61465 4.25 4.33184 4.25 5.2084ZM0 1.71875V11.2812C0 12.1611 0.713867 12.875 1.59375 12.875H5.97656C6.1957 12.875 6.375 12.6957 6.375 12.4766V12.2109C6.375 11.9918 6.1957 11.8125 5.97656 11.8125H1.59375C1.30156 11.8125 1.0625 11.5734 1.0625 11.2812V1.71875C1.0625 1.42656 1.30156 1.1875 1.59375 1.1875H5.97656C6.1957 1.1875 6.375 1.0082 6.375 0.789062V0.523438C6.375 0.304297 6.1957 0.125 5.97656 0.125H1.59375C0.713867 0.125 0 0.838867 0 1.71875Z"
                            fill="black" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
    
    <!-- navbar -->
    <div id="mon-divbar" class="navbar fixed z-40 p-[17.44px] lg:left-[270px] xl:left-[300px] 2xl:left-[400px] left-0 top-0 right-0 flex justify-between items-centerxl:h-[62px] 2xl:h-[82px] h-[60px] bg-[#fff]">
        <div class="flex items-center justify-between lg:w-[20px] w-[100px]">
            <span class="lg:hidden block text-white text-4xl cursor-pointer" onclick="Opppen()">
                <i class="bi bi-filter-left px-1 bg-[#00C1FE] rounded-md"></i>
            </span>
            <span>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.7188 9C17.7188 4.18359 13.8164 0.28125 9 0.28125C4.18359 0.28125 0.28125 4.18359 0.28125 9C0.28125 13.8164 4.18359 17.7187 9 17.7188C13.8164 17.7188 17.7187 13.8164 17.7188 9ZM9 16.5938C4.82695 16.5938 1.40625 13.2152 1.40625 9C1.40625 4.82695 4.78477 1.40625 9 1.40625C13.173 1.40625 16.5938 4.78477 16.5938 9C16.5938 13.173 13.2152 16.5938 9 16.5938ZM10.125 12.375L6.75 9L10.125 5.625L10.125 12.375ZM11.25 5.625C11.25 4.62656 10.0371 4.12031 9.33047 4.83047L5.95547 8.20547C5.51602 8.64492 5.51602 9.35859 5.95547 9.79805L9.33047 13.173C10.0371 13.8797 11.25 13.3805 11.25 12.3785L11.25 5.625Z"
                        fill="#C4C4C4" />
                </svg>
            </span>
        </div>
        <div class="flex items-center justify-between mr-[4px]">
            <input
                class="p-3 sm:block hidden text-[15px] text-[#000] w-[212px] h-[37px] bg-transparent border-[1px] border-r-0 rounded-[8px] rounded-r-none focus:outline-none"
                type="search" placeholder="search" />
            <i class=" sm:block hidden bi bi-search text-sm text-[#C4C4C4] text-[21px] border-[1px] rounded-[8px] border-l-0 rounded-l-none p-1.5 h-[37px] bg-[#fff]"></i>
            <i class="bi bi-bell text-[#C4C4C4] text-[30px] ml-[33px]"></i>
        </div>
    </div>
    <!-- end navbar -->

    <!-- main body -->
    <main class="absolute p-2 my-5 lg:top[60px] xl:top-[62px] 2xl:top[82px] top-[60px] lg:left-[270px] xl:left-[300px] 2xl:left-[400px] left-0 lg:w-[calc(100%-270px)] xl:w-[calc(100%-300px)] 2xl:w-[calc(100%-400px)] w-[100%]">

    </main>
    <!-- end main body -->
    <script>
        function Opppen() {
            document.querySelector(".sidebar").classList.toggle("left-[-270px]");
        }
    </script>
</body>

</html>