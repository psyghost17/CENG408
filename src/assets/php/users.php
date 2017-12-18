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
		$sql="INSERT INTO users (name, surname, email, phone, password) VALUES ('".$user['name']."', '".$user['surname']."', '".$user['mail']."', '".$user['phone']."', '".$user['password']."')";
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
	  //Getting Part

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
		$sql='UPDATE users SET name="'.$user['name'].'",surname="'.$user['surname'].'",email="'.$user['mail'].'",phone="'.$user['phone'].'",address="'.$user['address'].'",city_id="'.$user['city'].'" WHERE id='.$user['id'];
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


}?>