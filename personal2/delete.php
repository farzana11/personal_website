<?php



 include('connect-db.php');
 

 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM facebook WHERE id=$id")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: view.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: view.php");
 }
 
?>
