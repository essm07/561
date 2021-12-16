<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <!-- dset the char types   -->
      <meta name="viewport" content="with=device-width, initial-scale=1.0">
      <!--  make it scale for phone  -->
      <title> Website Design</title>
      <link rel="stylesheet" href="style3.css">
      <!--link you html page to a scc file-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <!--get a font you like from google fonts-->
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
   </head>
   <body>
      <section class="sub-header2">
         <nav>
            <!--add navagation links to page-->
            <a href="index.html"> <img src="images/iKM.png"></a><!--add clikable logo-->
            <div class="nav-links">
               <!--<i class="fas fa-times-circle"></i> -->  
               <ul>
                  <!--add unordered list-->
                    <li><a href="index.php">HOME</a> </li><!--list first item-->
                    <li><a href="aboutPage.php">ABOUT</a> </li>
                    <li><a href="buy.php">BUY</a></li>
                    <li><a href="contactus.php">CONTACT US</a> </li>
                    <li><a href="Login.php">LOGIN/SIGN UP</a></li>
               </ul>
            </div>
            <!--<i class="fas fa-bars"></i>-->    
         </nav>
         <div class="text-box">
           <a href="#section1" class="hero-btn">Buy Now</a>
         </div>
      </section>
       
        <div class="rowL">
   
            <div class="course-colL">

<h1 id="section1">Shipping Information</h1>
  <form action="insert3.php" method="post"> 
  <label for="fname" >First name:</label><br>
  <input type="text" id="fname" name="fname" value="ex:John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="ex:Doe"> <br>
  <label for="eml">Email:</label><br>
  <input type="text" id="eml" name="eml" value=""><br>
  <label for="address">Shipping Address: </label><br>
  <input type="text" id="address" name="address" value=""><br>
  <label for="state">State:</label><br>
  <input type= "text" id="state" name="state" value=""><br>
  <label for="city">City:</label><br>
  <input type= "text" id="city" name="city" value=""><br>
  <label for="zip">Zip Code:</label><br>
  <input type= "text" id="zip" name="zip" value=""><br>
<h1>Payment</h1>
  <label for="chname">Card Holder Name:</label><br>
  <input type= "text" id="chname" name="chname" value=""><br>
  <label for="cardnumber">Card Number:</label><br>
  <input type= "text" id="cardnumber" name="cardnumber" value=""><br>
  <label for="expire">Expiration Date:</label><br>
  <input type= "text" id="expire" name="expire" value=""><br>
  <label for="crv">CRV:</label><br>
  <input type= "text" id="crv" name="crv" value=""><br>
              <h1><label for="quantity">iKnoMors Quantity:</label>
  	      <input type="number" id="quantity" name="quantity" min="1" max="99999"></h1>
   <button type="submit" value="Submit" class="submitBtn">Submit Order</button>
</form>

            </div>
   
         </div>
   
    

            
            
            
            
            
            
            
        
   </body>
</html>
