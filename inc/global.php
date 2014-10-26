<?php 
   function getUser() {
       $array = array();
       $sql = "SELECT * FROM accounts";
       $ressource = mysql_query($sql); 
       
	   
	   $counter = 0;
       while($row = mysqli_fetch_assoc($ressource)) {
           $array[$counter] = array(
			   'userid' => $row['userid'],
			   'username' => $row['username'],
			   'password' => $row['password'],
			   'email' => $row['email'],
			   'displayname' => $row['displayname'],
			   'role' => $row['role'],
			   'lastlogin' => $row['lastlogin'],
			   'lastip' => $row['lastip']
           )
			   $counter++;
       }
	   return $array;
   } 
?>