<?php
	
	if(isset($_COOKIE['username'])){
		
		//$employeeinfo=unserialize($_COOKIE['username']);
		$datas = simplexml_load_file('employee.xml');
		for ($j=0; $j < count($datas->employee); $j++)
		{
			if ($datas->employee[$j]->email == $_COOKIE['username'])
			{
				$GLOBALS['$employeeinfo'] = $datas->employee[$j];
			}
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
	</head>
	<body>
		<style>
			
			a:link {
			color: green;
			background-color: transparent;
			text-decoration: none;
			}
			a:visited {
			color: black;
			background-color: transparent;
			text-decoration: none;
			}
			a:hover {
			color: grey;
			background-color: transparent;
			text-decoration: none;
			}
			a:active {
			color: yellow;
			background-color: transparent;
			text-decoration: none;
			}
		</style>
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="../images/tts.png" height="95px" width="300px"></a></td>
					<td width="10%"><a href="dashboard.php"><h3>Dashboard</h3></td></a>
					<td></td>
					
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify_Ticket</h3></td></a>
					<td></td>
					<td width="10%"><a href="farequery.php"><h3>Fare_Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact_Us</h3></td></a>
					<td></td>
					
					<td width="10%"><a href="logout.php"><h3>Logout</h3></td></a>
				</tr>
			</table>
			
		</div>
		<div>
			<img src="../images/tts4.png" style="width: 100%">
		</div>
		<div>
			<table border="1.0" style="width: 100%; background-color: rgb(143, 215, 240)">
				<tr style="height: 30px">
					<td width="20%" ><a href="updateprofile.php" >Update Personal Info</a></td>
				    <td  width="15%"><a href="changepassword.php">Change Password</a></td>
				    <td width="15%"><a href="updatefair.php">Update Fare Info</a></td>
				    <td width="15%"><a href="updatetrain.php">Update Train Info</a></td>
				    <td width="15%"><a href="financial.php">Financial Assessment</a></td>
				    <td width="20%"><a href="feedback.php">Passenger Feedback</a></td>
				</tr>
			</table>
		</div>
		
		<div style="background-color:	rgb(143, 215, 240); background-size: 100% 100% ; width: 100%; height:250px;">
			<fieldset>
				<legend><font size="5" color="DarkSlateGray "><b>Personal Information</b></font></legend>
				<table border="0">
					<tr>
						<td width="150px">Name  </td>
						<td><?php echo $GLOBALS['$employeeinfo']->name;?></td>
					</tr>
					<tr>
						<td  width="150px">Employee ID  </td>
						<td><?php echo $GLOBALS['$employeeinfo']->employee_id;?></td>
					</tr>
					<tr>
						<td  width="150px">Email ID  </td>
						<td><?php echo $GLOBALS['$employeeinfo']->email;?></td>
					</tr>
					<tr>
						<td  width="150px">Mobile No. </td>
						<td><?php echo $GLOBALS['$employeeinfo']->mobile;?></td>
					</tr>
					<tr>
						<td  width="150px">Designation </td>
						<td><?php echo $GLOBALS['$employeeinfo']->designation;?></td>
					</tr>
					<tr>
						<td  width="150px">Hired Date </td>
						<td><?php echo $GLOBALS['$employeeinfo']->hiredate;?></td>
					</tr>
					<tr>
						<td  width="150px">Salary </td>
						<td><?php echo $GLOBALS['$employeeinfo']->salary;?></td>
					</tr>
					<tr>
						<td  width="150px">Commission </td>
						<td><?php echo $GLOBALS['$employeeinfo']->commission;?></td>
					</tr>
					<tr>
						<td  width="150px">Address </td>
						<td><?php echo $GLOBALS['$employeeinfo']->address;?></td>
					</tr>
				</table>
			</fieldset>
			
		</div>
		
		
	</body>
</html>
<?php
}else{
header('location: index.php');
}
?>