<?php
	
	
if(isset($_REQUEST['login']))
{
	$email= $_REQUEST['email'];
	$password= $_REQUEST['password'];
	if (empty($email)==true || empty($password)==true)
	{
		header('location: index.php');
		//echo "unsuccessful";
	}
	else
	{
		$data = simplexml_load_file('logininfo.xml');
	     for ($i=0; $i < count($data->user); $i++) 
	     {
	         if ($data->user[$i]->email == $email && $data->user[$i]->password == $password) 
	         {
		          $userinfo=$data->user[$i];
		          if($userinfo->user_type=="Admin")
		         {
			         $datas = simplexml_load_file('employee.xml');
                     for ($j=0; $j < count($datas->employee); $j++)
                     { 
    	                 if ($datas->employee[$j]->email == $email) 
    	                 {

    		                 $employeeinfo=$datas->employee[$j];
    		                 //setcookie("username",serialize($employeeinfo) , time()+3600, "/");
    		                 //setcookie("username", $employeeinfo, time()+3600, "/");
    		                 setcookie("username", $email, time()+3600, "/");
			                 header('location: dashboard.php');

    	                 }
                     }
    
		         }
		        else
		         {
			     header('location: others.php');
		         }
	        }
         }
		
		echo "invalid email or password";
	}
}
else{header('location: index.php');}
?>