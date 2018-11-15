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
    session_destroy();
}

// Wenn kein lp Parameter angegeben wird ruf die Seite nochmal auf
if (!isset($_GET['lp'])) {
  header('Location: index.php?lp=login');
  exit();
}


// Wenn die Auto Konfiguration noch nicht beendet wurde ruf die autoCfg Seite auf.
if ( $w48_config['w48_autoCfgStart'] == "yes" ) {
  header('Location: autoCfgPasswd.php?lp=autoCfgPasswd');
  exit();
}


// Wenn der Login Button gedrueckt wurde
// Vergleiche das Passwort
// Setze die Session
// Leite Weiter auf die Uebersicht
if (isset($_POST['autoCfgStart'])) {
//  if ($_POST['uiPass'] == $w48_config['w48_passwd']) {
//    $_SESSION['logged_in'] = true;       

    SetConfig("w48_autoCfgStart","yes");

    header('Location: autoCfgPasswd.php?lp=autoCfgPasswd');
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
                    <div class="details info">Mit dem Einrichtungs-Code koennen Sie Ihr <?php print $w48_config['w48_Name']; ?> bequem konfigurieren.</div>
                </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Der Einrichtungs-Assi-tent hilft Ihnen dabei Ihr <?php print $w48_config['w48_Name']; ?> schnell und einfach zu konfigurieren.</h2><br>
                    </div>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="autoCfg.php?lp=autoCfg" id="loginForm" class="loginForm">
                                <div class="formular"><p>Klicken Sie auf Weiter um mit der Konfiguration zu beginnen.</p>

                                    <br>
Sie koennen den Assi-tenten jederzeit beenden.<br>
Sie benoetigen zu die Zugangsdaten zu Ihrem WLAN und einen Einrichtungs-Code.<br>
Sollten Sie keinen Einrichtungs-Code besitzen klicken Sie bitte <a>hier</a>. 

                                </div>
                                <div class="btn_form_foot">
                                    <input name="autoCfgStart" id="uiResp" value="" type="hidden">
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
