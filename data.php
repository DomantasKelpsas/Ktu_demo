<?php


require('config.php');


extract($_POST);


$sql = "INSERT INTO register_table (name, surname, sex,birthday,country,city,organisation,distance,phone,email)
    VALUES (?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn,$sql);

$stmt->bind_param("ssissiiiss", $_POST['name'], $_POST['surname'], $_POST['sex'], $_POST['birthday']
    , $_POST['country'], $_POST['city'], $_POST['organisation'], $_POST['distance'], $_POST['phone'], $_POST['email']);

$stmt->execute();

$success = $conn->query($sql);



if (!$success) {
    die("Couldn't enter data: " . $conn->error);
}


echo "Thank You For Registering";


$conn->close();


?>