<?php
session_start();
include("connect.php");
$q= mysqli_query($success,"SELECT * from details");
$rowcount=mysqli_num_rows($q);
$ssq=mysqli_query($success,"SELECT * from history");
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

<body style="background: url(images/bg-01.jpg) no-repeat ; background-size: 1600px 260px; ">




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

    <br><br><br><br><br><br>

    <button style="margin-left:590px; margin-top:20px; " type="button" data-toggle="modal" data-target="#myModal"
        class="login100-form-btn" data-dismiss="modal">TRANSACT</button>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button style="margin-left: -200px;" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="margin-left: 130px; color: red"><b>TRANSACT</b></h4>
                </div>
                <div class="modal-body">
                    <form class="login100-form validate-form" action="" method="post">
                        <br>

                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">

                            <input class="input100" type="text" name="st" list="deveename" placeholder="Send To">
                            <span class="focus-input100"></span>

                            <datalist id="deveename">
                                <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($q);
                            
                    ?>
                                <option value="<?php echo ' '.$row['cname'].' ('. $row['cid'].')' ?>">
                                    <?php
                     }
                     ?>

                            </datalist>
                        </div>

                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">

                            <input class="input100" type="text" name="df" list="deveename" placeholder="Debit From">
                            <span class="focus-input100"></span>

                            <datalist id="deveename">
                                <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($q);
                            
                    ?>
                                <option value="<?php echo ' '.$row['cname'].' ('. $row['cid'].')' ?>">
                                    <?php
                     }
                     ?>

                            </datalist>
                        </div>

                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">

                            <input class="input100" type="number" name="amt" placeholder="Enter amount">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">

                            <input class="input100" type="password" name="sid" placeholder="Enter Employee Secure ID">
                            <span class="focus-input100"></span>
                        </div>




                        <div class="modal-footer">

                            <input style="margin-left:65px;" type="submit" value="Transact" name="sub1"
                                class="login100-form-btn">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <br><br>
    <div class="container">
    <div class="icon" style="color: #57b846; margin-left: px; margin-top:75px;">
                                    <img src="images/his.png" alt="" height="38px" width="38px">
                                </div>
  <div>
    <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
        style="color: #57b846; margin-left: 50px; margin-top:-35px;">
        Transaction History
    </h2>
    <br><br><br>
    <?php
if (mysqli_num_rows($ssq) > 0) {
?>
  <table class="table">
  <thead>
  <tr style="color: red;">
    <th><b>Serial No.</b></th>
    <th><b>Sender Name</b></th>
    <th><b>Reciever Name</b></th>
    <th><b>Amount</b></th>
    <th><b>Date</b></th>
  </tr>
</thead>
<?php
$i=0;
while($row1 = mysqli_fetch_array($ssq)) {
?>
<tbody>
<tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo $row1["sender"]; ?></td>
    <td><?php echo $row1["reciever"]; ?></td>
    <td><?php echo $row1["amount"]; ?></td>
    <td><?php echo $row1["date"]; ?></td>
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
<?php

include("connect.php");
if(isset($_POST['sub1']))
{
    $es=$_POST['st'];
    $er=$_POST['df'];
    $n = preg_replace('/\D/', '',$_POST['st']);  //This is to retrieve only the integer part in the given string
    $m = preg_replace('/\D/', '',$_POST['df']);
    $e = $_POST['amt'];
    $sq= mysqli_query($success,"SELECT * from details where cid=$n or cid=$m");
    $rowcount=mysqli_num_rows($sq);
    for($i=1;$i<=$rowcount;$i++)
    {
        $row=mysqli_fetch_array($sq);
        if($row['cid'] == $n)
        {
            
            $abt=$row['balance']+$e;
        }
        else{
            if($row['balance']<$e)
            {
                echo '<script>alert("Insufficient Balance")</script>'; 
                echo '<script>window.location.href = "transact.php"</script>'; 
                exit;
            }
            $abu=$row['balance']-$e;
        }
    }
    $a = $_POST['sid'];
    if($a == 1234)
    {
        $queryy= mysqli_query($success,"UPDATE details SET balance='$abt' WHERE cid=$n;");
        $qr= mysqli_query($success,"UPDATE details SET balance='$abu' WHERE cid=$m;");
        $qe= mysqli_query($success,"INSERT INTO history (sender,reciever,amount) VALUES ('$er','$es','$e')");
        echo '<script>alert("Payment Successful !")</script>'; 
        echo '<script>window.location.href = "transact.php"</script>'; 

    }
    else{
        echo '<script>alert("Incorrect Employee Secure ID")</script>'; 
        echo '<script>window.location.href = "transact.php"</script>';
    }
}
?>