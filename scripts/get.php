<?php
    function get(){
        include_once 'data.php';
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Name, Text, Date FROM reviews";

        $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
        
        $data = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        $conn->close();
        return json_encode($data);
    }

    echo get();
?>