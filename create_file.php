<?php
    // database configuration
    $conn= new mysqli("localhost","<username>","<password>","<db name>") or die("Connection fail");
    
    // table
    $table_name = "<table name>";
    
    // output
    $sql="SELECT * FROM ".$table_name." where state_id = 12";
    $result=$conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $name = str_replace('\'',"\\'",$row["name"]);
            echo "array(";
            echo "'id' => '".$row["id"]."',";
            echo "'name' => '".$name."',";
            echo "'state_id' => '".$row["state_id"]."'";
            echo "), </br>";
        }
    } else {
      echo "0 results";
    }

    // $name = str_replace('\'',"\\'",$row["name"]);        add ' in string
