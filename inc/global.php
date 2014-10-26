<?php 
	
	/* Array of all users data that exist in the database */
   function getUsers() {
       $sql = "SELECT * FROM accounts";
       $ressource = mysqli_query($sql); 
       
	   
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
	function getUser($id_user) {
       $sql = "SELECT * FROM accounts WHERE userid = " . $id_user;
       $ressource = mysqli_query($sql); 
	   return $ressource;
	}
	
	/* Array of all blogposts in the database */
	function getBlogPosts() {

		$sql = "SELECT * FROM blogposts";
		$ressource = mysqli_query($sql);
		
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

	/* Array of single blogpost in the database */
	function getBlogPost($id_post) {

		$sql = "SELECT * FROM blogposts WHERE postid = " . $id_post;
		$ressource = mysqli_query($sql);
	   	return $ressource;
	}
?>