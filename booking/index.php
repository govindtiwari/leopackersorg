<!DOCTYPE html>
<html>
<head>
<title>HM Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<?php $pass = $_POST['Password']; if($pass == 4869){

if (isset($_POST['messagetolove'])){

} else {

$servername = "localhost";
$username = "nadho55m_packers";
$password = "hunny24moon";
$dbname = "nadho55m_packers";
$table = "leopackers";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Done";die;

$sql = "SELECT * FROM leopackers";
$result = $conn->query($sql);


?>
<div style="margin: 50px;">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Message</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>Message</th>
            </tr>
        </tfoot>
        <tbody>
<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$data = str_replace('SUBMIT', '', $row["msg"]);
    	$data = str_replace('++', '<br />', $data);
        echo "<tr><td>" . $row["id"]. "</td><td>"; echo html_entity_decode($data); echo "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</tbody>
</table>
<style type="text/css">
	body
	{
		background:none;
	}
	.copyright p
	{
		color: black;
	}
</style>
</div>

	<?php
} } else{ ?>
<h1>LOGIN FORM</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Login</h2>
			<form action="" method="post">
				<!-- <div class="form-sub-w3">
					<input type="text" name="Username" placeholder="Customer number or username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div> -->
				<div class="form-sub-w3">
					<input type="password" name="Password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Be Secure</p>
				
				<div class="submit-w3l">
					<input type="submit" value="Login">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<?php } ?>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Login Form</h3>
											<form action="#" method="post">
												<div class="form-sub-w3ls">
													<input placeholder="User Name"  type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Email" class="mail" type="email" required="">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Password"  type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Confirm Password"  type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<!-- <div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div> -->
										<div class="submit-w3l">
											<input type="submit" value="Register">
										</div>
										</form>
					</div>	
				</div>
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2017 HM Webtech | Design by <a href="#">Cool</a></p>
	</div>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>