<?php
    include_once "db.php";

    $sql = "SELECT * FROM `schedule` WHERE `status`=1";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bookings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <?php
    include_once  "common-styles.php";
  ?>
</head>
<style type="text/css">

html{
  font-family: "Helvetica Neue", sans-serif;
  width:100%;
  color:#666666;
  
}
 .footer h2{

      color: black!important;
      text-align: center!important;
  }
  

button{
  display:inline-block;
  vertical-align:middle;
  border-radius:30px;
  margin:.20rem;
  font-size: 1rem;
  color:#FF0000;
  background:#ffffff;
  border:1px solid #FF0000;  
}

.redIcon {
	color:red !important;
	font-size:35px;
}

button:hover{
  border:1px solid #666666;
  background:#666666;
  color:#ffffff;
}

a{
	text-decoration:none;
}

</style>

<body>
    
<?php
    include_once  "headerNew.php";
  ?>

  <div class="title" style="text-align:center;">
    <h4>Bookings</h4>
  </div>
  <div  class="bookingBack">
        
  <?php foreach ($data as $a) { ?>
		
		<div class="bookingDiv">
            <table>
                <tr>
                    <th>Arrival Time</th>
                    <th></td>
                    <th>Departure Time</th>
                    <th>Destination/ Time</th>
  
                </tr>
                <tr>
                    <td><h3><?php echo $a['arrival_time'] ?></h3></td>
                    <td><i class="fa fa-arrow-right"></i></td>
                    <td><h3><?php echo $a['departure_time']?></h3></td>
                    <td><h3><?php echo $a['destination']?></h3></td>
                    <td rowspan="5">

						<i class="fa fa-trash redIcon"></i>
						<button class=""  onclick="removeItem(<?php echo $a['id']?>)">Remove </button>

                    </td>
                </tr>
                <tr>
                    <td class="grayFont">Start</td>
                    <td></td>
                    <td></td>
                    <td class="grayFont">Destination</td>

                </tr>
				<tr>
				<td><p style="font-size:11px">10h 00m</p></td>
				<td></td>
				<td></td>
				<td></td>
		
				</tr>
            </table>
              
        </div>
		
        <?php } ?> 
</div>
<!--<div data-role="footer" class="ui-footer"> 

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
    </div>-->
  <script src="https://code.jquery.com/jquery-3.2.1.js"
     integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
     crossorigin="anonymous">

  </script>

  <script>
  
     </script>

<script>
function removeItem(id){
        if (confirm('Are you sure to delete the booking?')) {

    $.ajax({
           type: "POST",
           url: 'functions/delete.php',
           dataType: 'json',
           data: {id:id},
           success: function(response) {
                location.reload();     
            },
            error: function() {
                location.reload();
            }
         });
         
        }
    }

</script>

</body>
<?php
    include_once  "footer.php";
  ?>

<?php
    include_once  "common-js.php";
  ?>
</html>