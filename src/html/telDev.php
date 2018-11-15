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
if (isset($_POST['telDev'])) {

    SetConfig("w48_SIP_GUEST_Name",$_POST['uiName']);
    SetConfig("w48_SIP_GUEST_User",$_POST['uiUser']);
    SetConfig("w48_SIP_GUEST_Passwd",$_POST['uiPass']);
    SetConf("telDev");

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
                        <div class="details info">Hier können Sie alle mit dem <?php print $w48_config['w48_Name']; ?> verbundenen Telefoniegeräte wie Telefone, Anrufbeantworter, Faxgeräte und Türsprechanlagen einrichten.</div>
                </div>
                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">An Ihrem <?php print $w48_config['w48_Name']; ?> können Sie verschiedene Telefoniegeräte anschließen: Telefone, Anrufbeantworter und Faxgeräte.</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="telDev.php?lp=telDev" id="loginForm" class="loginForm">
                                <div class="formular"><p>Die interne Rufnummer lautet <?php print $w48_config['w48_SIP_GUEST_Nummer']; ?></p>

                                    <br>
                                    <label for="uiPass">Geben Sie für das Telefon einen Namen ein, wie z.B. Wohnzimmer oder Hut&apos;s Telefon. </label><br>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiName" type="text" value="<?php print $w48_config['w48_SIP_GUEST_Name']; ?>">

                                    <br>
                                    <label for="uiPass">Benutzername</label><br>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiUser" type="text" value="<?php print $w48_config['w48_SIP_GUEST_User']; ?>">

                                    <br>
                                    <label for="uiPass">Kennwort</label><br>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password" value="<?php print $w48_config['w48_SIP_GUEST_Passwd']; ?>">


                                </div>
                                <div class="btn_form_foot">
                                    <input name="telDev" id="uiResp" value="" type="hidden">

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
