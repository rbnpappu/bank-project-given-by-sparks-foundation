<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
  <title > View all customers</title>
  <link rel ="stylesheet" type = "text/css" href = "transfer.css">

    <header>
   <div class = "main">
   <div class= "logo1">
    <img src="logo.png">
   </div>
   <ul>
    <li ><a href="page.html">HOME</a></li>
    <li class="active" ><a href="">Transtion </a></li>
    <li><a href="view.php"> View all Customers</a></li>
    <li><a href="#"> About us</a></li>
   </ul>
   </div>
   <body>
    <form   method="POST">
   <div class = "account-form" >
        <h1>Transition form</h1>
        
           <p>Sender name</p>
           <input type="text" name="id" placeholder="Enter sender name">
           <p>Receiver name</p>
           <input type="text" name="id1" placeholder="Enter Receiver name"> 
           <p>Amount</p>
           <input type="text" name="amount" placeholder="Enter amount">
      
            <input type="submit" name="update" value="send">
           <?php
           $con = mysqli_connect("localhost","root","",'bankdatabase');
          
           
           if(isset($_POST['update']))
           {
            

              $id = $_POST['id'];
              $query = "UPDATE bank SET currentbalance = currentbalance+'$_POST[amount]' where name='$_POST[id]'";
              $query1 = "UPDATE bank SET currentbalance = currentbalance-'$_POST[amount]' where name='$_POST[id1]'";
              $query_run=mysqli_query($con,$query);
              $query1_run=mysqli_query($con,$query1);
              if($query_run)
              {
                echo 'data updated';
              }
              else{
                echo 'data is not updated';
              }
           
           if($query1_run)
              {
                echo 'data updated';
              }
              else{
                echo 'data is not updated';
              }
           }
           ?>
          </div>        
    </form>

       

<body>
</html> 