<?php  
include 'database.php';
$sql = "select * from centraluniversity";
$res=mysqli_query($conn,$sql);
?>
<html>
<head>
    <title>
    centarl univesities
    
    </title>
    
      <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    
     
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  
    <script>
    $(document).ready(function(){
         $("#myTable").dataTable();
    }); 
    
    </script>

    <style>
.header2
 {
    width:100%;
    background-position: center;
    background-size: cover;
    position: relative;
}
    
nav2{
    display:flex;
    padding:1.5% 6%;
    justify-content:space-between;
    align-items: center;
    background-color:#3498DB;
    height:30px;

    }
        .stateut{
            background-color: bisque;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
            text-align: center;
            
        }
        .stateut h4{
            font-weight: bold;
        }
        .container{
            margin-top: 50px;
        }
        .an{
            text-decoration: none;
            color:black;
            
        }
        .table table-striped table-bordered{
            width:50%;
            
            
        }
        .container{
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
    </style>
    </head>

<body>
 
    
        <section class="header2">
            <nav class="nav2">
                <img src="eduford_img/logo.png">
                <div class="nav-links">
                  <i class="fa fa-times"></i>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="main.html">Universities</a></li>
                        <li><a href="#">contact</a></li>                
                    </ul>
                </div>
            </nav>
        </section>
    <div class="container">
    <table id="myTable" style="width:70% ; border: 1px">
        <thead>
        <th>Sno</th>
           <th>	University Name</th>
             <th>State</th>
             <th>address</th>
        
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
                   echo"<td>".$row['address']."</td>";
                  
                
                   echo"</tr>";

               }
              ?>
    </tbody>
    </table>
    </div>
    </body>
</html>