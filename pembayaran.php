<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gedung Bhayangkara</title>
<link rel="shortcut icon" href="images/icon.ico"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/stylecc.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>

<body>

<?php
include('includes/db_con.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $ktp = $_POST['ktp'];
  $date = $_POST['date'];
  $address = $_POST['address'];
  $intr = $_POST['usertype'];
  $save = "INSERT INTO users (name,email,phone,ktp,date,address,payment_type)VALUES('".$name."','".$email."','".$phone."','".$ktp."','".$date."','".$address."','".$intr."')";
  $result = mysqli_query($conn,$save);
  header("Location: thx.php");
  exit();
}
?>

<div class="container">
  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="index.html">Home</a></li>
    <li role="presentation" class="active"><a href="contact.html">Contact</a></li>
  </ul>
  <div class="jumbotron">
    <div id="contenair" align="center">
      <div class="agileits_w3layouts_main_grid">
      <h2>Pembayaran Reservasi</h2>
      <br />
        <table>
        <form method="post" name="signupform" action="">
        <tr>
          <td height="40">Nama</td>
          <td><input name="name" type="text" id="name" size="40" required="" /></td>
        </tr>
        <tr>
          <td height="40">Email</td>
          <td><input name="email" type="text" id="email" size="40" required="" ></td>
        </tr>
        <tr>
          <td height="40">Nomor Telepon</td>
          <td><input name="phone" type="text" id="phone" size="40" class="phone" required="" /></td>
        </tr>
        <tr>
          <td height="40">Nomor KTP</td>
          <td><input name="ktp" type="text" id="ktp" size="40" required="" /></td>
        </tr>
        <tr>
        <link rel="stylesheet" href="./date/jquery-ui.css">
        <script src="./date/jquery-1.12.4.js"></script>
        <script src="./date/jquery-ui.js"></script>
        <script>
          $( function() {
            $( "#datepicker" ).datepicker();
          }
          );
        </script>
          <td height="40">Tanggal</td>
          <td><input name="date" type="text" id="datepicker" size="40" required="" /></td>
        </tr>
        <tr>
          <td height="40">Alamat</td>
          <td><input name="address" type="text" id="address" size="40" required="" /></td>
        </tr>
        <tr>
        <td>Pilihan Paket : </td>
          <td>
            <input type="radio" name="usertype" id="usertype1" value="biasa" />Biasa
			<input type="radio" name="usertype" id="usertype1" value="jumbo" />Jumbo
            <input type="radio" name="usertype" id="usertype2" value="super" required="" />Super Jumbo
          </td>
        </tr>
        <tr>
          <td align="center" colspan="2"><input type="submit" name="submit" value="submit" /></td>
        </tr>
        </form>
        </table>
      </div>
    </div>
  </div>
</div>
<center><br />
<footer id='copyright'>
<div id='copy'>
Copyright &#169; 2017 Bhayangkara All Right Reserved
  </div>
  <div class='clear'/>
  </footer>
<script type="text/javascript" src="js/jquery-1.12.4.js"/>
<script type="text/jacascript" src="js/bootstrap.js/">
</body>
</html>
