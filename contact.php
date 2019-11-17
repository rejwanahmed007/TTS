<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
		<?php
		if(isset($_COOKIE['username'])){
		?>
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="/images/tts.png" height="95px" width="300px"></a></td>
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
		<?php
		}else
		{
		?>
		<div style="background-color: rgb(51,153,153); background-size: 100% 100% ; width: 100%; height:100px;">
			<table  style="border-color: rgb(1,1,1); ">
				<tr>
					<td width="100%"><a href="index.php"><img src="/images/tts.png" height="95px" width="300px"></a></td>
					<td width="10%"><a href="index.php"><h3>Home</h3></td></a>
					<td></td>
					<td width="10%"><a href="register.php"><h3>Register</h3></td></a>
					<td></td>
					<td width="300px%"><a href="verify_ticket.php"><h3>Verify_Ticket</h3></td></a>
					<td></td>
                    <td width="10%"><a href="farequery.php"><h3>Fare_Query</h3></td></a>
					<td></td>
					<td width="10%"><a href="contact.php"><h3>Contact_Us</h3></td></a>
				</tr>
			</table>
			
		</div>
		<?php }
		?>
		<div>
        <form>
            <table>
                <tr>
                    <td>
                        <img src="/images/tts3.png" style="width: 100% ; height: 600px; top: 500px">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>