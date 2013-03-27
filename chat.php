<html>
<head>
<script src="jquery-1.3.2.min.js"></script>

<script>
$(document).ready(function() {
$("#responsecontainer").load("response.php");
var refreshId = setInterval(function() {
$("#responsecontainer").load('response.php?randval='+ Math.random());
}, 9000);
});
</script>
</head>
<body>
<?php
include ('inputchat.php');
?>
<div id="responsecontainer">
</div>
</body>
</html>
