<?php 
include("connection.php");
error_reporting(0);
 $em = $_GET['em'];
$en = $_GET['en'];
$eo = $_GET['eo'];
$ep = $_GET['ep'];
   



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
  <title > View all customers</title>
  <link rel ="stylesheet" type = "text/css" href = "table.css">
</head>


   <header>
   <div class = "main">
   <div class= "logo1">
    <img src="logo.png">
   </div>
   <ul>
    <li ><a href="page.html">HOME</a></li>
    <li ><a href="#">View Transtion </a></li>
    <li class="active"><a href="#"> View all Customers</a></li>
    <li><a href="#"> About us</a></li>
   </ul>
   </div>
   <body>
   
<table>
  <tr>
   <th> Name </th>
   <th> Email </th>
   <th> Current Balance</th>
   <th> Account Number </th>
   <th> Transition</th>
</tr>

<?php
  echo" 
   <tr>
   <td>".$em."</td>
  <td>".$en."</td>

   <td>".$eo."</td>

   <td>".$ep."</td>
   <td><a href = transfer.php? em=$eo > send</td> 


   </tr>
   ";

?>
  </table>
  
  
</body>
</html>
