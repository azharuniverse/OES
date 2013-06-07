<?php session_start();
if (isset($_SESSION['test']) && $_SESSION['test']!=1): ?>
  <?php header('location:/php_test/index.php');
        exit();  ?>
<?php else: ?>
  
   <?php 
     unset($_SESSION['test']);
     require('/dbconnect.php');
  if(isset($_POST['submit']) && $_POST['submit']== "Submit"){
/*		  
 $rs1 = mysql_query(" SELECT answer FROM c WHERE ID =".$_SESSION['q4']['ID']." OR ID=".$_SESSION['q10']['ID']." OR ID=".$_SESSION['q12']['ID']);
 $rs2 = mysql_query(" SELECT answer FROM difficult WHERE ID =".$_SESSION['q9']['ID']." OR ID=".$_SESSION['q14']['ID']);
 $rs3 = mysql_query(" SELECT answer FROM gk WHERE ID =".$_SESSION['q2']['ID']." OR ID=".$_SESSION['q5']['ID']." OR ID=".$_SESSION['q7']['ID']." OR ID=".$_SESSION['q13']['ID']);
 $rs4 = mysql_query(" SELECT answer FROM misc WHERE ID =".$_SESSION['q1']['ID']." OR ID=".$_SESSION['q3']['ID']." OR ID=".$_SESSION['q6']['ID']." OR ID=".$_SESSION['q8']['ID']." OR ID=".$_SESSION['q11']['ID']." OR ID=".$_SESSION['q15']['ID']);
		 
/*		while($row = mysql_fetch_array($rs1))
  {
  echo $row['answer'];
  echo "<br />";
  } 
  while($row = mysql_fetch_array($rs2))
  {
  echo $row['answer'];
  echo "<br />";
  }
  while($row = mysql_fetch_array($rs3))
  {
  echo $row['answer'];
  echo "<br />";
  }
  	while($row = mysql_fetch_array($rs4))
  {
  echo $row['answer'];
  echo "<br />";
  } */
		     
	       $true=0;
		   $a1="*";$a2="*";$a3="*";$a4="*";$a5="*";$a6="*";$a7="*";$a8="*";$a9="*";$a10="*";$a11="*";$a12="*";$a13="*";$a14="*";$a15="*";
		  if(!empty($_POST['a1'])){ $a1=$_POST['a1'];if($a1==$_SESSION['q1']['answer']){$true+=1;}}
		  if(!empty($_POST['a2'])){ $a2=$_POST['a2'];if($a2==$_SESSION['q2']['answer']){$true+=1;}}
		  if(!empty($_POST['a3'])){ $a3=$_POST['a3'];if($a3==$_SESSION['q3']['answer']){$true+=1;}}
		if(!empty($_POST['a4'])){ $a4=$_POST['a4'];if($a1==$_SESSION['q4']['answer']){$true+=1;}}
		if(!empty($_POST['a5'])){ $a5=$_POST['a5'];if($a5==$_SESSION['q5']['answer']){$true+=1;}}
		if(!empty($_POST['a6'])){ $a6=$_POST['a6'];if($a6==$_SESSION['q6']['answer']){$true+=1;}}
		if(!empty($_POST['a7'])){ $a7=$_POST['a7'];if($a7==$_SESSION['q7']['answer']){$true+=1;}}
		if(!empty($_POST['a8'])){ $a8=$_POST['a8'];if($a8==$_SESSION['q8']['answer']){$true+=1;}}
		if(!empty($_POST['a9'])){ $a9=$_POST['a9'];if($a9==$_SESSION['q9']['answer']){$true+=1;}}
		if(!empty($_POST['a10'])){ $a10=$_POST['a10'];if($a10==$_SESSION['q10']['answer']){$true+=1;}}
		if(!empty($_POST['a11'])){ $a11=$_POST['a11'];if($a11==$_SESSION['q11']['answer']){$true+=1;}}
		if(!empty($_POST['a12'])){ $a12=$_POST['a12'];if($a12==$_SESSION['q12']['answer']){$true+=1;}}
		if(!empty($_POST['a13'])){ $a13=$_POST['a13'];if($a13==$_SESSION['q13']['answer']){$true+=1;}}
		if(!empty($_POST['a14'])){ $a14=$_POST['a14'];if($a14==$_SESSION['q14']['answer']){$true+=1;}}
		if(!empty($_POST['a15'])){ $a15=$_POST['a15'];if($a15==$_SESSION['q15']['answer']){$true+=1;}}
	
	     $ans=$a1.$a2.$a3.$a4.$a5.$a6.$a7.$a8.$a9.$a10.$a11.$a12.$a13.$a14.$a15;
		 
	   						  
		 $query = sprintf("INSERT INTO users (marks,answers)
            VALUES( '%d','%s')",
            mysql_real_escape_string($true),
            mysql_real_escape_string($ans));
	?>
    <?php 	 
    if(!mysql_query($query))
            {
            echo 'Query failed '.mysql_error();
           
            }
      
		}
		 ?>
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
              <p><strong> </strong></p>
              <div style="display:inline-block;margin:30px 0 0 25px"></div>
       </div>
     <div id="content_box">
          <h2><?php echo $_SESSION['name']; ?>,<strong>Your Test Completed Successfully  </strong></h2>
          <ul style="list-style-type:none;">
          </ul>
         
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
  
<?php endif; ?>