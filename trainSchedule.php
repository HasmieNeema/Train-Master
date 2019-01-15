<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Train Schedule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    include_once "common-styles.php";
  ?>
</head>
<style type="text/css">
html{
  font-family: "Helvetica Neue", sans-serif;
  width:100%;
  color:#666666;
}

.dropdown {
  width: 30%;
  height: 40px;
}

.circle-icon {
    background:#ffcc00;
    padding:8px;
    border-radius: 60%;
}

button{
  display:inline-block;
  vertical-align:middle;
  border-radius:30px;
  margin:.20rem;
  font-size: 1rem;
  color:#FF0000;
  background:#ffffff;
  border:1px solid #ffffff;  
}

button:hover{
  border:1px solid #666666;
  background:#666666;
  color:#ffffff;
}
</style>
<body>
<?php
    include_once "headerNew.php";
  ?>
  <div class="title" style="text-align:center;">
    <h4>Train Schedule</h4>
  </div>

  <div  class="bookingBack">
    <div class="container">
    <br>
    <center>
    <select class="dropdown">
        <option>7.00 am</option>
        <option>8.00 am</option>
        <option>9.00 am</option>
        <option>10.00 am</option>
    </select>

    <br>

    <select class="dropdown">
        <option>8.00 am</option>
        <option>9.00 am</option>
        <option>10.00 am</option>
        <option>11.00 am</option>
    </select>
</center>
<br>
        <div class="col-md-6 ">
            <div class="bookingDiv">
            <br>
            
            <table class="table-responsive" width="100%" style="border-bottom:1px solid grey">
                <tr>
                    <td class="text-center">Arrival Time</td>
                    <td class="text-center"></td>
                    <td class="text-center">Departure Time</td>
                    <td class="text-center">Destination / Time</td>
                    <td></td>
                </tr>
                <tr>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <th class="text-center"><i class="fa fa-arrow-right"></i></th>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <td class="text-center">
                        <h4><i class="fa fa-money fa-2x circle-icon"></i></h4>
                        <button class="openDialog" href="#">Book Now </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="color: grey;">Start</td>
                    <td class="text-center" style="color: grey;"></td>
                    <td class="text-center" style="color: grey;"></td>
                    <td class="text-center" style="color: grey;">Destination</td>
                </tr>
            </table>
                <h4 align="left" style="color: grey;">1h 00m</h4>
            
        </div>
     </div>
        <div class="col-md-6 ">
            <div class="bookingDiv">
            <br>
            <table class="table-responsive" width="100%" style="border-bottom:1px solid grey">
                <tr>
                    <td class="text-center">Arrival Time</td>
                    <td class="text-center"></td>
                    <td class="text-center">Departure Time</td>
                    <td class="text-center">Destination/ Time</td>
                    <td></td>
                </tr>
                <tr>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <th class="text-center"><i class="fa fa-arrow-right"></i></th>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <td class="text-center">
                        <h4><i class="fa fa-money fa-2x circle-icon"></i></h4>
                        <button class="openDialog" href="#">Book Now </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="color: grey;">Start</td>
                    <td class="text-center" style="color: grey;"></td>
                    <td class="text-center" style="color: grey;"></td>
                    <td class="text-center" style="color: grey;">Destination</td>
                </tr>
            </table>
                <h4 align="left" style="color: grey;">1h 00m</h4>
            
        </div>
     </div>
        <div class="col-md-6 ">
            <div class="bookingDiv">
            <br>
            <table class="table-responsive" width="100%" style="border-bottom:1px solid grey">
                <tr>
                    <td class="text-center">Arrival Time</td>
                    <td class="text-center"></td>
                    <td class="text-center">Departure Time</td>
                    <td class="text-center">Destination/ Time</td>
                    <td></td>
                </tr>
                <tr>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <th class="text-center"><i class="fa fa-arrow-right"></i></th>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <th style="font-size : 18px;" class="text-center">10:10</th>
                    <td class="text-center">
                        <h4><i class="fa fa-money fa-2x circle-icon"></i></h4>
                        <button class="openDialog" href="#">Book Now </button>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="color: grey;">Start</td>
                    <td class="text-center" style="color: grey;"></td>
                    <td class="text-center" style="color: grey;"></td>
                    <td class="text-center" style="color: grey;">Destination</td>
                </tr>
            </table>
                <h4 align="left" style="color: grey;">1h 00m</h4>
            
        </div>
     </div>
       
    </div>
</div>
<?php
    include_once  "footer.php";
  ?>
    <script src="https://code.jquery.com/jquery-3.2.1.js"
     integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
     crossorigin="anonymous">

  </script>

  <script>
     	

	$(document).ready(function() {
 	 $('.openDialog').click(function() {
    if (confirm('Are you sure to book this train?')) {
      var url = $(this).attr('href');
      $('#content').load(url);
    }
  });
});
     </script>
</body>

<?php
    include_once  "common-js.php";
  ?>
</html>