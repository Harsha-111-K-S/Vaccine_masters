<?php 
  require_once '../../configuration.php';
 
?>  

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <style> 
        

         </style>
      <script>
          function getImgId(imgid,count)
          {
              document.likeDislikeForm.imgId.value = imgid;
              document.likeDislikeForm.likedislike.value = count;
              document.likeDislikeForm.submit();
          }
        </script>  
       <style>
        .imgwrapper{
           display: inline-block;
           margin:auto;
           margin : 20px;
           max-width: 800px;
           padding:15px;
           border : 3px solid red;
           
            
        }
        .images{
             margin:auto;
             margin : 5px 5px 15px 5px;
             padding : 15px;
             background-color : pink;
             -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
              -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
              box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        }

        .faculty{
           margin : auto;
           margin-bottom:10px;
           
        }
        h1{
          margin:auto;
          max-width:800px;
          color:blue;
        }

        </style>
    </head>
  
   <body>
     <?php
      require_once 'header.php';
      ?>

     <form name = "likeDislikeForm" method = "post" action = "facultyDetailsInsertion.php" >
     <br>
     <br>
     <h1> COMPUTER SCIENCE AND ENGINEERING</h1>
     <br>

              <?php 
               require_once '../../configuration.php';

                $sql = "select * from faculty_details";
                $resultSet = $conn->query($sql);
       
               if($resultSet->num_rows > 0)
               while($row = $resultSet->fetch_assoc())
               { ?>
                <div class = "imgwrapper">
                <?php
                 echo '<img class = "images" style = "border:3px solid black;" " src = '. $row['img'] . ' " height = "200" width = "200"/>' ; ?>
                 <div class = "faculty"> 
                 Name :
                 <?php echo $row['name']."<br>"; ?>
                 Email : 
                 <?php echo $row['email']."<br>"; ?>
                 Age : 
                 <?php echo $row['age']."<br>"; ?>
                 Vaccine : 
                 <?php echo $row['vaccine_name']."<br>"; ?>
                 First-dose : 
                 <?php echo $row['first_dose']."<br>";?>
                 Second-dose :
                 <?php echo $row['second_dose']."<br>";?>

                 </div>

                 </div>
             <?php }  ?>

             <button type = "Submit" class = "btn btn-primary" >Insert</button>


     </form>
    </body>
</html>