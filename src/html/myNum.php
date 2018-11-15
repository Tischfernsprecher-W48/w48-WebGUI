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
if (isset($_POST['myNum'])) {

    SetConfig("w48_SIP_Nummer",$_POST['uiNumber']);
    SetConfig("w48_SIP_User",$_POST['uiUser']);
    SetConfig("w48_SIP_Passwd",$_POST['uiPass']);
    SetConfig("w48_SIP_Registrar",$_POST['uiReg']);
    SetConf("myNum");


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
                    <div class="details info">Sie koennen Ihrem FRITZ!Fon W48 eine eigene Rufnummer geben. Die Zugangsdaten erhalten Sie in der Regel von Ihrem Anbieter </div>
                    <div class="details info">Per default registriert das FRITZ!Fon W48 eine kostenlose Rufnummer beim Verein Ost- und Westsiedlung Netzwerk n.e.V.</div>
                </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Rufnummer eintragen</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="myNum.php?lp=myNum" id="loginForm" class="loginForm">
                                <div class="formular"><p>Geben Sie hier Ihre Daten zu Ihrer Telefonnummer an.</p>

                                    <label for="uiPass">Rufnummer*</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiNumber" type="text" value="<?php print $w48_config['w48_SIP_Nummer']; ?>">

                                    <br>
                                    <label for="uiPass">Benutzername</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiUser" type="text" value="<?php print $w48_config['w48_SIP_User']; ?>">

                                    <br>
                                    <label for="uiPass">Kennwort</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password" value="<?php print $w48_config['w48_SIP_Passwd']; ?>">

                                    <br>
                                    <label for="uiPass">Registrar</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiReg" type="text" value="<?php print $w48_config['w48_SIP_Registrar']; ?>">

                                    <br><br>
*Rufnummer<br>
Geben Sie in dieser Spalte bitte die Rufnummer für die Anmeldung ein.<br> 
Diese Rufnummer haben Sie von Ihrem Anbieter bekommen. Sie kann je nach Anbieter unterschiedlich benannt sein.<br> 
Bitte geben Sie die Rufnummer genau so ein, wie vom Anbieter vorgegeben, einschließlich eventuell enthaltener Sonderzeichen.<br>
<br>
*Benutzername<br>
Hier kommt noch Text.<br>
<br>
Kennwort<br>
Hier kommt auch noch Text<br> 
<br>
Registrar<br>
Hier auch.<br>



                                </div>
                                <div class="btn_form_foot">
                                    <input name="myNum" id="uiResp" value="" type="hidden">

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
