<?php

require('functions.php');


// Melde alle PHP Fehler (siehe Changelog)
error_reporting(E_ALL);

session_start();

$w48_config = parse_ini_file(config_file());

if (!isset($_SESSION['logged_in'])) {
  header('Location: index.php');
  exit();
}

if (!isset($_GET['lp'])) {
  header('Location: index.php?lp=login');
  exit();
}


    require('header.php');



?>

<main id="contentBox" class="" aria-live="off">

<div id="content" class="selectable" role="main" aria-live="polite">
    <div class="row model">
        <div class="flexlist block">
            <div class="flexitem">
                <div class="item">Ihr <?php print $w48_config['w48_Name']; ?>-Name: <?php print $w48_config['w48_hostname']; ?></div>
            </div>
            <div class="flexitem">
                <div class="item">
                    <div class="nobreak">Firmware: <a href="update.php"><?php print $w48_config['w48_Version']; ?></a> - <a href="">Version aktuell</a></div>
                </div>
            </div>
        </div>
    </div>
<br>

    <div class="row">
        <div class="flexlist block">
            <div class="flexitem">
                <div class="header">
                    <div class="title">Status</div>
                </div>
<br>
                <div class="item single">
                    <div class="desc led_green">
                        <div class="desc title">Internet</div>&emsp;
                        <div class="details info">
                            <span id="WaitForOnline">wird ermittelt...</span>
                            <script type="text/javascript">
                                timeout = setTimeout(WaitForOnline, 500);
                            </script>
                        </div>
                    </div>
                </div>
<br>
                <div class="item single">
                    <div class="desc led_green">
                        <div class="desc title">Rufnummer</div>&emsp;
                        <div class="details info">
                            <span id="WaitForSip">wird ermittelt...</span>
                            <script type="text/javascript">
                                timeoutsip = setTimeout(WaitForSip, 500);
                            </script>
                        </div>
                    </div>
                </div>
<br>



            </div>
        </div>
    </div>
</div>



<menu id="bottomMenu" class="bottomMenu"></menu>
</main>




</body>
</html>
