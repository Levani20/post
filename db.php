<?php
$conn = mysqli_connect("localhost", "root", "", "post");

if(mysqli_connect_errno()) {
	echo "Failed to connect to database";
}
?>

<?php
$statement = $conn->prepare('SELECT * FROM posts LIMIT 10');
$statement->execute();
$data = $statement->fetchAll();

'<pre>'
print_r($data);
'</pre>'
?>