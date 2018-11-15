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
                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
Wireless Local Area Network; deutsch drahtloses lokales Netzwerk; bezeichnet ein lokales Funknetz, wobei meist ein Standard der IEEE-802.11-Familie gemeint ist.<br>
<br>
So ist das auch beim <?php print $w48_config['w48_Name']; ?> welches die Standards 802.11 b/g/n nutzt.<br>



                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>



<menu id="bottomMenu" class="bottomMenu"></menu>
</main>




</body>
</html>
