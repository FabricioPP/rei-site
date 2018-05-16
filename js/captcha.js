
var v = grecaptcha.getResponse();
if(v.length == 0)
{
    alert("You can't leave Captcha Code empty");
}
else
{
    document.getElementById('btnSubmit').disabled = false;
}
