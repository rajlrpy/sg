<!DOCTYPE html>
<html lang ="en">
    <head>
        <title> SG Music Production </title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width,initial-scale=1.0">
        <meta name = "author" content="">
        <link rel= "stylesheet" href = "assets/style.css?v=<?php echo filemtime("assets/style.css");?>">
        <link rel= "stylesheet" href = "fa/css/fa.css?v=<?php echo filemtime("fa/css/fa.css");?>">
        <link href="https://fonts.googleapis.com/css?family=Allura|Bad+Script|Kaushan+Script|Merienda|Nothing+You+Could+Do|Poiret+One" rel="stylesheet">
   </head>
    <body>
        <header id = "showcase">
            <div class = "bgimg"></div>
            <div id = "logo">
              <a href= "/"  id = "btn_logo"> SG MUSIC </a>
            </div>
            <div class = "content-wrap">
                <h1> MUSIC REDEFINED !</h1>
                <p>The music that touches your soul.</p>
            </div>
            <b>____ <span class = "fa fa-music"></span>_____</b>

            <div id = "play">
                <span class = "fa fa-play" title = "Play" id="launch_player"></span>
            </div>
        </header>
        <main id = "main">
            <section id = "section-a">
              <div class = "content-wrap">
                <div class = "content-title">
                  <h1> THIS IS CONTENT </h1>
                </div>
                <div class = "content-text">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </section>
            <section id = "section-b">
              <div class = "content-wrap">
                <div class = "content-title">
                  <h1> THIS IS CONTENT </h1>
                </div>
                <div class = "content-text">
                  <p> THIS IS TEXT</p>
                </div>
              </div>
            </section>
            <section id = "section-c">
              <div class = "content-wrap">
                <div class = "content-title">
                  <h1> THIS IS CONTENT </h1>
                </div>
                <div class = "content-text">
                  <p> THIS IS TEXT</p>
                </div>
              </div>
            </section>
        </main>
        <footer>
            <section id = "player" class = "-none">
              <audio id = "music" preload="auto"></audio>
              <div id = "player-title">
                <span class = "title"> DESPACITO FT. JUSTIN BIEBER </span>
              </div>
              <div id = "player-wrapper">
                <img src = "images/1.jpeg" id = "album">
                <progress id = "progress-bar" min="0" max= "100" value="0">0%</progress>
                <span id ="duration">00:00 / 00:00</span>
                <span class = "fa fa-refresh"></span>
                <span class = "fa fa-play" id = "btnPlayPause"></span>
                <span class = "fa fa-stop" id = "btnStop"></span>
                <span class = "fa fa-mute" id = "btnMute"></span>
                <span class = "fa fa-list" id = "playlist"><i class = "fa fa-music"> </i> </span>
              </div>
            </section>
        </footer>
        <section id = "playlist_list" class = "disp-none">
          <div id = "playlist_list-wrapper">
            <ul>
              <li  id = "">Top 7 Songs <span class = "fa fa-search"></span></li>
              <li > Mila Na Mujhe <br /><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star-half-full checked"></span> </li>
              <li > Sab khatam Ho gya <br /><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star-half-full checked"></span> </li>
              <li > Mila Na Mujhe <br /><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star-half-full checked"></span> </li>
              <li > Mila Na Mujhe <br /><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star checked"></span><span class = "fa fa-star-half-full checked"></span> </li>

          </div>
        </section>
    </body>
</html>
<script src = "js/player.js"></script>
