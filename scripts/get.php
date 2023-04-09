<?php
    include_once 'data.php';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Name, Text, Date FROM reviews";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
            <div class="card">
                <h4 class="author">
                    '.$row['Name'].'
                </h4>
                <p class="text">
                    '.$row['Text'].'
                </p>
                <small class="date">
                    '.$row['Date'].'
                </small>
            </div>
        ';
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>