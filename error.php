<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png">
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.min.css">
        <title>Blueberry Bakery | Error!</title>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md position-absolute w-100 bg-transparent text-white">
            <a href="index.html" class="navbar-brand">
                <img src="img/logo.png" alt="Blueberry logo">
                <h4 class="navbar-text font-logo text-shadow-black d-none d-sm-inline-block">Blueberry</h4>
            </a>
            <button class="navbar-toggler" 
                data-toggle="collapse"
                data-target="#main-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav ml-auto font-menu font-weight-bold">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>         
                    <li class="nav-item">
                        <a href="treats.html" class="nav-link">
                            The treats
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="menu.html" class="nav-link">
                            Menu
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">
                            About
                        </a>
                    </li>    
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">
                            Contact
                        </a>
                    </li>         
                </ul>
            </div>
        </nav>
        <section class="container-fluid error-s1 d-flex">
            <div class="row mx-auto my-auto text-center text-white text-shadow-black">
                <div>
                    <h1 class="font-logo">Blueberry</h1>
                    <h4 class="font-menu font-weight-bold">
                        The best bakery in the city!
                    </h4>
                </div>
            </div>
        </section>
        <section class="container-fluid error-s2 d-flex bg-light" id="message">
            <div class="row my-auto mx-auto py-5 font-menu px-3">
                <div class="col-12 col-sm-8 offset-sm-2 text-secondary text-shadow-gray text-center text-sm-left">
                    <h1 class="h4 font-logo text-light text-center text-shadow-black pb-3">
                        Error!
                    </h1>
                    <div class="w-100 text-center pb-3">
                        <span class="fas fa-thumbs-down display-4 text-secondary"></span>
                    </div>
                    <p class="initialism text-center">
                        Sorry, but due to the technical problems your message was not sent!
                        Please try again later or contact with us directly.
                    </p>
                </div>
                <div class="col-12 text-center">
                    <a href="index.html" class="btn btn-outline-secondary">
                        <span class="fa fa-home"></span> Go back
                    </a>
                </div>
            </div>
        </section>
        <footer class="container-fluid border-top border-gray bg-light">
            <div class="row">
                <div class="col-12 col-sm-6 p-3 text-secondary text-center text-sm-left">
                    <h4 class="font-logo initialism">Contact</h4>
                    <address class="font-menu initialism pl-2">
                        BLUEBERRY BAKERY<br>
                        123 Street, NY<br/>
                        123456, United States<br/>
                        +1 123-456-7890
                    </address>
                </div>
                <div class="col-12 col-sm-6 p-3 text-secondary text-center text-sm-left">
                    <div class="float-sm-right float-none">
                        <h4 class="font-logo initialism">Menu</h4>
                        <div class="list-group pl-sm-3">
                            <a href="index.html" class="text-secondary">Home</a>     
                            <a href="treats.html" class="text-secondary">The treats</a>
                            <a href="menu.html" class="text-secondary">Menu</a>
                            <a href="about.html" class="text-secondary">About</a>
                            <a href="contact.html" class="text-secondary">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 border-top border-gray mt-3">
                    <p class="text-center text-secondary">
                        Website demo, Copyright &copy; 2020 |
                        <a href="privacy.html#terms" class="text-secondary">Privacy</a>
                    </p>
                </div>
            </div>
        </footer>
        <div class="modal" id="privacyModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="font-weight-bold text-secondary">GPDR Declaration</h4>
                    </div>
                    <div class="modal-body">
                        <p class="initialism">
                            This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                            in long term meaning (longer than needed for website operation during visitor's
                            presence), any user (visitor) data. All information collected during visitor's 
                            presence on this website is used only for technical purposes, required for 
                            correct operation of website or demonstration purposes related to technical 
                            mechanisms and presentation of its operation... 
                            <a href="privacy.html#terms" class="label label-primary">More about privacy</a>
                        </p>                        
                        <p class="initialism">
                            If you accept privacy policy please click button "accept". If you 
                            refuse it, leave page by closing it in your web browser, please.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center w-100">
                            <button class="btn btn-success"
                                onclick="acceptPrivacyPolicy()">
                                Accept
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <script src="js/main.min.js"></script>
    </body>
</html>