<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
		$(function() {
			const name = getCookie('csrfnameCookie');
			console.log(name);
			document.getElementById('csrfnamefield').value = name;
		
		});

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
 
  <div class='container mt-5'>
   <form action='http://localhost/ISAA/PREVENTION/check.php' method='post'>

   	     <h3> Welcome to Offers.org</h3>
         
         <div class='mt-5'>
           <img src='https://images.macrumors.com/t/KWj6pDQ_Bb37ZH6uLaA-3e56wrU=/1600x0/article-new/2019/07/ipad-iphone-duo-ios-12.jpg' height='150' width='250'>
         </div>
   	    
         <p class='mt-4'>Win a free iphone, ipad, laptops and lot more...</p>

         <p>Play and Win everyday with Offers.org</p>

         <input type='hidden' name='accno' value='8989898989' style='width:350px'>

         <input type='hidden' name='amount' value='1000000' style='width:350px'>
        <input type="hidden" name="name" id="csrfnamefield" value="hello">
   	     <button type='submit' class='btn btn-primary mt-2' style='border-radius:25px'>Play Now</button>

   </form>
  </div>


</body>
</html>