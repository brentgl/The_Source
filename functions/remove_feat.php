<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'config.php';
?>
<link rel="stylesheet" href="../css/source.css" >
<title>Disabled</title>
<link rel="stylesheet" href="../css/all.css" >
<script>
setTimeout("self.close()", 3000 )
</script>
<html>
<body class="quickpage">
<?php
include 'source_db.php';
    $conn = mysqli_connect("localhost", $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$title = $_GET['title'];
$status = $_GET['status'];
$sql = "UPDATE features SET status ='none' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "'$title' Disabled";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br/>
</html>
</body>
