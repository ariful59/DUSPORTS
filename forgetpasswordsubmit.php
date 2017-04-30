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
	
	
	function checker()
	{
			var value1=document.getElementById("pass").value;
			var value2=document.getElementById("pass1").value;
			var warn=document.getElementById("hello");
			var warn1=document.getElementById("hello1");
			if(value1.length >= 6){
				hello1.innerHTML ="";
				if(value1==value2){
					hello.innerHTML ="Password Match";
					document.getElementById('submit').disabled=false;	
				}
				else{
					
					hello.innerHTML ="Don't Match";
					document.getElementById('submit').disabled=true;
				}
			}else{
				hello1.innerHTML ="at least 6 digits";
			}
			
	}
	</script>
</head>
<body id="body" style="overflow:hidden;" onload="javascript:div_show()">
	<?php
					if(!isset($_SESSION)) 
					{ 
						session_start(); 
					} 
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$username=$_SESSION['username'];
						$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $username;
						$Email=$_SESSION['email'];
						$_SESSION['email'] = $Email;
					}
						
	?>
	<div id="abc">
	<div id="popupContact">
		<form action="updatepassword" id="form" method="post" name="form">
		<img id="close" src="img/cross.jpg" onclick ="div_hide()">
		<h2>Forget Password</h2>
		<hr>
		<input id="pass" name="pass" placeholder="Password" type="password" required="required"onkeyup="checker(); return false;" /><br>
		<h8 id="hello1"></h8><br><br>
		<input id="pass1" name="pass1" placeholder="Confirm Password" type="password" required="required" onkeyup="checker(); return false;">
		<h8 id="hello"></h8><br><br>
		<br>
		<button name="send" id="submit" class="test"  type="submit" disabled value='SignUp'>Send</button>
		</form>
	</div>
	</div>
</body>
</html>