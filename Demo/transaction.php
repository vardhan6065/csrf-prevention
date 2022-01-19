<?php
include 'main.php';
?>


<?php 
  
      session_start();    
      $accno = $_SESSION['accno'];
      $amount = $_SESSION['amount'];
      
?>
  
<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
   
    <div class='container mt-5'> 
       <h3>Transaction Summary</h3>

       <table class='table mt-4' style='width: 500px'>
       	<tr>
          <td><span><b>Acc. No:</b></span></td> <td><?php echo $accno ?> </td>
       </tr>
        
       <tr>
          <td><span><b>Amount(inr):</b></span></td> <td>&#8377; <?php echo $amount ?> </td>
       </tr>

       <tr>
         <td colsapn='2'><p class='text-success'><b>Transaction Successfull...</b></p></td>
       </tr>
      </table>

    </div>

</body>
</html>