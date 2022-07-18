
<style>
    .txt-center{
    text-align: center;
}

body{
    height: 100vh;
    font-family: 'Poppins',sans-serif;
    background: url("https://wallpaperplay.com/walls/full/b/3/7/329976.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.center1{
    margin: auto;
}

.center3{
    display: flex;
    align-items: center;
    resize: both;
}

.two-step-div .two-title{
    font-size: 22px;
    font-weight: bold;
    color: #3c3c3c;
    margin-top: 15px;
}

.two-step-div .my-img{
    width: 140px;
    height: auto;
}

.two-step-div .two-p{
    font-size: 13px;
    margin-top: 15px;
    margin-bottom: 30px;
    color: #666666;
}

.two-step-div #form{
    direction: ltr;
}

.two-step-div #form input{
    border-color: transparent;
    background: transparent;
    border-bottom: 1.5px solid #cccccc;
    text-align: center;
    font-size: 20px;
    margin-right: 10px;
    margin-left: 10px;
}

.two-step-div #form input:focus{
    outline: 0px transparent !important;
    box-shadow: transparent !important;
    border-right: transparent !important;
    border-left: transparent !important;
    border-top: transparent !important;
    border-color: #00AEEF;
    animation: border-pulsate 1.5s infinite;
    -webkit-tap-highlight-color: transparent;
}

.two-step-div .not-first:disabled{
    background-color: transparent;
    border-bottom: 1px solid #cccccc !important;
}

@-moz-keyframes border-pulsate {
    0% {
        border-color: #00AEEF;
    }
    50% {
        border-color: rgba(0,0,0,0.3);
    }
    100% {
        border-color: #00AEEF;
    }
}
@-webkit-keyframes border-pulsate {
    0% {
        border-color: #00AEEF;
    }
    50% {
        border-color: rgba(0,0,0,0.3);
    }
    100% {
        border-color: #00AEEF;
    }
}
@-o-keyframes border-pulsate {
    0% {
        border-color: #00AEEF;
    }
    50% {
        border-color: rgba(0,0,0,0.3);
    }
    100% {
        border-color: #00AEEF;
    }
}
@keyframes border-pulsate {
    0% {
        border-color: #00AEEF;
    }
    50% {
        border-color: rgba(0,0,0,0.3);
    }
    100% {
        border-color: #00AEEF;
    }
}

.btn-verify{
    background: #00AEEF;
    color: #ffffff;
    border-color: transparent;
    border-radius: 7px;
    padding: 10px 25px;
    font-size: 14px;
    cursor: pointer;
    /*transition: all 0.5s;*/
    width: auto;
    position: relative;
    transition: 0.5s ease;

}

.btn-verify:hover {
    transform: translateY(-8px);

}

.btn-verify:disabled{
    background: rgba(103, 187, 209, 0.93);
    cursor: auto;
}

.btn-verify:disabled:hover{
    transform: none;

}
</style>
<?php
    session_start();

    if(!isset($_SESSION['tempuser']) || !isset($_SESSION['tempusername']) || !isset($_SESSION['otptwostep'])) header('./login.php');

    if(isset($_POST['btn'])) {
        if($_POST['otp'] == "") {
            ?><script>alert("Invalid OTP Code")</script><?php
            header("./two_step_verify.php");
        }
        if($_POST['otp'] == $_SESSION['otptwostep']) {

            $_SESSION['user'] = $_SESSION['tempuser'];
            $_SESSION['username'] = $_SESSION['tempusername'];

            unset($_SESSION['tempuser']);
            unset($_SESSION['tempusername']);

            if(isset($_SESSION['show']))
            {
                header('location:booking.php');
            }
            else
            {
                header('location:index.php');
            }
        }
    }
?>
<div class="verification">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-lg-6 float-right center1 txt-center card-box2 two-step-div">
            <img class="my-img" src="https://icons-for-free.com/iconfiles/png/512/locked+login+password+privacy+private+protect+protection+safe-1320196167397530530.png">
            <p class="two-title">Two Step-Verification</p>
            <p class="two-p">Enter 4-digit code</p>
            <form id="form" action="#" method="POST">
                <div>
                    <span><?php echo $_SESSION['tempusername']; ?></span>
                    <input type="text" placeholder="OPT CODE" name="otp">
                </div>
                    <button style="margin-top: 35px" name="btn" class="btn btn-primary btn-embossed btn-verify">Verify</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
