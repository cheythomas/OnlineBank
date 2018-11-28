<?php
    $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=t1234"); 
    // query view
    $sql = 'SELECT * FROM "categorybalance"';    
    $result = pg_query($db_connection, $sql); 
    
     while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
        
     }          
    pg_close($db_connection);       
?>
   