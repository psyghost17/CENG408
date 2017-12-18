<?php
class city{
	private function connection()
	  {
	  	include("db.php");
	  	if($con)
	  	{
	  		return $con;
	  	}
	  	echo " Bağlantı Başarısız";
	  }
	public function getCities($id)
	{
		$con=city::connection();
		$sql="SELECT * FROM cities";
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
	public function get4Company($id)
	{
		$con=city::connection();
		$sql="SELECT * FROM cities WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['name'];
	 	}
	}

}?>