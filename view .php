<?

  include 'conn.php';
  $con = include 'conn.php';

  $query ="SELECT * `users`";
  
  $result = mysqli_query($query,$con);

  $json_data=array();
  while ($row=mysqli_fetch_assoc($result)) {
  	 $json_data[]=$row;
  }
 
  echo json_encode($json_data);
?>
