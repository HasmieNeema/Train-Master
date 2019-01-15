<?php
    include_once "db.php";

    $sql = "SELECT * FROM `user_comment`";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Location Information</title>
    <link rel="stylesheet" href="css/themes/theme1.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themes/custom.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script>
  $( function() {
    $( ".dialog" ).dialog();
  } );
  </script>
</head>

<body>

    <!-- Event Details -->
    <div data-role="page" id="events" data-theme="a">

        <?php
    include_once  "headerNew.php";
  ?>

        <div class="title" style="text-align:center;">
    <h4>Location Information</h4>
  </div>

        <div class="ed-sec-1">
            <section class='rating-widget single-star'> 
                    <!-- Rating Stars Box -->
                    <div class='rating-stars text-right'>
                      <ul id='stars'>
                        <li class='star' title='Poor' data-value='1'>
                          <i class='fa fa-star fa-fw'></i>
                        </li>
                      </ul>
                    </div>
                                                                     
                  </section>
            
        </div>
        
        	<div class="clear-fix"></div>

        <div class="ed-sec-2">
            <div class="ed-sec-2-item">
                <img src="img/bb1.jpg"/>
            </div>
            <div class="ed-sec-2-item">
                    <img src="img/bb2.jpg"/>
            </div>
            <div class="ed-sec-2-item">
                    <img src="img/bb3.jpg"/>
            </div>
            <div class="ed-sec-2-item">
                    <img src="img/bb4.jpg"/>
            </div>
        </div>

			<div class="clear-fix"></div>

        <div class="ed-sec-3">
            <h2>Big Ben</h2>
            <p>Big Ben is the nickname for the Great Bell of the clock at the north end of the place of westminster in London and <br>is usually extended to refer to both the clock and tower.</p>
           
        </div>

        <div class="ed-sec-4">
                <div data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="true">
                    <h4><span>2 Reviews</span>
                    	<span>
                    	<div class='rating-stars text-center'>
                              <ul id='stars'>
                                <li class='star' title='Poor' data-value='1'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Fair' data-value='2'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Good' data-value='3'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Excellent' data-value='4'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='WOW!!!' data-value='5'>
                                  <i class='fa fa-star fa-fw'></i>
                                </li>
                              </ul>
                            </div>
                    </span>
                    </h4>
                      
                    <ul data-role="listview" data-inset="true">
                        <li>

                <?php foreach ($data as $b) { ?>
                    
                        <table>
                            
                            <tr><h1><?php echo $b['uName'] ?></h1></tr>
                            <tr><h3><?php echo $b['comment']?></h3></tr>
                            
                        </table>
                    
                <?php } ?> 
   
                        </li>
                        
                    </ul>
                </div>
              <button><a href="#addComment" data-rel="popup" data-transition="pop" data-position-to="window">Add Comment</a></button>

        <div data-role="popup" id="addComment" data-dismissible="false" style="max-width:100%;">
    <div data-role="header">
        <h1>Comment</h1>
    </div>

    <div role="main" class="ui-content">
        <label for="email">Leave a comment here</label>
        <input type="text" name="cmnt" id="name">
        <div class="mc-text-center"><button class="openDialogComment"> Submit</button></div>
        <div class="mc-text-center"><button onclick="history.go(-1);"> Cancel</button></div>
    </div>
</div>
                <div class="event-location">
                	<h2>Event Location</h2>
                	<div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15844.672303997371!2d79.8667830592118!3d6.870454396966933!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1547290300359" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <button>Travel Here</button>
            
                </div>   
                
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
            
            <h2>Train Master <br>
        &copy; All Rights Reserved</h2>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
  
        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
        
            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
                $(this).addClass('hover');
            }
            else {
                $(this).removeClass('hover');
            }
            });
            
        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
            $(this).removeClass('hover');
            });
        });
        
        
        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            
            for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
            }
            
            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
            }
            else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg);
            
        });
        
        });

        function responseMessage(msg) {
        $('.success-box').fadeIn(200);  
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
        }

//         $(document).ready(function() {
//  	 $('.openDialogComment').click(function() {
//     if (confirm('Comment Added')) {
//       location.reload();
//     }
//   });
// });

    </script>

</body>
</html>