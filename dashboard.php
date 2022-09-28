<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .div1{
            height:10vh;
            width:100%;
            background-color: beige;
        }
        img{
            height:20vh;
            width:10%;
        }
        ul{
               padding-left: 10%;  
        }
        li{
            display: inline;
            padding: 15px;
           
            font-size: 20px;
            cursor: pointer;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <div class="div1">
        <h1 id="time"></h1>
        <ul>
            <li onclick="window.open('addtask.php','_self')">Add Task</li>
            <li onclick="window.open('updatetask.php','_self')">update Task</li>
            <li onclick="window.open('deletetask.php','_self')">delete Task</li>
            <li onclick="tasklist()">TaskList</li>
        </ul>
    </div>
    
    <img id="img" >
     <div class="" id="temperature"> </div>
        <div class="" id="description"></div>
        <div class="" id="location"></div>
    
    <div id="list">
      <h3 id="task"></h3>
        
    </div>
    <script src="dashboard.js"></script>
     <script src="registration.js"></script>
</body>
</html>