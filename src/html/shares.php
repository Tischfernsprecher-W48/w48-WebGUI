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
if (isset($_POST['shares'])) {

    SetConfig("w48_DDNS_Url",$_POST['uiURL']);
    SetConfig("w48_DDNS_Domain",$_POST['uiDomain']);
    SetConfig("w48_DDNS_User",$_POST['uiUser']);
    SetConfig("w48_DDNS_Passwd",$_POST['uiPass']);
    SetConf("shares");

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
                <div class="connection list no_column">
                    <div class="item single">
                        <div class="details info"><p>Über DynDNS können Anwendungen und Dienste, für die in der FRITZ!Box-Firewall Portfreigaben eingerichtet wurden, </p><br></div>
                        <div class="details info"><p>unter einem festen Domainnamen aus dem Internet erreicht werden, </p><br></div>
                        <div class="details info"><p>obwohl sich die öffentliche IP-Adresse der FRITZ!Box mit jeder Interneteinwahl ändert. </p></div>
                    </div>
                </div>
                <br>
                <div class="header">
                    <div class="title">DynDNS</div>
                </div>
                <br>
                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Zugangsdaten</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="shares.php?lp=shares" id="loginForm" class="loginForm">
                                <div class="formular"><p>Geben Sie die Anmeldedaten für Ihren DynDNS-Anbieter an.</p>
                                    <br>
                                    <label for="uiPass">Update-URL</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiURL" type="text" value="<?php print $w48_config['w48_DDNS_Url']; ?>">
                                    <br>
                                    <label for="uiPass">Domainname</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiDomain" type="text" value="<?php print $w48_config['w48_DDNS_Domain']; ?>">
                                    <br>
                                    <label for="uiPass">Benutzername</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiUser" type="text" value="<?php print $w48_config['w48_DDNS_User']; ?>">
                                    <br>
                                    <label for="uiPass">Kennwort</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password" value="<?php print $w48_config['w48_DDNS_Passwd']; ?>">
                                </div>
                                <div class="btn_form_foot">
                                    <input name="shares" id="uiResp" value="" type="hidden">

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
