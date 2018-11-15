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
                        <h2 id="dialogTitle">Senderliste</h2></div><br>
                        <div id="dialogContent" class="dialog_content">

                            <form name="mainform" method="POST" action="dvb.php?lp=dvb">
                                <input value="tvsd" name="tab" type="hidden">
                                <div id="uiList" class="items">

                                    <a title="Das Erste" href="https://daserstehdde-lh.akamaihd.net/i/daserstehd_de@629196/index_184_av-p.m3u8?sd=10&rebase=on">
                                    <img alt="Das Erste" src="http://tv.avm.de/tvapp/logos/das_erste.png" onerror="onLogoError(this);"></a>

                                    <a title="KiKA" href="https://kikade-lh.akamaihd.net/i/livetvkika_de@450035/index_3776_av-p.m3u8?sd=10&rebase=on">
                                    <img alt="KiKA" src="http://tv.avm.de/tvapp/logos/kika.png" onerror="onLogoError(this);"></a>

                                    <a title="arte" href="https://artelive-lh.akamaihd.net/i/artelive_de@393591/index_1_av-p.m3u8?sd=10&rebase=on">
                                    <img alt="arte" src="http://tv.avm.de/tvapp/logos/arte.png" onerror="onLogoError(this);"></a>

                                    <a title="3sat" href="https://zdf0910-lh.akamaihd.net/i/dach10_v1@392872/index_1496_av-p.m3u8?sd=10&rebase=on">
                                    <img alt="3sat" src="http://tv.avm.de/tvapp/logos/3sat.png" onerror="onLogoError(this);"></a>

                                </div>
                            </form>
                        </div>
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
