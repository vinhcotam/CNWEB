var pass1 = document.getElementById('pass');
var pass2 = document.getElementById('txtPass2');
var btn = document.getElementById('sbNew');
var email=document.getElementById('email');
var code=document.getElementById('code');
btn.addEventListener('click', function () {
    if (pass1.value != pass2.value) {
        alert('2 mật khẩu nhập không giống nhau');
    } 
    else {
        $.ajax({
            url: 'processnewpass.php',
            type: 'post',
            data: {
                pass: pass1.value,
                email: $('#email').value,
                code: $('#code').value
            },
            success: function (pass, email, code) {
                alert('tôi nhận được: ' + pass + email + code);
            }
        })
    }
    
})