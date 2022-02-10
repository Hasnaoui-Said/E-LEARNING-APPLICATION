function Opppen() {
    document.querySelector(".sidebar").classList.toggle("left-[-270px]");
}


function openModeLAddStu(){
    document.querySelector(".openModeLAddStu").classList.add("block");
    document.querySelector(".openModeLAddStu").classList.remove("hidden");
}
function closeModeLAddStu(){
    document.querySelector(".openModeLAddStu").classList.remove("block");
    document.querySelector(".openModeLAddStu").classList.add("hidden");
}

function add__upload(){
    document.querySelector(".add__users").classList.add("hidden");
    document.querySelector(".upload__file").classList.remove("hidden");
    document.querySelector(".add__stu").classList.remove("bg-gray-200");
    document.querySelector(".up__stus").classList.add("bg-gray-200");
}
function add__user(){
    document.querySelector(".upload__file").classList.add("hidden");
    document.querySelector(".add__users").classList.remove("hidden");
    document.querySelector(".add__stu").classList.add("bg-gray-200");
    document.querySelector(".up__stus").classList.remove("bg-gray-200");
}

function open_confermation_delete_stu(){
    document.querySelector(".hamid").classList.toggle('hidden');
    // ./../data/userTraitement.php?type=update&enroll=<?php echo $student['enroll_Number']; ?>
}
function open_confermation_delete_cours(){
    document.querySelector(".add_cours").classList.toggle('hidden');
    // ./../data/userTraitement.php?type=update&enroll=<?php echo $student['enroll_Number']; ?>
}
