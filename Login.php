<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

        <title>Log in and Reg form </title>
        <link rel="stylesheet" href="style2.css">
              <meta charset="utf-8">
      <!-- dset the char types   -->
      <meta name="viewport" content="with=device-width, initial-scale=1.0">
      <!--  make it scale for phone  -->
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
              <section class="header">
         <nav>
            <!--add navagation links to page-->
            <a href="index.php"> <img src="images/kkk.png"></a><!--add clikable logo-->
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
      </section>
        
        <div class="header1">
            <div class="formBox">
               <div class="buttonbox">
                   <div id="btn"></div>
                   <button type="button" class="toglBtn" onclick="login()">Log in </button>
                   <button type="button" class="toglBtn" onclick="signup()">Register</button>         
                </div >  
                       <form action="insert2.php" id="login" class="inputs" method="post">  
                         <input type="text" name="user_name" class="input-field" placeholder="User Name" required>
                         <input type="password" name="pass_word" class="input-field" placeholder="Password" required>
                         <button type="submit" value="Submit" class="submitBtn">Log in</button>
                         
                      </form>  
                
                         <form action="insert.php" id="signup" class="inputs" method="post">
                         <input type="text" class="input-field" name="user_name" placeholder="User Name" required>
                         <input type="text" class="input-field"  name="e_mail" placeholder="email" required>
                         <input type="password" class="input-field"  name="pass_word" placeholder="password" required>
                         <input type="password" class="input-field" name="confirm_pass" placeholder="Confirm password" required>
                         <input type="date" class="input-field" name="dateit" placeholder="Your Birth Day" required>
                         <button type="submit" value="Submit" class="submitBtn">Sign up</button>

                      </form>   
            </div>
        </div>
        <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signup");
         var z = document.getElementById("btn");
            
            function signup(){
                x.style.left ="-400";
                y.style.left = "50px";
                z.style.left = "110px";
            }
                                
                function login(){
                x.style.left ="50px";
                y.style.left = "450px";
                z.style.left = "0";

            }
        </script> 
    </body>
</html>