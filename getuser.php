<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";

$conn = new mysqli($servername, $username, $password ,$dbname);


$sql = "SELECT * FROM `login`";
$output=array();
$run=mysqli_query($conn,$sql);
if (mysqli_num_rows($run)>0) {
    while ($row=mysqli_fetch_array($run)) {
        $temp=array();
        $temp['email']=$row['email'];
        $temp['pw']=$row['pw'];
        
        
   
        array_push($output, $temp);
        
    }





}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>


<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
    <th>Email</th>
    <th>Contact</th>
    <th>id</th>
   
   
  </tr>
  
  <?php
  $sql = "SELECT * FROM `login`";
  $output=array();
  $run=mysqli_query($conn,$sql);
  if (mysqli_num_rows($run)>0) {
      while ($row=mysqli_fetch_array($run)) {
         
     
?>
  <tr>
 
    <td><?php echo  $row['email']; ?></td>
    <td><?php echo $row['pw']; ?></td> 
    <td><a href="<?php echo $id=$row['id']; $sql='DELETE FROM `login` WHERE `login`.`id` = "$id"'; mysqli_query($conn, $sql); ?>">Delete </a> </td>
    <!-- <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td> -->
  </tr>

<?php 
      }
    }
    ?>



</table>

<p>To undestand the example better, we have added borders to the table.</p>

</body>
</html>



?>