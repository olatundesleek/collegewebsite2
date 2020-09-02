<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apply to Florintech</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

<form class="contact1-form" action="index.php" method="POST" enctype="multipart/form-data">
	<span class="contact1-form-title">
					Apply to your Prefered course
				</span>
<div class="wrap-input1">
<p><input type="text" class="input1" name="firstname" required="required" placeholder="Enter your Firstname"></p>
<span class="shadow-input1"></span>
</div>

<div class="wrap-input1">
<p><input type="text" class="input1" name="lastname" required="required" placeholder="Enter your Lastname"></p>
</div>

<div class="wrap-input1" >
<input class="input1" type="tel" name="phonenumber" placeholder="Phone number" required="required">
<span class="shadow-input1"></span>
</div>

<div class="wrap-input1">
<p><input type="email" class="input1" name="email" required="required" placeholder="Enter your Email"></p>

</div>
	<div class="wrap-input1">
					<select class="input1" type="select" name="course" placeholder="Select Course" required="required">
						<option value="">---Select Course---</option>
						<option value="web-development frontend">Web Development(front end)</option> 
							<option value="web-development complete">Web Development(frontend/backend)</option> 
						<option value="dip in desktop publish">Desktop Publishing</option> 
						<option value="computer-engineering">Computer Engineering</option>    
						<option value="autocad-specialist">Autocad Specialist</option> 
						<option value="certified graphics proff">Certified Graphics Professional</option>    
						<option value="business-eletronic">Business Electronic Accounting</option> 
						<option value="computer-networking">Computer Networking</option>    
						<option value="computer-animation">Computer Animation</option> 
						<option value="computer engr and I.T security mgt">Computer engr and I.T security mgt</option>    
						<option value="revit architecture">Revit Architecture</option> 
						<option value="database admin">Database Administration</option>    
						<option value="adv in digital media">Digital Media</option> 
						<option value="office-management">Office Application</option>    
						<option value="Computer-programming">Computer Programming</option>  
					</select>
					
				</div>

					


<div class="wrap-input1">
	<p style="text-align: center;">select session</p>
<p style=text-align:center;><input type="Radio" name="session" value="morning">Morning(9am-12.30pm)</p>
<p style=text-align:center;><input type="Radio" name="session" value="afternoon">Afternoon(1pm-4pm)</p>
<p style=text-align:center;><input type="Radio" name="session" value="evening">Evening(5.30pm-7pm)</p>
</div>



<div class="container-contact1-form-btn">
<input class="contact1-form-btn" type="submit" name="submit" value="submit">
</div>
		<p style="text-align: center;">
<?php
$servername = "localhost";
$username = "florlwya_root";
$password = "solution";
$dbname = "florlwya_florintech";
if (isset($_POST["submit"])){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $email = $_POST["email"];
    $stmt = $conn->query("SELECT id FROM application WHERE email = '".$email."'");

    $check = $stmt->fetch();


    if ($check ==0) {
        // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO application (firstname, lastname, phonenumber, email, course, session)
    VALUES (:firstname, :lastname, :phonenumber, :email, :course, :session)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);
     $stmt->bindParam(':session', $session);

   
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $session = $_POST["session"];
    $stmt->execute();

 

echo ("<SCRIPT LANGUAGE='JavaScript'>
           window.alert('Your application has been received and we will contact you shortly')
           window.location.href='https://florintechcomputercollege.com';
       </SCRIPT>
       <NOSCRIPT>
           <a href='https://florintechcomputercollege.com'>Your application has been received and we will contact you shortly Click here if you are not redirected.</a>
       </NOSCRIPT>");
        
    }
else
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
           window.alert('Your Application has been received already')
           window.location.href='https://florintechcomputercollege.com';
       </SCRIPT>
       <NOSCRIPT>
           <a href='https://florintechcomputercollege.com'>Your Application has been received already Click here if you are not redirected.</a>
       </NOSCRIPT>");
}
    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }}

$conn = null;



?> 
</p>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>








</body>
</html>
