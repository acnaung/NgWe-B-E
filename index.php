<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgWe Nergy & Busyness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style> 
        body {
            background-image: url('PPUAI.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        header h1 { color: silver; /* Change text color to Silver */ 
        background-color: rgba(0, 0, 0, 0.6); /* Background color with opacity */ 
        padding: 10px; /* Padding around the text */ 
        border-radius: 5px; /* Optional: Rounded corners */
        }
        .logo { height: 80px; /* Adjust the size as needed */ 
        margin-right: 20px; /* Adjust spacing as needed */ 
        }
        .bg-custom-blue {
            background-color: #5a439d98;
        }
        .nav-link.text-about-page { 
            color: aqua !important; 
        } 
        .nav-link.text-who-we-are { 
            color: white !important; 
        } 
        .nav-link.text-contact { 
            color: white !important; 
        } 
        .text-disabled { 
            color: rgb(216, 236, 220) !important;
        }    
        .dropdown-submenu { 
            position: relative; 
        } 
        .dropdown-submenu:hover > .dropdown-menu { 
            display: block; /* Ensure submenu is initially hidden */
            top: 0; 
            left: 100%; 
            margin-top: -1px; 
        } 
        .dropdown-submenu > a::after { 
            display: none; /* Ensure arrowhead is displayed properly */ 
            content: '\25BA'; /* Unicode character for right arrow */ 
            float: right; 
            margin-left: 5px; 
        } 
        .dropdown-menu > li > a:hover, .dropdown-submenu:hover > a { 
            background-color: #226ab1; /* Highlight background color */ 
            color: #000; /* Highlight text color */ 
        } 
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container-fluid d-flex justify-content-between align-items-center">
        <h1 class="d-flex justify-content-center">NgWe & Business</h1>
        <img src="NEBLogo.jpg" alt="NgWe E&B Logo" class="logo"> </div>
        <div class="container-fluid bg-custom-blue">
            <ul class="nav nav-pills d-flex justify-content-left">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                        <li class="dropdown-submenu"> 
                            <a class="dropdown-item" href="#">Well Engineering</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Drilling.html">Drilling</a></li>
                                <li><a class="dropdown-item" href="Completion.html">Completion</a></li>
                                <li><a class="dropdown-item" href="Well_Integrity.html">Well Integrity</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Well Construction</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="CasingDesign.html">Casing Design</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="CasingLoads.html">Casing Loads</a></li>
                                        <li><a class="dropdown-item" href="DesignParameters.html">DesignParameters</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Directional Drilling</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Well Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Well Intervention</a></li>
                                <li><a class="dropdown-item" href="#">Workover</a></li>
                            </ul>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Plug & Abandonment</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Exploration Abandonment</a></li>
                                <li><a class="dropdown-item" href="#">Temporary Abandonment</a></li>
                                <li><a class="dropdown-item" href="#">Final Well Abandonment</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Who We Are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </header>  
</body>
</html>