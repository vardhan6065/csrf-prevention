<!DOCTYPE html>
<html>
<head>	
	<title>csrf validate</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
		$(function() {
			const name = getCookie('userCookie');
			console.log(name);
			document.getElementById('userfield').value = name;
			formAutoSubmit();
		});

		function formAutoSubmit () 
	    {
	    	document.forms["submitform"].submit();
       	}
		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
	</script>
</head>
<body>
	<form id="form" name="submitform" action="send_money.php" method="post">
		<input type="hidden" name="userfield" id="userfield" value="hello">
    </form>
</body>
</html>