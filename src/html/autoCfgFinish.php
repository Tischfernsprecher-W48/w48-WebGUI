<?php
// Melde alle PHP Fehler (siehe Changelog)
error_reporting(E_ALL);

// Funktionen zB SetConfig
require_once('functions.php');

// Konfiguration des Telefon lesen
$w48_config = parse_ini_file(config_file());

//session_start();
session_start([
    'cookie_lifetime' => 30,
]);

// Wenn man eingeloggt ist wird man ausgeloggt
if (isset($_SESSION['logged_in'])) {
//    session_destroy();
}

// Wenn kein lp Parameter angegeben wird ruf die Seite nochmal auf
if (!isset($_GET['lp'])) {
  header('Location: index.php?lp=login');
  exit();
}


// Wenn die Auto Konfiguration noch nicht beendet wurde ruf die autoCfg Seite auf.
if ( $w48_config['w48_autoCfgFinish'] == "yes" ) {
  header('Location: index.php?lp=login');
  exit();
}


// Wenn der Login Button gedrueckt wurde
// Vergleiche das Passwort
// Setze die Session
// Leite Weiter auf die Uebersicht
if (isset($_POST['autoCfgFinish'])) {
//  if ($_POST['uiPass'] == $w48_config['w48_passwd']) {
//    $_SESSION['logged_in'] = true;       

    SetConfig("w48_autoCfgFinish","yes");

    header('Location: autoCfgDoConf.php?lp=autoCfgDoConf');
    exit();
//  }
}


// Header der HTML Seite mit dem Menue 
    require('header.php');

// Ende und beginn von Main
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
                    <div class="details info">Die Konfiguration Ihres <?php print $w48_config['w48_Name']; ?> wurde gespeichert.</div>
                </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Beenden Sie die Konfiguration, dabei wird Ihr <?php print $w48_config['w48_Name']; ?> neu starten, haben Sie einen Moment geduld.</h2><br>
                    </div>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="autoCfgFinish.php?lp=autoCfgFinish" id="loginForm" class="loginForm">
                                <div class="formular"><p>Klicken Sie auf Weiter um die Konfiguration zu beenden.</p>


                                </div>
                                <div class="btn_form_foot">
                                    <input name="autoCfgFinish" id="uiResp" value="" type="hidden">
                                    <button type="submit" tabindex="3" id="submitLoginBtn">Weiter</button>
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
