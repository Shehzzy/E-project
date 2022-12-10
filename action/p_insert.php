<?php
if(isset($_POST['register'])){

    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $address=$_POST['add'];
    $m_num=$_POST['num'];

    include '../config/db.php';
    $query="INSERT INTO `patients`( `f_name`, `l_name`, `email`, `password`, `age`, `gender`, `dob`, `address`, `m_num`) VALUES('$f_name','$l_name','$email','$password','$age','$gender','$dob','$address','$m_num')";
   
   //execute or run query on database connection
   $result=mysqli_query($conn,$query);
   if($result){
       //first show alert message that redirect again to register pafe.
       //register page is one folder back 

       echo "<script>
       alert('Congratulation you have successfully Registered!');
       window.location='../index.php';
       </script>";
   }
   else{
       echo "<script>
       alert(' you are not successfully Registered!');
       window.location='../register.php';
       </script>";
   }

   
}





















?>