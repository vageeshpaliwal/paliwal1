<?php 
include 'database.php';
?>
<html>
    <head><title></title>
    
    
     <link rel="stylesheet" href="style.css">     
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatable-min.css">

        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  </head>
     <script>
    $(document).ready(function(){
         $("#myTable").dataTable();
    }); 
    
    </script>
    <style>
     #myTable{
         width:80%;
           box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .h3{
            width:60%;
            margin-top:20%;
            margin-left: 40%;
            height:600px;
            
        }
    
    }</style>
   
    <body>
        
        <table id="myTable" class="table">
            <thead>
                    <tr>
                        <th>id</th>
                        <th>University Name</th>
                        <th>Address</th>
                  <th>State</th>
                       
                    </tr>
            </thead>
            <tbody>
<?php
if(isset($_POST['submit']))
{
        $s=$_POST['State'];
        $sql="select * from stateuniversity where state='$s'";
        if($result=mysqli_query($conn,$sql))
        {
            if(mysqli_num_rows($result)>0)
            {
             
                
                        $i=0;
                        while($row=mysqli_fetch_array($result))
                        {
                    
                            echo "<tr>";
                                echo "<td>".++$i."</td>";
                                echo "<td>".$row['University Name']."</td>";
                                echo "<td>".$row['Address']."</td>";
                             echo "<td>".$row['State']."</td>";
                               

                            echo "</tr>";
                        }
          
           
            mysqli_free_result($result);
            }
            else {
                echo "<h3 class='h3'> You Enter Wrong Input";
            }
        }
}
                ?></tbody>
          </table>
    </body>
</html>