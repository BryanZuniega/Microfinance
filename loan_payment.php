<?php 
require('./session.php');
include 'config.php';
require('./position_restriction.php');
error_reporting(0);

if($_SESSION['position'] == 'Finance Manager'){
	echo "<script>window.location.href = './savings.php'</script>";
}else{

}

if (isset($_POST["save"])){

	
			
	
		$months = mysqli_real_escape_string($conn, $_POST["months"]);
		$interest = mysqli_real_escape_string($conn, $_POST["interest"]);
		$amount = mysqli_real_escape_string($conn, $_POST["amount"]);
		$monthlypayment = mysqli_real_escape_string($conn, $_POST["monthlypayment"]);
		$totalpayment = mysqli_real_escape_string($conn, $_POST["totalpayment"]);
		$planid = mysqli_real_escape_string($conn, $_POST["planid"]);
		
		$check_loanplans = mysqli_num_rows(mysqli_query($conn, "SELECT loanplans FROM loanplans WHERE loanplans ='$loanplans'"));

		if ($check_loanplans > 0) {
				echo "<script>alert('Loan Plans already exist');</script>";
		} else{
			$sql = "INSERT INTO loanplans (months, interest, amount, monthlypayment, totalpayment, planid) VALUES ('$months', '$interest', '$amount', '$monthlypayment', '$totalpayment', '$planid')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Add successfully');</script>";
				echo "<script>window.location.href = './loan_payment.php'</script>";
			}else{
				echo "<script>alert('Failed');</script>";
			}
		} 
	}



		
        include_once("connection.php");
        $conn = connection();
    
        // $id = $_GET['loanplansid'];
        
        $sql = "SELECT * FROM loanpayment order by id desc";
        $result = $conn->query($sql) or die ($conn->error);
        $row = $result->fetch_assoc();

 //         if(isset($_GET['id'])){
	// 		$id = $_GET['id'];
			
	// 		$sql = "DELETE FROM loanpayment WHERE id = '$id'";
	// 		$update = mysqli_query($conn, $sql);

	// 		if ($update) {
			
	// 		header("location:./loan_payment.php");
	// 	}else{
	// 		echo "<script>alert('Failed');</script>";
	// 	}
	// }

	 if (isset($_GET["search"])){  

       $search = $_GET['search'];
         $check_record = "SELECT * FROM loanpayment where lastname LIKE '$search' || firstname LIKE '$search' || middlename LIKE '$search' || status LIKE '$search' || loantype LIKE '$search' || loandate LIKE '$search' || id LIKE'$search' || barangay LIKE '$search' || municipality LIKE '$search' || province LIKE '$search' || userid LIKE '$search' order by lastname asc";
   		 $sqlvalidate = mysqli_query($conn, $check_record);

    if (mysqli_num_rows($sqlvalidate) == 0){
    	echo "<script>alert('No existing data');</script>";
    	echo "<script>window.location.href = './loan_payment.php'</script>";
    }else{
        
        $search = $_GET['search'];

         $sql = "SELECT * FROM loanpayment where lastname LIKE '$search' || firstname LIKE '$search' || middlename LIKE '$search' || userid LIKE '$search' || status LIKE '$search' || loantype LIKE '$search' || loandate LIKE '$search' || id LIKE '$search' || barangay LIKE '$search' || municipality LIKE '$search' || province LIKE '$search' order by lastname asc";
                $result = $conn->query($sql) or die ($conn->error);
                $row = $result->fetch_assoc();


            }

            	}






 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Microfinance</title>
	<meta name="viewport" content="window=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	
	<link rel="icon" href="asset/icons/logo1.jpeg" type="image/jpg" size="16x16"/>

</head>
<body>
	<!-- formobile -->
	<div class="leftdiv1" id="leftdiv1">
		
			<img id="backbtn" src="asset/icons/icons8-menu-24.PNG" width="30" height="30">
		
		<div class="logo1">
			<img id="menuimg" src="asset/icons/microfinance.PNG" width="65%" height="100%">
		</div>
		<div class="btn1" id="btn1">
			<a href="dashboard.php">
					<img id="menuimg" src="asset/icons/4136060.PNG" width="25" height="25">
					<label>Dashboard</label>
			</a>
			<a href="members.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/1989232.PNG" width="25" height="25">
					<label>Members</label>
			</a>
			<a href="loans.php">
					<img id="menuimg" src="asset/icons/2043684.PNG" width="25" height="25">
					<label>Add Loans</label>
			</a>
			<!-- <a href="loan_plans.php">
					<img id="menuimg" src="asset/icons/985040.PNG" width="27" height="27">
					<label>Loan Plans</label>
			</a> -->
			<a href="loan_plans.php">
					<img id="menuimg" src="asset/icons/4779371.PNG" width="25" height="25">
					<label>Loan Plans</label>
			</a>
			<a href="Loan_types.php">
					<img id="menuimg" src="asset/icons/4556485.PNG" width="25" height="25">
					<label>Loan Types</label>
			</a>
			<a href="loan_payment.php" style="background-color: #239cdf;">
					<img id="menuimg" src="asset/icons/4836525.PNG" width="25" height="25">
					<label>Loan Payment</label>
			</a>
			<a href="loan_transaction.php">
					<img id="menuimg" src="asset/icons/4836503.PNG" width="25" height="25">
					<label>Loan Transaction</label>
			</a>
			<a href="savings.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/7634045.PNG" width="25" height="25">
					<label>Savings</label>
			</a>
			<a href="deposit_record.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/4641433.PNG" width="25" height="25">
					<label>Deposit Record</label>
			</a>
			<a href="withdraw_record.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/4265284.PNG" width="25" height="25">
					<label>Withdraws Record</label>
			</a>
			<a href="administrator.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/4641420.PNG" width="21" height="21">
					<label>Administrator</label>
			</a>
			<a id="dashboardlogout1">
					<img id="menuimg" src="asset/icons/2010497.PNG" width="21" height="21">
					<label>Sign-out</label>
			</a>
		</div>
	</div>
	<!-- for desktop -->
	<div class="leftdiv" id="leftdiv">
		<div class="logo">
			<img id="menuimg" src="asset/icons/microfinance.PNG" width="65%" height="100%">
		</div>
		<div class="btn" id="btn">
			<a href="dashboard.php">
					<img id="menuimg" src="asset/icons/4136060.PNG" width="25" height="25">
					<label>Dashboard</label>
			</a>
			<a href="members.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/1989232.PNG" width="25" height="25">
					<label>Members</label>
			</a>
			<a href="loans.php">
					<img id="menuimg" src="asset/icons/2043684.PNG" width="25" height="25">
					<label>Add Loans</label>
			</a>
			<!-- <a href="loan_plans.php">
					<img id="menuimg" src="asset/icons/985040.PNG" width="27" height="27">
					<label>Loan Plans</label>
			</a> -->
			<a href="loan_plans.php">
					<img id="menuimg" src="asset/icons/4779371.PNG" width="25" height="25">
					<label>Loan Plans</label>
			</a>
			<a href="loan_types.php">
					<img id="menuimg" src="asset/icons/4556485.PNG" width="25" height="25">
					<label>Loan Types</label>
			</a>
			<a href="loan_payment.php" style="background-color: #239cdf;">
					<img id="menuimg" src="asset/icons/4836525.PNG" width="25" height="25">
					<label>Loan Payment</label>
			</a>
			<a href="loan_transaction.php">
					<img id="menuimg" src="asset/icons/4836503.PNG" width="25" height="25">
					<label>Loan Transaction</label>
			</a>
			<a href="savings.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/7634045.PNG" width="25" height="25">
					<label>Savings</label>
			</a>
			<a href="deposit_record.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/4641433.PNG" width="25" height="25">
					<label>Deposit Record</label>
			</a>
			<a href="withdraw_record.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/4265284.PNG" width="25" height="25">
					<label>Withdraws Record</label>
			</a>
			<a href="administrator.php" style="display :<?php echo $_SESSION['loanofficer'];?>;">
					<img id="menuimg" src="asset/icons/4641420.PNG" width="21" height="21">
					<label>Administrator</label>
			</a>
			<a id="dashboardlogout2">
					<img id="menuimg" src="asset/icons/2010497.PNG" width="21" height="21">
					<label>Sign-out</label>
			</a>
		</div>
	</div>
	<!-- content -->
	<div class="rightdiv" id="rightdiv">

		<div class="header">
			<img id="menu" src="asset/icons/icons8-menu-24.PNG" width="30" height="30">
			<div class="admin">
				<div class="adminimg">
					<img id="imgadmin" src="asset/icons/4641420.PNG" width="30" height="30">
				</div>
				<div class="myadminlabel">
				<div class="myadmin">
					<!-- <label id="adminlabel">Welcome! </label> -->
					<label id="adminname">
						<?php echo $_SESSION["lname"];?> <?php echo $_SESSION["fname"];?>
						<?php echo $_SESSION["mname"];?>
					</label>	
				</div>
				<div class="myadmin">
					<label id="adminlabel1"><?php echo $_SESSION["position"];?> </label>
						
				</div>
				</div>
			</div>
		</div>
		<div class="header1">
<!-- 			<img id="menuimg" src="asset/icons/4836525.PNG" width="27" height="27"> -->
			<label>Loan Payment</label>
		</div>
		<!-- <div class="search-add">
			
			<button id="add">Add Loan Plans</button>
		</div> -->
		<div class="tablebody">
		<div class="search-add" id="search-add-refreshbtn">
			<div class="refresh-add" id="refresh-add">
			<form method="GET" action="loan_payment.php" autocomplete="off">
				<input type="text" name="search" value="<?php echo $_GET['search'];?>" required>
				<button type="submit">Search</button>
			</form>
			</div>
			<div class="" id="refresh-add">
				<a href="loan_payment.php" id="refresh"><!-- <img id="menuimg" src="asset/icons/574166.PNG" width="23" height="23"> --><label>Refresh List</label></a>
				<form method="GET" action="./export_loan_payment.php" id="export">
					<input type="hidden" name="search_export" id="search" value="<?php echo $_GET['search'];?>">
					<button type="submit" id="export_button">Export to Excel</button>
				</form>
			</div>
			<?php 
						$host =  "localhost";
				        $username ="root";
				        $password ="";
				        $db = "microfinance1";

				        $conn =  new mysqli($host, $username, $password, $db);

				        if($conn->connect_error){
				            echo $conn->connect_error;

				        }
				        	 $search = $_GET['search'];
				        	 $blank = "";
				        	 if($search == $blank){
							$members = "SELECT * FROM loanpayment";
							$members_run = mysqli_query($conn, $members);

							if($total = mysqli_num_rows($members_run))
							{
								echo '<label id="label1">Result : '.$total.'</label>';
							}else{
								echo '<label id="label1">Result : 0</label>';
							}
						} else{
							$search = $_GET['search'];
							$members = "SELECT * FROM loanpayment where lastname LIKE '$search' || firstname LIKE '$search' || middlename LIKE '$search' || status LIKE '$search' || loantype LIKE '$search' || loandate LIKE '$search' || id LIKE'$search' || barangay LIKE '$search' || municipality LIKE '$search' || province LIKE '$search' || userid LIKE '$search' order by lastname asc";
							$members_run = mysqli_query($conn, $members);

							if($total = mysqli_num_rows($members_run))
							{
								echo '<label id="label1">Result : '.$total.'</label>';
							}else{
								echo '<label id="label1">Result : 0</label>';
							}
						}

					?>	
		</div>
		<div class="tablebody1" id="tablebody11">
		<div class="table" id="table1">
			<div class="tableheader">
				<div class="tablename" id="tablename" style="width: 20%;" >
					<label>Loan Date</label >
				</div>
				<div class="tablename" id="tablename" style="width: 15%;" >
					<label>Loan ID</label >
				</div>
				<div class="tablename" id="tablename" style="width: 15%;" >
					<label>User ID</label >
				</div>
				<div class="tablename" id="tablename" style="width: 50%;" >
					<label>Name</label >
				</div>
				<div class="tablename" id="tablename" style="width: 50%;" >
					<label>Loan Plan</label >
				</div>
				<div class="tablename" id="tablename" style="width: 20%;" >
					<label>Balance</label >
				</div>
				<div class="tablename" id="tablename" style="width: 25%;" >
					<label>Status</label >
				</div>
				<div class="tablename" id="tablename" style="width: 30%;" >
					<label>Action</label >
				</div>
				

			</div>
			 <?php do{ ?>
			<div class="list">
				
					<div class="tablename" id="tablename" style="width: 20%;">
						<div class="tablelist">
							<label id="label"><?php echo $row['loandate']; ?></label>
						</div>	
					</div>
					<div class="tablename" id="tablename" style="width: 15%;">
						<div class="tablelist">
							<label id="label"><?php echo $row['id']; ?></label>
						</div>	
					</div>
					<div class="tablename" id="tablename" style="width: 15%;">
						<div class="tablelist">
							<label id="label"><?php echo $row['userid']; ?></label>
						</div>	
					</div>
					<div class="tablename" id="tablename" style="width: 50%;">
						<div class="tablelist">
							<label id="label"><?php echo $row['lastname']; ?>, <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?></label>
						</div>	
					</div>
					<div class="tablename" id="tablename" style="width: 50%;">
						<div class="tablelist">
							<label><?php echo $row['months']; ?> Months, <?php echo $row['interest']; ?>% Interest, ₱ <?php echo $row['amount']; ?></label>
						</div>
						
					</div>
					<div class="tablename" id="tablename" style="width: 20%;">
						<div class="tablelist">
							<label id="label">₱ <?php echo $row['totalbalance']; ?></label>
						</div>	
					</div>					
					<div class="tablename" id="tablename" style="width: 25%;">
						<div class="tablelist" style="">
							<label id="label2"><?php echo $row['status']; ?></label>
						</div>
						
					</div>
					<div class="tablename" id="tablename" style="width: 30%;">
						<form>
							<a  href="user_loan_payment.php?id=<?php echo $row['id'];?>" name="edit"><img src="asset/icons/7628917.PNG" width="25" height="20"></a>
							<a target="_blank" href="loan_payment_print.php?id=<?php echo $row['id'];?>" name="edit"><img src="asset/icons/6285148.PNG" width="30" height="25"></a>
           					<a  href="edit_co-maker_details.php?id=<?php echo $row['id'];?>" name="edit"><img src="asset/icons/7628917.PNG" width="25" height="20"></a>
           					<!-- <a  href=" ?id=<?php echo $row['id'];?>" name="delete"><img src="asset/icons/7247454.PNG" width="25" height="20"></a> -->
           				</form>
           				
					</div>
					
				
			</div>
			<?php }while ($row = $result->fetch_assoc()) ?>
		</div>
	</div>

		<!-- table for mobileview -->
		<div class="tablebody1" id="tablebody112">
		<div class="table" id="table2">
			<?php
			 	include_once("connection.php");
			    $conn = connection();

			    $id = $_GET['loanplansid'];
			    
			    $sql = "SELECT * FROM loanpayment order by lastname desc";
			    $result = $conn->query($sql) or die ($conn->error);
			    $row = $result->fetch_assoc();

			    if (isset($_GET["search"])){  

		        $id = $_GET['id'];
		        
		        $search = $_GET['search'];

		         $sql = "SELECT * FROM loanpayment where lastname LIKE '%$search%' || firstname LIKE '%$search%' || middlename LIKE '%$search%' || loandate LIKE '%$search%' || userid LIKE '%$search%' || status LIKE '%$search%' || loantype LIKE '%$search%' || loandate LIKE '%$search%' || id LIKE '%$search%' order by lastname asc";
		                $result = $conn->query($sql) or die ($conn->error);
		                $row = $result->fetch_assoc();


            }

			 	?>
			<div class="tableheader">
				
				<div class="tablename" id="tablename" style="width: 70%;" >
					<label>Loan Details</label >
				</div>
				
				<div class="tablename" id="tablename" style="width: 30%;" >
					<label>Action</label >
				</div>
				

			</div>
			 <?php do{ ?>

			<div class="list">

					
					<div class="tablename" id="tablename" style="width: 70%;">
						
						<div class="tablelist" style="margin-top: 10px;">
							<label id="label1">ID :</label ><label id="label2"><?php echo $row['userid']; ?></label>
						</div>
						<div class="tablelist">
							<label id="label1">Loan ID :</label ><label id="label2"><?php echo $row['id']; ?></label>
						</div>
						<div class="tablelist">
							<label id="label1">Name :</label ><label id="label2"><?php echo $row['lastname']; ?>, <?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?></label>
						</div>
						
						<div class="tablelist">
							<label id="label1">Loan Date :</label ><label id="label2"><?php echo $row['loandate']; ?></label>
						</div>
						<div class="tablelist">
							<label id="label1">Loan Type :</label ><label id="label2"><?php echo $row['loantype']; ?></label>
						</div>
						<div class="tablelist">
							<label id="label1">Months :</label ><label id="label2"><?php echo $row['months'];?> month/s</label>
						</div>
						<div class="tablelist">
							<label id="label1">Interest :</label ><label id="label2"><?php echo $row['interest'];?> %</label>
						</div>
						<div class="tablelist">
							<label id="label1">Amount :</label ><label id="label2">₱ <?php echo $row['amount']; ?></label>
						</div>
						<div class="tablelist" >
							<label id="label1">Total Balance :</label ><label id="label2">₱ <?php echo $row['totalbalance']; ?></label>
						</div>
						<div class="tablelist" style="margin-bottom: 10px;">
							<label id="label1">Status :</label ><label id="label2"><?php echo $row['status']; ?></label>
						</div>
					</div>
					
					
					<div class="tablename" id="tablename" style="width: 30%;">
						<form>
							<a  href="user_loan_payment.php?id=<?php echo $row['id'];?>" name="edit"><img src="asset/icons/7628917.PNG" width="30" height="25"></a>
							<a target="_blank" href="loan_payment_print.php?id=<?php echo $row['id'];?>" name="edit"><img src="asset/icons/6285148.PNG" width="40" height="30"></a>
							<a  href="edit_co-maker_details.php?id=<?php echo $row['id'];?>" name="edit"><img src="asset/icons/7628917.PNG" width="25" height="20"></a>
           					<!-- <a  href=" ?id=<?php echo $row['id'];?>" name="delete"><img src="asset/icons/7247454.PNG" width="30" height="25"></a> -->
           				</form>
           				
					</div>
					
				
			</div>
			<?php }while ($row = $result->fetch_assoc()) ?>
		</div>
	</div>
	</div>
</div>
	<!-- Add loan plans -->
		<div class="addform" id="addform">
			<div class="close">
				<label>Add Loan Plans</label>
			</div>
			<form  method="POST" action="" autocomplete="off">
				<div class="forminput" style="flex-direction: column;">
					<div class="input">
						<label>Amount :</label>
						<input type="number" name="amount" id="amount" required>
					</div>
					<div class="input">
						<label>Plan (Months) :</label>
						<input type="number" name="months" id="months" required>
					</div>
					<div class="input">
						<label>Interest(%) :</label>
						<input type="number" name="interest" id="interest" required>
					</div>
					<div class="input">
						<button type="button" id="calculate" name="calculate">Calculate</button>
					</div>
					<div class="input">
						<label>Monthly Payment :</label>
						<input type="text" name="monthlypayment" id="monthlypayment">
					</div>
					<div class="input">
						<label>Monthly Payment :</label>
						<input type="number" name="totalpayment" id="totalpayment" required>
					</div>
					<div class="input">
						
						<input type="hidden" name="planid" id="ami">
					</div>
				</div>
					
				<div class="savebtn">
					<button type="submit" name="save">Save</button>
					<button type="button" id="close" name="save">Cancel</button>
				</div>


			</form>
		</div>

</body>
<div class="out" id="out">
	<!-- <div class="outheader">
		<label>Sign-Out</label>
	</div> -->
	<div class="out1">
		<label>Are you sure you want to Sign-out ??</label>
	</div>
	<div class="outbtn">
		<a href="sign-out.php"><label>Sign-out</label></a>
		<button id="no"><label>Cancel</label></button>
	</div>
	
</div>
<script type="text/javascript">
	
	var leftdiv = document.getElementById("leftdiv");
	var leftdiv1 = document.getElementById("leftdiv1");
	var rightdiv = document.getElementById("rightdiv");
	var dashboardlogout2 = document.getElementById("dashboardlogout2");
	var dashboardlogout1 = document.getElementById("dashboardlogout1");
	var out = document.getElementById("out");
	var no = document.getElementById("no");
	dashboardlogout2.onclick=function(){
		out.style.display="flex";
		leftdiv.style="user-select: none";
		leftdiv.style="pointer-events: none";
		leftdiv.style.filter="blur(5px)";
		leftdiv1.style="user-select: none";
		leftdiv1.style="pointer-events: none";
		leftdiv1.style.filter="blur(5px)";
		
		rightdiv.style="user-select: none";
		rightdiv.style="pointer-events: none";
		rightdiv.style.filter="blur(5px)";

	}
	dashboardlogout1.onclick=function(){
		out.style.display="flex";
		leftdiv.style="user-select: none";
		leftdiv.style="pointer-events: none";
		leftdiv.style.filter="blur(5px)";
		leftdiv1.style="user-select: none";
		leftdiv1.style="pointer-events: none";
		leftdiv1.style.filter="blur(5px)";
		
		rightdiv.style="user-select: none";
		rightdiv.style="pointer-events: none";
		rightdiv.style.filter="blur(5px)";
	}
	no.onclick=function(){
		out.style.display="none";
		leftdiv.style="user-select: all";
		leftdiv.style="pointer-events: all";
		leftdiv.style.filter="blur(0px)";
		leftdiv1.style="user-select: all";
		leftdiv1.style="pointer-events: all";
		leftdiv1.style.filter="blur(0px)";
		rightdiv.style.filter="blur(0px)";
		rightdiv.style.filter="blur(0px)";
		rightdiv.style="user-select: all";
		rightdiv.style="pointer-events: all";
	}

</script>
<script src="script.js"></script>

</html>
<style type="text/css">
#label1{
	margin: auto;
	margin-right: 20px;
	font-size: 12px;
	font-weight: bold;
	color: gray;
}

	.addform{
		width: 30%;
	}
	.addform .forminput{
		gap: 10px;
	}
	.addform form .forminput .input input, .addform form .forminput .input label{
		margin: auto;
		margin-left: 15px;
		margin-bottom: 5px;
	}
	.addform form .forminput .input button{
		margin: auto;
		width: 100px;
		height: 30px;
		cursor: pointer;
		border: none;
		border-radius: 3px;
		background-color: #1671b9;
		color: white;
	}
	.addform form .forminput .input button:focus{
		outline: none;
	}
	.table{
		
		display: flex;

	}
	#table1{
		display: flex;
	}
	#table2{
		display: none;
	}
	.table .tableheader{

	}
	.rightdiv .table .list{
		display: flex;
		flex-direction: row;
		/*border: 1px solid red;*/
		height: auto;
		width: 100%;

	}
	.table .list .tablename{

		height: auto;
		display: flex;
		flex-direction: column;
		/*border: 1px solid red;*/
		
	}
	.table .list .tablename .tablelist{
		padding: 0;
		width: 100%;
		/*height: 25px;*/
		margin: auto;
		
		display: flex;
		flex-direction: row;
		
		
		/*border: 1px solid black;*/
	}
	.table .list .tablename .tablelist label,.tableheader .tablename label{
		margin: auto;
		margin-left: 10%;
		font-size: 11px;
		text-transform: capitalize;
	}
	
	.rightdiv .table .list .tablename form{
		display: flex;
		margin: auto;
		height: auto;
		width: auto;
		gap: 20px;

		
	}
	.rightdiv .table .list .tablename form a{
		display: flex;
		margin: auto;

		border: none;
		
		
	}
	.rightdiv .table .list .tablename form a img{
		display: flex;
		margin: auto;
		width: 20px;
		
		
	}
	#tablebody112{
		display: none;
	}
	@media screen and (max-width: 720px){
		.addform{
		width: 96%;
	}
	.table{
		
		
	}
	#table1{
		display: none;
	}
	#table2{
		display: flex;
	}
	
	.table .list .tablename .tablelist{
		
		height: 25px;
		/*border: 1px solid black;*/
		display: flex;

	}.table .list .tablename .tablelist #label2{
		margin: auto;
		margin-left: 10px;
		margin-right: 0;
		/*font-weight: bold;*/
		font-size: 12.5px;

	}
	.table .list .tablename .tablelist #label1{
		margin: auto;
		margin-left: 15px;
		margin-right: 0;
	
	}
	#tablebody11{
		display: none;
	}
	#tablebody112{
		display: flex;
	}.tablebody1{
		overflow-x: hidden;
	}

		#label1{
		display: none;
	}
	}

</style>