<?php


require('config.php');




$statement = $link->prepare("INSERT INTO register_table (name, surname, gender,birthdate,country,city,organisation,distance,phone,email)
    VALUES (?,?,?,?,?,?,?,?,?,?)");




$statement->execute([
        $_POST['name'],
        $_POST['surname'],
        $_POST['gender'],
        $_POST['birthdate'],
        $_POST['country'],
        $_POST['city'],
        $_POST['org'],
        $_POST['distance'],
        $_POST['phone'],
        $_POST['email']
    ]);

//$statement->debugDumpParams();



//require('index.php');
