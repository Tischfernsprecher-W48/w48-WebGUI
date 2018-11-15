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
if (isset($_POST['mCred'])) {

    SetConfig("w48_GW_Passphrase",$_POST['uiPass']);
    SetConfig("w48_GW_SSID",$_POST['uiSSID']);
    SetConf("mCred");

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
                    <div class="details info">Ihr <?php print $w48_config['w48_Name']; ?> verbindet sich per WLAN mit dem Internet.</div>
                </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Geben sie Ihre Zugangsdaten zum WLAN ein.</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="mCred.php?lp=mCred" id="loginForm" class="loginForm">
                                <div class="formular"><p>Bitte melden Sie sich mit Ihrem Benutzernamen und Ihrem Kennwort an.</p>

                                    <br>
                                    <label for="uiViewUser">WPA-Modus</label>
                                    <select tabindex="1" id="uiViewUser" name="uiCrypt">
                                        <option value="wpa2" selected="">WPA2 (CCMP)</option>
                                    </select>

                                    <br>
                                    <label for="uiPass">WLAN-Funknetz</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiSSID" type="text" value="<?php print $w48_config['w48_GW_SSID']; ?>">

                                    <br>
                                    <label for="uiPass">Netzwerkschlüssel</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password" value="<?php print $w48_config['w48_GW_Passphrase']; ?>">


                                </div>
                                <div class="btn_form_foot">
                                    <input name="mCred" id="uiResp" value="" type="hidden">
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
