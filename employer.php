<style type="text/css">
.auto-style2 {
	color: #0068FF;
}
</style>
<body style="background-color: #F5DEB3">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intern";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$COMPANY_NAME= $_POST["COMPANY_NAME"];
$DATE= $_POST["DATE"];
$LOCATION = $_POST["LOCATION"];
$APPLICATION_LINK = $_POST["APPLICATION_LINK"];
$DEPARTMENT=$_POST["DEPARTMENT"];
$PROGRAM=$_POST["PROGRAM"];
$sql="INSERT INTO `Company_Info`(`COMPANY_NAME`, `DATE`, `LOCATION`, `APPLICATION_LINK`, `DEPARTMENT`, `PROGRAM`) VALUES (?, ?, ?, ?, ?, ?);";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssss",$COMPANY_NAME, $DATE, $LOCATION, $APPLICATION_LINK, $DEPARTMENT, $PROGRAM);
mysqli_stmt_execute($stmt);

echo"<h3>Registered Successfully...</h3>"
?>