function checkpass() {
var pass1 = document.getElementById('pass1');//It contains password
var pass2 = document.getElementById('pass2');//It contains conf pass
var message=document.getElementById('Confirmed Password');
var goodColor="white";//if pass is confirmed
var badColor="red";//if pass is not confirmed

if(pass1.value== pass2.value)
    {
        pass1.style.boxShadow="0 0 0.5em green";
        pass2.style.boxShadow="0 0 0.5em green";
        //message.style.color=goodColor;
        message.innerHTML="Password Match";
    }
    else
        {
            pass1.style.boxShadow= "0 0 0.5em white";
            pass2.style.boxShadow= "0 0 0.5em red";
          //  message.style.color=badColor;
            message.innerHTML="Password Do Not Match";

        }
}


function submit()
{
    var pass1=document.getElementById('pass1');
    var pass2=document.getElementById('pass2');
    if(pass1!=pass2)
        {
            alert("Password did not match!");
            window.open(URL("Signup1.html"));
        }
}