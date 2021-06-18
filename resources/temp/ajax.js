
document.getElementById("btnvk").addEventListener("click",make);

function make(){
    console.log('button clicked');
    const xhr = new XMLHttpRequest();
    xhr.open ("GET","data.txt",true);
    
    xhr.onload = function(){
        if(xhr.status === 200){
            console.log(xhr);
            document.getElementById('div1').textContent=xhr.response;
        }else{
            console.log('error');
        }
    }
    
    xhr.send();
}