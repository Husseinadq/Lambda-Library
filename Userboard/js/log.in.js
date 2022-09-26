document.getElementById("loginForm").onsubmit = function () {
    
    //for email check
    let emil=document.getElementById("email").value;
    let emiR =/\w+@\w+.\w+/;
    let fruition=emiR.test(emil);   

   //check if email's formula is true and not null
   if(fruition=== false || emil==="")
   {
       alert("You must enter correct email");
       return false;
   } 
    //check if the password 1 is not null and not less than 6 digits
    if(document.getElementById("pass").value === "" || document.getElementById("pass").value.length <=6)
    {
        alert("You must enter password not less than 6 digits");
        return false;
    }
    return true;
}
