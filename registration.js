  let userdata = new Array();


function checkSession(){
    if (!sessionStorage.getItem("sessionUser")) {
        window.location = "login.php"
    }
}


function validation(){
    
   var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var mobileno = document.getElementById("mobileno").value;
    var gender = document.registration;
    var date = document.getElementById("date").value;
    var password = document.getElementById("password").value;
    
  
    
    // name validation
    if(fullname == ""){
        document.getElementById("fname").innerHTML = "*please enter fullname"
    }
    else{
         document.getElementById("fname").innerHTML = ""
//         localStorage.setItem("fullname",fullname);
    }
    
    // mail validation
    if(email == ""){
        document.getElementById("mail").innerHTML = "*please enter email"
    }
    else
    if(email.indexOf('@') <= 0){
         document.getElementById("mail").innerHTML = "*@ position is not valid"
    }
    else
    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
         document.getElementById("mail").innerHTML = "*. position is not valid"
    }
    else{
         document.getElementById("mail").innerHTML = ""
//         localStorage.setItem("email",email);
    }
    
    // number validation
 
    if(isNaN(mobileno)){
          document.getElementById("mno").innerHTML = "*mobile no only allows numbers"
    }
    else
    if(mobileno.length != 10){
          document.getElementById("mno").innerHTML = "*mobile no must be 10 digits"
    }
    else{
         document.getElementById("mno").innerHTML = ""
//         localStorage.setItem("mobileno",mobileno);
    }
        // password validation
    if(password == ""){
         document.getElementById("pwd").innerHTML = "*please enter password"
    }
    else
    if(password.length <=8){
        document.getElementById("pwd").innerHTML = "*password length must be greater than or equal to 8"
    }
    else{
         document.getElementById("pwd").innerHTML = ""
//         localStorage.setItem("password",password);
//        localStorage.setItem("date",date)
         userdata = JSON.parse(localStorage.getItem("users"))?JSON.parse(localStorage.getItem("users")):[];
        if(userdata.some((v) => {return v.email == email})){
            alert("Email is already used")
        }
        else{
             userdata.push({
         "fullname":fullname,
        "email":email,
        "mobileno":mobileno,
        "date":date,
        "password":password,
        "title": "",
        "description": ""
    })
    localStorage.setItem("users",JSON.stringify(userdata));
   
         window.open('login.php','_self')
        }
   
    }
return false;
    
}


//  let pw = localStorage.getItem("password")
//     let mail = localStorage.getItem("email")
//     let no = localStorage.getItem("mobileno")
//     let name = localStorage.getItem("fullname")
//     let date = localStorage.getItem("date")
// console.log(pw,mail,no,name,date)
     
   let storage = JSON.parse(localStorage.getItem("users"))    
  
function loginvalidation(){
   
     var emailandno = document.getElementById("emailandno").value;
    var passwordlogin = document.getElementById("password").value;
//    let storage = JSON.parse(localStorage.getItem("users"))    
    console.log(storage)
     for (let i = 0; i < storage.length; i++) {
            if((storage[i].email === emailandno)){
                console.log(emailandno);
                if(storage[i].password == passwordlogin){
                       sessionStorage.setItem("userIndex", i);
                    sessionStorage.setItem("sessionUser", true);
                    window.open('main.php','_self')
                }
                else{
                     alert("please enter valid password");
                }
            } 
            
        }
//    
//    if(emailandno == mail || emailandno == no){
//        
//       if(password == pw){
//           console.log("true")
//           alert(`login ${name}`)
//            window.open('main.html','_self')
//       }
//        else{
//            alert('wrong password')
//        }
//    }
//    else{
//         alert('wrong email')
//    } 
    return false;
}

 let name = sessionStorage.getItem("userIndex")
function reload(){

   checkSession();
     document.getElementById("demo").innerHTML = storage[name].fullname
    
//     let name = localStorage.getItem("fullname")
//    document.getElementById("demo").innerHTML = name
}

function profile(){ 
    checkSession();
     document.getElementById("h3").innerHTML = `Name : ${storage[name].fullname} </br> Email : ${storage[name].email} </br>  Mobile no : ${storage[name].mobileno} </br> Date :  ${storage[name].date} `
}



function updatevalidation(){
    checkSession();
    var upfullname = document.getElementById("fullname").value;
    var upemail = document.getElementById("email").value;
    var upmobileno = document.getElementById("mobileno").value;
      var update = document.getElementById("date").value;
    console.log(upfullname,upemail,upmobileno,update)
    
    if(upfullname != ""){
//         localStorage.setItem("fullname",upfullname);
        storage[name].fullname = upfullname;
    }
     if(upemail != ""){
//         localStorage.setItem("email",upemail);
         storage[name].email = upemail;
    }
     if(upmobileno != ""){
//          localStorage.setItem("mobileno",upmobileno);
         storage[name].mobileno = upmobileno;
    }
     if(update != ""){
//         localStorage.setItem("date",update)
         storage[name].date = update;
    }
     localStorage.setItem("users", JSON.stringify(storage));
     window.open('main.php','_self')
    return false;
}


function changevalidation(){
     checkSession();
     var chpassword = document.getElementById("password").value;
//      localStorage.setItem("password",password);
//      storage[name].password = chpassword;
//    localStorage.setItem("users", JSON.stringify(storage));
    console.log(storage[name].password)
    if(chpassword == storage[name].password){
         document.getElementById("pwd").innerHTML = "*password must be different from last"
    }
    else{
       storage[name].password = chpassword;
        localStorage.setItem("users", JSON.stringify(storage));
        window.open('login.php','_self')
    }

    return false;
}


function addtask(){
    checkSession();
    
    var title = document.getElementById("title").value;
    var description = document.getElementById("textarea").value;
    console.log(title,description)
    storage[name].title = title;
     storage[name].description = description;
    localStorage.setItem("users", JSON.stringify(storage));
    window.open('dashboard.php','_self')
   return false;
}


function updatetask(){
    checkSession();
     var title = document.getElementById("title").value;
    var description = document.getElementById("textarea").value;
    if(title != ""){
        storage[name].title = title
    }
     if(description != ""){
        storage[name].description = description
    }
    localStorage.setItem("users", JSON.stringify(storage));
     window.open('dashboard.php','_self')
    return false;
}

function deletetask(){
    checkSession();
    var title = document.getElementById("title").value;
    if(title == storage[name].title){
          storage[name].title = ""
        storage[name].description = ""
    }
    localStorage.setItem("users", JSON.stringify(storage));
     window.open('dashboard.php','_self')
    return false;
}

function tasklist(){
    checkSession();
//     let storage = JSON.parse(localStorage.getItem("users"))    
//     let name = sessionStorage.getItem("userIndex")
 
    document.getElementById("task").innerHTML = `Task List </br> ${storage[name].title}`
}