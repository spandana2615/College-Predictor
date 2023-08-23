<?php
$con=mysqli_connect("localhost","root","","db_colleges");
    $collegename=$_POST['collegename'];
    $openingrank=$_POST['openingrank'];
    $closingrank=$_POST['closingrank'];
    // $gender=$_POST['gender'];
     $caste=$_POST['caste'];
    $branch = $_POST['branch'];
    foreach($branch as $item)
    {
        $query1="INSERT INTO colleges_table (colleges,openingrank,closingrank,branch,gender,caste) VALUE ('$collegename','$openingrank','$closingrank','$item','F','$caste')";
        $query1_run=mysqli_query($con,$query1);
        $query2="INSERT INTO colleges_table (colleges,openingrank,closingrank,branch,gender,caste) VALUE ('$collegename','$openingrank','$closingrank','$item','M','$caste')";
        $query2_run=mysqli_query($con,$query2);
    }
    if($query2_run)
    {
        echo "Data Inserted";
    }
    else{
        echo "Data Not Inserted";
    }
?>