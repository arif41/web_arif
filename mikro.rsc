# Created by Arif Wiguna
# TKJ 5th Gen
# Kalo mau dipake silahkan, ga juga engga apa apa.

/interface
set 0 name="Public"
set 1 name="Local"

/ip address
add address="" interface=Local
add address="" interface=Public

/ip firewall nat
add chain=srcnat out-interface=Public action=masquerade

/ip dns
