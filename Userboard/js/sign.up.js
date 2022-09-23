document.getElementById("register").onsubmit = function () {
    
    //for email check
    let emil=document.getElementById("email").value;
    let emiR =/\w+@\w+.\w+/;
    let fruition=emiR.test(emil);

    // for phone number check
    let phonVale=document.getElementById("number").value;
    let truePhone=/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{3})$/;
    let phoneFruition=truePhone.test(phonVale);



    // check if the user name is first and last name and not null 
    if(/^[A-Za-z]*\s{1}[A-Za-z]*$/g.test(document.getElementById("name").value)===false ||document.getElementById("name").value === "")
    {
        alert("You must enter your first and last name");
        return false;
    }

    //check if email's formula is true and not null
    if(fruition=== false || emil==="")
    {
        alert("You must enter correct email");
        return false;
    }
    
    // check if the phone number is number,less than 10 digits and not null
    if(phoneFruition=== false || phonVale === "")
    {
        alert("You must enter correct phone number");
        return false;
    }

    // check if the gender is checked 
    if (register.Gender[0].checked == false && register.Gender[1].checked == false) {
        alert("You must chose your gender");
        return false;
    }

    //check if the password 1 is not null and not less than 6 digits
    if(document.getElementById("pass1").value === "" || document.getElementById("pass1").value.length <=6)
    {
        alert("You must enter password not less than 6 digits");
        return false;
    }

    // check if the password 2 is like password 1
    if(document.getElementById("pass2").value !== document.getElementById("pass1").value)
    {
        alert("The password is not identical");
        return false;
    }
    
    return true;
}

 // check if user agree with policy
function submetChecker(){
   if(document.Register.Agree.checked==true)
        document.Register.Signup.disabled=false;
   else
        document.Register.Signup.disabled=true;

}