
function page() {
    var path = window.location.pathname;
    var page = path.split("/").pop();
return page;
}


function WaitForOnline() {

  var xhttp;

  xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {

        if(this.responseText == "online") {
            clearTimeout(timeout);
            document.getElementById("WaitForOnline").innerHTML = this.responseText;
        }

        if(this.responseText == "offline") {
            clearTimeout(timeout);
            document.getElementById("WaitForOnline").innerHTML = this.responseText;
            timeout = setTimeout(WaitForOnline, 10000);
        }

    }

  };

  xhttp.open("GET", "onlinestatus.php", true);
  xhttp.send();

}


function WaitForSip() {

  var xhttp;

  xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {

            clearTimeout(timeoutsip);
            document.getElementById("WaitForSip").innerHTML = this.responseText;
            timeoutsip = setTimeout(WaitForSip, 10000);

    }

  };

  xhttp.open("GET", "sipstatus.php", true);
  xhttp.send();

}





    function show_login() {

        var filename = "index.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Anmelden';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";

        if (page() != filename) {
            window.location = filename + "?lp=login";
        } 


    }

    function show_autoCfg() {

        var filename = "autoCfg.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Automatische-Einrichtung';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";

        if (page() != filename) {
            window.location = filename + "?lp=autoCfg";
        } 


    }


    function show_overview() {

        var filename = "overview.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Uebersicht';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview selected";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";

        if (page() != filename) {
            window.location = filename + "?lp=overview";
        } 


    }

    function show_inet() {

        var filename = "inet.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Internet';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='block';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet selected";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("mCred");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("shares");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=inet";
        } 


    }

    function show_mCred() {

        var filename = "mCred.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Internet > Zugangsdaten';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='block';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("mCred");
            NAME.className = "show menu_item selected";
            var NAME = document.getElementById("shares");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=mCred";
        } 

    }

    function show_shares() {

        var filename = "shares.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Internet > Freigaben';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='block';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("mCred");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("shares");
            NAME.className = "show menu_item selected";

        if (page() != filename) {
            window.location = filename + "?lp=shares";
        } 

    }


    function show_tel() {

        var filename = "tel.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Telefonie';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='block';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel selected";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("tam");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("telDev");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("myNum");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=tel";
        } 

    }

    function show_tam() {

        var filename = "tam.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Telefonie > Anrufbeantworter';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='block';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';

        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
            var NAME = document.getElementById("tam");
            NAME.className = "show menu_item selected";
            var NAME = document.getElementById("telDev");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("myNum");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=tam";
        } 

    }

    function show_telDev() {

        var filename = "telDev.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Telefonie > Telefoniegraete';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='block';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';

        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
            var NAME = document.getElementById("tam");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("telDev");
            NAME.className = "show menu_item selected";
            var NAME = document.getElementById("myNum");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=telDev";
        } 

    }

    function show_myNum() {

        var filename = "myNum.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Telefonie > Eigene Rufnummer';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='block';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';

        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
            var NAME = document.getElementById("tam");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("telDev");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("myNum");
            NAME.className = "show menu_item selected";

        if (page() != filename) {
            window.location = filename + "?lp=myNum";
        } 

    }






    function show_lan() {

        var filename = "lan.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Heimnetz';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='block';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan selected";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("mSrv");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=lan";
        } 

    }

    function show_mSrv() {

        var filename = "mSrv.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;Heimnetz > Mediaserver';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='block';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';

        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
            var NAME = document.getElementById("mSrv");
            NAME.className = "show menu_item selected";

        if (page() != filename) {
            window.location = filename + "?lp=mSrv";
        } 

    }




    function show_wlan() {

        var filename = "wlan.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;WLAN';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='block';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan selected";
        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("wSet");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=wlan";
        } 
    }


    function show_wSet() {

        var filename = "wSet.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;WLAN > Funknetz';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='block';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='none';

        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
            var NAME = document.getElementById("wSet");
            NAME.className = "show menu_item selected";

        if (page() != filename) {
            window.location = filename + "?lp=wSet";
        } 

    }

    function show_dvb() {

        var filename = "dvb.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;DVB';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";

        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";

        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";

        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";

        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";

        document.getElementById('syssub').style.display='none';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";

//        document.getElementById('dvbsub').style.display='block';
        var NAME = document.getElementById("dvb");
        NAME.className = "show menu_item with_sub icon_dvb selected";


        if (page() != filename) {
            window.location = filename + "?lp=dvb";
        } 

    }






    function show_sys() {

        var filename = "sys.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;System';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='block';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys selected";
            var NAME = document.getElementById("boxname");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("mUser");
            NAME.className = "show menu_item";

        if (page() != filename) {
            window.location = filename + "?lp=sys";
        } 

    }

    function show_boxname() {

        var filename = "boxname.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;System > FRITZ!Fon-Name';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='block';

        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("mUser");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("boxname");
            NAME.className = "show menu_item selected";

        if (page() != filename) {
            window.location = filename + "?lp=boxname";
        } 

    }

    function show_mUser() {

        var filename = "mUser.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;System > FRITZ!Fon-Benutzer';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='block';

        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";
            var NAME = document.getElementById("boxname");
            NAME.className = "show menu_item";
            var NAME = document.getElementById("mUser");
            NAME.className = "show menu_item selected";

        if (page() != filename) {
            window.location = filename + "?lp=mUser";
        } 

    }

    function show_mSave() {

        var filename = "mSave.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;System > Sicherung';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";

        document.getElementById('syssub').style.display='block';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";

            var NAME = document.getElementById("boxname");
            NAME.className = "show menu_item";

            var NAME = document.getElementById("mUser");
            NAME.className = "show menu_item";

            var NAME = document.getElementById("mSave");
            NAME.className = "show menu_item selected";

            var NAME = document.getElementById("update");
            NAME.className = "show menu_item";


        if (page() != filename) {
            window.location = filename + "?lp=mSave";
        } 

    }

    function show_update() {

        var filename = "update.php";

        document.querySelector('.arrow_box').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;System > Update';

        var NAME = document.getElementById("overview");
        NAME.className = "show menu_item with_sub icon_overview";
        document.getElementById('inetsub').style.display='none';
        var NAME = document.getElementById("inet");
        NAME.className = "show menu_item with_sub icon_inet";
        document.getElementById('telsub').style.display='none';
        var NAME = document.getElementById("tel");
        NAME.className = "show menu_item with_sub icon_tel";
        document.getElementById('lansub').style.display='none';
        var NAME = document.getElementById("lan");
        NAME.className = "show menu_item with_sub icon_lan";
        document.getElementById('wlansub').style.display='none';
        var NAME = document.getElementById("wlan");
        NAME.className = "show menu_item with_sub icon_wlan";
        document.getElementById('syssub').style.display='block';
        var NAME = document.getElementById("sys");
        NAME.className = "show menu_item with_sub icon_sys";

            var NAME = document.getElementById("boxname");
            NAME.className = "show menu_item";

            var NAME = document.getElementById("mUser");
            NAME.className = "show menu_item";

            var NAME = document.getElementById("mSave");
            NAME.className = "show menu_item";

            var NAME = document.getElementById("update");
            NAME.className = "show menu_item selected";


        if (page() != filename) {
            window.location = filename + "?lp=update";
        } 

    }


