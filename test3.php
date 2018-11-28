<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
    border-collapse: collapse;
}

table, td, th {
    border: 0px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<br>
<body>
<div class="container" style="overflow-y:auto;">
    <br>
    
<?php
    $q = intval($_GET['q']);

    $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

    if (!$db_connection) {
        die("Error in connection: " . pg_last_error());
    }
      
    //$sql = 'SELECT * FROM "Checkings" WHERE "Category" = $$Additions$$ ' ;    
    //$sql = 'SELECT * FROM "Checkings" WHERE "ID" = $$.$q.$$ ' ; 
    //$sql = 'SELECT * FROM "Checkings" WHERE "Cat_ID" = '.$q.' ORDER BY "Date" DESC' ; 
    $sql = 'SELECT * FROM "Checkings" WHERE "Date" > now() - INTERVAL $$'.$q.' days$$ ORDER BY "Date" DESC';
    
    $result = pg_query($db_connection, $sql);
    if (!$result) {
        die("Error in SQL query: " . pg_last_error());
    }

    
    echo "<table>
        <tr>
        <th>Date</th>
        <th>Transaction</th>
        <th>Category</th>
        <th>Amount</th>
        </tr>";
        
    
    while($row = pg_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Date'] . "</td>";
        echo "<td>" . $row['Transaction'] . "</td>";
        echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . $row['Amount'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    

    // close connection
    pg_close($db_connection);       
?>
    
</div>
</body>
</html>

