<?php
include '../config/db.php';

if(isset($_POST['book'])){
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['p_num'];
    $hospital = $_POST['hospital'];

    $date = $_POST['date'];
    $time = $_POST['time'];
    $status = "";

    $query = "INSERT INTO `appointments`(`id`, `p_name`, `email`, `phone`, `pat_id`, `hosp_id`, `status`, `selected_date`, `selected_time`, `created_at`) 
    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]');

    $result = mysqli_query($conn, $query);
    

    if($result){

echo "<script>
window.location='../patients/app.php';

</script>";
}
else{
echo "<script>
alert(' you might've missed some');
window.location='../update_form.php';
</script>";
}

}

?>