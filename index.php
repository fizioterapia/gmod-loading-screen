<?php
    $apikey = '<add your api key here>';

    if (isset($_GET['sid'])) {
        $steamid = $_GET['sid'];
    } else {
        $steamid = '76561197960279927';
    }

    $api = json_decode(file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $apikey . "&steamids=" . $steamid), true);

    $authserver = bcsub( $steamid, '76561197960265728' ) & 1;
    $authid = ( bcsub($steamid, '76561197960265728') - $authserver ) / 2;
    $steamid32 = "STEAM_0:$authserver:$authid";

    $avatar = $api['response']['players'][0]['avatarfull'];
    $player_name = $api['response']['players'][0]['personaname'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loading Screen</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
  </head>
  <body>
    <div id="background">
<<<<<<< HEAD
=======
      <img
        src="https://cdnb.artstation.com/p/assets/images/images/024/538/827/original/pixel-jeff-clipa-s.gif?1582740711"
      />
>>>>>>> 5c368cfdab1e356967da758eb4ac89a8636d441c
      <div class="overlay"></div>
    </div>
    <div id="loading">
      <div class="server--information">
        <h1>kozak gaming</h1>
        <div class="server--map">
          You're currently playing <span id="gamemode">sandbox</span> on
          <span id="mapname">gm_construct</span>.
        </div>
        <div class="progress">
          <span id="percent" class="progress--inner"> 0% </span>
        </div>
        <span id="status" class="progress--title"
          >Retrieving server info...</span
        >
      </div>
      <div class="player--information">
        <div class="player--avatar">
          <img src="<?php echo $avatar; ?>" />
        </div>
        <div class="player--userinfo">
          <div class="inner">
            <span class="player--username"> <?php echo $player_name; ?> </span>
            <span class="player--steamid"> <?php echo $steamid32; ?> </span>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.1.18/jquery.backstretch.min.js" integrity="sha512-bXc1hnpHIf7iKIkKlTX4x0A0zwTiD/FjGTy7rxUERPZIkHgznXrN/2qipZuKp/M3MIcVIdjF4siFugoIc2fL0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
=======
>>>>>>> 5c368cfdab1e356967da758eb4ac89a8636d441c
    <script src="assets/js/loading.js"></script>
  </body>
</html>
