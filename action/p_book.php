<?php
include '../config/db.php';

if(isset($_POST['book'])){
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['p_num'];
    $hospital = $_POST['hospital'];
    $vaccine = $_POST['vaccine'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "INSERT INTO `bookings`(`P_name`, `email`, `number`, `p_id`, `hos_id`, `v_id`, `selected_date`, `selected_time`) VALUES('$name','$email','$phone','$user_id','$hospital','$vaccine','$date','$time')";

    $result = mysqli_query($conn, $query);

    if($result){

        echo "<script>
        alert('Congratulation you have successfully updated!');
        window.location='../patients/app.php'
        <p>please wait. Your appoinment is under aprroval</p>;
        
        </script>";
    }
    else{
        echo "<script>
        alert(' you are not successfully Registered!');
        window.location='../update_form.php';
        </script>";
    }

    
}
























?>