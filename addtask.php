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
        #title{
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
            <legend>Add Task</legend>
        
       
            <form name="registration" >
                 <div>
                    <label for="text">Title here:</label><span>*</span>
                </div>
                <div>
                    <input type="text" id="title" name="email" size="65" placeholder="title">
                     <span id="mail"></span>
                </div>
               
                <div >
                   <label for="password">Description:</label><span>*</span>
                </div>
                 <div>
                     <textarea id="textarea" rows="15" cols="55" placeholder="Description"></textarea>
            </div>
                
            
                <div class="btn">
                <input type="submit" onclick="return addtask()" name="submit" id="submit">
                     
            </div> 
        </form>
    </fieldset>
    </div>
    <script src="registration.js"></script>
</body>
</html>