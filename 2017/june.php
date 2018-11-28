<!DOCTYPE html>
<html>
    <head>
        <title>Online Bank</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/home.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
<style>
    div {
        height: 200px;
        width: 800px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -310px;
        margin-left: -490px;     
    }
    
    img {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -315px;
        margin-left: -570px
    }
    
    table {    
        border-collapse: collapse;
        width: 70%;
        margin-left: 0px;
    }
    
    table#t1 tr:nth-child(odd) {
    background-color: #eee;
    }

    td, th {
        border: 0px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    hr {
        margin-right: 200px;
    }
    
    .hr2 {
        margin-left: 320px;
        margin-right: 265px;
        margin-top: -38px;
        background-color: #000;
        height: 2px;
    }
    <!-- -->
    .hr3 {
        margin-left: 493px;
        margin-right: 245px;
        margin-top: -367px;
        background-color: #000;
        height: 2px;
    }
    
    .hr4 {
        margin-left: 493px;
        margin-right: 245px;
        margin-top: -150px;
        background-color: #000;
        height: 2px;
    }
    
    .hr5 {
        margin-left: 493px;
        margin-right: 245px;
        margin-top: -50px;
        background-color: #000;
        height: 2px;
    }
    
</style>      

<img src="https://s14.postimg.org/p6hvz5tg1/3420logo.png" height="80" width="80" >
<body>
    <div class="container">   
      <table>
          
            <td>
                <h3>Statement of Account</h3>
                <p>Online Bank</p>
                <p>Bakersfield CA</p>
            </td>
          
            <td>
                <!-- <br><p>Statement Number: 0011</p>
                <p>06/30/17 - 12/28/17</p>
                <p><h4>Bank Office</h4></p>
                <p>661-555-1123</p> -->
            </td>        
          
      </table>
        <br>
        <br>

        <!-- sql statement -->
        <!-- Customer Info -->
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }

            $sql = 'SELECT "Cust_Name", "Cust_Addr" FROM "Customer" WHERE "Cust_Pswd" = $$1234$$ ';
        
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
        
            while ($row = pg_fetch_array($result)) {
                echo "<p>" . $row['Cust_Name'] . "</p>";
                echo "<p>" . $row['Cust_Addr'] . "</p>";
            }
        
            // free memory
            pg_free_result($result);
            // close connection
            pg_close($db_connection);
        ?>
        
<hr noshade>
<body>

<table>
  <tr>
    <td><b>Balance on 06/01</b></td>
    <td></td>
    <td></td>
    <td></td>
           <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Date" < $$2017-06-02$$ ';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
    
  </tr>
  <tr>
    <td>Additions</td>
    <td></td>
    <td></td>
    <td></td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Amount" > $$0$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
  </tr>
  <tr>
    <td>Subtractions</td>
    <td></td>
    <td></td>
    <td></td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Amount" < $$0$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
  </tr>
  <tr>
    <td></td>
    <td>Checks</td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Cat_ID" = $$4$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Payments</td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Cat_ID" = $$3$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Purchases</td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Cat_ID" = $$2$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
    <td></td>
    <td></td>
  </tr>
  <tr>
      <td><b>Balance on 06/30</b></td>
      <td></td>
      <td></td>
      <td></td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            //SELECT sum("Amount") AS "Account Balance" FROM "Checkings"
            $sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Date" < $$2017-7-01$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>
  </tr>
</table>   
<hr class="hr2">
<br>
<br>
<br>
<br>
<br>
<br>

<b>Additions</b>
<table id="t1">
  <tr>
    <td></td> 
    <td></td>
    <td width="70%">Date</td>
    <td>Description/Location</td>
    <td>Reference</td>
    <td>Amount</td>
  </tr>

        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT * FROM "Checkings" WHERE "Cat_ID" = $$1$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            //$sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Date" < $$2017-7-01$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
             while ($row = pg_fetch_array($result)) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td> " . $row[0] . "</td>";
                echo "<td> " . $row[1] . "</td>";
                echo "<td> " . $row[4] . "</td>";
                echo "<td> " . $row[3] . "</td></tr>";     
            }
            pg_free_result($result);           
            pg_close($db_connection);
        ?>   
   
  <tr>
      <td></td>
      <td></td>
      <td><b>Total</b></td>
      <td></td>
      <td></td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount")  AS "total" From "Checkings" WHERE "Cat_ID" = $$1$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?> 
  </tr>  
  <tr>
      <td><b>Checks</b></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>  
  <tr>
    <td></td> 
    <td></td>
    <td>Date</td>
    <td>Description/Location</td>
    <td>Reference</td>
    <td>Amount</td>
  </tr>

        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT * FROM "Checkings" WHERE "Cat_ID" = $$4$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            //$sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Date" < $$2017-7-01$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
              while ($row = pg_fetch_array($result)) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td> " . $row[0] . "</td>";
                echo "<td> " . $row[1] . "</td>";
                echo "<td> " . $row[4] . "</td>";
                echo "<td> " . $row[3] . "</td></tr>";     
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>   
  
    <tr>
      <td></td>
      <td></td>
      <td><b>Total</b></td>
      <td></td>
      <td></td>
         <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount")  AS "total" From "Checkings" WHERE "Cat_ID" = $$4$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?> 
  </tr> 
  
    <tr>
      <td><b>Payments</b></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>  
  <tr>
    <td></td> 
    <td></td>
    <td>Date</td>
    <td>Description/Location</td>
    <td>Reference</td>
    <td>Amount</td>
  </tr>
 
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT * FROM "Checkings" WHERE "Cat_ID" = $$3$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            //$sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Date" < $$2017-7-01$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
              while ($row = pg_fetch_array($result)) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td> " . $row[0] . "</td>";
                echo "<td> " . $row[1] . "</td>";
                echo "<td> " . $row[4] . "</td>";
                echo "<td> " . $row[3] . "</td></tr>";     
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?>   
    
    <tr>
      <td></td>
      <td></td>
      <td><b>Total</b></td>
      <td></td>
      <td></td>
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount")  AS "total" From "Checkings" WHERE "Cat_ID" = $$3$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?> 
  </tr> 
  
    <tr>
      <td><b>Purchases</b></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>  
  <tr>
    <td></td> 
    <td></td>
    <td>Date</td>
    <td>Description/Location</td>
    <td>Reference</td>
    <td>Amount</td>
  </tr>
 
        <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT * FROM "Checkings" WHERE "Cat_ID" = $$2$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            //$sql = 'SELECT sum("Amount") AS "Account Balance" From "Checkings" WHERE "Date" < $$2017-7-01$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
             while ($row = pg_fetch_array($result)) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td> " . $row[0] . "</td>";
                echo "<td> " . $row[1] . "</td>";
                echo "<td> " . $row[4] . "</td>";
                echo "<td> " . $row[3] . "</td></tr>";     
            }
            pg_free_result($result);
            pg_close($db_connection);
     ?> 
       
    <tr>
      <td></td>
      <td></td>
      <td><b>Total</b></td>
      <td></td>
      <td></td>
         <?php
            $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");
            if (!$db_connection) {
                die("Error in connection: " . pg_last_error());
            }
            $sql = 'SELECT sum("Amount")  AS "total" From "Checkings" WHERE "Cat_ID" = $$2$$ AND "Date" BETWEEN $$2017-06-01$$ AND $$2017-06-30$$';
            $result = pg_query($db_connection, $sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_array($result)) {
                echo "<td>" . $row[0] . "</td>";
            }
            pg_free_result($result);
            pg_close($db_connection);
        ?> 
  </tr>  
</table>
<!-- <hr class="hr3"> -->
<!-- <hr class="hr4"> -->
<!-- <hr class="hr5"> -->


    </div>
</body>

</html>