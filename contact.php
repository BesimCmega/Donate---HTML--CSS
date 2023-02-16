
<!DOCTYPE HTML>
<head>

    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="Style/contact.css">
    
    </head>
<body>

    <!-- Shiriti nagivimit -->
    <header>
      <nav class="navbar">
          <div class="leftside">
  
              <div class="logoMove">
                  <img class="logo" src="Fotot/logo.png" alt="logo">
                  <p id="p1"></p>
          
                  <ul class="ulnav">
                      <li class="navlist"><a class="ula" href="index.php">Home</a></li>
                      <li class="navlist">
                          <a class="ula" href="aboutus.php">About Us</a>
                      </li>
                      <li class="navlist">
                          <a class="ula" href="contact.php">Contact</a>
                      </li>
                  </ul>
              </div>
  
          </div>
          
          <ul class="ulnav">
              
                  <a class="ula" id="pad" href="register.php">Register</a>
              </li>
              <li class="navlist">
                  <a class="ula" id="pad" href="login.php">Login</a>
              </li>
          </ul>
          
  
      </nav><br>
      </header>
      <h1 class="main-text">Contact Us</h1><br> <br>  
    <main id="mainSize">
    
        
        <div class="leftside">
    
        <form name="myForm" onsubmit="return validateForm()">
         <table class="form-style">
            <tr>
               <td>
                  <label>
                     Name: 
                  </label>
               </td>
               <td>
                  <input type="text" name="name" class="long">
                  <span class="error" id="errorname"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                    Email:
                  </label> 
               </td>
               <td>
                  <input type="email" name="email" class="long"/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Message: 
                  </label>
               </td>
               <td>
                  <textarea name="message" class="long field-textarea"></textarea>
                  <span class="error" id="errormsg"></span>
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input class="btni" type="submit" value="Send">      
                  <input type="reset" value="Reset"> 
               </td>
            </tr>
         </table>
            

      </form>
            
        </div>
        
        <div class="rightsidee">
            <img src="Fotot/kontakti.jpg">
         </div><br><br>
   </main>
   <br>
        <!-- Footeri -->
    
    <footer>
      <div class="footer">
           
      <div class="footercolum1">
          
          <h4>Our Website</h4> <br>
          <p>"HelpME" is a website for people that want to help<br> others with clothes and money, after they donate<br> we send the supplies to people in need of them.  </p>
      
      
      </div>
  
      <div class="footercolum2">
          
          <h4>Navigation</h4>
          
          <ul class="ulfooter">
              
              <li class="lifooter"><a href="index.php">Home</a></li>
              <li class="lifooter"><a href="aboutus.php">About Us</a></li>
              <li class="lifooter"> <a href="contact.php">Contact</a></li>
              <li class="lifooter"> <a href="register.php"> <p> Register </p></a></li>
              <li class="lifooter"> <a href="login.php"> <p> Login </p></a></li>
          
          </ul>
      
      </div>
      
      <div class="logofooter">
      
          <img  class="logolast" src="Fotot/logo.png">
          
      </div>
  
  </div>
  </footer>
  <script src="Script/contact.js"></script>
</body>


</html>

