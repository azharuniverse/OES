<?php
  echo "<p id=\"server_reply\" >" ;
if ( $method === POST ) {
	$inputs = filter_input_array( INPUT_POST, $filter );
	if(empty($inputs['fb']) && $user==null){
		echo "Facebook not verified.";
		goto a;
	}
	if(empty($inputs['name'])){
		echo "Name was empty or invalid";
		goto a;
	}
	else{
		$name = ucfirst(trim(htmlspecialchars(mysql_real_escape_string($inputs['name']))));
		$result = mysql_query('SELECT * FROM users WHERE name="'.$name.'"');
		if(mysql_num_rows($result)>=1){
			echo "Name already exists";
			goto a;
		}
	}
	if(empty($inputs['email'])){
		echo "Email was empty or invalid";
		goto a;
	}
	else{
		$email = ucfirst(trim(htmlspecialchars(mysql_real_escape_string($inputs['email']))));
		$result = mysql_query('SELECT * FROM users WHERE email="'.$email.'"');
		if(mysql_num_rows($result)>=1){
			echo "Email already exists";
			goto a;
		}
	}
	if(empty($inputs['mobile'])){
		echo "Mobile was not 10 digits.";
		goto a;
	}
	else{
		$result=mysql_query('SELECT * FROM users WHERE mobile="'.$inputs['mobile'].'"');
		if(mysql_num_rows($result)>=1){
			echo "Mobile already exists";
			goto a;
		}
	}
	if(empty($inputs['admn'])){
		echo "Invalid Admission No.";
		goto a;
	}
	else{
		$admn=$_POST['year'].$inputs['admn'];
		$result=mysql_query('SELECT * FROM users WHERE admn="'.$admn.'"');
		if(mysql_num_rows($result)>=1){
			echo "admn already exists";
			goto a;
		}
	}
	if(!filter_var($user_profile['email'], FILTER_VALIDATE_EMAIL))
	  {
	     $fbemail="gmail@rajnikant.com";
	  }
	else
	  {
	     $fbemail=$user_profile['email'];
	  }
    // Build our query here and check each variable with mysql_real_escape_string()
    $query = sprintf("INSERT INTO users (fbid,name,fbname,email,fbemail,admn,mobile)
            VALUES( '%s','%s','%s', '%s','%s','%s','%s')",
            mysql_real_escape_string($user_profile['id']),
            mysql_real_escape_string($name),
            mysql_real_escape_string($user_profile['name']),
			mysql_real_escape_string($email),
            mysql_real_escape_string($fbemail),
	        mysql_real_escape_string($admn),
            mysql_real_escape_string($inputs['mobile']));

    // run the query
    if(!mysql_query($query))
            {
            echo 'Query failed '.mysql_error();
            goto a;
            }
      else
            {
        // if all is well we mail off a little thank you email. We know it is
        // safe to do so because we have validated the email address.
	/*	    $to='md_ali_azhar_81@yahoo.com';
            $subject = 'rooboism Test';
            $msg= 'name='.$user_profile['name'].'  admn='.$admn.'   mobile='.$inputs['mobile'];
			$from= $email;
			$headers="From:".$from;
    if(!mail($to,$subject,$msg,$headers))
            {
            echo 'Unable to send confirmation mail';
            }
        else
            {
            echo 'Thank you for your submission, a confirmation email has bee sent to '.$userEmail;
            }*/
			$_SESSION['LoggedIn']=1;
			$_SESSION['name']=$name;
			header( 'location:/php_test/instruction.php' );
	        exit();
        }
		
    }
 a: echo "</p>";

?>