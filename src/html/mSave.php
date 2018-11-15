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
if (isset($_POST['mSave'])) {

    $file = config_file();

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: text/xml');
        header('Content-Disposition: attachment; filename="Sicherung.txt"');
        header('Cache-Control: must-revalidate');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }

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
                    <div class="details info"><br>Hier koennen Sie die Konfiguration Ihres <?php print $w48_config['w48_Name']; ?> sichern.<br></div>
                </div>
                <br>
                <div class="header">
                    <div class="title">Einstellungen sichern</div>
                </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Die Einstelllungen koennen Sie hier sichern</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="mSave.php?lp=mSave" id="loginForm" class="loginForm">
                                <div class="formular"><p>Klicken Sie auf sichern um die Einstellungen Ihres <?php print $w48_config['w48_Name']; ?> zu speichern.</p>


                                </div>
                                <div class="btn_form_foo">
                                    <input name="mSave" id="uiResp" value="" type="hidden">

                                    <button type="submit" tabindex="3" id="submitLoginBtn">Sichern</button>
                                </div>
                            </form>
                        </div>
                    </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Die Einstelllungen koennen Sie hier wiederherstellen</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="mSave.php?lp=mSave" id="loginForm" class="loginForm">
                                <div class="formular"><p>Klicken Sie auf sichern um die Einstellungen Ihres <?php print $w48_config['w48_Name']; ?> zu speichern.</p>


                                </div>
                                <div class="btn_form_foo">
                                    <input name="mSave" id="uiResp" value="" type="hidden">

                                    <button type="submit" tabindex="3" id="submitLoginBtn">wiederherstellen</button>
                                </div>
                            </form>
                        </div>
                    </div>

                <div id="dialogInner" class="dialog_inner">
                    <div id="dialogHeadBox" class="dialog_head_box"><br>
                        <h2 id="dialogTitle">Die Werkseinstellungen koennen Sie hier wiederherstellen</h2></div><br>
                        <div id="dialogContent" class="dialog_content">
                            <form method="post" action="mSave.php?lp=mSave" id="loginForm" class="loginForm">
                                <div class="formular"><p>Klicken Sie auf sichern um die Einstellungen Ihres <?php print $w48_config['w48_Name']; ?> zu speichern.</p>


                                </div>
                                <div class="btn_form_foo">
                                    <input name="mSave" id="uiResp" value="" type="hidden">

                                    <button type="submit" tabindex="3" id="submitLoginBtn">Werkseinstellungen</button>
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
