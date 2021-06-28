<?php
    $con = mysqli_connect("localhost", "root", "", "user-registration");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: AliceBlue">


<table class="center">
          <tr>
            
            <th>usn</th>
            <th>name</th>
            <th>department</th>
			<th>semester</th>
            
          </tr>
		  <tbody>
		 <tr align=center>
          <?php
        $sql = "SELECT * FROM booking";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post'>";
            echo " <td>". $row['usn'] . "</td>
            <td>". $row['name'] . "</td>
			<td>". $row['department'] . "</td>
            <td>". $row['semester'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
        ?>
		 </tr>
		</tbody>
    </table>
	</body>
	</html>