<?php 

	/* Array of all users data that exist in the database */
   function getUsers() {
       $sql = "SELECT * FROM accounts";
       $ressource = mysql_query($sql); 
       
	   
	   $counter = 0;
       while($row = mysqli_fetch_assoc($ressource)) {
           $array[$counter] = [
			   'userid' => $row['userid'],
			   'username' => $row['username'],
			   'password' => $row['password'],
			   'email' => $row['email'],
			   'displayname' => $row['displayname'],
			   'role' => $row['role'],
			   'lastlogin' => $row['lastlogin'],
			   'lastip' => $row['lastip']
		   ];
		   $counter++;
       }
	   return $array;
   } 
	
	/* Array of a single user data */
	function getUser($id) {
       $sql = "SELECT * FROM accounts WHERE userid = " . $id;
       $ressource = mysql_query($sql); 
	   return $ressource;
	}
	
	/* Array of all blogposts in the database */
	function getBlogPost() {

		$sql = "SELECT * FROM blogposts";
		$ressource = mysql_query($sql);
		
		$counter = 0;
		while($row = mysqli_fetch_assoc($ressource)) {
           $array[$counter] = [
			   'postid' => $row['postid'],
			   'title' => $row['title'],
			   'content' => $row['content'],
			   'userid' => $row['userid'],
			   'datetime' => $row['datetime'],
			   'category' => $row['category']
		   ];
		   $counter++;
       }
	   return $array;
	}
?>