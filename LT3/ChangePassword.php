<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>

<?php
$currentpass = $newpass = $retypenewpass = "";
$currentpassErr = $newpassErr = $retypenewpassErr = "";

if( $_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["currentpass"])){
    $currentpassErr = "Current Password is required";
  }
  else{
    $currentpass = $_POST["currentpass"];
    if (!preg_match("/^[abc@12345]*$/",$currentpass)){
      $currentpassErr = "Take Current Password in Code Variable(i.e. $ currPass = abc@1234)";
      $currentpass = "";
    }
    if(strlen($currentpass)<8){
      $currentpassErr = "Take Current Password in Code Variable(i.e. $ currPass = abc@1234)";
      $currentpass = "";
    }
  }

  if (empty($_POST["newpass"])){
    $newpassErr = "New Password is required";
  }
  else{
    $newpass = $_POST["newpass"];
    if (!preg_match("/^[abc@12345]*$/",$newpass)){
      $newpassErr = "New Password should not be same as the Current Password";
      $newpass = "";
    }
    if(strlen($newpass)<8){
      $newpassErr = "New Password should not be same as the Current Password";
      $newpass = "";
    }
  }

  if (empty($_POST["retypenewpass"])){
    $retypenewpassErr = "Retype New Password is required";
  }
  else{
    $retypenewpass = $_POST["retypenewpass"];
    if (!preg_match("/^[abc@12345]*$/",$retypenewpass)){
      $retypepassErr = "Retype New Password must match with the New Password";
      $retypenewpass = "";
    }
    if(strlen($retypenewpass)<8){
      $retypenewpassErr = "Retype New Password must match with the New Password";
      $retypenewpass = "";
    }
  }
}

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<center>
<fieldset style="width: 30%" >
  <legend>CHANGE PASSWORD</legend>
  <p><?php echo $currentpassErr; ?></p>
  <p><?php echo $newpassErr; ?></p>
  <p><?php echo $retypenewpassErr; ?></p>
  Current Password: <input type="Current Password" name="currentpass"><br>
 <font color="#00FF00"> New Password:</font> <input type="New Password" name="newpass"><br>
<font color="#FF0000">Retype New Password:</font> <input type="Retype New Password" name="retypenewpass"><hr>
  <input type="submit" name="submit" value="submit">
  </center>
</fieldset>
</form>
</body>
<body>
  <style>
body {
  background-image: url('2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: left;
  background-size: 100% 100%;
}
</html>