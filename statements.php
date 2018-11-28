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

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="account.php" class="w3-bar-item w3-button w3-wide">
    <img src="https://s14.postimg.org/p6hvz5tg1/3420logo.png" height="40" width="40" >Online Bank</a>
    
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
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #FFFFFF;
        background-image: url("");
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 0px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

</style>

<script>
function printPage() {
        window.print();
}
</script>

<body>
<div class="container">
<br>
<br>
  <ul class="nav nav-tabs">
    <li><a href="account.php">Home</a></li>
    <li class="active"><a href="#">Statements</a></li>
  </ul>
</div>
</body>

<!-- collapse table -->
<body>
<div class="container">
  <h2>Select and View Statement</h2>
  <p>Showing Statements for 977110055 Checking</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">2018 Statements</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
          <div class="panel-body"></div>
        <table>
                <tr>
                    <td>January 30, 2018</td>
                    <td><a href="2018/january.php">View</a></td>
                    <td></td>
                </tr>
        </table>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2017 Statements</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
            <table>
                <tr>
                    <td>Decemeber 30, 2017</td>
                    <td><a href="2017/december.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>November 30, 2017</td>
                    <td><a href="2017/november.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>October 30, 2017</td>
                    <td><a href="2017/october.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>September 30, 2017</td>
                    <td><a href="2017/september.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>August 30, 2017</td>
                    <td><a href="2017/august.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>July 30, 2017</td>
                    <td><a href="2017/july.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>June 30, 2017</td>
                    <td><a href="2017/june.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>May 30, 2017</td>
                    <td><a href="2017/may.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>April 30, 2017</td>
                    <td><a href="2017/april.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>March 30, 2017</td>
                    <td><a href="#">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>February 30, 2017</td>
                    <td><a href="2017/february.php">View</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td>January 30, 2017</td>
                    <td><a href="2017/january.php">View</a></td>
                    <td></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">2016 Statements</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">There are no statements for this year.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">2015 Statements</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse ">
        <div class="panel-body">There are no statements for this year.</div>
      </div>
    </div>  
      
  </div> 
</div>

<div class="container">
      <p>Print
        <a href="#">
          <span class="glyphicon glyphicon-print" value="Print" onclick="printPage()"> </span>
        </a>
      </p>     
</div>

  
    

</body>
</html>