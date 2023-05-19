<?php  
// define variables to empty values  
// $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
// $name = $email = $mobileno = $gender = $website = $agree = "";  
  $email='';
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if (empty($_POST["email"])) {  
        http_response_code(404);
        print json_encode(["status"=>"F","message"=>"Email is required"]);

        // $emailErr = "Email is required"; 
        
} else {  
        $email =$_POST["email"];  
        // check that the e-mail address is well-formed  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            $emailErr = "Invalid email format";  

        }  
        else{
            print 'success';
        }
 }  
}