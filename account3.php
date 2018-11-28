<?php
    $q = intval($_GET['q']);

    $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

    if (!$db_connection) {
        die("Error in connection: " . pg_last_error());
    }

    $sql = 'INSERT INTO "Checkings" ("Date", "Transaction", "Category", "Amount", "ID", "Cat_ID") VALUES (NOW(), $$Savings Transfer$$, $$Payments$$, $$-'.$q.'$$, $$77$$, $$3$$)';
    
    $result = pg_query($db_connection, $sql);
    if (!$result) {
        die("Error in SQL query: " . pg_last_error());
    }
          
     // free memory
     pg_free_result($result);
    
    // close connection
    pg_close($db_connection);       
?>
   


