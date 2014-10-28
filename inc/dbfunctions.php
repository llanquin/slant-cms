<?php 

	/* Get array with all users in database */
	function getUsers($con) {
		$sql = "SELECT * FROM accounts ORDER BY userid ASC";
		$res = $con->query($sql);
       
		$counter = 0;
		while($row = $res->fetch_assoc()){
			$users[$counter] = [
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
		return $users;
	} 
	
	/* Get user with specific id */
	function getUserById($con, $id_user) {
		$sql = "SELECT * FROM accounts WHERE userid = " . $id_user;
		return $con->query($sql)->fetch_assoc();
	}
	
	function getUserByName($con, $username) {
		$sql = "SELECT * FROM accounts WHERE username = " . $username;
		return $con->query($sql)->fetch_assoc();
	}
	
	/* Get array with all blogposts in database */
	function getBlogPosts($con) {
		$sql = "SELECT * FROM blogposts ORDER BY postid DESC";
		$res = $con->query($sql);
		
		$counter = 0;
		while($row = $res->fetch_assoc()) {
			$blogposts[$counter] = [
				'postid' => $row['postid'],
				'title' => $row['title'],
				'content' => $row['content'],
				'userid' => $row['userid'],
				'datetime' => $row['datetime'],
				'category' => $row['category']
			];
			$counter++;
		}
		return $blogposts;
	}

	/* Get blogpost with specific id */
	function getBlogPost($con, $id_post) {
		$sql = "SELECT * FROM blogposts WHERE postid = " . $id_post;
		return $con->query($con, $sql)->fetch_assoc();
	}
?>
