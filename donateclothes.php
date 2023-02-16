
<!DOCTYPE html>

<title>Donate Clothes</title>

<link rel="stylesheet" type="text/css" href="Style/donateclothes.css">

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
            
    
        </nav>
        </header>

    <br><br>
<!--Main-->
    <h1 class="main-text">Donate Clothes</h1><br><br><br>
        <main id="mainStyle">
    <div class="left-side">
        <?php
            include 'configDonateClothes.php';
            $donateClothesRegister = new DatabaseDonateClothes();
            $check = $donateClothesRegister->check();
            

            

        ?>
    <!-- onsubmit="return validateDonateClothesForm()" -->
        <form name="myForm" method="post" onsubmit="return validateDonateClothesForm()">
        <div>
            <label for="formName" class="form-label">Name: <br></label>
            <input type="text" class="formStyle" id="formName" name="name" placeholder="Write your name here..."><br>
            <span class="error" id="errorname"></span>

        </div><br>

        <div >
            <label for="formSurname" class="form-label">Surname: <br></label>
            <input type="text" class="formStyle" id="formSurname" name="surname" placeholder="Write your surname here..."><br>
            <span class="error" id="errorsurname"></span>

        </div><br>

        <div>
            <label for="inputEmail" class="form-label">Email:<br></label>
            <input type="email" class="formStyle" id="inputEmail" name="email" placeholder="Write your email here..."><br>
            <span class="error" id="erroremail"></span>

        </div><br>
        <div>
            <label for="inputPhone" class="form-label">Phone Number:<br></label>
            <input type="number" class="formStyle" id="inputNumber" name="number" placeholder="Write your phone number here... "><br>
            <span class="error" id="errornumber"></span>
        </div><br>
        
        <div>
            <label for="inputAddress" class="form-label">Adress:<br></label>
            <input type="text" class="formStyle" id="inputAddress" name="adress" placeholder="Write the adress you want to send the clothes to... "><br>
            <span class="error" id="erroradress"></span>
        </div><br>
        
        <div>
            <label for="inputClothes" class="form-label">Clothes:<br></label>
            <textarea name="clothes" id="txtA"  placeholder="Write here what clothes you want to give... "></textarea><br>
            <span class="error" id="errortext"></span>
        </div><br>

        <input type="file" name="image" id="image"><br><br>
        
        <input type="submit"  name="submit" value="Donate" id="dnButt"><br></input>
        </form>

    </div>

    <div class="right-side">
        
        <img src="./Fotot/donateclothes.png">
        
    </div>
    
</main>

    <br><br>
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
                <li class="lifooter"> <a href="register.php"><p> Register </p></a></li>
                <li class="lifooter"> <a href="login.php"><p> Login </p></a></li>
            
            </ul>
        
        </div>
        
        <div class="logofooter">
        
            <img  class="logolast" src="Fotot/logo.png">
            
        </div>
    
    </div>
    </footer>
    <script src="Script/donateclothes.js"></script>
</body>

</html>

