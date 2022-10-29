<?php
$themeClass = '';
$checkbox = '';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
  $themeClass = 'dark';
  $checkbox ='checked';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="navigation.css">
        <link rel="stylesheet" href="banner.css">
        <title>MY GEMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="main.js"></script>
    </head>
    <body class="<?php echo $themeClass; ?>" onload="document.body.style.opacity='1'">
        <!--My Navigation Menu-->
        <nav>
        <div class="topnav navbg" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="shoes.php" class="lnk">Shoes</a>
            <a href="mens.php" class="lnk">Mens</a>
            <a href="womens.php" class="lnk">Womens</a>
            <a href="kids.php" class="lnk">Kids</a>
            <a href="contact.php" class="lnk">Contact</a>
            
            <a href="javascript:void(0);" class="icon" style="float:right" onclick="myNav()">
                <i class="fa fa-bars"></i>
            </a>
            <div class="srch p-2">
                <form class="d-flex" action="search.php" method="GET">
                    <input id="demo1" class="form-control me-2 collapse " type="text" name="query" placeholder="Search">
                    <button  data-bs-toggle="collapse" data-bs-target="#demo1" class="btn srch-btn rounded-circle"  type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                    </button>
                </form>
            </div>
        </div>
        </nav>
        <div class="container-fluid" id="home">
            <br><br>
            <div class="heading">
                <h1>THIS SHOE</h1>
            </div>
            <div class="row" style="align-items: center; justify-content: center;">
                <button onclick="window.location.href='shoes.php'" class="col m-3 rounded p-3 hmpg-btn">
                    Explore
                </button>
                <button onclick="window.location.href='contact.php'" class="col m-3 rounded p-3 hmpg-btn">
                    Contact Us
                </button>
            </div>
        </div>
        <div class="fixed-bottom">
        <center>
        <a class="btn bttn-lnk mx-auto p-1" style="width:100%"  data-bs-toggle="collapse" href="#collapseOne">
                        ↯
                </a>
                <div class="p-2 mx-auto" style="display:inline-block; min-width:30%">

                    <div id="collapseOne" class="collapse">
                        <div class="card-body p-2">
                            <label class="switch">
                                <input type="checkbox" <?php echo $checkbox; ?> onclick="darkBody()">
                                <span class="slider round"></span>
                            </label>
                            <p style="font-style:italic; font-size:14px; display:inline-block; margin-left:10px;">Toogle Dark/Light Mode</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 mx-auto" style="display:inline-block; min-width:30%">
                
                    <div id="collapseOne" class="collapse">
                        <div class="card-body p-2">
                            <!--Footer content here-->
                            <p style="font-style:italic; font-size:14px; display:inline-block; margin-left:10px;">MYGEMS © 2022</p>
                        </div>
                    </div>    
                </div>
                <div class="p-2 mx-auto" style="display:inline-block; min-width:30%">
                    <div id="collapseOne" class="collapse">
                        <div class="card-body p-2">
                            <!--Footer content here-->
                            <p style="font-style:italic; font-size:14px; display:inline-block; margin-left:10px;">Designed By Jolen Mark Mascarenhas</p>
                        </div>
                    </div>    
                </div>
                <div id="collapseOne" class="collapse">
                    <div class="card-body p-2">
                        <!--Footer content here-->
                        <div class="slidecontainer">
                            <input type="range" min="25" max="260" value="100" class="slider2" id="myRange">
                        </div>
                    </div>
                </div> 
                <div class="p-2 mx-auto" style="display:inline-block; min-width:30%">

                    <div id="collapseOne" class="collapse">
                        <div class="card-body p-2">
                            <p>Zoom: <span id="demoz1"></span>%</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 mx-auto" style="display:inline-block; min-width:30%">
                
                    <div id="collapseOne" class="collapse">
                        <div class="card-body p-2">
                            <button onclick="resetzoom()" class="resetzoom">Reset Zoom</button>
                        </div>
                    </div>    
                </div>
                <div class="p-2 mx-auto" style="display:inline-block; min-width:30%">
                    <div id="collapseOne" class="collapse">
                        <div class="card-body p-2">
                            <!--Footer content here-->
                        </div>
                    </div>    
                </div>
            </center>
                </div>
        <!--js Scripts starts from here-->
        <script>
            function darkBody() {
            var element = document.body;
            element.classList.toggle("dark");
            let theme = "light";
            if (document.body.classList.contains("dark")) {
                theme = "dark";
            }
            document.cookie = "theme=" + theme;
            }
            
            function myNav() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
            }
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demoz1");
            output.innerHTML = slider.value;
            slider.oninput = function() {
            output.innerHTML = this.value;
            document.body.style.zoom=this.value+"%";
            }
            function resetzoom(){
                document.body.style.zoom="100%";
                var slider = document.getElementById("myRange");
                var output = document.getElementById("demoz1");
                output.innerHTML = 100;
                slider.value=100;
            }
        </script>

    </body>
</html>
