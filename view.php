<?php
  $con=mysqli_connect('localhost','root','root');
  mysqli_select_db($con,'employee_db');

  $q= "select * from employee";
  $result=mysqli_query($con,$q);

  $num=mysqli_num_rows($result);
 mysqli_close($con);
  
?>  
  <!DOCTYPE html>
  <html>
  <head>
  	<title>View Employee Record</title>
  	<link rel="stylesheet" href="./css/viewStyle.css" />
  </head>
  <body>
  <h1><center>Employee Management </center></h1>
  <table id ="view_table" align="center">

  	<tr>
  	<th>ID</th>
  	<th>Name</th>
  	<th>Age</th>
  	<th>Phone.NO</th>
 	</tr>
 	<?php 
 		for($i=1;$i<=$num;$i++)
 		{
  			$row=mysqli_fetch_array($result);

 	 ?>
 	 <tr>
 	 	<td><?php echo $row['emp_id']; ?></td>
 	 	<td><?php echo $row['name']; ?></td>
 	 	<td><?php echo $row['age']; ?></td>
 	 	<td><?php echo $row['Ph_no']; ?></td>
 	 </tr>
 	 <?php
 	  	 	}
 	  ?>
  </table>
  </body>
  </html>
