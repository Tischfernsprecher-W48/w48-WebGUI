#!/bin/bash

echo "unfritz - Entfernt das FRITZ! Branding fuer den SABA Tischfernsprecher W48"
echo "Cracked by Mir doch egal && Waas, meine Mudda?"
echo ""
echo "removing..."

rm -f images/favicon.ico
rm -f images/kopfbalken_links.png
rm -f images/led_green.gif
rm -f images/callin.gif
rm -f images/globe_guest.gif
rm -f images/callout.gif
rm -f images/box.gif
rm -f images/dsl_arrow.png
rm -f images/dslam.gif
rm -f images/fritzLogo.svg
rm -f images/login_background.svg
rm -f images/icon_menu_overview.svg
rm -f images/icon_menu_net.svg
rm -f images/icon_menu_tel.svg
rm -f images/icon_menu_lan.svg
rm -f images/icon_menu_wlan.svg
rm -f images/icon_menu_dect.svg
rm -f images/icon_menu_check.svg
rm -f images/icon_menu_system.svg
rm -f images/icon_menu_assi.svg
rm -f images/icon_arrow_right.svg
rm -f images/switch_on.svg
rm -f images/icon_user_menu.svg
rm -f images/icon_help.svg
rm -f images/icon_arrow_left.svg
rm -f images/icon_globe.gif
rm -f images/icon_led_gray.gif
rm -f images/icon_fonbook_add_new.svg
rm -f images/device_fbox7490.svg
rm -f images/ic_nexus.svg
rm -f images/tech_lan.svg
rm -f images/device_rep1750.svg
rm -f images/tech_wlan.svg
rm -f images/device_generic.svg
rm -f images/ic_guest.svg
rm -f images/device_plc546.svg
rm -f images/icon_dsl_active.svg
rm -f images/icon_internet_active.svg
rm -f images/icon_phon_active.svg
rm -f images/icon_wlan_active.svg
rm -f images/icon_lan_active.svg
rm -f images/icon_usb_active.svg

rm -f images/icon_menu_dvbc.svg

sed -i 's/^\(w48_Name\s*=\s*\).*$/\1\"SABA Tischfernsprecher W48\"/' w48.config

echo "done."


