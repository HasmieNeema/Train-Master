<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/themes/theme1.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" /> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<style type="text/css">
	
	.social-icons {
    	text-align: center;
	}
	
	.social-icons a {
	    padding: 20px;
	    font-size: 30px;
	    width: 30px;
	    text-align: center;
	    text-decoration: none;
	    border-radius: 50%;
	}
	
	.footer-nav ul {
		list-style: none;
		display: inline-flex;
		width: 100%;
	}
	
	.footer-nav hr {
		border-color:#777;
	}
	
	.footer-nav ul li {
		width: 33%;
		text-align: center;
	}
	
	.footer-nav ul li a {
		text-decoration: none;
		color: #fff;
	}
	
	.ui-footer {
		background-color: #1d1d1d !important;
		border-color: #1b1b1b !important;
		color: #fff !important;
		text-shadow:none !important;
	}

</style>

</head>

<body>

        <div data-role="footer"> 

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
        
</body>
</html>