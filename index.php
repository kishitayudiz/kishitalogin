<!DOCTYPE html>
<html lang="en">
<head>
    <style>
   
        h1{
          text-align: center;
        }
        legend{
            font-size: 30px;
        }
        .form{
/*             background-color: rgba(245,200,135,0.75); */
/*            background-color: black;*/
            width:30%;
            padding: 10px;
            margin: auto;
            border-radius: 20px;
        }
        div{
            padding-left: 20px;
            padding-top: 10px;
        }
        #fullname,#email,#mobileno,#date,#password{
            height: 30px;
            border-radius: 5px;
        }
         label{
            font-size: 17px;
            font-family: sans-serif;
        }
        #submit{
            background-color: black;
            color:white;
            padding: 10px;
        }
        span{
            color:red;
/*            font-weight: bold;*/
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div  class="form">
        <fieldset>
            <legend>Registration Form</legend>
        
       
            <form name="registration"  >
                <div> 
                    <label for="fullname">FullName:</label><span>*</span>
                </div>    
                <div>
                    <input type="text" id="fullname" name="fullname" size="65" placeholder="Full name">
                    <span id="fname"></span>
                </div>
                 <div>
                    <label for="text">Email:</label><span>*</span>
                </div>
                <div>
                    <input type="text" id="email" name="email" size="65" placeholder="Email">
                     <span id="mail"></span>
                </div>
                <div>
                    <label for="mobileno">Mobile No:</label><span>*</span>
                </div>
                <div>
                    <input type="tel" id="mobileno" name="mobileno" placeholder="01234 - 56789" size="65">
                     <span id="mno"></span>
                </div>
                 <div>
                    <label for="gender">Gender:</label><span>*</span>
                </div>
                <div>
                    <input type="radio" id="male" name="gender">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender">
                    <label for="female">Female</label>
                </div>
                <div>
                    <label for="dob">DOB:</label><span>*</span>
                </div>
                <div>
                    <input type="date" id="date" name="date" >
                </div>
                <div >
                   <label for="password">Password:</label><span>*</span>
                </div>
                <div>
                    <input type="password" id="password" name="password" size="65" placeholder="password"> 
                     <span id="pwd"></span>
                </div>
               
                <div class="btn">
                <input type="submit" onclick="return validation()" name="submit" id="submit">
                <p> Already Exist!!!<a href="login.php">Login</a></p>
            </div> 
        </form>
    </fieldset>
    </div>
    <script src="registration.js"></script>
</body>
</html>