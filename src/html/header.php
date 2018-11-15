<?php
// Melde alle PHP Fehler (siehe Changelog)
//error_reporting(E_ALL);


//$w48_config = parse_ini_file('w48.config');
?>
<!DOCTYPE html>
    <html lang="de">
        <head>
            <title><?php print $w48_config['w48_Name']; ?></title>

            <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <meta http-equiv="Cache-Control" content="private, no-transform">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="format-detection" content="telephone=no">
            <meta http-equiv="x-rim-auto-match" content="none">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimal-ui">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
            <meta http-equiv="cleartype" content="on">

            <link rel="stylesheet" type="text/css" href="mystyle.css">
            <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

            <style>
                @font-face {
                            font-family: 'Source Sans Pro';
                            src: url('fonts/sourcesanspro.woff') format('woff');
                            }
                @font-face {
                            font-family: 'Source Sans Pro';
                            src: url('fonts/sourcesansproBold.woff') format('woff');
                            font-weight: bold;
                            }
                @font-face {
                            font-family: 'Source Sans Pro';
                            src: url('fonts/metaWebProBold.woff') format('woff');
                            font-weight: bold;
                            }

                html, input, textarea, keygen, select, button {
                            font-family: 'Source Sans Pro', Arial, sans-serif;
                            font-size: 100%;
                            }

                .blue_bar_title,.logoArea {
                            font-family: 'AVM', 'Source Sans Pro', Arial, sans-serif;
                            }
            </style>

            <script type="text/javascript" src="js/core.js"></script>

    </head>

    <body class="stickyBottom" onload="show_<?php print $_GET['lp']; ?>()">

        <div id="uiPageTitleBox" class="breadcrumb hide">
            <div id="uiPageTitle">
                <div class="arrow_box">
                </div>
            </div>
        </div>
        <div id="contextHelp" title="Hilfe" class="contextHelp">
        </div>


        <header id="blueBarBox" class="">
            <a href="overview.php?lp=overview">
                <div id="logoBox" class="logoBox">
                </div>
            </a>
            <div id="blueBarTitel" class="blue_bar_title">
            <?php print $w48_config['w48_Name']; ?>
            </div>
        </header>

        <div id="navigationMenu" class="menuArea">
            <div class="menue head" role="menu">

                <a onClick="return show_overview()" href="javascript:void(0)" id="overview" style="-moz-box-ordinal-group: 10; order: 10;" class="menu_item icon_overview show" role="link" aria-hidden="false">Übersicht</a>
                <a  onClick="return show_inet()" href="javascript:void(0)" id="inet" style="-moz-box-ordinal-group: 30; order: 30;" class="show menu_item with_sub icon_inet" role="menuitem" aria-haspopup="true" aria-hidden="false">Internet</a>
                <div id="inetsub" class="submenu" aria-live="polite" aria-hidden="true" aria-labelledby="inet" style="-moz-box-ordinal-group: 31; order: 31;">
                    <a  onClick="return show_mCred()" href="javascript:void(0)"  id="mCred" style="-moz-box-ordinal-group: 20; order: 20;" class="menu_item show" role="link" aria-hidden="false">Zugangsdaten</a>
                    <a  onClick="return show_shares()" href="javascript:void(0)"  id="shares" style="-moz-box-ordinal-group: 50; order: 50;" class="menu_item show" role="link" aria-hidden="false">Freigaben</a>
                </div>

                <a  onClick="return show_tel()" href="javascript:void(0)" id="tel" style="-moz-box-ordinal-group: 40; order: 40;" class="show menu_item with_sub icon_tel" role="menuitem" aria-haspopup="true" aria-hidden="false">Telefonie</a>
                <div id="telsub" class="submenu" aria-live="polite" aria-hidden="true" aria-labelledby="tel" style="-moz-box-ordinal-group: 41; order: 41;">
                    <a onClick="return show_tam()" href="javascript:void(0)"  id="tam" style="-moz-box-ordinal-group: 20; order: 20;" class="menu_item show" role="link" aria-hidden="false">Anrufbeantworter</a>
                    <a  onClick="return show_telDev()" href="javascript:void(0)" id="telDev" style="-moz-box-ordinal-group: 70; order: 70;" class="menu_item show" role="link" aria-hidden="false">Telefoniegeräte</a>
                    <a  onClick="return show_myNum()" href="javascript:void(0)" id="myNum" style="-moz-box-ordinal-group: 80; order: 80;" class="menu_item show" role="link" aria-hidden="false">Eigene Rufnummern</a>
                </div>

                <a  onClick="return show_lan()" href="javascript:void(0)" id="lan" style="-moz-box-ordinal-group: 50; order: 50;" class="show menu_item with_sub icon_lan" role="menuitem" aria-haspopup="true" aria-hidden="false">Heimnetz</a>
                <div id="lansub" class="submenu" aria-live="polite" aria-hidden="true" aria-labelledby="lan" style="-moz-box-ordinal-group: 51; order: 51;">
                    <a  onClick="return show_mSrv()" href="javascript:void(0)" id="mSrv" style="-moz-box-ordinal-group: 40; order: 40;" class="menu_item show" role="link" aria-hidden="false">Mediaserver</a>
                </div>

                <a  onClick="return show_wlan()" href="javascript:void(0)" id="wlan" style="-moz-box-ordinal-group: 70; order: 70;" class="show menu_item with_sub icon_wlan" role="menuitem" aria-haspopup="true" aria-hidden="false">WLAN</a>
                <div id="wlansub" class="submenu" aria-live="polite" aria-hidden="true" aria-labelledby="wlan" style="-moz-box-ordinal-group: 71; order: 71;">
                    <a  onClick="return show_wSet()" href="javascript:void(0)"  id="wSet" style="-moz-box-ordinal-group: 15; order: 15;" class="menu_item show" role="link" aria-hidden="false">Funknetz</a>
                </div>

                <a onClick="return show_dvb()" href="javascript:void(0)" id="dvb" style="-moz-box-ordinal-group: 90; order: 90;" class="show menu_item with_sub icon_dvb" role="menuitem" aria-haspopup="true" aria-hidden="false">DVB-IPTV</a>
                <div id="dvbsub" class="submenu" aria-live="polite" aria-hidden="true" aria-labelledby="dvb" style="-moz-box-ordinal-group: 91; order: 91;">
                </div>

                <a  onClick="return show_sys()" href="javascript:void(0)"  id="sys" style="-moz-box-ordinal-group: 110; order: 110;" class="show menu_item with_sub icon_sys" role="menuitem" aria-haspopup="true" aria-hidden="false">System</a>
                <div id="syssub" class="submenu" aria-live="polite" aria-hidden="true" aria-labelledby="sys" style="-moz-box-ordinal-group: 111; order: 111;">
                    <a  onClick="return show_update()" href="javascript:void(0)"  id="update" style="-moz-box-ordinal-group: 50; order: 50;" class="menu_item show" role="link">Update</a>
                    <a  onClick="return show_mSave()" href="javascript:void(0)"  id="mSave" style="-moz-box-ordinal-group: 50; order: 50;" class="menu_item show" role="link">Sicherung</a>
                    <a  onClick="return show_boxname()" href="javascript:void(0)"  id="boxname" style="-moz-box-ordinal-group: 50; order: 50;" class="menu_item show" role="link">Telefon-Name</a>
                    <a  onClick="return show_mUser()" href="javascript:void(0)"  id="mUser" style="-moz-box-ordinal-group: 90; order: 90;" class="menu_item show" role="link" aria-hidden="false">Telefon-Benutzer</a>
                </div>

            </div>
        </div>
