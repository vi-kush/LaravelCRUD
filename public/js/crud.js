document.getElementById('add').addEventListener('click',add);

function add(){
    var token = "Bearer "+document.getElementById('authtoken').getAttribute('value');
    var task = document.getElementById('task').value; 
    var user_id = document.getElementById('user_id').value; 
    var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    //console.log('button clicked', name, email, password);
    

    var data = new FormData();
    data.append("task",task);
    data.append("user_id",user_id);

    const xhr = new XMLHttpRequest();
    xhr.open ("POST","http://127.0.0.1:8000/api/todo/add",true);
    
    //xhr.responseType='json';
    xhr.setRequestHeader('Accept',"application/json");
    xhr.setRequestHeader('X-CSRF-Token', _token);
    xhr.setRequestHeader('Authorization',token);
    
    xhr.onload = function(){
        if(xhr.readyState==4 || xhr.status==200){
            console.log(xhr);
            //document.getElementById('response').innerText="";
            document.getElementById('response').innerText=xhr.response;
 
            //document.getElementById('response').innerText=obj.token;
            
        }else{
            console.log('error');
        }
    }

    //xhr.setRequestHeader('content-type',"application/x-www-form-urlencoded");
 
    xhr.send(data);
}

document.getElementById('update').addEventListener('click',update);

function update(){
    var token = "Bearer "+document.getElementById('authtoken').getAttribute('value');
    var task_id = document.getElementById('task_id').value; 
    var status = document.getElementById('status').value; 
    var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    //console.log('button clicked', name, email, password);
    

    var data = new FormData();
    data.append("task_id",task_id);
    data.append("status",status);

    const xhr = new XMLHttpRequest();
    xhr.open ("POST","http://127.0.0.1:8000/api/todo/status",true);
    
    //xhr.responseType='json';
    xhr.setRequestHeader('Accept',"application/json");
    xhr.setRequestHeader('X-CSRF-Token', _token);
    xhr.setRequestHeader('Authorization',token);
    
    xhr.onload = function(){
        if(xhr.readyState==4 || xhr.status==200){
            console.log(xhr);
            //document.getElementById('response').innerText="";
            document.getElementById('response').innerText=xhr.response;
 
            //document.getElementById('response').innerText=obj.token;
            
        }else{
            console.log('error');
        }
    }

    //xhr.setRequestHeader('content-type',"application/x-www-form-urlencoded");
 
    xhr.send(data);
}
