<?php
$qs = $_SERVER['QUERY_STRING'];

if ($qs ==  "") {

} elseif(!empty($_GET['error']) and empty($_GET['success'])) {
    $er = $_GET['error'];
    echo "<div class='alert alert-danger alert-dismissible fade show ml-auto my-3' role='alert' style='position:fixed;top:10vh;right:0;z-index:4; width:25vw;'>
          <strong>$er</strong> neprobehlo uspesne!
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
 }
elseif(!empty($_GET['success']) and empty($_GET['error'])) {
  $su = $_GET['success'];
echo "<div class='alert alert-success alert-dismissible fade show ml-auto my-3' role='alert' style='position:fixed;top:10vh;right:0;z-index:4; width:25vw;'>
      <strong>$su</strong> probehlo uspesne!
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
}
elseif(!empty($_GET['success']) and !empty($_GET['error'])) {
  $su = $_GET['success'];
  $er = $_GET['error'];
echo "<div class='alert alert-success alert-dismissible fade show ml-auto my-3' role='alert' style='position:fixed;top: 10vh;right:0;z-index:4; width:25vw;'>
      <strong>$su</strong> probehlo uspesne!
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button>
      </div>";

echo "<div class='alert alert-danger alert-dismissible fade show ml-auto my-3' role='alert' style='position:fixed;top: 20vh;right:0;z-index:4; width:25vw;'>
            <strong>$er</strong> neprobehlo uspesne!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
}
?>
