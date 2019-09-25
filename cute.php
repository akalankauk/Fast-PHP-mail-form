<?php
session_start();
if ($_POST['Submit'] == 'Send')
{

// Govenment Email Here 
$to = 'akalankauk@gov.lk';
$subject = $_POST['subject'];
//My Message Here
$message = '<html><body>';
$message .= $_POST['textarea'];
$message .= "</body></html>";
//From Email-Possible to reply
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
//Mail Header
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
$headers .= "MIME-Version: $fromname\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);
header("Location: cute.php?harida= Hri!");
exit();
}
?>
<html>
<div class="container">
<head>
<title>my try</title>
</head>
<form action="cute.php" method="POST">
<b>Name:</b><br>
<input type="text" name="fromname" size="50"><br>
<br><b>Email:</b><br>
<input type="text" name="fromemail" size="50"><br>
<br><b>Subject:</b><br>
<input type="text" name="subject" size="74"><br>
<br><b>Message:</b><br>
<textarea type="text/html" name="textarea" rows="5" cols="40"style="width: 100%;"></textarea>
<br>
<input type="submit" name="Submit" value="Send">
<input type="reset" value="Reset">
</form>
<?php if (isset($_GET['harida'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[harida] </h3></font>"; } ?>
 </div>
</body>
</html>

