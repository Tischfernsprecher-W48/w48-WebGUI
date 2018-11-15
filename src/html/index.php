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
if ( $w48_config['w48_autoCfgFinish'] == "no" ) {
  header('Location: autoCfg.php?lp=autoCfg');
  exit();
}


// Wenn der Login Button gedrueckt wurde
// Vergleiche das Passwort
// Setze die Session
// Leite Weiter auf die Uebersicht
if (isset($_POST['login'])) {
  if ($_POST['uiPass'] == $w48_config['w48_passwd']) {
    $_SESSION['logged_in'] = true;       

    header('Location: overview.php?lp=overview');
    exit();
  }
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
                                <div class="title">Login</div>
                            </div>
                            <br>
                            <div id="dialogInner" class="dialog_inner">
                                <div id="dialogHeadBox" class="dialog_head_box">
                                    <br>
                                    <h2 id="dialogTitle">Willkommen zu Ihrem <?php print $w48_config['w48_Name']; ?></h2>
                                </div>
                                <br>
                                <div id="dialogContent" class="dialog_content">
                                    <form method="post" action="index.php?lp=login" id="loginForm" class="loginForm">
                                        <div class="formular">
                                            <p>Bitte melden Sie sich mit Ihrem Kennwort an.</p>
                                            <br>
                                            <label for="uiPass">Kennwort</label>
                                            <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password">
                                        </div>
                                        <div class="btn_form_foot">
                                            <input name="login" value="" type="hidden">
                                            <button type="submit" tabindex="3" id="submitLoginBtn">Anmelden</button>
                                            <a>Kennwort vergessen?</a>
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
