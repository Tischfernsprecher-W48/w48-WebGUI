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
if (isset($_POST['boxname'])) {

    SetConfig("w48_hostname",$_POST['uiName']);


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
                    <div class="details info">Funktioniert nicht. Ist nen Prototyp gibt kein Update, muss man selbst machen.</div>
                </div>
                <br>
                <div class="header">
                    <div class="title">Aendern</div>
                </div>
                <br>
                <div class="item single">
                    <div class="details info">Bitte beachten Sie, dass Sie nach der Anpassung des <?php print $w48_config['w48_Name']; ?>-Namens gegebenenfalls WLAN-Verbindungen und Netzwerkverknüpfungen in Ihren Heimnetzgeräten neu einrichten müssen.</div>
                </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Geben sie den Namen Ihres <?php print $w48_config['w48_Name']; ?> ein.</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="boxname.php?lp=boxname" id="loginForm" class="loginForm">
                                <div class="formular"><p>Vergeben Sie hier einen individuellen Namen für das <?php print $w48_config['w48_Name']; ?>, um es im Heimnetz unter diesem Namen anzeigen zu lassen.</p>

                                    <br>
                                    <label for="uiPass"><?php print $w48_config['w48_Name']; ?>-Name:</label><br>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiName" type="text" value="<?php print $w48_config['w48_hostname']; ?>">

                                </div>
                                <div class="btn_form_foot">
                                    <input name="boxname" id="uiResp" value="" type="hidden">

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
