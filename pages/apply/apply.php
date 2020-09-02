<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "florintech";
if (isset($_POST["submit"])){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $email = $_POST["email"];
    $stmt = $conn->query("SELECT id FROM Application WHERE email = '".$email."'");

    $check = $stmt->fetch();


    if ($check ==0) {
        // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO Application (firstname, lastname, phonenumber, email, course, session)
    VALUES (:firstname, :lastname, :phonenumber, :email, :course, :session)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);
     $stmt->bindParam(':session', $session);

   
    $firstname = $_POST["firstname"];
    $lastname = $_POST["firstname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $session = $_POST["session"];
    $stmt->execute();

 

 echo "<p style=color:#FF0000;>Your application has been received and we will contact you shortly</p>";
        
    }
else
{
echo "<p style=color:#FF0000;font-weight:bold;>Your Application has been received already</p>";

}
    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }}

$conn = null;



?> 