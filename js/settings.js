console.log('hello settings.js')

function validate() {
    let name = String(document.getElementById("name").value);
    let email = String(document.getElementById("email").value);
    let number = String(document.getElementById("number").value);
    let password = String(document.getElementById("password").value);
    let cpassword = String(document.getElementById("cpassword").value);

    if (name.length <= 3 || name.length == '') {
        alert("Please Fill Name");
        return false;
    }
    if (email.length <= 3) {
        alert("Please Fill Email");
        return false;
    }
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (!email.match(mailformat)) {
        alert("Please Enter Valid Email");
        return false;
    }

    if (number.length != 10) {
        alert("Please Enter Valid Mobile Number In 10 Character");
        return false;
    }
    if (password.length <= 7) {
        alert("Please Enter Minimum 8 Character");
        return false;
    }
   
    if (password!= cpassword) {
        alert("Please Carefull Enter Passwords Both Are Diffrent ");
        return false;
    }
    var oFile = document.getElementById("image").files[0]; 
    if (oFile.size>600000)
    {
        alert("File size must under 600 KB!");
        return false;
    }
    else {
        return true;
    }

}
