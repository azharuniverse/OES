<?php 
 // header_remove("Expires"); 
//header_remove("Cache-Control"); 
//header_remove("Pragma"); 
//header_remove("Last-Modified"); 
 header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
  set_time_limit ( 120 );
  require '/src/facebook.php';
  require '/dbconnect.php';
 // $path = $_SERVER['DOCUMENT_ROOT'];
 //  $path1 =$path. "/src/facebook.php";
 //  $path2=$path."/formsubmitcheck.php";
  // require($path1);
 //  require('/formsubmitcheck.php');
 
 
     define("POST", "POST");
$method = $_SERVER['REQUEST_METHOD'];
$filter = array(
    'name'         =>FILTER_SANITIZE_STRIPPED,
	'email'          => FILTER_VALIDATE_EMAIL,
    'mobile'    => array('filter'  => FILTER_VALIDATE_REGEXP,
                              'options' => array('regexp' => '/^\d{10}$/')),

     'admn'    => array('filter'   => FILTER_VALIDATE_REGEXP,
                              'options' => array('regexp' => '/^\d{4}$/')),
    'fb' => array( 'filter' => FILTER_VALIDATE_BOOLEAN ),
	
);
     $facebook = new Facebook(array(
  'appId' => '386525968028327',
  'secret' => 'cbcf569bf76f7d095d51bb5b4b37e719',
  'cookie'	=> false
));
$user = $facebook->getUser();
if ($user) {
  try {
    $user_profile = $facebook->api('/me');
	$_SESSION['user_session']=$user_profile;
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl(
									 
				array(
                'scope'         => 'email',
            )		
						
		);
}
?>
     <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="01 Jan 1970 00:00:00 GMT">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<noscript><meta http-equiv="refresh" content="0; url=/php_test/javascriptError.php"></noscript>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script src="js/formvalidate.js"></script>
<link rel="stylesheet" href="css/reset.css"  />
<link rel="stylesheet" href="css/common.css"  />
<link rel="stylesheet" href="css/index.css"  />
<title>Untitled Document</title>
</head>
<body>
 <div id="header"></div>
 <div id="main">
     <div id="main_right">
         <h1>FILL UP FOR THE TEST</h1>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="commentForm" >
		<fieldset>
            <div class="label-wrapper">
			<label for="name">Name:</label>
			<input class="input_box required" type="text" maxlength="26" id="name"  name="name" size="25" placeholder="Enter your full name" />
            </div>
           <div class="label-wrapper">
			<label for="email">E-Mail:</label>
			<input class="input_box required email"  type="text" id="email" name="email" size="25" maxlength="26"  placeholder="Enter your email address" />
            </div>
             <div class="label-wrapper">
            <label for="admn">ADMN:</label>
             <select id="admn1" name="year">
               <option>2009JE</option>
               <option>2010JE</option>
               <option selected="selected">2011JE</option>
             </select>
			<input class="input_box required" maxlength="6"  type="text" style="width:160px;margin-left:10px;" id="admn" name="admn" placeholder="* * * *"/>
            </div>
            <div class="label-wrapper">
            <label for="mobile">Mobile:</label>
			<input class="input_box required" maxlength="10"  type="text" id="mobile" name="mobile" placeholder="Enter your mobile number." />
            </div>
            <div class="label-wrapper" style="margin-top:7px;">
          
             <?php if ($user): ?>  
                <label for="fb" style="vertical-align:top;">Logout:</label>
                <a href="<?php echo $logoutUrl; ?>" ><img src="img/fb.png" alt="Connect With facebook" /></a>
                <input class="input_box required" type="hidden" id="fb" name="fb" value="<?php echo $user_profile['verified']; ?>" />
            <?php else: ?> 
                <label for="fb" style="vertical-align:top;">Login:</label>
                <a href="<?php echo $loginUrl; ?>" ><img src="img/fb.png" alt="Connect With facebook"  /></a>
                <input class="input_box required" type="hidden" id="fb" name="fb" value="<?php echo $user_profile['verified']; ?> ?>" />
            <?php endif ?>
          <!--  <label for="fb" id="fberror" >Verify your Identity</label> -->
            </div>
            <input type="submit" class="submit" value="Proceed" />

		</fieldset>
	</form>
     <?php require '/formsubmit.php'; ?>
     </div>
        <div id="quote">
   <p> 
   
   <img src="/php_test/img/robot.png" border="0" alt=""/>
    Machines smart enough to do anything for us will probably also be able to do anything with us: go to dinner, own property, compete for sexual    partners. 
    They might even have passionate opinions about politics or, like the robots on Battlestar Galactica, even religious beliefs. Some     have worried about robot rebellions,but with so many tort lawyers around to apply the brakes, the bigger question is this: Will humanoid     machines enrich our social lives, or will they be a new kind of television, destroying our relationships with real humans?
   <h4>~FRED HAPGOOD, Discover Magazine, June 2008</h4>
   </p>
 </div>
 </div>
     <div id="footer-notes">
				       <div id="footer-notes-inner">
				             <p class="copyright">&copy;2011 Robotics Club | &nbsp;<a href="http://www.ismu.ac.in/" target="_blank">ISM Dhanbad</a>.</p>
					         <p class="credit"><a href="https://www.facebook.com/mdaliazhar" target="_blank">Designed by: <i>MD. ALI AZHAR</i></a></p>
				       </div>
  </div>
</body>
</html>