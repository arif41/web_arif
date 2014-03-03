# Created by Arif Wiguna.
# TKJ 5th Gen.
# Created at 3 March, 2014.
# Last Modified: 3 March, 2014.
# Kalo mau dipake silahkan, ga juga engga apa apa.
# Yang masih kosong, isi sendiri, soalnya tiap orang beda-beda soal.
# Kalo masih kosong gini terus di execute, kemungkinan error bakalan terjadi.
# Makanya, baca dulu ya.

/interface
set 0 name="Public"
set 1 name="Local"

/ip address
add address="" interface="Local"
add address="" interface="Public"

/ip firewall nat
add chain="srcnat" out-interface="Public" action="masquerade"

/ip dns
set servers="202.200.30.100" allow-remote-requests="yes"

/ip route
add dst-address="0.0.0.0/0" gateway="202.200.30.100" types="unicast"

/ip proxy
set enabled="yes" port="3128" cache-administrator="" cache-on-disk="yes" always-from-caches="yes"

/ip proxy access
add dst-host="*.detik.com" action="deny"
add dst-host="*.kompas.com" action="deny"

/ip firewall nat
add chain="dstnat" protocol="tcp" dst-port="80" action="redirect" to-ports="3128"
add chain="dstnat" protocol="tcp" dst-port="8080" action="redirect" to-ports="3128"

/ip pool
add name="dhcp_pool" ranges=""

/ip dhcp-server network
add name="dhcp" address-pool="dhcp_pool" 
