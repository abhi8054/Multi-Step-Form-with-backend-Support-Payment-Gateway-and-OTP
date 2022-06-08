// alert("hello")
var resultGlobal = "";
var flag = 0;
var count = 2;//open
var otpGlobal = 0

function sendOtp(){
    const mno = document.myform.mobileno.value;
    // alert(mno)
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        document.getElementById("mno").innerHTML = "Sending....";
        if(this.status == 200 && this.readyState == 4){
            // alert(this.response);
            document.getElementById("mno").innerHTML = "Sent Successfully....";
            otpGlobal =this.response;
        } 
    }
    xhr.open("GET","http://localhost/kisanyojna/sendotp.php?mno="+mno,false);
    xhr.send();
}

function generateCaptcha(){
    var result ="";
    var captcha = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890";
    for(let i = 0 ;i<5;i++){
        result += captcha.charAt(Math.floor(Math.random()*captcha.length));
    }
//    alert(result)
   document.getElementById("show-captcha").innerHTML = result;
   resultGlobal = result;
}


const btnOpen = document.getElementById("btn-nav-open");
// alert(btnOpen);
const btnClose = document.getElementById("btn-nav-close");
const ulnav = document.getElementById("ulnav");
function toggleBtn(){
    if(count %2 == 0){
        btnOpen.setAttribute("style","display:none");
        btnClose.setAttribute("style","display:block");
        ulnav.setAttribute("style","display:block");
        count++;
    }else{
        btnOpen.setAttribute("style","display:block");
        btnClose.setAttribute("style","display:none");
        ulnav.setAttribute("style","display:none");
        count++;
    }
}

function refresh(){
    generateCaptcha();
}

function proceedStep1(){
    count= 0;
    const ano = document.myform.aadharno.value;
    const mno = document.myform.mobileno.value;
    const cpt = document.myform.captcha.value;
    const otp = document.myform.mobileotp.value;
    if(otp.length == 0){
        document.getElementById("otp").innerHTML = "OTP is not empty";
        count--;
        flag = 1;
    }else if(otp != otpGlobal){
        document.getElementById("otp").innerHTML = "OTP is not match";
        count--;
        flag = 1;
    }else{
        document.getElementById("otp").innerHTML = "";
        count++;
        flag =0;
    }

    if(ano.length < 16 || ano.length >16){
        document.getElementById("ano").innerHTML = "Aadhar number must be 16 digit";
        count--;
        flag = 1;
    }else{
        document.getElementById("ano").innerHTML = "";
        count++;
        flag = 0;
    }

    if(mno.length<10 || mno.length >10){
        document.getElementById("mno").innerHTML = "Mobile number must be 10 digit";
        count--;
        flag = 1;
    }else{
        document.getElementById("mno").innerHTML = "";
        count++;
        flag = 0;
    }
   
    if(cpt != resultGlobal){
        document.getElementById("cpt").innerHTML = "Captcha is not matched";
        count--;
        flag = 1;
    }else{
        document.getElementById("cpt").innerHTML = "";
        count++;
        flag = 0;
    }

    if(flag === 0 && count === 4){
        document.getElementById("step1").setAttribute("style","display:none;");
        document.getElementById("digit").setAttribute("style","display:none;");
        document.getElementById("step2").setAttribute("style","display:block;");
    }
}
function proceedStep2(){
    count = 0
    const apf = document.myform.aadharfront.value;
    const apb = document.myform.aadharback.value;
    const pp = document.myform.pancardimg.value;
    const pcn = document.myform.pancardno.value;
    const s = document.myform.state.value;
    const b = document.myform.block.value;
    const fn = document.myform.fname.value;
    const ln = document.myform.lname.value;
    const fnm = document.myform.fathername.value;
    const gndr = document.myform.gender.value;
    const dob = document.myform.date.value;
    const ms = document.myform.marriagestatus.value;
    const vn = document.myform.village.value;
    const p = document.myform.post.value;
    const dist = document.myform.district.value;
    const pin = document.myform.pincode.value;
    const term = document.myform.terms;
    // alert(term.checked);
    if(!term.checked){
        alert("Please accept Terms & Conditions");
        count--;
        flag =1;
    }else{
        count++;
        flag=0;
    }

    if(apf == "" ){
        document.getElementById("apf").innerHTML = "Please select jpg or png";
        count--;
        flag =1
    }else{
        document.getElementById("apf").innerHTML = "";
        count++;
        flag=0;
    } 
    if(apb == "" ){
        document.getElementById("apb").innerHTML = "Please select jpg or png";
        count--;
        flag =1
    }else{
        document.getElementById("apb").innerHTML = "";
        count++;
        flag=0;
    } 

    if(pp == "" ){
        document.getElementById("pp").innerHTML = "Please select jpg or png";
        count--;
        flag =1
    }else{
        document.getElementById("pp").innerHTML = "";
        count++;
        flag=0;
    } 

    if(pcn.length < 10 || pcn.length >10){
        document.getElementById("pcn").innerHTML = "Pan Card Number must be 10 digit";
        count--;
        flag = 1;
    }else{
        document.getElementById("pcn").innerHTML = "";
        count++;
        flag = 0;
    }

    if(s == ""){
        document.getElementById("s").innerHTML = "This field is required";
        count--;
        flag=1;
    }else{
        document.getElementById("s").innerHTML = "";
        count++;
        flag=0;
    } 

    if(b == ""){
        document.getElementById("b").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("b").innerHTML = "";
        count++;
        flag=0;
    }

    if(fn == ""){
        document.getElementById("fn").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("fn").innerHTML = "";
        count++;
        flag=0;
    } 

    if(ln == ""){
        document.getElementById("ln").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("ln").innerHTML = "";
        count++;
        flag=0;
    } 

    if(fnm == ""){
        document.getElementById("fnm").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("fnm").innerHTML = "";
        count++;
        flag=0;
    }

    if(gndr == ""){
       document.getElementById("gndr").innerHTML = "This field is required";
       count--;
       flag = 1;
    }else{
        document.getElementById("gndr").innerHTML = "";
        count++;
        flag=0;
    } 

    if(dob == ""){
        document.getElementById("dob").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("dob").innerHTML = "";
        count++;
        flag=0;
    } 

    if(ms == ""){
        document.getElementById("ms").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("ms").innerHTML = "";
        count++;
        flag=0;
    } 

    if(vn == ""){
        document.getElementById("vn").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("vn").innerHTML = "";
        count++;
        flag=0;
    } 

    if(hn == ""){
        document.getElementById("hn").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("hn").innerHTML = "";
        count++;
        flag=0;
    }  

    if(p == ""){
        document.getElementById("p").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("p").innerHTML = "";
        count++;
        flag=0;
    } 

    if(dist == ""){
        document.getElementById("dist").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("dist").innerHTML = "";
        count++;
        flag=0;
    } 

    if(pin == ""){
        document.getElementById("pin").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("pin").innerHTML = "";
        count++;
        flag = 0; 
    }

    if(flag === 0 && count === 18){
        document.getElementById("step2").setAttribute("style","display:none;");
        document.getElementById("step3").setAttribute("style","display:block;");
    }
    
}
function previousStep1(){
    document.getElementById("step2").setAttribute("style","display:none;");
    document.getElementById("step1").setAttribute("style","display:block;");
    document.getElementById("digit").setAttribute("style","display:block;");
}
function previousStep2(){
    document.getElementById("step3").setAttribute("style","display:none;");
    document.getElementById("step2").setAttribute("style","display:block;");
}

function proceedStep3(){
    count = 0;
    document.getElementById("step2").setAttribute("style","display:none;");
    const ban = document.myform.accountno.value;
    const ifsc = document.myform.ifsccode.value;
    const bn = document.myform.bankname.value;
    const bhn = document.myform.accountholdername.value;

    if(ban.length <11 || ban.length>16){
        document.getElementById("ban").innerHTML = "Account Number must be 11 to 16 digits";
        count--;
        flag = 1;
    }else{
        document.getElementById("ban").innerHTML = "";
        count++;
        flag = 0;
    }

    if(ifsc == ""){
        document.getElementById("ifsc").innerHTML = "This field is required";
        count--;
        flag=1;
    }else{
        document.getElementById("ifsc").innerHTML = "";
        count++;
        flag = 0;
    } 

    if(bn == ""){
        document.getElementById("bn").innerHTML = "This field is required";
        count--;
        flag=1;
    }else{
        document.getElementById("ano").innerHTML = "";
        count++;
        flag = 0;
    } 
    if(bhn == "" ){
        document.getElementById("bhn").innerHTML = "This field is required";
        count--;
        flag = 1;
    }else{
        document.getElementById("bhn").innerHTML = "";
        count++;
        flag = 0;
    }

    if(flag === 0 && count === 4){
        return true;
    }else{
        return false;
    }
}


