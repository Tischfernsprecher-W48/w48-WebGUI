<?php

function config_file() {

    $config_file = "/etc/w48/w48.config";

return $config_file;
}


function SetConfig($name, $value) {

//    $filename = "w48.config";
    $suchmuster = '/'.$name.'\s*=\s*\".*\"/';
    $replace = $name." = \"".$value."\"";

    if (!$content = file_get_contents (config_file())) {
        die();
    }

    $content = preg_replace($suchmuster, $replace, $content);

    if (!file_put_contents (config_file(), $content)) {
        die();
    }

}


function onlinestatus() {

    $fp = fsockopen("www.ows-sz.de", 80, $errno, $errstr, 30);
    if ($fp) {
        fclose($fp);
        $status = "online";
    } else {
        $status = "offline";
    }

return $status;
}

function sipstatus() {

$w48_config = parse_ini_file(config_file());

    posix_setuid(0);
    posix_setgid(0);


    $status = `sudo w48phpcmd -s $w48_config[w48_SIP_Nummer]`;

return $status;
}


function Restart($service) {

    posix_setuid(0);
    posix_setgid(0);

    $status = `sudo w48phpcmd -r $service`;

return $status;
}


function SetConf($page) {

    posix_setuid(0);
    posix_setgid(0);

    $status = `sudo w48phpcmd -d $page`;

return $status;
}

function RunCmd($cmd) {

    posix_setuid(0);
    posix_setgid(0);

    $status = `sudo w48phpcmd -x $cmd`;

return $status;
}




?>