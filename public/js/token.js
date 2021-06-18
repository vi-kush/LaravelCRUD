document.getElementById("register").addEventListener("click",make);

document.getElementById("generatetoken").addEventListener("click",create);

document.getElementById("remove").addEventListener("click",revoke);




function make(){
    var name = document.getElementById('registername').value; 
    var email = document.getElementById('registeremail').value; 
    var password = document.getElementById('registerpassword').value; 
    var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    //console.log('button clicked', name, email, password);
    var data = new FormData();
    data.append("name",name);
    data.append("email",email);
    data.append("password",password);

    const xhr = new XMLHttpRequest();
    xhr.open ("POST","http://127.0.0.1:8000/api/register",true);
    
    //xhr.responseType='json';
    xhr.setRequestHeader('Accept',"application/json");
    xhr.setRequestHeader('X-CSRF-Token', _token);
    
    xhr.onload = function(){
        if(xhr.readyState==4 || xhr.status==200){
            console.log(xhr);
            //document.getElementById('response').innerText="";
            document.getElementById('response').innerText=xhr.response;
            obj=JSON.parse(xhr.response);
            //document.getElementById('response').innerText=obj.token;
            var x=document.getElementById('authtoken');
            x.setAttribute("value",obj.token);

        }else{
            console.log('error');
        }
    }

    //xhr.setRequestHeader('content-type',"application/x-www-form-urlencoded");
 
    xhr.send(data);
}

function create(){
    var email = document.getElementById('generatetokenemail').value; 
    var password = document.getElementById('generatetokenpassword').value; 
    var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    //console.log('button clicked', name, email, password);
    

    var data = new FormData();
    data.append("email",email);
    data.append("password",password);

    const xhr = new XMLHttpRequest();
    xhr.open ("POST","http://127.0.0.1:8000/api/generate",true);
    
    //xhr.responseType='json';
    xhr.setRequestHeader('Accept',"application/json");
    xhr.setRequestHeader('X-CSRF-Token', _token);
    
    xhr.onload = function(){
        if(xhr.readyState==4 || xhr.status==200){
            console.log(xhr);
            //document.getElementById('response').innerText="";
            document.getElementById('response').innerText=xhr.response;
            obj=JSON.parse(xhr.response);
            //document.getElementById('response').innerText=obj.token;
            var x=document.getElementById('authtoken');
            x.setAttribute("value",obj.token);
        }else{
            console.log('error');
        }
    }

    //xhr.setRequestHeader('content-type',"application/x-www-form-urlencoded");
 
    xhr.send(data);
}

function revoke(){

    var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
   
    var token = document.getElementById('authtoken').getAttribute('value');
    token = "Bearer "+token;
    var x=document.getElementById('authtoken');
    x.setAttribute("value"," ");
    
}

// function revoke(){

//     var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
   
//     var token = document.getElementById('authtoken').getAttribute('value');
//     console.log("token",token);
//     const xhr = new XMLHttpRequest();
//     xhr.open ("POST","http://127.0.0.1:8000/api/revoke",true);
    
//     //xhr.responseType='json';
//     xhr.setRequestHeader('Accept',"application/json");
//     xhr.setRequestHeader('Authorization',"Bearer "+token);
//     xhr.setRequestHeader('X-CSRF-Token', _token);
    
//     xhr.onload = function(){
//         if(xhr.readyState==4 || xhr.status==200){
//             console.log(xhr);
//             //document.getElementById('response').innerText="";
//             document.getElementById('response').innerText=xhr.response;
//             //obj=JSON.parse(xhr.response);
//             //document.getElementById('response').innerText=obj.token;
//             var x=document.getElementById('authtoken');
//             //x.setAttribute("value"," ");
//         }else{
//             console.log('error');
//         }
//     }

//     //xhr.setRequestHeader('content-type',"application/x-www-form-urlencoded");
 
//     xhr.send();
// }