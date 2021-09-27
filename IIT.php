
<?php 
include 'database.php';
$sql = "select * from IIT";
$res=mysqli_query($conn,$sql);
?>  
<html>
    <head>
    <title>
        
        </title>
        <link rel="stylesheet" href="style.css">     
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatable-min.css">

        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
           <script src="js/jquery.js"></script>
        <style>
            .head{
                width:100%;
                height:80px;
                padding-top: 10px;
               box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            }
            .head p{
                text-align: center;
                margin-top: 10px;
                font-size: 30px;
                font-weight: bold;
                 box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                
            }
            .table{
                width:70%;
                margin:0 auto;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                margin-top: 15px;
                
            }
        
        </style>
    </head>
    <body>
        <div class="head"><p>List of Indian Institute of Technology</p> </div>
<table class="table">
    <thead>
        <tr>
        <th>s no</th>
              <th>Institute</th>
              <th>Place</th>
              <th>Ranking</th>
        </tr>
    </thead>
    <tbody>
    
            <?php
               
               $i=0;
               while($row=mysqli_fetch_array($res))
               {
                   echo "<tr>";
                   echo"<td>".++$i."</td>";
                   echo"<td>".$row['Institute']."</td>";
                   echo"<td>".$row['Place']."</td>";
                    echo"<td>".$row['Ranking']."</td>";
                  
                   echo"</tr>";
               }
            ?>
    </tbody>
</table>
</body>        
</html>               