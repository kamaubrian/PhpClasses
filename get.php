<?php



if(isset($_GET['stu_name']) && isset($_GET['stu_age']) && isset($_GET['stu_weight'])) {
    $name = $_GET['stu_name'];
    $age = $_GET['stu_age'];
    $weight = $_GET['stu_weight'];

    $my_file = fopen("credentials.txt", "a") or die ("Unable to Open File");

    fprintf($my_file, "\n**************\n");
    fprintf($my_file, "Name: $name\n");
    fprintf($my_file, "Age: $age\n");
    fprintf($my_file, "Weight: $weight\n");
    fprintf($my_file, "**************\n\n");

    if(!empty($age) && !empty($name) && !empty($weight)){
        echo 'Name: '.$_GET['stu_name'].'<br>';
        echo 'Age: '.$_GET['stu_age'].'<br>';
        echo 'Weight: '.$_GET['stu_weight'].'<br>';

    }else{
        $message = "Please Enter All Fields";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }






}

