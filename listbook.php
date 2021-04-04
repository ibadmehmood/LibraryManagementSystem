<?php
if(isset($_GET['bookingid'])) {
    $booksid = $_GET['bookingid'];
	$q="select * from books where bookid like '%$booksid%'";
	$connect=new mysqli('localhost', 'root', '', 'student');
	$qq=$connect->query($q);
	$n=$qq->num_rows;
	if($n>0){
echo "<table class='table table-bordered'><tr><th>Book ID</th><th>Book Title</th><th>Book Author</th><th>Book ISBN</th></tr>";
while($row=$qq->fetch_assoc()){
 echo "<tr><td>".$row["bookid"]."</td><td>".$row["booktitle"]."</td><td>".$row["bookauthor"]."</td><td>".$row["bookisbn"]."</td></tr>";

}
echo "</tbody></table>";
}
}
?>