<?php
    $data = file_get_contents("http://labs:81/6/scripts/get.php");
    
    $array = json_decode($data, true);

    $commentary_count = count($array);
    if ($commentary_count > 0) {
        echo "<p>Кількість коментарів : " . $commentary_count . " </p>";
        foreach($array as $row){
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
        echo "0 результатів";
    }
?>