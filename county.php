<?php
include('includes/connect.php');

  $id=$_POST['county_id'];
  $name=$_POST['county_name'];
  $href=$_POST['href'];
 

if(isset($_POST['submit']))
  

{
  if(!isset($id) ||!isset($name) || !isset($href))
  {
    echo "something is wrong";

  }
  else
  {
    $sql="INSERT into counties(county_id,county_name,href)values('$id','$name','$href')"; 
    $qury=mysql_query($sql);
    if(!$qury)
    { 
	     echo mysql_error();
    }
    else
    {
	     echo "Details successfully inserted in database";
	     
    }
  }
}
?>
