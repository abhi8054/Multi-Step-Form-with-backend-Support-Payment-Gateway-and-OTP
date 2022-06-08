<?php
    $conn = mysqli_connect("localhost","root",null,"kisanyojna");
    if(!$conn){
        die("Error");
    }

    $flag = $_GET['flag'];

    if($flag){
        
        $sql = "SELECT MAX(id) FROM userdetails;";
        $res =mysqli_query($conn,$sql);

        $data = mysqli_fetch_array($res);

        $update_sql="UPDATE `userdetails` SET `paystatus`='1' WHERE id = ".$data[0];

        if(mysqli_query($conn,$update_sql)){
            header("location:formdata.php?status=Payment Successfull and Registration Successfull&flag=1");
        }else{
            header("location:formdata.php?status=Payment Failed&flag=0");
        }
    }

    $task = $_POST["action"];
    switch($task){
        case 'save':
            $aadharno = $_POST["aadharno"];
            $mobileno = $_POST["mobileno"];
            $pancardno = $_POST["pancardno"];
            $state = $_POST["state"];
            $block = $_POST["block"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $fathername = $_POST["fathername"];
            $gender = $_POST["gender"];
            $date = $_POST["date"];
            $marriagestatus = $_POST["marriagestatus"];
            $village = $_POST["village"];
            $houseno = $_POST["houseno"];
            $post = $_POST["post"];
            $district = $_POST["district"];
            $pincode = $_POST["pincode"];

            if(isset($_POST["addmember"])){
                $addmember = $_POST["addmember"];
            }else{
                $addmember = 0;
            }

            $accountno = $_POST["accountno"];
            $ifsccode = $_POST["ifsccode"];
            $bankname = $_POST["bankname"];
            $accountholdername = $_POST["accountholdername"];
            // file access
            $aadharfront = $_FILES["aadharfront"]["name"];
            $af_temp = $_FILES["aadharfront"]["tmp_name"];

            $aadharback = $_FILES["aadharback"]["name"];
            $ab_temp = $_FILES["aadharback"]["tmp_name"];
            
            move_uploaded_file($af_temp,"aadhar/".$aadharfront);
            move_uploaded_file($ab_temp,"aadhar/".$aadharback);

            $pancardimg = $_FILES["pancardimg"]["name"];
            $pc_temp = $_FILES["pancardimg"]["tmp_name"];

            move_uploaded_file($pc_temp,"pancard/".$pancardimg);

            $sql = "INSERT INTO `userdetails`(`aadharno`, `mobileno`, `pancardno`, `state`, `block`, `fname`, `lname`, `fathername`, `gender`, `dob`, `marriage`, `village`, `houseno`, `post`, `district`, `pincode`, `addmember`, `accountno`, `ifccode`, `bankname`, `accountholdername`, `amount`, `paystatus`,`aadharfrontphoto`,`aadharbackphoto`,`pancardphoto`) VALUES ('$aadharno','$mobileno','$pancardno','$state','$block','$fname','$lname','$fathername','$gender','$date','$marriagestatus','$village','$houseno','$post','$district','$pincode','$addmember','$accountno','$ifsccode','$bankname','$accountholdername','100','0','aadhar/$aadharfront','aadhar/$aadharback','pancard/$pancardimg')";
            $res = mysqli_query($conn,$sql);
            if(!$res){
                echo "<script>alert('Something went wrong')</script>";
                header("location:index.html");
            }else{
                echo "<script>alert('Data Save Successfully')</script>";
                header("location:checkout/start.php");
            }
    }
?>                    