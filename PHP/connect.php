<?php

$name = $_POST['name'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$gender = $_POST['gender'];
$prestasi = $_POST['prestasi'];

//Database Connection
$conn = new mysqli('localhost','root','','uas');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into registration(name, alamat, nomor, gender, prestasi) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $alamat, $nomor, $gender, $prestasi);
    $execval = $stmt->execute();
    echo $execval;
    echo "Your Registration is Successfull...";
    header('location:index.php');
    $stmt->close();
}

?>