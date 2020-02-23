<?

$to="samyakj666@gmail.com";
$message = "<a href=localhost/htdocs/changePassword.php>Change Password</a>";
$subject="Change your password";
$verify=mail($to,$subject,$message);
    if($verify){
        echo "mail has been send successfully on your registered email";
    }else{
        echo "Please enter valid email id";
    }

?>