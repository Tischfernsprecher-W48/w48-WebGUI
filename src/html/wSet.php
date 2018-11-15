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
if (isset($_POST['wSet'])) {

    SetConfig("w48_AP_Passphrase",$_POST['uiPass']);
    SetConfig("w48_AP_SSID",$_POST['uiSSID']);
    SetConfig("w48_AP_NAT",$_POST['uiNAT']);
    SetConf("wSet");
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
                    <div class="title">Accesspoint</div>
                </div>
                <br>
                <div class="item single">
                    <div class="details info">Der Accesspoint ermoeglicht es Ihnen das <?php print $w48_config['w48_Name']; ?> einzurichten und einen Schnurlosen Betrieb.</div>
                </div>
                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Richten Sie hier den Accesspoint ein.</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="wSet.php?lp=wSet" id="loginForm" class="loginForm">
                                <div class="formular"><p>Bitte melden Sie sich mit Ihrem Benutzernamen und Ihrem Kennwort an.</p>

                                    <br>
                                    <label for="uiViewUser">WPA-Modus</label>
                                    <select tabindex="1" id="uiViewUser" name="uiUser">
                                        <option value="wpa2" selected="">WPA2 (CCMP)</option>
                                    </select>

                                    <br>
                                    <label for="uiPass">WLAN-Funknetz</label>
                                    <input tabindex="2" id="uiSSID" maxlength="32" name="uiSSID" type="text" value="<?php print $w48_config['w48_AP_SSID']; ?>">

                                    <br>
                                    <label for="uiPass">Netzwerkschlüssel</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password" value="<?php print $w48_config['w48_AP_Passphrase']; ?>">

                                    <br>
                                    <br>
                                    <p>Moechten Sie ueber diesen Accesspoint den Zugang zum Internet gestatten ? </p>
                                    <br>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiNAT" type="radio" value="yes">Ja
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiNAT" type="radio" value="no">Nein



                                </div>
                                <div class="btn_form_foot">
                                    <input name="wSet" id="uiResp" value="" type="hidden">
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
