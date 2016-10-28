<?php
$host = "https://www.mrt.ac.lk/AdmS/phpMyAD/";
$username = "cpecompassuser";
$password = "sQaKRptuxwK5BF3H";
$db_name = "cpecompassdb";
$ticket_id=$first_name= $last_name=$company=$designation =$email= $telephone=$mobile_number =$title= "";
$status= $meal = $program = 0;

//if (isset($_REQUEST['submit'])) {
// if (($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticket_id = ($_POST['ticket_id']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $telephone = (int)$_POST['telephone'];
    $mobile_number = (int)$_POST['mobile_number'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    if (isset($_POST['meal_preference'])) {
        $meal = (int)$_POST['meal_preference']; // Displays value of checked checkbox.
    }
    if (isset($_POST['preferred_session'])) {
        $program = (int)$_POST['preferred_session']; // Displays value of checked checkbox.
    }
    if (isset($_POST['alumni_status'])) {
        $status = (int)$_POST['alumni_status']; // Displays value of checked checkbox.
    }

    if (!(isset($meal) && isset($program) && isset($status))) {
        $has_error = true;
    } else {


        echo "<h2></h2>";
        $con = mysqli_connect($host, $username, $password, $db_name, "3306");
        if ($con == false) {
            die(mysqli_connect_error($con) . "Connection failed: ");
        }
        echo "Connected successfully";
        $myticket_id = mysqli_real_escape_string($con, $ticket_id);
        $mytitle = mysqli_real_escape_string($con, $title);
        $myfirst_name = mysqli_real_escape_string($con, $first_name);
        $mylast_name = mysqli_real_escape_string($con, $last_name);
        $mycompany = mysqli_real_escape_string($con, $company);
        $mydesignation = mysqli_real_escape_string($con, $designation);
        $mytelephone = intval($telephone);
        $mymobile_number = intval($mobile_number);
        $myemail = mysqli_real_escape_string($con, $email);

        $sql = "INSERT INTO user_data (ticket_id,title,first_name,last_name,company,designation,meal_preference,telephone,mobile_number,alumni_status,preferred_session,email,status)
                VALUES ('$myticket_id','$mytitle','$myfirst_name','$mylast_name','$mycompany','$mydesignation','$meal','$mytelephone','$mymobile_number','$status','$program','$myemail',0)";


//($con->prepare($sql))->bind_param(ssssssiis,$ticket_id,$title,$first_name,$last_name,$company,$designation,$telephone,$mobile_number,$email);

//'$ticket_id',$title,'.$first_name.','.$last_name.','.$company.','.$designation.','.$telephone.','.$mobile_number.','.$email.'
        if (mysqli_query($con, $sql)) {
            $is_success_record = true;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            die();
        }
        mysqli_close($con);
    }

}
