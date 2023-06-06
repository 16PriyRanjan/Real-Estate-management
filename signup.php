<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SQUAT</title>
    <link rel="icon" href="image/logo.png" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .login-dark {
            height: 1000px;
            background-size: cover;
            position: relative;
        }

        body {
            background: #222D32;
            font-family: 'Roboto', sans-serif;
        }

        .login-dark form {
            max-width: 320px;
            width: 90%;
            background: #1A2226;
            padding: 40px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }

        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }

        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
        }

        .login-dark form .btn-primary {
            background: #214a80;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }

        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            border-color: #0DB8DE;
            color: #0DB8DE;
            outline: none;
        }

        .login-dark form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .login-dark form .forgot:hover,
        .login-dark form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
    <script>
        /*JAVA SCRIPT CODING*/
        function validate()
        {
            if(document.getElementById("name").value=="")
            {
                alert("Fill Your Name");
                document.getElementById("name").focus();
                return false;
            }
            if(document.getElementById("mobileNumber").value=="")
            {
                alert("Fill Your valid Mobile Number");
                document.getElementById("mobileNumber").focus();
                return false;
            }
            if(document.getElementById("email").value=="")
            {
                alert("Fill Your valid Email");
                document.getElementById("email").focus();
                return false;
            }
            var p1,p2;
            p1=document.getElementById("pass").value;
            p2=document.getElementById("conpass").value;
            if(p1!=p2)
            {
                alert("Password Mismatch");
                document.getElementById("conpass").focus();
                return false;
            }
            if(document.getElementById("pass").value=="")
            {
                alert("Fill Your valid Password1");
                document.getElementById("pass").focus();
                return false;
            }
            if(document.getElementById("conpass").value=="")
            {
                alert("Fill Your valid Password");
                document.getElementById("pass").focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="login-dark" style="height: 695px;">
    <form action="code.php" method="POST" onsubmit="return validate();" >
            <h2 class="sr-only">Signup Form</h2>
            <div class="illustration">
                <i class="icon ion-ios-locked-outline"></i>
            </div>
            <div class="form-group">
                <input class="form-control" id="name" type="name" name="unm" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input class="form-control" id="mobileNumber" type="text" name="mobile" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input class="form-control" id="email" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" id="pass" type="password" name="pnm" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" id="conpass" type="password" name="repnm" placeholder="Re-Type Password">
            </div>
            <div class="form-group">
                <button type="submit" onclick="validation()" class="btn btn-primary btn-block" name="signup_btn">Register</button>
            </div>
            <a class="forgot" href="login.php" >Login</a>
        </form>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>