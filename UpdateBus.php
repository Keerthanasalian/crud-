<?php 

	session_start();

?>
<?php include("connection.php")?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>admin Panel suraksha</title>
</head>
<body>

   <?php// echo "welcome:".  $_SESSION['id']; ?>
   <a href="adminLogout.php"><button class="btnHome">logout</button></a>

</body>
</html>

-->


<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel buses</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
	<style type="text/css">

			body{

		  background-image: url("image/20.jpg");
		  background-position: center;
		  background-size: cover;
		  height: 700px;
		  background-repeat: no-repeat;
      background-attachment: fixed;

		}
		.adminTopic{
			text-align: center;
			color: #fff;
			

		}
    .form_wrap .submit_btn:hover{

      color:#fff;
      font-weight: 600;

    }
    #decription{
      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;
    }
    .idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

    }




	</style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header><img src="image/profile2.png">
<p><?php echo $_SESSION['username']; ?></p>
</header>
<ul>


    
    <li><a href="adminDash.php">Manage Routes</a></li>
    <li><a href="ManagesBuses.php">Manage Buses</a></li>
    <li><a href="BookingManage.php">Booking People</a></li>
    <li><a href="PaymentManage.php">Transaction</a></li>
    <li><a href="adminLogout.php">logout</a></li>
  <!--  <li><a href="#">Event</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Service</a></li>
    <li><a href="#">Contact</a></li>-->
    </ul>
 <!--  <li>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
        
      </div>
    </li>-->
   

</div>

  <?php 


      

       if(isset($_POST['BusUpdate'])){

       $id=$_POST['id'];
       $nameOFbus=$_POST['bus_name'];
       $tel=$_POST['tel'];
       

       $query="UPDATE `bus` SET Bus_Name='$nameOFbus',tel='$tel' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
           
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully Bus updated!!!');
                      window.location.href='ManagesBuses.php';
                      </script>");
               


          }

          else{

               echo '<script type="text/javascript">alert("Not Updated!!!")</script>';
           }

           

     }

?>


  

   


<div class="sidebar2">



          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Buses Update/Edit
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">

        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="number" id="title" name="id" class="idclass" value="<?php echo $_GET['id'];?>">
        </div>
        
        <div class="input_wrap">
          <label for="title">Bus Name</label>
          <input type="text" id="title" name="bus_name" placeholder="Bus Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="text" id="title" name="tel" placeholder="Tel" required>
        </div>

       
        <div class="input_wrap">

          <input type="submit" value="Update Bus Now" class="submit_btn" name="BusUpdate">

        </div>



      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>