<!DOCTYPE html>
<html>
<head>
          <meta charset="utf-8">
      <!-- dset the char types   -->
      <meta name="viewport" content="with=device-width, initial-scale=1.0">
      <!--  make it scale for phone  -->
      <title> Website Designe</title>
      <!--link you html page to a scc file-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <!--get a font you like from google fonts-->
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
     <link rel="stylesheet" href="style4.css">
</head>
     
<body>
    
         <nav>
            <!--add navagation links to page-->
            <a href="index.php"> <img src="images/iKM.png"></a><!--add clikable logo-->
            <div class="nav-links">
               <!--<i class="fas fa-times-circle"></i> -->  
               <ul>
                    <li><a href="index.php">HOME</a> </li><!--list first item-->
                    <li><a href="aboutPage.php">ABOUT</a> </li>
                    <li><a href="buy.php">BUY</a></li>
                    <li><a href="contactus.php">CONTACT US</a> </li>
                    <li><a href="Login.php">LOGIN/SIGN UP</a></li>
               </ul>
            </div>  
         </nav>
    
    
<div class="container">
    <p>CONTACT US</p>
    <form action="insert4.php" method="post">
    <div class="login">
      <input type="text" name="fname" placeholder="Your Name" class="input">
      <input type="text"  name="femail" placeholder="Your Email Address" class="input">
    </div>
    
    <div class="subject">
      <input type="text"  name="fsubject" placeholder="Subject" class="input">
    </div>
    
    <div class="msg">
    <input type="text"  name="fmessege" placeholder="Leave a Message" class="area">
    </div>
    <button type="submit" value="Submit" class="btn">Send Message</button>
    </form>
    
    </div>

        
</body>
</html>
