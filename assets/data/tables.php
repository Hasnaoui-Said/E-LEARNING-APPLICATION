<?php
    include_once("library.php");
    require_once(dirname(__FILE__) . './../../template/data/models/student.php');
    require_once(dirname(__FILE__) . './../../template/data/models/cours.php');
    require_once(dirname(__FILE__) . './../../template/data/models/paymentDetails.php');
    $students = getStudents("../../assets/data/data_students.json");
    $new_student = new student();
    $students = $new_student->getAllStudents();
    $countStudent = $new_student->getCountStudents();
    $new_cours = new cours();
    $cours = $new_cours->getAllCours();
    $countCours = $new_cours->getCountCours();
    $paymentDetail = new PaymentDetails();
    $PaymentDetails = $paymentDetail->getAllPaymentDetails();
    $totalAoundPaid = $paymentDetail->getTotalAoundPaid();
    // $payments = getPayments("../../assets/data/data_payments.json");

    // print_r($PaymentDetails);

?>