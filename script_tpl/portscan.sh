#scan
nmap -sP 192.168.1.0/24
arp -a
#ip target
nmap -p 1-65535 -T4 -A -v ip
