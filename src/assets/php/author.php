<?php
class author{
	private function connection()
	  {
	  	include("db.php");
	  	if($con)
	  	{
	  		return $con;
	  	}
	  	echo " Bağlantı Başarısız";
	  }

	  //Getting Part
	public function get($mail)
	{
		$con=author::connection();
		$sql="SELECT * FROM author WHERE mail='".$mail."'";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				return $row;
			}
		}
	}
		public function getAll()
	{
		$con=author::connection();
		$sql="SELECT * FROM author";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				echo '	<tr class="gradeX">
							<td><a href="authoredit.php?id='.$row['mail'].'">'.$row['name_surname'].'</a></td>
						</tr>
				';
			}
		}
	}
	public function signIn($author)
	{
		$con=author::connection();
		$sql="SELECT * FROM author WHERE mail='".$author['mail']."' AND password='".$author['pass']."'";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		echo '<p class="alert alert-success"><strong>Giriş Başarılı</strong></p>';
	 		$row=$result->fetch_assoc();
	 		$_SESSION['author']=$row;
	 		$_SESSION['isLogin']=1;
	 	}
	 	else
	 	{
	 		$_SESSION['isLogin']=0;
	 		echo '<p class="alert alert-danger"><strong>Kullanıcı Adı ve şifrenizi kontrol ediniz</strong></p>';
	 	}
	}
	public function getRole($id)
	{
		$con=author::connection();
		$sql="SELECT * FROM role WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['type'];
	 	}
	 }
	  //Update Part
	 public function update($author)
	 {
	 	$mysqli=author::connection();
	 	$sql="UPDATE author SET name_surname='".$author['name']."', mail='".$author['mail']."',
	 	password='".$author['pass']."', role_id='".$author['role']."' WHERE id=".$author['id'];
		$result=$mysqli->query($sql);
	 	if($result)
	 	{
	 		echo '<p class="alert alert-success"><strong>Güncelleme Başarılı</strong></p>';
	 	}
	 	else
	 	{
	 		echo '<p class="alert alert-danger"><strong>Güncelleme Sırasında Hata ile Karşılaşıldı</strong></p>';
	 	}
	 }

	 //Adding Part
	public function add($query)
	 {
	 	$mysqli=author::connection();
	 	$sql="INSERT INTO author(name_surname,mail,password,role_id) VALUES('".$query['name']."','".$query['mail']."','".$query['pass']."','".$query['role']."')";
	 	$result=$mysqli->query($sql);
	 	if($result)
	 	{
	 		echo '<p class="alert alert-success"><strong>Ekleme Başarılı</strong></p>';
	 	}
	 	else
	 	{
	 		echo '<p class="alert alert-danger"><strong>Ekleme Sırasında Hata ile Karşılaşıldı</strong></p>';
	 	}
	 }
}?>