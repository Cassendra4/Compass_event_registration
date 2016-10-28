<?php
require_once('add_data.php');
if(isset($is_success_record)){
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'form.php';

    header("Location: http://$host$uri/$extra");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> COMPASS 2016- National Chemical & Process Engineering Conference </title>

</head>

<body>
<h1> Compass 2016- National Chemical & Process Engineering Conference </h1>
<img src="images/logo.png" style="left: 0px; top: 0px" width="300" height="250" >

<?php
if (isset($has_error) && $has_error == true)
    echo "<h2 id='input-error'> Please fill the form again with all details </h2>";
?>
<form method="post" action="">
    <table class="center" cellpadding="2" cellspacing="0" border="1" width="700">

        <tr>
            <td width="250">Ticket Code:</td>
            <td colspan="5"><input class="left" type="text" size="30px" required name="ticket_id"></td>

        </tr>


        <tr>
            <td>Title:</td>
            <td colspan="5">
                <select style="width: 100px" name="title" required>
                    <option input class="left" type="select" value="Prof"> Prof:</option>
                    <option input class="left" type="select" value="Dr">Dr:</option>
                    <option input class="left" type="select" value="Mr"> Mr:</option>
                    <option input class="left" type="select" value="Mrs"> Mrs:</option>
                    <option input class="left" type="select" value="Ms"> Ms:</option>
                    <option input class="left" type="select" value="Rev"> Rev:</option>
                </select>
        </tr>

        <tr>
            <td>First Name:</td>
            <td colspan="5"><input class="left" type="text" required size="30px" name="first_name"></td>
        </tr>

        <tr>
            <td>Last Name:</td>
            <td colspan="5"><input class="left" type="text" required size="30px" name="last_name"></td>
        </tr>

        <tr>
            <td>Company:</td>
            <td colspan="5"><input class="left" type="text" required size="30px" name="company"></td>
        </tr>

        <tr>
            <td>Designation:</td>
            <td colspan="5"><input class="left" type="text" required size="30px" name="designation"></td>
        </tr>

        <tr>
            <td>Telephone:</td>
            <td colspan="5"><input class="left" type="text" size="30px" required maxlength="15" name="telephone"></td>
        </tr>

        <tr>
            <td>Mobile Number:</td>
            <td colspan="5"><input class="left" type="text" size="30px" required maxlength="15" name="mobile_number">
            </td>
        </tr>

        <tr>
        <tr>
            <td>Alumni Status:</td>
            <td colspan="5">
                <p><input class="left" type="radio" name="alumni_status" value="1">Alumni</p>
                <p><input class="left" type="radio" name="alumni_status" value="2">Student</p>
                <p><input class="left" type="radio" name="alumni_status" value="3"> Other</p>
            </td>
        </tr>
        <tr>
        <tr>
            <td>E-mail Address:</td>
            <td colspan="5"><input class="left" type="text" required size="30px" name="email"></td>
        </tr>

        <tr>
        <tr>
            <td>Meal Preference:</td>
            <td colspan="5">
                <p><input class="left" type="radio" name="meal_preference" value="1">veg </p>
                <p><input class="left" type="radio" name="meal_preference" value="2">Non-veg</p>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Preferred Session:</td>
            <td colspan="5">
                <p><input class="left" type="radio" name="preferred_session" value="1">Zero Hunger </p>
                <p><input class="left" type="radio" name="preferred_session" value="2">Clean Water and Sanitation</p>
                <p><input class="left" type="radio" name="preferred_session" value="3">Clean and Affordable Energy</p>
                <p><input class="left" type="radio" name="preferred_session" value="4">Industry Innovation and Infrastructure</p>
                <p><input class="left" type="radio" name="preferred_session" value="5">No Specific Preference</p>
            </td>
        </tr>
        <tr></tr>

        </tr>


        <tr>
            <td colspan="5" align="center"><input type="submit" required name="submit" value="Register" style="margin-left: 20px; width: 160px "></td>

            </td>
        </tr>

    </table>

</form>

</body>
</html>

