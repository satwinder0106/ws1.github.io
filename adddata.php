<html>
 <head>
    <title>Startup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

      <!-- My own stylesheet -->
    <link href="mystyle.css" rel="stylesheet">
  
    <style>
      p {
  font-family: arial;
  font-size: 34px;
  margin: 25px;
  width: 100%;
  height: 100%;
  /* Setup */
  position: relative;
  justify-content: center;
  text-align:center;
  color:black;
  outline:dashe;

}</style>

 </head>
<body background="headerimage.jpg">
<p>
Welcome <?php echo $_POST["fname"]; ?><br>
Your email address is: <?php echo $_POST["femail"];
?>

<br><br>
<?php
$con = mysqli_connect("localhost","root","","mysql");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 


 

$sql="INSERT INTO formdata (f_name, f_email)

VALUES

('$_POST[fname]','$_POST[femail]')";

 

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 

mysqli_close($con)

?>
</p>
</body>
</html>