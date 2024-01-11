<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mad Plate's Sizzling House</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha384-kmTzntF2ZzRO2WQUVfNRVgpK73aL/kW3ozzyB8b6TcFTlB0bF/B1y7JCAC9a8hUJ" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000; 
        }

        /* Footer CSS */
        .footer__container {
            background: url('images/8.png') no-repeat center center fixed; 
            background-size: cover; 
            height: 100vh; 
            display: cover;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .footer__logow img {
            width: 100%; 
            height: auto; 
            max-width: 200px; 
            display: block; 
            margin: 0 auto; 
            transform: scaleX(-1); 
        }
        .buttoncst:hover {
            background-color: red;
            color: white;
        }
        .buttoncst{
            
            border-radius: 2em;
            background: linear-gradient(111.4deg, rgb(246, 4, 26) 0.4%, rgb(251, 139, 34) 100.2%);
            margin-top: 3em;
            font-family: Anton;
            color: #453321;
            float: center;
            width: 350px;
            height: 80px;
            font-size: 35px;
            font-weight: bold; 
            color: black; 
        }

        .main__img {
            width: 35em; 
            height: 35em; 
            background: none; 
            margin-left: -30px; 
            margin-top: 5em; 
            position: absolute;
        }
        .right{
            float: right;
            background-color: transparent;
            height: 20em;
            width: 40em;
            margin-top: 13em;
            margin-right: 10em;
        }
    </style>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body>


     <!-- Image on the left -->
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="main__img--container">
                    <img class="main__img" src="images/1.png" title="Mad Plate's Logo" alt="Logo" />
                </div>
            </div>
        </div>
    </div>

    <div class="right">
    <p style=" font-size: 25px; color: white ; font-family: Ancient Kai; text-align: center;">Are you ?</p>
    <div class="text-center">
     <form method="post" action="customer.php">
     <button type="submit" name="login" class="btn buttoncst" style="margin-top: 0em;">Customer</button>
        
    </form>
        <p style="margin-top: 10px; margin-bottom: 40px; font-size: 25px; color: white ; font-family: Ancient Kai; text-align: center;">or</p>
        <form method="post" action="index.html">
        <button type="submit" class="btn buttoncst" style="margin-top: -1em;">Admin</button>
        </form>
    </div>
</div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer__container" id="bottom">
        <section class="social__media">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer__logow">
                            <a href="/" id="footer__logow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>