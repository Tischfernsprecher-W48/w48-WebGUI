<?php

require('functions.php');


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

    <div class="row">
        <div class="flexlist block">
            <div class="flexitem">

                <div class="header">
                    <div class="title">Information</div>
                </div>

                <br>
                <div class="item single">
                    <div class="details info">Der FRITZ!Fon Mediaserver ermöglicht, Musik, Bilder und Videos, die an der FRITZ!Box zur Verfügung stehen, im Heimnetz abzuspielen. Das Abspielgerät im Heimnetz muss den Standard UPnP unterstützen. </div>
                </div>

            </div>
        </div>
    </div>
</div>



<menu id="bottomMenu" class="bottomMenu"></menu>
</main>




</body>
</html>
