<html>
<head>
	<title>studentDetails</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="studentDetails.css">
</head>
<body>
	<div class="navbar-at-top">
		<img src="logo2.png" class="logo2">
		<ul>
        	<li><a href="frontpage.html">HOME</a></li>
		</ul>
	</div>
	<div class="container">
        <h2 class="text-center pt-4">STUDENT DETAILS</h2>
           <?php
                include 'config.php';
                $sid=$_GET['USN'];
                echo $sid;
                $sql = "SELECT * FROM  students1 where usn=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
                echo '<br><br>';
                echo "<img src='{$rows['img_dir']}' width='200px' height='200px' />"
            ?>
            
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">USN</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">SEMESTER</th>
                    <th class="text-center">FIRST VACCINE DATE</th>
                    <th class="text-center">SECOND VACCINE DATE</th>

                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['usn'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['semester'] ?></td>
                    <td class="py-2"><?php echo $rows['first_vac_date'] ?></td>
                    <td class="py-2"><?php echo $rows['second_vac_date'] ?></td>
                    <td><a href="editStudent.php?USN= <?php echo $rows['usn'] ;?>"> <button type="button" class="btn btn-primary">UPDATE</button></a></td> 
                </tr>
            </table>
        </div>
        
            <div>
        </select>
       
        </form>
    </div>
	


</body>
</html>