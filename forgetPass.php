<!DOCTYPE html>
<html>
<head>
<link href="css/elements.css" rel="stylesheet">
<script src="js/my_js.js"></script>
<style>
.test{
    height:30px;
    width:300px;
	
}

</style>
	<script>
	//Function To Display Popup
	function div_show() {
	document.getElementById('abc').style.display = "block";
	
	}
	//Function to Hide Popup
	function div_hide(){
	document.getElementById('abc').style.display = "none";
	location.href = 'signLog';
	}
	</script>
</head>
<body id="body" style="overflow:hidden;" onload="javascript:div_show()">
	<div id="abc">
	<div id="popupContact">
		<form action="forgetPassMail.php" id="form" method="post" name="form">
		<img id="close" src="img/cross.jpg" onclick ="div_hide()">
		<h2>Forget Password</h2>
		<hr>
		<input id="email" name="email" placeholder="Email" type="text" required="required">
		<textarea id="msg" name="message" placeholder="Message"></textarea>
		<button name="send"  class="test"  type="submit">Send</button>
		</form>
	</div>
	</div>
</body>
</html>