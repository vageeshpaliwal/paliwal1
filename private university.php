
<?php  
include 'database.php';
?>
<html>
<head>
    <title>
            Private university</title>
    
      <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
     
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            margin-top: 20px;
            background-color: #73AEE5; 
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
            text-align: center;
            color:#fff;
            
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
        .table a{
            color:black;
            text-decoration: none;
        }
        .footer{
    width:100%;
    height:100px;
    background-color: #3498DB;
    
}
.f1{
    width:50%;
    float:left;
}
.f1 p{
    padding-top: 40px;
    text-align: center;
}
.f2 a{
    color:#fff;
}
.f2{
    width:50%;
    float:right;
    
}
.f2 p {
  
    padding-top: 40px;
    text-align: center;
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
    <div class="stateut">
        <h4>States</h4>
    </div>
    <div class="container">

  <table class="table">
   
    <tbody>
  
      <tr>
          <td><a href=university.php?state=Andhra Pradesh>Andhra Pradesh</a></td>
        <td><a href=university.php?state=Bihar>Bihar</td>
        <td><a href=university.php?state=Gujarat>Gujarat</td>
      </tr>
      <tr>
        <td><a href=university.php?state=Arunachal Pradesh>Arunachal Pradesh</td>
        <td><a href=university.php?state=Haryana>Haryana</td>
        <td><a href=university.php?state=Himachal Pradesh>Himachal Pradesh</td>
      </tr>
      <tr>
        <td><a href=university.php?state=Assam>Assam</td>
        <td><a href=university.php?state=Jharkhand>Jharkhand</td>
        <td><a href=university.php?state=Karnataka>Karnataka</td>
      </tr>
         <tr>
        <td><a href=university.php?state=Maharashtra>Maharashtra</td>
        <td><a href=university.php?state=Chhattisgarh>Chhattisgarh</td>
        <td><a href=university.php?state=Madhya Pradesh>Madhya Pradesh</td>
      </tr>
         <tr>
        <td><a href=university.php?state=Manipur>Manipur</td>
        <td><a href=university.php?state=Meghalaya>Meghalaya</td>
        <td><a href=university.php?state=Mizoram>Mizoram</td>
      </tr>
         <tr>
        <td><a href=university.php?state=Nagaland>Nagaland</td>
        <td><a href=university.php?state=Orissa>Orissa</td>
        <td><a href=university.php?state=Punjab>Punjab</td>
      </tr>
         <tr>
        <td><a href=university.php?state=Rajasthan>Rajasthan</td>
        <td><a href=university.php?state=Sikkim>Sikkim</td>
        <td><a href=university.php?state=Tamil Nadu>Tamil Nadu</td>
      </tr>
         <tr>
        <td><a href=university.php?state=Tripura>Tripura</td>
        <td><a href=university.php?state=Uttar Pradesh>Uttar Pradesh</td>
        <td><a href=university.php?state=Uttarakhan>Uttarakhand</td>
      </tr>
         <tr>
        <td><a href=university.php?state=West Bengal>West Bengal</td>
        <td><a href=university.php?state=Telangana>Telangana</td>
       
      </tr>
        
    </tbody>  
       
        </table>
     
    </div>
      <section class="footer">
            <div class="f1">
                <p> Copyright @2020 www.eduford.com, India</p>
            
            
            </div>
            <div class="f2">
                <p><a href="">Disclaimer</a> |
                    <a href="">Privacy Policy</a>|
                    <a href="#">Contact</a>
                </p>
            </div>
         </section>
    
   
        
       
     
        
   
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>