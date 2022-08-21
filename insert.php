<?php
include('db_connect.php');
if(isset($_POST['submit']) & !empty($_POST['usertype']) & !empty($_POST['user_name']) & !empty($_POST['user_mail_id']) & !empty($_POST['user_password'])){
	
	$user_name = mysqli_real_escape_string($connect, $_POST['user_name']);
	$user_mail_id = mysqli_real_escape_string($connect, $_POST['user_mail_id']);
	$user_password = mysqli_real_escape_string($connect, $_POST['user_password']);
	$user_password_hash = sha1($user_password, FALSE);
	$status = 1;
	$authorizedapp_list = 'qnNpte';
	$user_type = $_POST['usertype'];
	//query for insert
	$query = "INSERT INTO system_users (Name,username,password,status,authorizedapp_list,usertype)
	VALUES ('$user_name','$user_mail_id','$user_password_hash',$status,'$authorizedapp_list','$user_type')";
	$result = mysqli_query($connect,$query) or die('Query Falied');
	if($result == true){
		//mail function
		?>
	<script>
	alert('Record Inserted Successfully, Please check your Mail Id For username and Password');
	location.replace("adminlogin.php");
	</script>
	<?php
	}
}else{
	?>
	<script>
	alert('Both are Required field');
	location.replace("adminlogin.php");
	</script>
	<?php
}


?>