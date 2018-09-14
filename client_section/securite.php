<?php 
  session_start();
  if(!(isset($_SESSION['NIV0'])))
  {
    header("location:index-2.php");
    exit;
  }
  else
  {
  	if ($_SESSION['NIV0'] != 1) 
  	{
  		header("location:index-2.php");
    	exit;
  	}
  	
  }
 ?>