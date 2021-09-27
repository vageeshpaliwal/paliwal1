<?php 
include 'database.php';

$sql = "select * from topuniversity where State LIKE '%".$_GET['state']."%'";
$res=mysqli_query($conn,$sql);
//{
//    $University[]=$row['University Name']; 
//    $State[]=$row['State'];
//    $city[]=$row['City'];
//    $uid[]=$row['id'];
//    $website[]=$row['Website'];
//}
//print_r($city);
?>


<html>
<head>
     <link rel="stylesheet" href="style.css">     
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatable-min.css">

        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  
    <script>
    $(document).ready(function(){
         $("#myTable").dataTable();
    }); 
    
    </script>
    
  
    
   
    <title></title>
    <style>
        .set{
            height:80px;
            font-size:30px;
            text-align: center;
           
        }
        .set p{
            padding-top:10px;
        }
       #myTable{
            width:90%;
                margin:0 auto;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                margin-top: 15px;
                
        }
        .t{
            width:90%;
              margin:0 auto;
        }
    </style>
    </head>
    <body>
       <div class="set">
           <p>List of Private University</p>
        </div>
        <div class="t">
          <table  id="myTable" class='table' >
       <thead>
           <tr>
              <th>#</th>
               <th>University Name</th>
               <th>State</th>
               <th>City</th>
                <th></th>
            </tr>
        </thead>
       <tbody>
      
    
               <?php
           $i=0;
               while($row=mysqli_fetch_array($res))
               {
                   
                   echo"<tr>";
                   echo"<td>".++$i."</td>";
                   echo"<td>".$row['University Name']."</td>";
                   echo"<td>".$row['State']."</td>";
                   echo"<td>".$row['City']."</td>";
                    echo"<td><a href=//".$row['website'].">".$row['website']."</a></td>";
                
                    echo"</tr>";

               }
              ?>
              </tbody>
       
   </table>
        </div>
  
       
    </body>

</html>