<?php
$studentpassword="";
if(isset($_GET['studentids'])) {
    $studentsid = $_GET['studentids'];
	$studentsname=$_GET['studentnames'];
	$studentsfathername=$_GET['studentfathernames'];
        $studentsdepartment=$_GET['studentdepartments'];
		$studentpassword=$_GET['password'];
    $con = new mysqli('localhost', 'root', '', 'student');
    $sql = "UPDATE members
SET password='$studentpassword'
WHERE id='$studentsid'";
    $delete = $con->prepare($sql);
  
    $delete->execute();
echo "<h1>done</h1>";
    if($delete->affected_rows > 0) {
		
		
        header('Operatormanagement.php');
    }
}
?>