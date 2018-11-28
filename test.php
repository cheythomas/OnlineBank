<!DOCTYPE html>
<html>
<head>
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
<body>

<form>
<select name="categories" onchange="showUser(this.value)">
  <option value="">Sort by Category:</option>
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

