<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELECTROINC WALLET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


<?php
        session_start();
function user() {
$servername = "localhost";
$username = "root";
$password = "";
$database = "Paytm"; 
$conn = mysqli_connect($servername, $username, $password ,$database);

  //session_start();

        $mobNo = $_SESSION['regName'];
        $newMob = $mobNo;
        $sql = 'select FirstName, MobileNo from signup';
        $ch = mysqli_query($conn,$sql);


while($row=mysqli_fetch_array($ch,MYSQLI_ASSOC))
{
  if($mobNo == $row['MobileNo'])
  {
      echo $row['FirstName'];
      break;
  }
}
       // $mobNo = $_SESSION['regName'];
  
  mysqli_close($conn);

}
function bal() {
$servername = "localhost";
$username = "root";
$password = "";
$database = "Paytm"; 
$conn = mysqli_connect($servername, $username, $password ,$database);

  //session_start();

        $mobNo = $_SESSION['regName'];
        $sql = "select MobileNo, Bal from Balance";
        $ch = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($ch,MYSQLI_ASSOC))
{
  if($row['MobileNo'] == $mobNo)
  {
      echo $row['Bal']." ";
      break;
  }
}
  mysqli_close($conn);
}
?>
  <style>
    .try i{
      font-size: 60px;
    }
    .try{
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 10px;

    }
    .inner{
      margin: 5px;
      margin-bottom: 15px;

    }
    .servi{
      margin: 20px;
      margin-left: 0px;
      margin-right: 0px;
    }
    kbd{
      background-color: #ffffff;
      color: #000000;
    }
    .help1{
      background-color: #e6e6e6;
      margin-top: 5px;
      border-radius: 2px; 
    }
    .help2 p{
    }
  </style>
  <script>
var myWindow;
function Win() {
  window.open('http://localhost/pro/paytm.php','_blank');
  window.close();
}
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
</head>
<body background="back2.jpg">


<nav class="navbar navbar-inverse top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 30px;color:white; margin-top :12px;"><strong><b>E-WALLET</b></strong></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
        <li><a href ="Notify.php" style="font-size: 15px; margin-top :2px;color: white;"><button type="button" class="btn btn-success"><strong>NOTIFICATIONS</strong></button></a></li>

        <li><a href="#"><i class="far fa-user-circle" style="font-size: 20px; color: white;"></i><div class="caption">Hello<b> <?php user(); ?></b> </div></a></li>
      
        <li><a href="" style="font-size: 15px; margin-top:12px;color: white;" onclick="Win()">LOGOUT</a></li>
      <!-- <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    </ul>
  </div>
</nav>


<div class="container-fluid mid">
  <div class="col-sm-1"></div>

      <div class="navbar navbar-inverse try col-sm-10">
        <ul class="nav navbar-nav col-sm-8">
          <li><a href="pay.php"><i class="fab fa-amazon-pay"></i><div class="caption">PAY</div></a></li>
          <li><a href="Addmoney.php"><i class="fas fa-rupee-sign" ></i><div class="caption">ADD MONEY</div></a></li>
          <li><a href="Passbook.php"><i class="fas fa-book"></i><div class="caption">PASSBOOK</div></a></li>
          <li><a href="RequestPayment.php"><i class="far fa-arrow-alt-circle-down"></i><div class="caption">REQUEST PAYMENT</div></a></li>
          <li><a href="Profile.php"><i class="fas fa-user"></i><div class="caption">PROFILE</div></a></li>
        </ul>
        <ul>
          <div class ="col-sm-1"></div>
        </ul>
        <div class ="nav navbar-nav col-sm-3" style="margin-left: 100px;">
          <li><a href="Profile.php"  style="font-size: 28px; margin-left: 70px; margin-top: 28px;color: white;"><div class="caption"><strong  style="color: white;"><kbd><u>YOUR BALANCE</u></kbd><br><br><big style="color: #000000;"><?php bal();?></big></strong></div></a></li>
        </div>
      </div>
    <div class="container-fluid">
      <div class="col-md-12 inner textHead">

        <h4>Mobile Recharge or Bill Payment</h4>
      

        <form class="form-inline" action = "deductDth.php" method="POST">

          <input type="Number" name="" class="form-control input" placeholder="Mobile Number">
          
          <input type="text" name="" class="form-control input" placeholder="Operator">
          <input type="Number" name="Amnt" class="form-control input" placeholder="Amount">
          <div class="container">
              <input type="submit" class="btn btn-info btn-md" onclick ="alert('Mobile Recharge Done!');" value="Proceed to Recharge">
          </div>
        </form>
      </div>
  </div>
    <div class="container-fluid">
     <div class="col-md-12 inner textHead ">

      <h4>Services</h4>
     <!--  <form class="form-inline">
          <label class="radio-group">
              <label class="radio-inline"><input type="radio" name="optradio" value="Prepaid" checked>Prepaid</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="Postpaid">Postpaid</label>
          </label>LOGOUT
      </form> -->

      <form class="form-inline" action = "deductDth.php" method="POST">

        <!-- <input type="" name="" class="form-control input" placeholder="Mobile Number"> -->
        
        <!-- <input type="" name="" class="form-control input" placeholder="Operator"> -->
        <div class="col-sm-1 servi"> 
        <strong>DTH</strong>
        <br><br>                                         
           <div class="dropdown">
              <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Select Operator
              <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><img src="airtel.jpg" class="img-circle" alt="Cinque Terre" width="30" height="30"> 
                  <strong>Airtel Digital TV</strong></a></li>
                  <li><a href="#"><img src="d2h.jpg" class="img-circle" alt="Cinque Terre" width="30" height="30"> 
                  <strong>Videocon d2h</strong></a></li>                 
                  <li><a href="#"><img src="tatasky.png" class="img-circle" alt="Cinque Terre" width="30" height="30"> 
                  <strong>Tata Sky</strong></a></li>
                  <li><a href="#"><img src="dishtv.gif" class="img-circle" alt="Cinque Terre" width="30" height="30"> 
                  <strong>Dish TV</strong></a></li>
                </ul>
          </div>
        </div>
        <br><br>
        <input type="Number" name="Cid" class="form-control input" placeholder="Customer ID"> 
        <input type="Number" name="Amnt" class="form-control input" placeholder="Amount">
       <!--  <br>  -->
        <!-- <div class="btn-group col-sm-1"> -->
           <!--  <button type="button" class="form-control btn btn-default dropdown-toggle" data-toggle="dropdown">
                Select Plan <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">1 month</a></li>
                <li><a href="#">3 months</a></li>
                <li><a href="#">6 months</a></li>
                <li><a href="#">1 year</a></li>
            </ul> -->
            <div class="form-group col-sm-2" style="padding-right: 0px; padding-left: 0px; width: 175px;"><br>
                  <label for="sel1"><b>Plan:&nbsp;</b></label>
                      <select class="form-control" id="sel1">
                        <option>1 month</option>
                        <option>3 month</option>
                        <option>6 month</option>
                        <option>1 year</option>
                      </select>
                </div>
        <!-- </div>   -->
        <input type="submit" onclick ="alert('Recharge Done!');" class="btn btn-info btn-md" value="Recharge your DTH">
      </form>
    </div>
  </div>
</div>

<div class="container-fluid col-md-12 help1">
  <div class="col-sm-2" style="font-size: 40px; text-align: center; padding-top: 60px; padding-bottom: 60px; background-color: coral;">GUIDE</div>
  <div class="container-fluid col-md-10 help2" style="font-size: 15px; text-align:justify;"><p class="bg-info" style="margin-top: 15px;">
  <strong>PAY: </strong>This icon basically allows the user to transfer money to some other desired user.</p>
  <p class="bg-info">
  <strong>ADD MONEY: </strong>This icon is meant for adding a particular amount of money to the e-wallet account of the user,so that the user can carry out online payments efficiently.</p>
  <p class="bg-info">
  <strong>PASSBOOK: </strong>The user can view his bill payments and the total amount in his account. It displays the total amount credited in his account as well as the amount that was debited at any time.</p>
  <p class="bg-info">
  <strong>REQUEST FOR PAYMENT: </strong>The user can also request another user to transfer money into his e-wallet account. A notification will be sent to the other user showing the request to transfer money whenever he logins into his account.</p>
  <p class="bg-info">
  <strong>PROFILE: </strong> This icon displays the information related to the user . Also, the user can change his/her password besides the option to edit his profile.
  </p>
  </div>
</div>

  <div class="col-sm-12" style="text-align: center; margin-top: 60px;padding-top: 20px; padding-bottom: 20px; background-color: #262626;"><div class="col-sm-2"><strong style="color: white; font-size: 40px; ">CREDITS:</strong></div><div class="col-sm-10"><marquee behavior="scroll" direction="left" scrollamount="10" style=" font-size: 30px; padding-top: 6px; color: white;">This Project is developed  by Praveen Mishra, Hemant Panwar, Prerna Singh, Ramji Rathore.</marquee></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>
    