
var pass1= document.getElementById('txtPass1').value;
var pass2= document.getElementById('txtPass2').value;
var bt=document.getElementById('sbmRegister');
bt.addEventListener('click',function(){
    if(pass1 != pass2){
        alert("Mật khẩu không khớp");
        bt.setAttribute("type","button");
    }else{
        
    }
})

