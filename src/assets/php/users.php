<?php
class user{
	private function connection()
	  {
	  	include("db.php");
	  	if($con)
	  	{
	  		return $con;
	  	}
	  	echo " Bağlantı Başarısız";
	  }
	public function signIn($user)
	{
		$con=user::connection();
		$sql="SELECT * FROM users WHERE email='".$user['mail']."' AND password='".$user['pass']."'";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		echo '<p class="alert alert-success"><strong>Success...</strong></p>';
	 		$row=$result->fetch_assoc();
	 		$_SESSION['user']=$row;
	 		$_SESSION['isLogin']=1;
	 	}
	 	else
	 	{
	 		$_SESSION['isLogin']=0;
	 		echo '<p class="alert alert-danger"><strong>Check your mail and password</strong></p>';
	 	}
	}
	public function refreshUser($id){
		$con=user::connection();
		$sql="SELECT * FROM users WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row;
	 	}
	}
	public function add($user)
	{
		$con=user::connection();
		$sql="INSERT INTO users (name, surname, email, phone, password, department) VALUES ('".$user['name']."', '".$user['surname']."', '".$user['mail']."', '".$user['phone']."', '".$user['password']."', '".$user['department']."')";
		$result=$con->query($sql);
		if($result)
		{
			echo '<p class="alert alert-success"><strong>Success...</strong></p>';
		}
		else
		{
			echo '<p class="alert alert-danger"><strong>fail...</strong></p>';
		}
	}

	public function addCompany($user)
	{
		$con=company::connection();
		$sql="INSERT INTO companies(name) VALUES ('".$company['name']."')";

		$con=user::connection();
		$sql="INSERT INTO users(email, password) VALUES ('".$user['email']."','".$user['password']."')";

		$result=$con->query($sql);
		if($reuslt)
		{
			echo'<p class="alert alert-success"><strong>Adding Successfull...</strong></p>';
		}
		else
		{
			echo'<p class="alert alert-success"><strong>Adding Failed...</strong></p>';
		}


	}

	public function getUserType($id){
		$con=user::connection();
		$sql="SELECT * FROM user_types WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['name'];
	 	}
	}

	//update Part
	public function update($user){
		$con=user::connection();
		#$image = addslashes(file_get_contents($_FILES['image']));
		$sql='UPDATE users SET name="'.$user['name'].'",surname="'.$user['surname'].'",email="'.$user['mail'].'",phone="'.$user['phone'].'",address="'.$user['address'].'",city_id="'.$user['city'].'",department="'.$user['department'].'", image="'.$user['image'].'" WHERE id='.$user['id'];
		$result=$con->query($sql);
		if($result)
		{
			echo '<p class="alert alert-success"><strong>Success...</strong></p>';
		}
		else
		{
			echo '<p class="alert alert-danger"><strong>Fail...</strong></p>';
		}

	}
	public function updatePassword($user){
		$con=user::connection();
		$sql='UPDATE users SET password="'.$user['password'].'" WHERE id='.$user['id'];
		$result=$con->query($sql);
		if($result)
		{
			echo '<p class="alert alert-success"><strong>Success...</strong></p>';
		}
		else
		{
			echo '<p class="alert alert-danger"><strong>fail...</strong></p>';
		}

	}
	public function get4Company($id){
		$con=user::connection();
		$sql="SELECT * FROM users WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['name'].' '.$row['surname'];
	 	}
	}
	public function get4Department($id){
		$con=user::connection();
		$sql="SELECT * FROM users WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['department'];
	 	}

	}

	public function insert($user)
	{
			$con=user::connection();
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$query = "INSERT INTO users (image) VALUES('".$user['image']."')";  
			$qry = mysqli_query($db, $query);
			if($result)
			{
				echo '<script>alert("Success")</script>';
			}
			else
			{
				echo '<script>alert("Failed")</script>';
			}
	}

	public function getImage($id)
	{
		$con=user::connection();
		$sql="SELECT * FROM users WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['image'];
	 	}
		
	}


	public function getUser()
	{
		$i=1;
		$con=user::connection();
		$sql="SELECT * FROM users WHERE user_type=0";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		while($row=$result->fetch_assoc())
	 		{
	 			echo '
	 					<tr>
							<td>'.$i.'</td>
							<td>'.$row['image'].'</td>
							<td>'.$row['name'].'</a></td>
							<td>'.$row['surname'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['phone'].'</td>
							<td>'.$row['address'].'</td>
							<td>'.company::city($row['city_id']).'</td>
							<td>'.$row['department'].'</td>
							<td>'.user::getUserType($row['user_type']).'</td>

						</tr>
	 			';	
	 			$i++;
	 		}
	 	}
	}

	public function getCompanyUserList()
	{
		$i=1;
		$con=user::connection();
		$sql="SELECT * FROM users WHERE user_type=2";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		while($row=$result->fetch_assoc())
	 		{
	 			echo '
	 					<tr>
							<td>'.$i.'</td>
							<td>'.$row['image'].'</td>
							<td>'.$row['name'].'</a></td>
							<td>'.$row['surname'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['phone'].'</td>
							<td>'.$row['address'].'</td>
							<td>'.company::city($row['city_id']).'</td>
							<td>'.$row['department'].'</td>
							<td>'.user::getUserType($row['user_type']).'</td>

						</tr>
	 			';	
	 			$i++;
	 		}
	 	}
	}

	public function getAdminUserList()
	{
		$i=1;
		$con=user::connection();
		$sql="SELECT * FROM users WHERE user_type=1";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		while($row=$result->fetch_assoc())
	 		{
	 			echo '
	 					<tr>
							<td>'.$i.'</td>
							<td>'.$row['image'].'</td>
							<td>'.$row['name'].'</a></td>
							<td>'.$row['surname'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['phone'].'</td>
							<td>'.$row['address'].'</td>
							<td>'.company::city($row['city_id']).'</td>
							<td>'.$row['department'].'</td>
							<td>'.user::getUserType($row['user_type']).'</td>

						</tr>
	 			';	
	 			$i++;
	 		}
	 	}
	}

	public function getInternList()
	{
		$i=1;
		$con=user::connection();
		$sql="SELECT * FROM users WHERE user_type=0";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				echo '
						<tr>
							<td>'.$i.'</td>
							<td>'.$row['image'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['surname'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['phone'].'</td>
							<td>'.company::city($row['city_id']).'</td>
							<td>'.$row['address'].'</td>
							<td>CV,Transkript,Acceptence Form</td>
							<td>29.01.2018-29.02.2018</td>
						</tr>
				';
				$i++;
			}
		}
	}



}?>