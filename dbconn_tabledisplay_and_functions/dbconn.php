 <!DOCTYPE html>
<html>
<body>
<table>
<tr>

  	<th>Id</th>
  	<th>Name</th>
  	<th>Age</th>
  	<th>Salary</th>
   </tr>

  	
   <?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	echo "Connected successfully";

// displaying data
$sql = "SELECT e_id, e_name, e_age, e_salary FROM emp";
$result = $conn->query($sql);


if ($result-> num_rows > 0) {
	  
  while($row = $result->fetch_assoc()) {
  echo "<tr>" . 
            "<td>".$row['e_id'] . "</td>" .
             "<td>".$row['e_name']."</td>".
             "<td>". $row['e_age']."</td>".
             "<td>". $row['e_salary']."</td>".
           
       "</tr>";
   }
        echo "</table>";
}
else {
    echo "0 results";
}
$conn -> close();
$link_name = "<h3>Delete</h3>";
$id = 2;

?>
</table>
<a href="delete.php?id=1"><?php echo $link_name;?></a>
</body>
</html>


