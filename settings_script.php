<?php
require 'include/common1.php';
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('location:index.php');
}

$old = mysqli_real_escape_string($con, $_POST['old']);
$new = mysqli_real_escape_string($con, $_POST['new']);
$re = mysqli_real_escape_string($con, $_POST['retype']);

if (empty($old) and empty($new) and empty($re)) {
    header("location:setting.php?error_msg=fill the all field");
} else {
    if (strlen($old) < 6 and strlen($new) >= 6) {
        header('location:setting.php?old_msg=password at least 6 characters');
    } elseif (strlen($new) < 6 and strlen($old) >= 6) {
        header('location:setting.php?new_msg=password at least 6 characters');
    } elseif (strlen($new) < 6 and strlen($old) < 6) {
        header('location:setting.php?old_msg=password at least 6 characters &new_msg=password at least 6 characters');
    }
}
if ($old == $re) {


    $old_password = md5($old);
    $new_password = md5($new);
    $retype = md5($re);
    $query = "SELECT password FROM users WHERE id='$user_id' and password='$old_password' ";
//die($query);
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if ($old == $result['password']) {

        $query = "UPDATE users SET password='$retype' WHERE id='$user_id' and password = '$old_password' ";
        $result = mysqli_query($con, $query) or die(mysqli_query($con, $query));
        require 'include/common.php';
        ?>
        <div class="jumbotron text-center">
            <p><h4>Your password successfully changed</h4></p>
        </div>
        <?php
    } else {
        header('$locaton:setting.php');
    }
} else {
    header('location:setting.php?msg1=new and Re-type password are not same');
}
?>
