<?php
    $username="root";
    $servername="localhost";
    $password="";
    $dbname="mydb";

    $conn= mysqli_connect($servername,$username,$password,$dbname);

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $EId   = $_POST['EId'];
        $dep   = $_POST['dep'];
        $JTitle = $_POST['JTitle'];
        $dob  = $_POST['dob'];
        $gender =$_POST['gender'];
        $nation = $_POST['nation'];
        $doj  = $_POST['doj'];
        $salary =$_POST['salary'];
        $rating =$_POST['rating'];

        if($fname!="" && $EId!="" && $dep!="" && $JTitle!="" && $dob!="" && $gender!="" && $nation!="" && 
            $doj!="" && $salary!="" && $rating!="")
        {
            $query = "insert into employee values('$fname','$EId','$dep','$JTitle',
                    '$dob','$gender','$nation','$doj','$salary','$rating')";

             $data = mysqli_query($conn,$query);

            if($data){
                echo "<script>alert('You have submitted sucessfully')</script>";
            }
            else{
             echo "failed";
            }
        }
        else
        {
            echo "<script>alert('Fill all details in the form')</script>";
        }
    }
?>