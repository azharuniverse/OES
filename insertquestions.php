<?php 
   require('/dbconnect.php');
   if(isset($_POST['submit']) && $_POST['submit']== "submit")
  {
    $question = $_POST['question'];
    $a = $_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$answer=$_POST['answer'];
	$group=$_POST['group'];
  
      $query = sprintf("INSERT INTO ".$group." (question,option1,option2,option3,option4,answer)
            VALUES( '%s','%s','%s', '%s','%s','%s')",
            mysql_real_escape_string($question),
            mysql_real_escape_string($a),
            mysql_real_escape_string($b),
			mysql_real_escape_string($c),
            mysql_real_escape_string($d),
	        mysql_real_escape_string($answer));
    if(!mysql_query($query))
            {
            echo 'Query failed '.mysql_error();
           
            }
      else
            {
				echo'submitted';
			}
  }
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#form1 strong {
	font-size: x-large;
	vertical-align: middle;
}
#form1 strong {
	color: #CCF;
	vertical-align: middle;
}
#apDiv1 {
	position:absolute;
	width:623px;
	height:624px;
	z-index:1;
	left: 40px;
	top: 7px;
}
#apDiv2 {
	position:absolute;
	width:193px;
	height:39px;
	z-index:1;
	left: 13px;
	top: 118px;
	font-size: 30px;
}
#apDiv3 {
	position:absolute;
	width:383px;
	height:264px;
	z-index:2;
	left: 221px;
	top: 4px;
}
#apDiv4 {
	position:absolute;
	width:605px;
	height:50px;
	z-index:3;
	left: 16px;
	top: 509px;
}
#apDiv5 {
	position:absolute;
	width:45px;
	height:36px;
	z-index:1;
	left: 42px;
	top: 0px;
	font-size: xx-large;
	color: #350000;
}
#apDiv6 {
	position:absolute;
	width:502px;
	height:38px;
	z-index:2;
	left: 103px;
	top: 5px;
}
#apDiv7 {
	position:absolute;
	width:605px;
	height:50px;
	z-index:3;
	left: 15px;
	top: 346px;
}
#apDiv8 {	position:absolute;
	width:45px;
	height:36px;
	z-index:1;
	left: 42px;
	top: 0px;
	font-size: xx-large;
	color: #350000;
}
#apDiv9 {	position:absolute;
	width:502px;
	height:38px;
	z-index:2;
	left: 103px;
	top: 5px;
}
#apDiv10 {	position:absolute;
	width:605px;
	height:50px;
	z-index:3;
	left: 13px;
	top: 327px;
}
#apDiv11 {	position:absolute;
	width:45px;
	height:36px;
	z-index:1;
	left: 42px;
	top: 0px;
	font-size: xx-large;
	color: #350000;
}
#apDiv12 {	position:absolute;
	width:502px;
	height:38px;
	z-index:2;
	left: 103px;
	top: 5px;
}
#apDiv13 {
	position:absolute;
	width:605px;
	height:50px;
	z-index:3;
	left: 14px;
	top: 407px;
}
#apDiv14 {	position:absolute;
	width:45px;
	height:36px;
	z-index:1;
	left: 42px;
	top: 0px;
	font-size: xx-large;
	color: #350000;
}
#apDiv15 {	position:absolute;
	width:502px;
	height:38px;
	z-index:2;
	left: 103px;
	top: 5px;
}
#apDiv16 {
	position:absolute;
	width:605px;
	height:50px;
	z-index:3;
	left: 16px;
	top: 459px;
}
#apDiv17 {	position:absolute;
	width:45px;
	height:36px;
	z-index:1;
	left: 42px;
	top: 0px;
	font-size: xx-large;
	color: #350000;
}
#apDiv18 {	position:absolute;
	width:502px;
	height:38px;
	z-index:2;
	left: 103px;
	top: 5px;
}
#apDiv19 {
	position:absolute;
	width:464px;
	height:473px;
	z-index:2;
	left: 728px;
	top: 11px;
}
#apDiv20 {
	position:absolute;
	width:112px;
	height:25px;
	z-index:1;
	left: 207px;
	top: 10px;
}
#apDiv21 {
	position:absolute;
	width:128px;
	height:35px;
	z-index:2;
	left: 322px;
	top: 9px;
}
#apDiv22 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 119px;
	top: 72px;
}
#apDiv23 {
	position:absolute;
	width:113px;
	height:31px;
	z-index:3;
	left: 250px;
	top: 74px;
}
#apDiv24 {
	position:absolute;
	width:128px;
	height:37px;
	z-index:4;
	left: 321px;
	top: 70px;
}
#apDiv25 {
	position:absolute;
	width:64px;
	height:26px;
	z-index:5;
	left: 365px;
	top: 196px;
	font-size: xx-large;
}
#apDiv26 {
	position:absolute;
	width:95px;
	height:40px;
	z-index:6;
	left: 243px;
	top: 194px;
	font-size: xx-large;
}
-->
</style>
</head>

<body>
  <form name="question" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div id="apDiv1">
  <div id="apDiv2">Question</div>
  <div id="apDiv16">
    <div id="apDiv17">c:</div>
    <div id="apDiv18">
    
          <input name="c" type="text" id="textfield5" size="82" />
    </div>
  </div>
  <div id="apDiv13">
    <div id="apDiv14">b:</div>
    <div id="apDiv15">
     
          <input name="b" type="text" id="textfield4" size="82" />
       
    </div>
  </div>
  <div id="apDiv7">
    <div id="apDiv8">a:</div>
    <div id="apDiv9">
     
          <input name="a" type="text" id="textfield2" size="82" />
     
    </div>
  </div>
  <div id="apDiv4">
    <div id="apDiv5">d:</div>
    <div id="apDiv6">
     
          <input name="d" type="text" id="textfield" size="82" />
     
    </div>
  </div>
  <div id="apDiv3">
    
        <textarea name="question" id="textarea" cols="60" rows="16"></textarea>
     
  </div>
</div>
<div id="apDiv19">
  <div id="apDiv20">Question Group:</div>
  <div id="apDiv21">
   
        <select name="group" size="1" id="select">
          <option>c</option>
          <option>difficult</option>
          <option>gk</option>
          <option selected="selected">misc</option>
        </select>
    
  </div>
  <div id="apDiv23">Answer:</div>
  <div id="apDiv24">
   
        <select name="answer" size="1" id="select2">
          <option>a</option>
          <option>b</option>
          <option>c</option>
          <option>d</option>
        </select>
    
  </div>
  <div id="apDiv25"><input type="submit" name="submit" value="submit" /></div>
  <div id="apDiv26"><input type="reset" value="reset" /></div>
</div>
</form>
</body>
</html>