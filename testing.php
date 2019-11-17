<?php 
//$data = simplexml_load_string($xml);
/*$data = simplexml_load_file('employee.xml');
	//print_r($data);
    
	echo "<br>".$data->employee[0]->address;
     $email="rejwan.ahmed@live.com";
    echo $data->employee[0]->name;
    echo $data->employee[1]->name;
    for ($i=0; $i < count($data->employee); $i++) { 
    	if ($data->employee[$i]->email == $email) {

    		$employeeinfo=$data->employee[$i];
    	}
    }
    print_r($employeeinfo);
    
    $email="rejwan.ahmed@live.com";
    $password="rejwan";
    $data = simplexml_load_file('logininfo.xml');
    print_r($data);
    echo $data->user[0]->password;
    echo count($data->user);
    for ($i=0; $i < count($data->user); $i++) { 
    	if ($data->user[$i]->email == $email && $data->user[$i]->password == $password) {

    		$userinfo=$data->user[$i];
    	}
    }
    echo $userinfo->email;
    */
   
    
    $email="rejwan.ahmed@live.com";
    $password="rejwan";
    $data = simplexml_load_file('logininfo.xml');
    $datas = simplexml_load_file('employee.xml');
    print_r($data);
    echo "<br>";
    print_r($datas);
	     for ($i=0; $i < count($data->user); $i++) 
	     {
	         if ($data->user[$i]->email == $email && $data->user[$i]->password == $password) 
	         {
		          $userinfo=$data->user[$i];
		          echo "matched";

	        }
         }
         if($userinfo->user_type=="Admin")
		 {
			       
                     for ($j=0; $j < count($datas->employee); $j++)
                     { 
    	                 if ($datas->employee[$j]->email == $userinfo->email) 
    	                 {
    	                 	

    		                 $employeeinfo=$datas->employee[$j];
    		                 //setcookie("username", $employeeinfo, time()+3600, "/");
			                 //header('location: dashboard.php');
			                 echo $employeeinfo->email;

    	                 }
                     }
    
		 }
		 else
		 {
		 	echo "<br>others";
			 //header('location: others.php');
		 }

?>