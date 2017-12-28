<?php
class category{
	private function connection()
	  {
	  	include("db.php");
	  	if($con)
	  	{
	  		return $con;
	  	}
	  	echo " Bağlantı Başarısız";
	  }
	public function get4Company($id)
	{
		$i=1;
		$con=category::connection();
		$sql="SELECT * FROM categories WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['name'];
	 	}
	}
	public function getCategories($id)
	{
		$con=category::connection();
		$sql="SELECT * FROM categories";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		while($row=$result->fetch_assoc())
	 		{
	 			if($row['id']==$id){
	 				echo '<option selected value="'.$row['id'].'">'.$row['name'].'</option>';
	 			}
	 			else{
	 				echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
	 			}
	 		}
	 	}
	}

}?>