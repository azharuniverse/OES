<?php session_start();
 /*   $inactive = 60;
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
        { 
		session_destroy(); header("Location:/php_test/index.php"); 
	}
}
$_SESSION['timeout'] = time(); */
if (isset($_SESSION['instruction']) && $_SESSION['instruction']!=1): ?>
  <?php header('location:/php_test/index.php');
        exit();  ?>
<?php else: ?>
   <?php 
       unset($_SESSION['instruction']);
	   
   ?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<noscript><meta http-equiv="refresh" content="0; url=/php_test/javascriptError.php"></noscript>
<link rel="stylesheet" href="/php_test/css/reset.css"/>
<link rel="stylesheet" href="/php_test/css/common.css"  />
<link rel="stylesheet" href="/php_test/css/test.css"  />
<link rel="stylesheet" type="text/css" href="/php_test/css/countdown.css" />
<script type="text/javascript" src="/php_test/js/jquery.countdown.pack.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
		
	  switch_tabs($('.defaulttab'));
	 $('button#next').click(function(){
		if(!$('#nav-question a.selected').parent().is(':last-child')){
		 a=$('#nav-question a.selected').parent().next().children();
		switch_tabs(a);
		}
	 });
	 $('button#prev').click(function(){
		if(!$('#nav-question a.selected').parent().is(':first-child')){
		 a=$('#nav-question a.selected').parent().prev().children();
		switch_tabs(a);
		}
	 });
	   $('#nav-question a').click(function(){
		switch_tabs($(this));
	    });
 });
function switch_tabs(obj)
{
	$('.tab-content').hide();
	$('#nav-question a').removeClass("selected");
	var id = obj.attr("rel");
 
	$('#'+id).show();
	obj.addClass("selected");
}
$(document).ready(function() {
						   $('ul.tabs a').click(function(){
		switch_tabs($(this));
	});
						   switch_tabs($('.defaulttab'));
						   function switch_tabs(obj)
{
	$('.tab-content').hide();
	$('ul.tabs a').removeClass("selected");
	$('#'+obj.attr("rel")).show();
	obj.addClass("selected");
}
});
</script>
<script type="text/javascript">
$(function () {
$('#countdown').countdown({until: "+20m",
						  onExpiry: liftOff, layout: 
						'<div id="timer">'+
						       '<div id="timer_mins" class="timer_numbers">{mnn}</div>'+	
							    '<div id="timer_seperator" class="timer_numbers">{sep}</div>'+	
							  '<div id="timer_seconds" class="timer_numbers">{snn}</div>'+
							 					
						'</div>'
						  
});
function liftOff() { 
   window.location = "/php_test/end.php";
} 
/*$('#countdown').countdown({until:$.countdown.UTCDate(+330, 2012,  2 - 1, 18), format: 'DHMS', layout: 
						'<div id="timer">'+
						       '<div id="timer_mins" class="timer_numbers">{mnn}</div>'+	
							    '<div id="timer_seperator" class="timer_numbers">{sep}</div>'+	
							  '<div id="timer_seconds" class="timer_numbers">{snn}</div>'+
							 					
						'</div>'
						  
});*/
});
</script>
<title>Untitled Document</title>
</head>
<body>
<div id="header">
	<div id="countdown"></div><!--close countdown-->
</div>
   <div id="content_wrapper">
   <form action="/php_test/end.php" method="post" name="lastsubmmit" id="lastsubmit" > 
   <div id="index">
     <ul id="nav-question">
       <li><a href="#1" class="defaulttab" rel="tabs1" >01</a></li>
       <li><a href="#2" rel="tabs2" >02</a></li>
       <li><a href="#3" rel="tabs3" >03</a></li>
       <li><a href="#4" rel="tabs4" >04</a></li>
       <li><a href="#5" rel="tabs5">05</a></li>
       <li><a href="#6" rel="tabs6">06</a></li>
       <li><a href="#7" rel="tabs7">07</a></li>
       <li><a href="#8" rel="tabs8">08</a></li>
       <li><a href="#9" rel="tabs9">09</a></li>
       <li><a href="#10" rel="tabs10" >10</a></li>
       <li><a href="#11" rel="tabs11">11</a></li>
       <li><a href="#12" rel="tabs12">12</a></li>
       <li><a href="#13" rel="tabs13">13</a></li>
       <li><a href="#14" rel="tabs14">14</a></li>
       <li><a href="#15" rel="tabs15">15</a></li>
     </ul>
   </div>
  
   <div id="content_box">
      <p class="tab-content" id="tabs1">
        <span class="question"><?php echo $_SESSION['q1']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a1" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q1']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a1" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q1']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a1" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q1']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a1" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q1']['option4'] ; ?></label>
        </span>
      </p>
     <p class="tab-content" id="tabs2">
      <span class="question"><?php echo $_SESSION['q2']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a2" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q2']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a2" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q2']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a2" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q2']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a2" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q2']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs3">
      <span class="question"><?php echo $_SESSION['q3']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a3" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q3']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a3" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q3']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a3" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q3']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a3" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q3']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs4">
      <span class="question"><?php echo $_SESSION['q4']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a4" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q4']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a4" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q4']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a4" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q4']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a4" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q4']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs5">
      <span class="question"><?php echo $_SESSION['q5']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a5" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q5']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a5" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q5']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a5" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q5']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a5" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q5']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs6">
      <span class="question"><?php echo $_SESSION['q6']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a6" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q6']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a6" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q6']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a6" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q6']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a6" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q6']['option4'] ; ?></label>
        </span 
     ></p>
    <p class="tab-content" id="tabs7">
      <span class="question"><?php echo $_SESSION['q7']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a7" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q7']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a7" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q7']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a7" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q7']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a7" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q7']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs8">
      <span class="question"><?php echo $_SESSION['q8']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a8" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q8']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a8" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q8']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a8" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q8']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a8" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q8']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs9">
      <span class="question"><?php echo $_SESSION['q9']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a9" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q9']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a9" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q9']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a9" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q9']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a9" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q9']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs10">
      <span class="question"><?php echo $_SESSION['q10']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a10" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q10']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a10" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q10']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a10" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q10']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a10" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q10']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs11">
      <span class="question"><?php echo $_SESSION['q11']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a11" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q11']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a11" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q11']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a11" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q11']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a11" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q11']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs12">
      <span class="question"><?php echo $_SESSION['q12']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a12" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q12']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a12" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q12']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a12" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q12']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a12" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q12']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs13">
      <span class="question"><?php echo $_SESSION['q13']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a13" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q13']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a13" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q13']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a13" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q13']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a13" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q13']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs14">
      <span class="question"><?php echo $_SESSION['q14']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a14" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q14']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a14" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q14']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a14" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q14']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a14" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q14']['option4'] ; ?></label>
        </span 
     ></p>
     <p class="tab-content" id="tabs15">
      <span class="question"><?php echo $_SESSION['q15']['question'] ; ?>
        </span>
        <span class="option">
        <input class="radio" type="radio" name="a15" id="SubmitQuestion1" value="a"  />
        <label class="label" for="SubmitQuestion1"><?php echo $_SESSION['q15']['option1'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a15" id="SubmitQuestion2" value="b"  />
        <label class="label" for="SubmitQuestion2"><?php echo $_SESSION['q15']['option2'] ; ?></label>
        </span>
        <span class="option">
        <input class="radio"  type="radio" name="a15" id="SubmitQuestion3" value="c"  />
        <label class="label" for="SubmitQuestion3"><?php echo $_SESSION['q15']['option3'] ; ?></label>
        </span>
        <span class="option">
         <input class="radio"  type="radio" name="a15" id="SubmitQuestion4" value="d"  />
        <label class="label" for="SubmitQuestion4"><?php echo $_SESSION['q15']['option4'] ; ?></label>
        </span 
     ></p>
   </div>
   <ul id="nav">
      <li><button type="button" class="button" id="prev">Previous</button></li>
      <li><input type="submit" class="button" name="submit" value="Submit"/></li>
      <li><button type="button" class="button" id="next">Next</button></li>
   </ul>
   </form>
</div>
<div id="footer-notes">
<div id="footer-notes-inner">
				             <p class="copyright">&copy;2011 Robotics Club | &nbsp;<a href="http://www.ismu.ac.in/" target="_blank">ISM Dhanbad</a>.</p>
					         <p class="credit">Designed by:<a href="https://www.facebook.com/mdaliazhar" target="_blank"><i>MD. ALI AZHAR</i></a></p>
</div>
</div>
</body>
</html>
  <?php $_SESSION['test']=1; ?>
<?php endif; ?>