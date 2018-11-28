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

<style>
    .myTable { 
  width: 100%;
  text-align: left;
  background-color: #F3F7F9;
  border-collapse: collapse; 
  }
.myTable th { 
  background-color: #13699B;
  color: white; 
  }
 
.myTable td { 
  padding: 15px;
  border: 0px solid #1992D7; 
}

.myTable th { 
  padding: 15px;
  border: 0px solid #1992D7; 
  }
    
    .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}

.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}

.modalDialog > div {
    width: 100%;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
}

.close2 {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: 200px;
    text-align: center;
    top: 175px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

.close1 {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: 1270px;
    text-align: center;
    top: 175px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}

    
</style>

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
    <li class="active"><a href="#">Home</a></li>
<!--    <li class="dropdown">  -->
<!--      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a> -->
<!--      <ul class="dropdown-menu">  -->
<!--        <li><a href="#">Account Summary</a></li>   -->
<!--        <li><a href="#">Ready to Go Checking</a></li>  -->
<!--        <li><a href="#">Regular Savings</a></li>         -->               
<!--        <li><a href="#">Statements</a></li>             -->           
<!--      </ul> -->
    </li>
 
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
        xmlhttp.open("GET","account2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>  
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
        xmlhttp.open("GET","account3.php?q="+str,true);
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
        xmlhttp.open("GET","account4.php?q="+str,true);
        xmlhttp.send();
    }
}
</script> 
<script>
function showUser4(str) {
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
        xmlhttp.open("GET","account1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script> 
<script>
function showUser5(str) {
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
        xmlhttp.open("GET","account2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script> 

    
    <li>
    <a href="#openModal">Transfers</a>

<div id="openModal" class="modalDialog">
    <div>
<div class="container">
<body>
<table class="myTable">
    <tr>
        <th>Transfer From</th>
        <th>Transfer To</th>
        <th></th>
        <th>Amount</th>
    </tr>
    <tr>
        <td>
            <form>
            <select name="categories" onchange="showUser(this.value)">
              <option value="">Checkings</option>
              </select>
            </form>
            <!-- 
            <select>
                <option value="Checkings">Checkings</option>
                <option value="Savings">Savings</option>
                <option value="" selected>Select an Account</option>
            </select> -->
        </td>

        <td>
            <form>
            <select name="categories" onchange="showUser2(this.value)">
              <option value="">Savings</option>
              <!-- <option value="Checkings">Checkings</option>
              <option value="Savings">Savings</option> -->
              </select>
            </form>
        </td>
        <td></td>
        <td>
           <!-- <form action="account.php" method="post">
                $<input type="text" name="money" value=""><br>
            </form> -->
           <form>    
                $<input type="number" name="money" onchange="showUser3(this.value); showUser2(this.value);">
                    <!-- <option value="money"></option> -->              
            </form>
        </td>
    </tr>
    <tr>
        <td>
            <form>
            <select name="categories" onchange="showUser(this.value)">
              <option value="">Savings</option>
              </select>
            </form>
            <!-- 
            <select>
                <option value="Checkings">Checkings</option>
                <option value="Savings">Savings</option>
                <option value="" selected>Select an Account</option>
            </select> -->
        </td>

        <td>
            <form>
            <select name="categories" onchange="showUser2(this.value)">
              <option value="">Checkings</option>
              <!-- <option value="Checkings">Checkings</option>
              <option value="Savings">Savings</option> -->
              </select>
            </form>
        </td>
        <td></td>
        <td>
           <!-- <form action="account.php" method="post">
                $<input type="text" name="money" value=""><br>
            </form> -->
           <form>    
                $<input type="number" name="money" onchange="showUser5(this.value); showUser4(this.value);">
                    <!-- <option value="money"></option> -->              
            </form>
        </td>
    </tr>
</table> 
<br>
<br>
        <a href="#close" title="Close" class="close1">
            <button type="button" align="right"class="btn btn-primary">Cancel</button>
        </a>
    <div align="right">
        <a href="account.php" title="Close" class="close2">
            <button type="button" align="right"class="btn btn-primary">Submit</button>
        </a>
    </div>
</div>
    </li>
 <!-- module ends -->   
 
    <li><a href="statements.php">Statements</a></li>
  
  </ul>
    
</div>
</body>

<div class="container">
  
  <h2>Assests</h2>          
  <table class="table table-hover">
 
     <thead>
      <tr>
          <th><h4>Account</h4></th>
        <th></th>   
    <?php
        $db_connection = pg_connect("host=localhost dbname=bank user=postgres password=1234");

       if (!$db_connection) {
            die("Error in connection: " . pg_last_error());
        }

        // execute query
        //$sql = 'SELECT sum("Amount") AS "Account Balance" FROM "Checkings" AND "Savings"';
        $sql = 'SELECT sum("Amount") AS "Account Balance" FROM (SELECT * FROM "Checkings" UNION SELECT * FROM "Savings") AS amnt';
        
        $result = pg_query($db_connection, $sql);
        if (!$result) {
            die("Error in SQL query: " . pg_last_error());
        }
        
         while ($row = pg_fetch_array($result)) {
            //echo "<div style=\"float:right;\"><h3>" . $row[0] . "</h3></div>";
            echo "<th><h4>" . $row[0] . "</h4></th>";
        }
        
         // free memory
        pg_free_result($result);
        // close connection
        pg_close($db_connection);
    ?>

    </tr>
    </td> 
    </thread>
      
    <tbody>
      <tr>
          <td><h4><a href=checking.php>Ready to Go Checking</a></h4></td>
        <td></td>
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
                echo "<td><h4>" . $row[0] . "</h4></td>";
            }
        
            // free memory
            pg_free_result($result);
            // close connection
            pg_close($db_connection);
        ?>
      </tr>
      
      <tr>
          <td><h4><a href=savings.php>Regular Savings</a></h4></td>
        <td></td>
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
                echo "<td><h4>" . $row[0] . "</h4></td>";
            }
        
            // free memory
            pg_free_result($result);
            // close connection
            pg_close($db_connection);
        ?>
      </tr>
      
    </tbody>
  </table>
</div>