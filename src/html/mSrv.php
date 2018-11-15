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

// Wenn der Login Button gedrueckt wurde
// Vergleiche das Passwort
// Setze die Session
// Leite Weiter auf die Uebersicht
if (isset($_POST['mSrv'])) {

    SetConfig("w48_DLNA_Name",$_POST['uiName']);
    SetConfig("djmount",$_POST['yes_no']);
    SetConf("mSrv");

$w48_config = parse_ini_file(config_file());
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
                    <div class="details info">Der <?php print $w48_config['w48_Name']; ?> Mediaserver ermöglicht, Musik, Bilder und Videos, im Heimnetz abzuspielen. Das Abspielgerät im Heimnetz muss den Standard UPnP unterstützen.</div>
                </div>


                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Namen des <?php print $w48_config['w48_Name']; ?> Mediaservers</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="mSrv.php?lp=mSrv" id="loginForm" class="loginForm">
                                <div class="formular"><p>Legen Sie hier den Namen des <?php print $w48_config['w48_Name']; ?> Mediaservers fest, unter dem die angeschlossene Mediensammlung im Heimnetz zur Verfügung gestellt wird.</p>
                                    <br>
                                    <label for="uiPass">Name</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiName" type="text" value="<?php print $w48_config['w48_DLNA_Name']; ?>">



                                </div>

                        </div>
                    </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Medienquellen im Heimnetz</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                                <div class="formular"><p>Dateien von DLNA Freigaben im LAN bei der Suche mit einbeziehen ?</p>
                                    <input type="radio" name="yes_no" checked>Ja</input>
                                    <input type="radio" name="yes_no">Nein</input>

                                </div>

                                <div class="btn_form_foot">
                                    <input name="mSrv" id="uiResp" value="" type="hidden">

                                    <button type="submit" tabindex="3" id="submitLoginBtn">Übernehmen</button>
                                    <button type="submit" tabindex="3" id="submitLoginBtn">Abbrechen</button>
                                </div>
                            </form>
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
