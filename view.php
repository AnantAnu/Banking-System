<?php
session_start();
include("connect.php");
$ssq=mysqli_query($success,"SELECT * from details");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Indian Bank</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--======================================================== =======================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background: url(images/bank-system.png) no-repeat ; background-size: 1600px 260px; ">

<div>
<h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
        style="color: #57b846; margin-left: 490px; margin-top:280px;">
       CUSTOMER DETAILS
    </h1>
</div>


    <!-- <form class="login100-form validate-form" action="" method="post"  >
                    <br>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <br>
                        <br>
						<input class="input100" type="number" name="sal" placeholder="Enter Monthly salary">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					
						<input class="input100" type="number" name="savings" placeholder="Enter Target savings">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn" style="margin-left: 250px;">
						<button name="save" class="login100-form-btn">
							Save
						</button>
					</div>
				</form> -->
    <style>
        @media screen and (min-width: 676px) {
            .modal-dialog {
                max-width: 400px;
                /* New width for default modal */
            }
        }

        .modal-footer {
            padding: 15px;
            text-align: right;
            border-top: 1px solid white;
        }

        .login100-form {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 3px 28px 3px 19px;
        }
    </style>

    <br><br><br>

  
    <div class="container">

  <div>
    
    <br><br><br>
    <?php
if (mysqli_num_rows($ssq) > 0) {
?>
  <table class="table">
  <thead>
  <tr style="color: red;">
    <th><b>Serial No.</b></th>
    <th><b>Name</b></th>
    <th><b>Email-Id</b></th>
    <th><b>Balance</b></th>
    <th><b>Contact</b></th>
    <th><b>Customer Account-ID</b></th>
  </tr>
</thead>
<?php
$i=0;
while($row1 = mysqli_fetch_array($ssq)) {
?>
<tbody>
<tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo $row1["cname"]; ?></td>
    <td><?php echo $row1["email"]; ?></td>
    <td><?php echo $row1["balance"]; ?></td>
    <td><?php echo $row1["contact"]; ?></td>
    <td><?php echo $row1["cid"]; ?></td>
</tr>
</tbody>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
