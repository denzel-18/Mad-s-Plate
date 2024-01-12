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
    <!-- Custom Styles -->

    <style>
        * 

        /* Main Content CSS */
        .main {
            background-color: #141414;
        }

        .main__container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            justify-self: center;
            margin: 0 auto;
            height: 90vh;
            background-color: #131313;
            z-index: 1;
            width: 100%;
            max-width: 1300px;
            padding-right: 50px;
            padding-left: 50px;
        }

        .main__content {
            color: #fff;
            width: 100%;
        }

        .main__content h1 {
            font-size: 4rem;
            background-color: #ff8177;
            background-image: linear-gradient(to top, #f80000 0%, #ffffff 100%);
            background-size: 100%;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
        }

        .main__content h2 {
            font-size: 4rem;
            margin-top: 10px;
            background-color: #ff8177;
            background-image: linear-gradient(20deg, #f80000 0%, #ffffff 100%);
            background-size: 100%;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
        }

        .main__content p {
            margin-top: 1rem;
            font-size: 2rem;
            font-weight: 700;
        }

        .main__img--container {
            text-align: right;
            
        }

        #main__img {
            height: 110%;
            width: 110%;
            margin-left: 690px;
            margin-top: 50px;
        }

        
        .share-thoughts-container {
            position: absolute;
            top: 40%;
            left: 35%;
            transform: translate(-50%, -50%);
            background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
            padding: 50px;
            border-radius: 15px; 
        }

        .share-thoughts-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 30px;
            font-family: 'Roboto', sans-serif;
        }

        #thoughts-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 1.2rem;
            color: #333;
            font-family: 'Roboto', sans-serif;
        }

        textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: black;
            color: #fff;
            font-size: 1.2rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: white; /* Change to black on hover */
            color: black;
        }

        /* Footer CSS */
        .footer__container {
            background-color: #141414;
            padding: 5rem 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: cover;
        }

        #footer__logo {
            color: #fff;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 2rem;
        }

        .footer__image {
            width: 200px;
            height: 50%;
            margin-top: 0px;
        }

        /* Social Icons */
        .social__icon--link {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
        }

        .social__icons--span {
            font-size: 18px;
            color: #ffffff;
        }

        .social__media {
            max-width: 1000px;
            width: 100%;
        }

        .social__media--wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1000px;
            margin: 40px auto 0 auto;
        }

        .social__icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 240px;
        }

        .social__icon--link {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
        }

        .social__icons--span {
            font-size: 18px;
            color: #ffffff;
        }
        .social__media {
            max-width: 1000px;
            width: 100%;
        }

        .social__media--wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1000px;
            margin: 40px auto 0 auto;
        }

        .social__icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 240px;
  
        }

        .social__logo {
            color: #fff;
            justify-self: start;
            margin-left: 20px;
            cursor: pointer;
            text-decoration: none;
            font-size: 2rem;
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .website__rights {
            color: #fff;
        }

        @media screen and (max-width: 820px) {
        .footer__links {
            padding-top: 2rem;
        }

        #footer__logo {
          margin-bottom: 2rem;
        }

        .website__rights {
          margin-bottom: 2rem;
        }

        .footer__link--wrapper {
          flex-direction: column;
        }

        .social__media--wrap {
          flex-direction: column;
        }
      }

        @media screen and (max-width: 480px) {
          .footer__link--items {
            margin: 0;
            padding: 10px;
            width: 100%;
          }
        }
</style>
</head>
<body>
    

<!-- Hero Section -->
    <div class="main" id="top">
        <div class="container">
                <div class="col-lg-6">
                    <div class="main__img--container">
                        <img id="main__img" src="images/1.png" title="Mad Plate's Logo" alt="Logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Share Your Thoughts Section -->
     <div class="share-thoughts-container">
    <div class="container">
    <h2 class="share-thoughts-title"><strong>Tell us what's on your mind</strong></h2>
            <form action="process_message.php" method="post">
        <div class="form-group">
        <input type="email" placeholder="Insert Email Account:" name="email" required>
        </div>
        <div class="form-group">
              <textarea class="form-control" placeholder="Inquiries:" id="opinion" name="opinion" rows="3" required></textarea>
            </div>
        </div>
            <button type="submit" class="btn-primary">Submit</button>
        </form>
    </div>
</div>
         
    <!-- Footer Section -->
    <div class="footer__container" id="bottom">
        <section class="social__media">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer__logo">
                            <a href="customer.php" id="footer__logo"><img src="images/2.png" class="footer__image"
                                    title="Title" alt="Logo"></a>
                        </div>
                        <p class="website__rights">© Mad Plate's Sizzling House 2023. All rights reserved</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-md-6">
                        <div class="social__icons">
                            <a class="social__icon--link"
                                href="https://www.facebook.com/profile.php?id=100090826535166&mibextid=ZbWKwL"
                                target="_blank" aria-label="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a class="social__icon--link" href="/" target="blank" aria-label="Contact">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS and Popper.js -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>