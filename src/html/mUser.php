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
if (isset($_POST['mUser'])) {

    SetConfig("w48_passwd",$_POST['uiPass']);
  header('Location: index.php?lp=login');
  exit();
//$w48_config = parse_ini_file('w48.config');
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
                    <div class="details info">Aendern Sie hier für den Zugriff auf das <?php print $w48_config['w48_Name']; ?> das Kennwort.</div>
                </div>


                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Geben sie Ihr Passwort fuer die Anmeldung am <?php print $w48_config['w48_Name']; ?> ein.</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="mUser.php?lp=mUser" id="loginForm" class="loginForm">
                                <div class="formular"><p>Bitte merken Sie sich Ihr Passwort gut.</p>

                                    <br>
                                    <label for="uiPass">Neues Passwort:</label>
                                    <input tabindex="2" id="uiPass" maxlength="32" name="uiPass" type="password" value="<?php print $w48_config['w48_passwd']; ?>">


                                </div>
                                <div class="btn_form_foot">
                                    <input name="mUser" id="uiResp" value="" type="hidden">

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
