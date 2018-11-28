<!DOCTYPE html>
<html>
<title>Online Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="account.php" class="w3-bar-item w3-button w3-wide"><img src="https://s14.postimg.org/p6hvz5tg1/3420logo.png" height="40" width="40" >
Online Bank</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Log Out</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Log Out</a>
</nav>

<html lang = "en">
    
   <head>
      <title>Online Bank</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #FFFFFF;
            background-image: url("");
         }
       </style>
    </head>
    <br>
    <br>
<body>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Checking</a></li>
  </ul>
</div>
</body>


<!-- date -->
<br>
    
<!-- script -->
<div class="container">
<div id="reportrange" class="pull-right" align="center" style="background: #F0F3F4; cursor: pointer; padding: 50px 100px; border: 1px solid #ccc; width: 100%">
    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
    <span></span> <b class="caret"></b>
</div>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html('Today is ' + end.format('MMMM D, YYYY'));
        //$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    //$('#reportrange').daterangepicker({
    //    startDate: start,
    //    endDate: end,
    //    ranges: {
    //       'Today': [moment(), moment()],
    //      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //       'Last 60 Days': [moment().subtract(59, 'days'), moment()],
    //       'Last 90 Days': [moment().subtract(89, 'days'), moment()],
    //    }
    //}, cb);

    cb(start, end);
    
});
</script>
</div>

<style>
table{
    border-collapse: collapse;
    width: 100%;
}

th, td{
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd) {background-color: #f2f2f2;}

form {
    text-align: center;
    font-size: 1.30em;
}

</style>
<!-- <div style="overflow-y: auto; height:150px; "> -->
<div class="container" style="overflow-y:auto;">
    <div align="right"><u>Available Balance</u></div>
    <td nowrap>
        <div style="float:left;"><h3>Posted Transactions</h3></div>

    <?php
        $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

       if (!$db_connection) {
            die("Error in connection: " . pg_last_error());
        }

        // execute query
        $sql = 'SELECT sum("Amount") AS "Account Balance" FROM "Checkings"';
        
        $result = pg_query($db_connection, $sql);
        if (!$result) {
            die("Error in SQL query: " . pg_last_error());
        }
        
         while ($row = pg_fetch_array($result)) {
            echo "<div style=\"float:right;\"><h3>" . $row[0] . "</h3></div>";
        }
        
         // free memory
        pg_free_result($result);
        // close connection
        pg_close($db_connection);
    ?>

    </td> 
    
</div>

<div class="container" style="overflow-y:auto; height:500px;">
  <!-- <table class="table table-striped"> -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Transaction</th>
        <th>Category</th>
        <th>Amount</th>
      </tr>
    </thead>   
    <tbody> 
   
       <?php
        $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

       if (!$db_connection) {
            die("Error in connection: " . pg_last_error());
        }

        // execute query
        $sql = 'SELECT * FROM "Checkings" ORDER BY "Date" DESC';
        
        $result = pg_query($db_connection, $sql);
        if (!$result) {
            die("Error in SQL query: " . pg_last_error());
        }
        
        
        // iterate over result set
        // print each row
  
        while ($row = pg_fetch_array($result)) {
            echo "<tr><td> " . $row[0] . "</td>";
            echo "<td> " . $row[1] . "</td>";
            echo "<td> " . $row[2] . "</td>";
            echo "<td> " . $row[3] . "</td></tr>";
        }
          
        // free memory
        pg_free_result($result);
        // close connection
        pg_close($db_connection);
        ?>
     
    </tbody>
  </table>
</div>

  


<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","test2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<!-- form -->
<!-- <body> -->
<form>
<select name="categories" onchange="showUser(this.value)">
  <option value="0">Advanced Search</option>
  <option value="1">Additions</option>
  <option value="2">Purchases</option>
  <option value="3">Payments</option>
  <option value="4">Checks</option>
  </select>
</form>
<br>
<div id="txtHint"><b></b></div>




</body>
</html>

