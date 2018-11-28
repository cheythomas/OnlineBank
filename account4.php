<?php
    $q = intval($_GET['q']);

    $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

    if (!$db_connection) {
        die("Error in connection: " . pg_last_error());
    }

    //$sql = 'SELECT * FROM "Checkings" WHERE "Category" = $$Additions$$ ' ;    
    //$sql = 'SELECT * FROM "Checkings" WHERE "ID" = $$.$q.$$ ' ; 
    //$sql = 'SELECT * FROM "Checkings"'; 
    $sql = 'INSERT INTO "Savings" ("Date", "Transaction", "Category", "Amount", "ID", "Cat_ID") VALUES (NOW(), $$Checking Transfer$$, $$Additions$$, $$'.$q.'$$, $$77$$, $$1$$)';
    //$sql .= 'INSERT INTO "Checkings" ("Date", "Transaction", "Category", "Amount", "ID", "Cat_ID") VALUES (NOW(), $$Transfer$$, $$Additions$$, $$-'.$q.'$$, $$4$$, $$1$$)';
    
    $result = pg_query($db_connection, $sql);
    if (!$result) {
        die("Error in SQL query: " . pg_last_error());
    }
          
     // free memory
     pg_free_result($result);
    
    // close connection
    pg_close($db_connection);       
?>
   
