<?php
    include_once 'data.php';
            
    $name = $_POST['fname'];
    $text = $_POST['ftext'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Помилка підключення : " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO reviews(Name, Text, Date) 
    VALUES ('$name', '$text', NOW())";
    
    if ($conn->query($sql) === TRUE) {
        echo "Успішно створено";
    } else {
        echo "Помилка: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>