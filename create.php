<?php
include('classes/DB.php');
if(isset($_POST['shorten'])) {
  $url = $_POST['shortenurl'];
  $url = strval($url);
  if($url == "") {
    echo "Url is too short";
  }
  else {
    if((strpos($url, "http://")  !== false) or (strpos($url, 'https://') !== false)) {

    }
    elseif(strpos($url, "www") !== false) {
      $url = 'https://' . $url;
    }
    else {
      $url = 'https://www.' . $url;

    }
    DB::query('INSERT INTO urls VALUES(0, :link)', array(':link' => $url));

  }
}
?>
<form method="post" action="create.php">
<input type="text" placeholder="Url You Want To Shorten" name="shortenurl"/>
<br>
<input type="submit" value="Shorten" name="shorten"/>
</form>
