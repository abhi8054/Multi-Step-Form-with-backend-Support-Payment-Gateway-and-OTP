<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisan Samriddhi Yojna</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body onload="generateCaptcha()">
<div class="nav">
        <div class="navbtn">
            <button id="btn-nav-open" onclick="toggleBtn()" ><i class="fa-solid fa-bars"></i></button>
            <button id="btn-nav-close" onclick="toggleBtn()" ><i class="fa-solid fa-xmark"></i></button>
        </div>
        <ul id="ulnav" class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="formdata.php">Registration</a></li>
            <li><a>Apply For Job</a></li>
            <li><a>Sell</a></li>
            <li><a>Buy</a></li>
            <li><a>Contact</a></li>
            <li><a>Loans</a></li>
            <li><a>Privacy Policy</a></li>
            <li><a>Help & Support</a></li>
            <li><a>Terms & Conditions</a></li>
            <li><a>FAQs ?</a></li>
            <li><a href="Aboutus.html">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </div>
    <div class="container-sec">
        <form onSubmit="return proceedStep3()" action="action.php" name="myform" method="post" enctype="multipart/form-data">
        <div>
            <div class="head">
                <h2 class="title">Kisan Samriddhi Yojna</h2>
            </div>
            <div>
                <h1 id="digit" class="digit">999 / </h1>
            </div>
            
            <div id="step1">
                <div class="register">
                    <p>Registration Form</p>
                    <p>Registration <strong>Four Wheeler</strong></p>
                </div>
                <?php
                    if(isset($_GET['status'])){
                        if($_GET['flag']){
                            echo "<div style='width=100%;background-color:#25dd6ea3;font: size 1.5rem;padding:1rem;margin-bottom:1rem;color:white'>". $_GET['status']."</div>";
                        }else{
                            echo "<div style='width=100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin-bottom:1rem;color:white'>". $_GET['status']."</div>";
                        }   
                    }
                ?>
                <div class="entrydata">
                    <h1 class="add-b">Add Beneficiery</h1>
                    <div class="form">
                        <div  class="subrow">
                            <label>Aadhar Number</label><br><br>
                            <input type="number" name="aadharno" placeholder="Aadhar Number"><br>
                            <span id="ano"></span>
                        </div>
                        <div id="setotp" class="subrow">
                            <label>Mobile Number</label><br><br>
                            <input type="number"  name="mobileno" placeholder="Mobile Number"><br>
                            <span id="mno"></span><br>
                            <input type="button" onclick="sendOtp()" id="otpbtn" value="Send OTP" >
                        </div>
                        <div  class="subrow">
                            <label>Enter OTP</label><br><br>
                            <input type="number" name="mobileotp" placeholder="Aadhar Number"><br>
                            <span id="otp"></span>
                        </div>
                        <div  class="subrow">
                            <label>ENTER CAPTCHA</label><br><br>
                            <input type="text" name="captcha" placeholder="Enter Captcha"><br>
                            <span id="cpt"></span>
                        </div>
                       
                    </div>
                    <div class="captcha subrow">
                        <span id="show-captcha"></span>
                        <button id ="captabtn"type="button" onclick="refresh()">Refresh</button>
                    </div>
                </div>
                <div class="btn-step1">
                    <button id="btn-step1" type="button" onclick="proceedStep1()">Verify</button>
                </div>  
            </div>
            <div id="step2">
                <div class="form1">
                    <div class="document-detail">
                        <h3>Document Details : </h3>
                        <div class="row mobilerow">
                            <div class="subrow">
                                <label>Aadhar Front</label><br>
                                <input type="file" name="aadharfront" accept="image/png, image/jpeg"><br>
                                <span id="apf"></span>
                            </div>
                            <div class="subrow">
                                <label>Aadhar Back</label><br>
                                <input type="file" name="aadharback"  accept="image/png, image/jpeg" ><br>
                                <span id="apb"></span>
                            </div>
                            <div class="subrow">
                                <label>Pan Card</label><br>
                                <input type="file" name="pancardimg"  accept="image/png, image/jpeg"><br>
                                <span id="pp"></span>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="subrow">
                                <label>Pan Card Number</label><br>
                                <input type="text" name="pancardno"  placeholder="Pan Card Number"><br>
                                <span id="pcn"></span>
                            </div>
                            <div class="subrow">
                                <label>State </label><br>
                                <input type="text" name="state"  placeholder="State"><br>
                                <span id="s"></span>
                            </div>
                            <div class="subrow">
                                <label>Block</label><br>
                                <input type="text" name="block"  placeholder="Block"><br>
                                <span id="b"></span>
                            </div>
                        </div>
                    </div>
                    <div class="personal-detail">
                        <h3>Personal Details : </h3>
                        <div class="row">
                            <div class="subrow">
                                <label>First Name </label><br>
                                 <input type="text" name="fname"  placeholder="First Name"><br>
                                <span id="fn"></span>
                            </div>
                            <div class="subrow">
                                <label>Last Name</label><br>
                                <input type="text" name="lname"   placeholder="Last Name"><br>
                                <span id="ln"></span>
                            </div>
                            <div class="subrow">
                                <label>Father Name</label><br>
                                <input type="text" name="fathername"   placeholder="Father Name"><br>
                                <span id="fnm"></span>
                            </div>
                            <div class="subrow">
                                <label>Gender</label><br>
                                <input type="text" name="gender"  placeholder="Gender"><br>
                                <span id="gndr"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="subrow">
                                <label>Date OF Birth</label><br>
                                <input type="date" name="date" ><br>
                                <span id="dob"></span>
                            </div>
                            <div class="subrow">
                                <label>Marriage Status</label><br>
                                <input type="text" name="marriagestatus"  placeholder="Marriage Status"><br>
                                <span id="ms"></span>
                            </div>
                            <div class="subrow">
                                <label>Village Name</label><br>
                                <input type="text" name="village"  placeholder="Village Name"><br>
                                <span id="vn"></span>
                            </div>
                            <div class="subrow">
                                <label>House Number</label><br>
                                <input type="number" name="houseno"  placeholder="House Number"><br>
                                <span id="hn"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="subrow">
                                <label>POST</label><br>
                                <input type="text" name="post"  placeholder="POST"><br>
                                <span id="p"></span>
                            </div>
                            <div class="subrow">
                                <label>District</label><br>
                                <input type="text" name="district" placeholder="District"><br>
                                <span id="dist"></span>
                            </div>
                            <div class="subrow">
                                <label>PIN CODE</label><br>
                                <input type="number" name="pincode" placeholder="PIN CODE"><br>
                                <span id="pin"></span>
                            </div>
                            <div class="subrow">
                                <label>Add Member(optional)</label><br>
                                <input type="number" name="addmember" placeholder="Add Member">
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="terms" >
                            <label>Terms & Condition</label>
                        </div>
                    </div>
                </div>
                <div class=".btn-step2">
                    <button id="btn-step2-prev" type="button" onclick="previousStep1()">Previous</button>
                    <button id="btn-step2-submit" type="button" onclick="proceedStep2()">Next</button>
                </div>
            </div>
            <div id="step3">
                <div class="form2">
                    <div class="account-detail">
                        <h1>Back Account Details</h1>
                        <div class="row">
                            <div class="subrow">
                                <label>Account Number</label><br><br>
                                <input type="number" name="accountno" placeholder="Account Number"><br>
                                <span id="ban"></span>
                            </div>
                            <div class="subrow">
                                <label>IFSC Code</label><br><br>
                                <input type="text" name="ifsccode" placeholder="IFSC Code"><br>
                                <span id="ifsc"></span>
                            </div>
                            <div class="subrow">
                                <label>Bank Name</label><br><br>
                                <input type="text" name="bankname" placeholder="Bank Name"><br>
                                <span id="bn"></span>
                            </div>
                            <div class="subrow">
                                <label>Account Holder Number</label><br><br>
                                <input type="text" name="accountholdername" placeholder="Account Holder Name"><br>
                                <span id="bhn"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=".btn-step3">
                    <button id="btn-step3-prev" type="button" onclick="previousStep2()">Previous</button>
                    <button id="btn-step3-submit" name="action" value="save" type="submit" >Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div> 
    <script src="index.js"></script>
</body>
</html>   