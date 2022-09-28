<!DOCTYPE html>
<html lang="en">
<head>
    <style>
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
        #emailandno,#password{
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
            <legend>Login</legend>
        
       
            <form name="registration" >
                 <div>
                    <label for="text">Email or number:</label><span>*</span>
                </div>
                <div>
                    <input type="text" id="emailandno" name="email" size="65" placeholder="Email">
                     <span id="mail"></span>
                </div>
               
                <div >
                   <label for="password">Password:</label><span>*</span>
                </div>
                <div>
                    <input type="password" id="password" name="password" size="65" placeholder="password"> 
                     <span id="pwd"></span>
                </div>
               
                <div class="btn">
                <input type="submit" onclick="return loginvalidation()" name="submit" id="submit">
                     <p>doesn't have an account!!!<a href="registration.php">Registration</a></p>
            </div> 
        </form>
    </fieldset>
    </div>
    <script src="registration.js"></script>
</body>
</html>