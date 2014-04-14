<?php
echo '<!DOCTYPE html>
<html>
<head>';
if (!1)
{ 
    echo '<form id="myform" action="Controler/Request.php" method="post">
Enter password: 
<input type="password", name="password", maxlength="12" />
<input type="submit",  name="submit" value="submit" />
</form>';
}
else{
echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
function refreshFeed()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Controler/Request.php",true);
xmlhttp.send();
}
setInterval(refreshFeed, 60000); // one minutes, in milliseconds
$(document).ready(refreshFeed);
</script>
</head>
<body>
<button type="button" onclick="refreshFeed()">Request Update</button>
<div id="myDiv"><h2>See the latest headlines, alphabetically!</h2>
</div>
';
echo '</body>
</html>';
}