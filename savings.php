<!DOCTYPE html>

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
            background-image: url("https://www.desktopbackground.org/download/2560x1440/2010/05/03/11530_beautiful-abstract-backgrounds-design-elements_5000x3750_h.jpg");
         }
       </style>
    </head>
    <br>
    <br>
<body>
<div class="container">
  <ul class="nav nav-tabs">
          <li><a href="account.php">Home</a></li>
    <li class="active"><a href="#">Savings</a></li>
        
  </ul>
</div>
</body>


<!-- date -->
<br>
    
<!-- script -->


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
tr:nth-child(even) {background-color: #ffff;}

.form2 {
    text-align: center;
    font-size: 1.30em;
    margin-top: 0.000px;
}

.form3 {
    text-align: right;
    font-size: 1.30em;
    margin-top: -30px;
}

.form1 {
    text-align: left;
    font-size: 1.30em;
    margin-top: 10px;
}

</style>

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
        xmlhttp.open("GET","AJAXsavings.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<div class="container" style="background-color:#dee8ee; padding: 20px 100px; border: 1px solid #ccc;">
<!-- color:dee8ee -->
<!-- <body> -->
<h3 align="center">Advanced Search</h3>
<form class = "form1">
<select name="categories" onchange="showUser(this.value)">
  <option value="0">Search by Category</option>
  <option value="1">Additions</option>
  <option value="2">Purchases</option>
  <option value="3">Payments</option>
  <option value="4">Checks</option>
  </select>
</form>

<form class = "form2">
<select name="dates" onchange="showUser2(this.value)">
  <option value="0">Search by Date</option>
  <option value="30">30 days ago</option>
  <option value="60">60 days ago</option>
  <option value="90">90 days ago</option>
  <option value="120">120 days ago</option>
  </select>
</form>

<form class = "form3">
 <select name="money" onchange="showUser3(this.value)">
  <option value="">Search by Amount</option>
  <option value="100">Over $100</option>
  <option value="1000">Over $1000</option>
  <option value="10000">Over $10000</option>
  <option value="100000">Over $100000</option>
  </select>
    
<!-- <select name="categories" onchange="showUser3(this.value)">     
    Search for amount greater than<br>
    <input type="text" name="amount" onchange="showUser3(this.value)">
    <option value="amount"></option>
</select> -->
</form>

<div id="txtHint"><b></b></div>
</div>

<script>
function showUser2(str) {
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
        xmlhttp.open("GET","savingsPhp3.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<script>
function showUser3(str) {
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
        xmlhttp.open("GET","savingsPhp2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>




<!-- New Section -->

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
        $sql = 'SELECT sum("Amount") AS "Account Balance" FROM "Savings"';
        
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
        $sql = 'SELECT * FROM "Savings" ORDER BY "Date" DESC';
        
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
