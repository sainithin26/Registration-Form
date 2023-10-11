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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1><em>EMPLOYEE REGISTRATION FORM</em></h1>
            <hr>
            <label class="lab" >Employee Name <span>*</span></label>
            <input class="inp" type="text" name="fname" placeholder="Enter Name"><br>

            <label class="lab">Employee ID <span>*</span></label>
            <input class="inp" type="text" name="EId" placeholder="Enter Employee ID"><br>

            <label class="lab">Department <span>*</span></label>
            <select class="inp" name="dep">
                <option value="Not selected">Select</option>
                <option>CSE</option>
                <option>CIVIL</option>
                <option>ECE</option>
                <option>MECH</option>
                <option>EEE</option>
            </select><br>

            <label class="lab">Job Title <span>*</span></label>
            <input class="inp" type="text" name="JTitle" placeholder="Enter Job Title"><br>

            <label class="lab">Date of Birth <span>*</span></label>
            <input class="inp" type="date" name="dob"><br>

            <label class="lab">Gender <span>*</span></label>
            <div class="con dis">
                <input  type="radio" name="gender" value="female">
                <label>Female</label>
                <input type="radio" name="gender" value="male" checked>
                <label>Male</label>
                <input type="radio" name="gender" value="other">
                <label>Other</label>
            </div><br>
           
            <label class="lab">Nationality <span>*</span></label>
            <select class="inp" name="nation">
                <option value="Not Selected">Select</option>
                <option>India</option>
                <option>Other</option>
            </select><br>

            <label class="lab">Date of Joining <span>*</span></label>
            <input class="inp" type="date" name="doj"><br>

            <label class="lab">Salary <span>*</span></label>
            <input class="inp" type="number" name="salary" placeholder="Enter Your Salary"><br>
            
            <label class="lab">Performance Ratings <span>*</span></label>
            <input class="inp" type="number" name="rating" placeholder="Enter your rating Out of 5"><br>

            <input class="btn" type="submit" name="submit" value="Submit">

            <input class="btn" type="reset" name="reset" value="Reset">
        </form>
     </div>
</body>
</html>