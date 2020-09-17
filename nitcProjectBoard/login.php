
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
body{  
  font-family: Calibri, Helvetica, sans-serif;
  
}  
button {   
        background-color: blue;   
        width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text],input[type=email] {   
        width: 50%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px blue;   
        box-sizing: border-box;   
    }  
 input[type=text], input[type=password] {   
        width: 50%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px blue;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
    h1{
        color:#0A0344;
    }
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body style="background-image: url('wall1.jpg');background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
    ">    
    <center> <h1> LOGIN TO ACCESS NITC PROJECT BOARD</h1> </center>   
    <form action = "validation.php" method = "POST">  
        <div class="container">   
            <label> Enter Your Email:</label>  
            <br> 
            <input type="email" placeholder="Enter Email" name="email" required> 
            <br> 
            <label>Enter Password: </label>   
            <br>
            <input type="password" placeholder="Enter Password" name="password" required>  
            <br>
            <button type="submit">Login</button>                
        </div>   
    </form> 
    <a href="index.html"><button>GO BACK TO MAIN PAGE</button></a>    
</body>     
</html> 