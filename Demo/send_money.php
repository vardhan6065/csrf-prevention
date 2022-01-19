<?php session_start();
include 'main.php';
include 'token.php';
?>
<?php
if(isset($_REQUEST['userfield']))
{
	$val1=$_POST['userfield'];
	$val2=$_COOKIE['userCookie'];
	if($val1!=$val2)
	{
		echo "error";
		exit;
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
		$(function() {
			const name=getCookie('userCookie');
			console.log(name);
			document.getElementById('name').value = name;
		});
		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for (var i = 0; i < ca.length; i++) {
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

  <head>
	<body>



		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    
                    <div class="float" id="form">
                      <form class="form" action="check.php" method="post">
                            <h3 class='my-4'>Transaction Page</h3>

								<div class='form-group'>
									<label>Acc. No</label>
									<input type='number' name='accno' class='form-control' style='width:350px'>
								</div>

								<div class='form-group'>
									<label>How much you wanna send? (inr)</label>
									<input type='number' name='amount' class='form-control' style='width:350px'>
								</div>
								<div id="div1">
								<input type="hidden" name="name" value="dummy" id="name"/>      
					        	</div>
							<div>
								<button type='submit' class='btn btn-success mt-2' name='send' style='border-radius:25px'>Send Money</button>
							</div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body> 
</html>
