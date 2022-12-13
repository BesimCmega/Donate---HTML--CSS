function validateFormLogin()                                    
{ 
               
    var email = document.forms["myForm"]["email"];    
    var password = document.forms["myForm"]["password"];   
   
    
       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
        return false; 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
       
        return false; 
    } 
   
    if (password.value == "")                           
    {
        document.getElementById('errorpassword').innerHTML="Please enter a valid message"; 
        return false; 
    } else{
        document.getElementById('errorpassword').innerHTML="";
        alert("You've logged in successfully, you can Donate now! Thank you!");  
    }
   
    
}
