<?php session_start();
if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']!=1): ?>
  <?php header('location:/php_test/index.php');
        exit();  ?>
<?php else: ?>
   <?php unset($_SESSION['LoggedIn']); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<noscript><meta http-equiv="refresh" content="0; url=/php_test/javascriptError.php"></noscript>
<link rel="stylesheet" href="/php_test/css/reset.css"/>
<link rel="stylesheet" href="/php_test/css/common.css"  />
<link rel="stylesheet" href="/php_test/css/instruction.css" media="all"/>
<title>Untitled Document</title>
</head>
<body>
<div id="header"></div>
    <div id="main-wrapper">
      <div id="left-wrapper">
              <p><strong>Hello  </strong><?php echo $_SESSION['name']; ?></p>
              <div style="display:inline-block;margin:30px 0 0 25px"><img src="https://graph.facebook.com/<?php echo $_SESSION['user_session']['id']; ?>/picture?type=large" alt=""></div>
       </div>
     <div id="content_box">
          <h2>Instructions for the Test.</h2>
          <ul>
             <li>There are total 15 questions you have to answer.</li>
             <li>You must submit your answers within 25min Otherwise it will automatically get Submitted.</li>
             <li>You can edit your answer as many times you want.</li>
             <li>Any type of Malicious Activity is filtered such as XSS. If found, your IP will be blocked.</li>
             <li>Your result will be announced Later.</li>
          </ul>
          <form action="test.php" method="post">
          <input type="hidden" value="" />
          <input type="submit" value="Start Test"/>
          </form>
      </div>
      <div id="right-wrapper">
   
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
  <?php 
    $_SESSION['instruction']=1 ;
    require('/getquestions.php');
	$_SESSION['q1']=$q1;
	$_SESSION['q2']=$q2;
	$_SESSION['q3']=$q3;
	$_SESSION['q4']=$q4;
	$_SESSION['q5']=$q5;
	$_SESSION['q6']=$q6;
	$_SESSION['q7']=$q7;
	$_SESSION['q8']=$q8;
	$_SESSION['q9']=$q9;
	$_SESSION['q10']=$q10;
	$_SESSION['q11']=$q11;
	$_SESSION['q12']=$q12;
	$_SESSION['q13']=$q13;
	$_SESSION['q14']=$q14;
	$_SESSION['q15']=$q15;
	
  ?>
  
<?php endif; ?>