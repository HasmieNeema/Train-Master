<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="css/themes/theme1.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themes/custom.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

</head>
<style type="text/css">

html{
  font-family: "Helvetica Neue", sans-serif;
  width:100%;
  color:#666666;
}
</style>

<body>

    <!-- Event Details -->
    <div data-role="page" id="events" data-theme="b">
    <?php
    include_once  "headerNew.php";
  ?>

        <div class="title" style="text-align:center;">
    <h4>Leader Board</h4>
  </div>
<div class="ed-sec-1">
            <section class='rating-widget single-star'> 
                                              
            </section>
          
        </div>
        <div data-role="main" class="ed-sec-1" align="center">
            <ul data-role="listview" data-inset="true">

                <li >
                        <a href="" >
                        <h1 style="font-size: 30px;">01 &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;Stan Lee&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp; 5800</h1>
                        
                    </a>
                </li>
            </ul>

            <ul data-role="listview" data-inset="true">

                    <li >
                            <a href="" >
                            <h1 style="font-size: 30px;">02 &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;Emma Smith&nbsp;  &nbsp;&nbsp;&nbsp; 5720</h1>
                            
                        </a>
                    </li>
                </ul>

                <ul data-role="listview" data-inset="true">

                        <li >
                                <a href="" >
                                <h1 style="font-size: 30px;">03 &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;Emma Tents&nbsp;  &nbsp;&nbsp;&nbsp; 1500</h1>
                                
                            </a>
                        </li>
                    </ul>

                    <ul data-role="listview" data-inset="true">

                            <li >
                                    <a href="" >
                                    <h1 style="font-size: 30px;">04 &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;Pete Romes&nbsp;  &nbsp;&nbsp;&nbsp; 1200</h1>
                                    
                                </a>
                            </li>
                        </ul>


        </div>
 <div data-role="footer" class="ui-footer"> 

            <div class="footer-nav">
                    <hr>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>

            <div class="social-icons">
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
            </div>
            
            <h2>&copy; copyrights and other details</h2>
        </div>

        <div data-role="panel" id="panel1" data-display="overlay">
            <ul data-role="listview">
                <li><a href=""> Profile</a> </li>
                <li><a href=""> Home</a> </li>
                <li><a href=""> Event Details</a> </li>
                <li><a href=""> Locations</a> </li>
                <li><a href="favourites.html"> Favourites</a> </li>
                <li><a href="login.html"> Sign Out</a> </li>
            </ul>
        </div>
    </div>

</body>
</html>