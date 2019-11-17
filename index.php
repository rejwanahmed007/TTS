<?php
    
    if(isset($_COOKIE['username']))
    {
        header('location: dashboard.php');
    }
    else
    {
?>
<html>
    <head>
        <title>Train Ticketing System</title>
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
        <div style="background-image: url('/images/beauty16.jpg'); opacity: .9; background-size: 100% 100% ; width: 100%; height:300px;">
            <center>
            <form method="POST" style="height: 200px;width: 300px" action="authentication.php">
                <fieldset>
                    <legend><font size="10" color="DarkSlateGray "><b>Login</b></font></legend>
                
                <table border="0">
                    <tr>
                        <td><font color="black" style="font-size: 20px"><b>Email</b></font></td>
                        <td><input type="text" name="email" style="font-size: 15px" placeholder="example@live.com"></td>
                    </tr>
                    <tr>
                        <td><font color="black" style="font-size: 20px"><b>Password</b></font></td>
                        
                        <td><input type="password" name="password" style="font-size: 15px" placeholder="********"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="forgotpassword.php"><b>Forgot Password?</b></a>
                        </td>
                    </tr>
                </table>
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="login" value="Login" style="font-size: 15px"></td>
                        <td><a href="register.php">Register</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        
        </center>
    </div>
    <div>
        <form>
            <table>
                <tr>
                    <td>
                        <img src="/images/tts2.png" style="width: 100% ; height: 250px; top: 500px">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php       
    }
?>