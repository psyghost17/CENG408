<?php
class company{
	private function connection()
	  {
	  	include("db.php");
	  	if($con)
	  	{
	  		return $con;
	  	}
	  	echo " Bağlantı Başarısız";
	  }
	public function getCompany()
	{
		$i=1;
		$con=company::connection();
		$sql="SELECT * FROM companies";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		while($row=$result->fetch_assoc())
	 		{
	 			echo '
	 					<tr>
							<td>'.$i.'</td>
							<td>'.$row['logo'].'</td>
							<td><a href="company-profile.php?company='.$row['id'].'">'.$row['name'].'</a></td>
							<td>'.company::category($row['category_id']).'</td>
							<td>'.company::city($row['city_id']).'</td>

						</tr>
	 			';	
	 			$i++;
	 		}
	 	}
	}
	public function getCompanyInformation()
	{
		$i=1;
		$con=company::connection();
		$sql="SELECT * FROM companies";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		while($row=$result->fetch_assoc())
	 		{
	 			echo '
	 					<tr>
							<td>'.$i.'</td>
							<td>'.$row['logo'].'</td>
							<td><a href="company-profile.php?company='.$row['id'].'">'.$row['name'].'</a></td>
							<td>'.company::category($row['category_id']).'</td>
							<td>'.company::city($row['city_id']).'</td>
							<td>'.user::get4Company($row['company_admin_id']).'</td>
							<td>'.user::get4Department($row['company_admin_id']).'</td>

						</tr>
	 			';	
	 			$i++;
	 		}
	 	}
	}
	public function get($id){
		$con=company::connection();
		$sql="SELECT * FROM companies WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
			$row=$result->fetch_assoc();
			return $row;
	 	}
	}

	public function category($id)
	{
		$i=1;
		$con=company::connection();
		$sql="SELECT * FROM categories WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['name'];
	 	}
	}
	public function city($id)
	{
		$con=company::connection();
		$sql="SELECT * FROM cities WHERE id=$id";
		$result=$con->query($sql);
		if($result->num_rows>0)
	 	{
	 		$row=$result->fetch_assoc();
	 		return $row['name'];
	 	}
	}
	public function getAdminCompany($admin_id){
		$con=company::connection();
		$sql="SELECT * FROM companies WHERE company_admin_id=".$admin_id;
		$result=$con->query($sql);
		if($result->num_rows>0){
			$row=$result->fetch_assoc();
			return $row;
		}
	}
	public function search()
	{
		$con=company::connection();
		$sql="SELECT * FROM companies";
		$result=$con->query($sql);
		if ($result->num_rows>0) {

			$row=$result->fetch_assoc();
			return $row;
			# code...
		}

		}

		public function updateCompany($id){
		$con=company::connection();
		$sql='UPDATE companies SET name="'.$company['name'].'", phone="'.$company['phone'].'",address="'.$company['address'].'",city_id="'.$company['city'].'",department="'.$user['department'].'" WHERE id='.$user['id'];
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

}?>