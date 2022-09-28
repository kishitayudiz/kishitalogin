<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .div1{
            height:20vh;
            width:100%;
            background-color: beige;
        }
        ul{
            padding-top: 30px;
            padding-left: 30px;
           padding-right: 30px;
        }
        li{
            display: inline;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
        }
        p{
            float: right;
            font-size: 30px;
        }
        h3{
            text-align: center
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "reload()">
    <div class="div1">
        <ul>
           
            <li onclick="profile()">profile</li>
            <li onclick="window.open('profile.php','_self')">Edit profile</li>
            <li onclick="window.open('changepassword.php','_self')">change password</li>
            <li onclick="window.open('dashboard.php','_self')">dashboard</li>
            <li onclick="window.open('login.php','_self')">Logout</li>
               <p id="demo">user</p>
        </ul>
     
    </div>
    
    <div id="profile">
        <h3 id="h3"> </h3>
    </div>
    
    <script src="registration.js"></script>
</body>
</html>