<?php

$servername = "localhost";
$username = "dikshapa_ckers";
$password = "hunny24moon";
$dbname = "dikshapa_ckers";
$table = "leopackers";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
}

//echo "Done";die;

        $file="index.html";
        $pcount=0;
        $gcount=0;
        $pstr = [];

        
        while (list($key,$val)=each($_POST))
        {
        $pstr .= '<tr>
                    <td align="left">'.$key.' : </td>
                    <td align="left">&nbsp;</td>
                    <td align="left">'.$val.'</td>
                  </tr>';
        ++$pcount;
        

        }

        //print_r($pstr);die;

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.leopackers.org";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "mail@leopackers.org";
$mail->Password = "india$1234";

$mail->From = "mail@leopackers.org";
$mail->FromName = "Booking Info";
$mail->AddAddress("info@leopackers.org");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Booking mail from server";
$mail->Body = '<table align="center" width="780" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td align="left">&nbsp;</td></tr>
  <tr>
    <td align="left" style="background:#3CC298; padding:10px 10px 10px 10px; border-radius: 12px 12px 0px 0px;"><a href="http://www.leopackers.org/" target="_blank"><img src="http://leopackers.org/img/logo.png" width="250" height="100" border="0" /></a></td>
  </tr>
  <tr>
    <td align="justify" style="border-left:10px solid #3CC298;  border-right:10px solid #3CC298; padding:20px;"><table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    

Booking details</td>
  </tr>

'.$pstr.'

<tr>
    <td colspan="3" align="left">

 Thanks for showing interest with our services.. <br>
We Get your Inquiry we will respond you soon..<br>
Feel free to call us - +919706541885

</td>
</tr>
 
</table>
</td>
  </tr>
 <tr>
    <td align="center" style="background:#3CC298; padding:10px 10px 10px 10px; color:#FFF; border-radius: 0px 0px 12px 12px; text-decoration:none;"><a href="http://leopackers.org/" target="_blank" style="text-decoration:none;"><span style="color:#fff;">Home</span></a>  |  <a href="http://leopackers.org/packing-moving.html" target="_blank" style="text-decoration:none;"><span style="color:#fff;">Services</span></a>  |  <a href="http://leopackers.org/enquiry.html" target="_blank" style="text-decoration:none;"><span style="color:#fff;">Booking</span></a>  |  <a href="http://leopackers.org/contact.html" target="_blank" style="text-decoration:none;"><span style="color:#fff;">Contact</span></a> 
    <br />
    ©2014 Leo Cargo Packers. All rights reserved</td>
  </tr>
</table>';
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}
if (isset($_POST['Name'])) {
    $name = $_POST['Name'];
} else {
    $name = $_POST['txtName'];
}
if (isset($_POST['Mobile'])) {
    $mobile = $_POST['Mobile'];
} else {
    $mobile = $_POST['txtmob'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = $_POST['Email'];
}
$message = 'Booking - '.$name.' - '.$mobile.' - '.$email; //get input text
    include 'way2sms-api.php';
    $client = new WAY2SMSClient();
    $client->login('9541125208', 'hunny24moon');
    $client->send('9706541885', $message);

$file="index.html";
        $pcount=0;
        $gcount=0;
        $pstr = '';

        
        while (list($key,$val)=each($_POST))
        {
        $pstr .= "$key : $val \n ++";
        ++$pcount;
        

        }

        //echo "INSERT INTO leopackers (id, msg) VALUES ('', '".$pstr."')";//die;
        $sql = "INSERT INTO leopackers (msg) VALUES ('".$pstr."')";
        if ($conn->query($sql) === TRUE) {
            include("$file");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
?>
