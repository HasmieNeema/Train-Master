<!DOCTYPE html>
<html>
<head>
    <title>Support</title>
    <link rel="stylesheet" href="css/themes/theme1.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
  <?php
    include_once  "common-styles.php";
  ?>
   
</head>
 <style type="text/css">
    .field {
        width:50%;
        height:30%;
    }
</style>

<body>
    <div data-role="page" id="events" data-theme="a">

        <div data-role="header" data-position="fixed">
            <h1>Support</h1>
            <a href="#panel1" data-icon="bars" data-iconpos="notext"> Menu </a>
            <a href="" data-icon="back" data-iconpos="notext"> Back </a>
        </div>
        <br>
        <br>
        <form action="">
            &nbsp Email<br>
            <input class="field" type="text" name="email">
            <br>
            &nbsp Issue:<br>
            <textarea rows="10" cols="100"></textarea>
            <br><br>
            <input type="submit" value="Send Mail" style="color: #3385ff">
        </form>
    </div>
    <?php
    include_once  "footer.php";
  ?>
</body>

<?php
    include_once  "common-js.php";
  ?>
</html>