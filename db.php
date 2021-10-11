<?php
	function query($sql){
		//ket noi server
		$conn=mysqli_connect("mysql5045.site4now.net","a7af02_deploy","01633568287a@") or die("lỗi kết nối");
		mysqli_select_db($conn,"db_a7af02_deploy") or die("lỗi csdl");
		//thuc hiện truy vấn
		$result=mysqli_query($conn,$sql) or die("lỗi truy vấn");
		//đóng kết nối
		mysqli_close($conn);
		return $result;
	}
?>