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
    <li ><a href="transfer.php">Transtion </a></li>
    <li class="active"><a href="#"> View all Customers</a></li>
    <li><a href="#"> About us</a></li>
   </ul>
   </div>
   <body>
   <table border="2">
  <tr>
<th> Name </th>
<th> Email </th>
<th> Current Balance</th>
<th> Account Number </th>
<th> Show </th>
</tr> 
<?php


include("connection.php");
error_reporting(0);
$query = "select * from bank";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	
	while($result= mysqli_fetch_assoc($data))
	{
		echo 
		"
		 <tr>
		 <td>" .$result['Name']. "</td>
		 <td>" .$result['Email']. "</td>
		 <td>" .$result['Currentbalance']. "</td>
		 <td>" .$result['AccountNumber']. "</td>
     <td> <a href='v.php? em=$result[Name]&en=$result[Email]&eo=$result[Currentbalance]&ep=$result[AccountNumber]'>view </a>
     </td>
		</tr>
		"
		;	
	}
}

?>
 </table>
  
   </header>
</body>
</html>
