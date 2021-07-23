<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$con = new mysqli('localhost:3308','root','','application');
if(isset($_POST['application_submit']))
{
        $name=$_POST['applicantname'];
        $phone=$_POST['applicantnumber'];
        $email=$_POST['applicantemail'];
        $dob= date('y-m-d',strtotime($_POST['applicantdob'])) ;   
        $gender=$_POST['gender'];
        $nationality=$_POST['nationality'];
        $community=$_POST['community'];
        $religion=$_POST['religion'];
        $abled=$_POST['abled'];
        $instruction=$_POST['instruction'];
        $fathername=$_POST['fathername'];
        $fathernumber=$_POST['fathernumber'];
        $fatheroccupation=$_POST['fatheroccupation'];
        $mothername=$_POST['mothername'];
        $mothernumber=$_POST['mothernumber'];
        $motheroccupation=$_POST['motheroccupation'];
        $address=$_POST['applicantaddress'];
        $pincode=$_POST['pincode'];
        $Academicyear=$_POST['Academicyear'];
        $studymode=$_POST['studymode'];
        $course=$_POST['course'];
        $examname=$_POST['examname'];
        $year=$_POST['year'];
        $institutename=$_POST['institutename'];
        $boardname=$_POST['boardname'];
        $certificate=$_POST['certificate'];
        $markpercentage=$_POST['markpercentage'];
        $uploadfiles=$_FILES["uploadfiles"]["name"];
        $tempname=$_FILES["uploadfiles"]["tmp_name"];
        $folder = "new pharama/".$uploadfiles;
        $sql="INSERT INTO details (applicantname,mobile,email,dob,gender,nationality,community,religion,abled,instruction,fathername,fathernumber,fatheroccupation,mothername,mothernumber,motheroccupation,applicantaddress,pincode,academic,studymode,course) VALUES ('$name', $phone, '$email', '$dob','$gender','$nationality','$community','$religion','$abled','$instruction','$fathername',$fathernumber,'$fatheroccupation','$mothername',$mothernumber,'$motheroccupation','$address',$pincode,$Academicyear,'$studymode','$course')";
        $sql2="INSERT INTO education (examname,year,institutename,boardname,certificate,markpercentage,uploadfiles) VALUES ('$examname',$year,'$institutename','$boardname',$certificate,$markpercentage,'$uploadfiles')";
        if($con->query($sql)&&$con->query($sql2)){
            echo"data stored";
            if(!isset($_POST['declaration'])){
                echo"please click the decleration";
            }
        }
        else
        {
            echo"failed";
        }
}
else{
    echo"please enter all the detail";
}
?>
</body>
</html>

