#!/bin/bash
# IP einer FRITZ!Box
FRITZBOX=fritz.box

# IP eines FRITZ!WLAN Repeater DVB-C
FRITZDVBC=192.168.1.111

echo "mkfritz - FRITZ! Branding fuer den SABA Tischfernsprecher W48"
echo "Cracked by Mir doch egal && Waas, meine Mudda?"
echo ""
echo "loading..."
sleep 2

mkdir -p images

wget -q http://${FRITZBOX}/favicon.ico -O images/favicon.ico
wget -q http://${FRITZBOX}/css/default/images/kopfbalken_links.png -O images/kopfbalken_links.png
wget -q http://${FRITZBOX}/css/default/images/led_green.gif -O images/led_green.gif
wget -q http://${FRITZBOX}/css/default/images/callin.gif -O images/callin.gif
wget -q http://${FRITZBOX}/css/default/images/globe_guest.gif -O images/globe_guest.gif
wget -q http://${FRITZBOX}/css/default/images/callout.gif -O images/callout.gif
wget -q http://${FRITZBOX}/css/default/images/box.gif -O images/box.gif
wget -q http://${FRITZBOX}/css/default/images/dsl_arrow.png -O images/dsl_arrow.png
wget -q http://${FRITZBOX}/css/default/images/dslam.gif -O images/dslam.gif
wget -q http://${FRITZBOX}/css/rd/images/fritzLogo.svg -O images/fritzLogo.svg
wget -q http://${FRITZBOX}/css/rd/images/login_background.svg -O images/login_background.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_overview.svg -O images/icon_menu_overview.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_net.svg -O images/icon_menu_net.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_tel.svg -O images/icon_menu_tel.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_lan.svg -O images/icon_menu_lan.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_wlan.svg -O images/icon_menu_wlan.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_dect.svg -O images/icon_menu_dect.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_check.svg -O images/icon_menu_check.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_system.svg -O images/icon_menu_system.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_menu_assi.svg -O images/icon_menu_assi.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_arrow_right.svg -O images/icon_arrow_right.svg
wget -q http://${FRITZBOX}/css/rd/images/switch_on.svg -O images/switch_on.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_user_menu.svg -O images/icon_user_menu.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_help.svg -O images/icon_help.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_arrow_left.svg -O images/icon_arrow_left.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_globe.gif -O images/icon_globe.gif
wget -q http://${FRITZBOX}/css/rd/images/icon_led_gray.gif -O images/icon_led_gray.gif
wget -q http://${FRITZBOX}/css/rd/images/icon_fonbook_add_new.svg -O images/icon_fonbook_add_new.svg
wget -q http://${FRITZBOX}/css/rd/images/device_fbox7490.svg -O images/device_fbox7490.svg
wget -q http://${FRITZBOX}/css/rd/images/ic_nexus.svg -O images/ic_nexus.svg
wget -q http://${FRITZBOX}/css/rd/images/tech_lan.svg -O images/tech_lan.svg
wget -q http://${FRITZBOX}/css/rd/images/device_rep1750.svg -O images/device_rep1750.svg
wget -q http://${FRITZBOX}/css/rd/images/tech_wlan.svg -O images/tech_wlan.svg
wget -q http://${FRITZBOX}/css/rd/images/device_generic.svg -O images/device_generic.svg
wget -q http://${FRITZBOX}/css/rd/images/ic_guest.svg -O images/ic_guest.svg
wget -q http://${FRITZBOX}/css/rd/images/device_plc546.svg -O images/device_plc546.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_dsl_active.svg -O images/icon_dsl_active.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_internet_active.svg -O images/icon_internet_active.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_phon_active.svg -O images/icon_phon_active.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_wlan_active.svg -O images/icon_wlan_active.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_lan_active.svg -O images/icon_lan_active.svg
wget -q http://${FRITZBOX}/css/rd/images/icon_usb_active.svg -O images/icon_usb_active.svg

# Dateien Von einem FRITZ!WLAN Repeater DVB-C
wget -q http://${FRITZDVBC}/css/rd/images/icon_menu_dvbc.svg -O images/icon_menu_dvbc.svg


sed -i 's/^\(w48_Name\s*=\s*\).*$/\1\"FRITZ!Fon W48\"/' w48.config

echo "done."


