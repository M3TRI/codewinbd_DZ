<?php 
/*
Я использую Linux по этому в место команды ipconfig воспользуемся ip addr

Получим вывод

1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: enp6s0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
    link/ether 00:e0:0b:58:41:89 brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.68/24 metric 100 brd 192.168.1.255 scope global enp6s0
       valid_lft forever preferred_lft forever
    inet6 fe80::2e0:bff:fe58:4189/64 scope link 
       valid_lft forever preferred_lft forever
3: docker0: <NO-CARRIER,BROADCAST,MULTICAST,UP> mtu 1500 qdisc noqueue state DOWN group default 
    link/ether 02:42:32:0a:d9:40 brd ff:ff:ff:ff:ff:ff
    inet 172.17.0.1/16 brd 172.17.255.255 scope global docker0
       valid_lft forever preferred_lft forever
4: pterodactyl0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc noqueue state UP group default 
    link/ether 02:42:57:b8:7b:a1 brd ff:ff:ff:ff:ff:ff
    inet 172.18.0.1/16 brd 172.18.255.255 scope global pterodactyl0
       valid_lft forever preferred_lft forever
    inet6 fdba:17c8:6c94::1011/64 scope global 
       valid_lft forever preferred_lft forever
    inet6 fe80::42:57ff:feb8:7ba1/64 scope link 
       valid_lft forever preferred_lft forever
    inet6 fe80::1/64 scope link 
       valid_lft forever preferred_lft forever
2506: veth4310e95@if2505: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc noqueue master pterodactyl0 state UP group default 
    link/ether e6:2e:f0:6b:5d:f0 brd ff:ff:ff:ff:ff:ff link-netnsid 0
    inet6 fe80::e42e:f0ff:fe6b:5df0/64 scope link 
       valid_lft forever preferred_lft forever

Видим различные сетевые устройства с различными IP адресами
Нас интерисует 2: enp6s0 
ip - 192.168.1.68
Маску подсети я получил из настроек роутера, для меня это 255.255.255.0
Основной шлюз - ip адрес роутера
В моём случае 192.168.1.254


IP Адресс - что то вроде домашнего адреса. Каждое устройство в сети имет свой ip адрес и он уникален
Маска подсети определяет какая часть IP адреса будет обозначать саму сеть, какая устройство в этой сети
В моём случае маска 255.255.255.0 говорит что первые 3 по 3 это наша сеть тоесть 192.168.1.X
А число на конце относится к устройству в моём случае 68 X.X.X.68
Основной шлюз же, это ip адрес в сети нашего роутера/маршрутизатора/коммутатора. Это устройство даёт нам локальные ip адреса, и имеет внешний IP доступный из всемирной паутины.
Когда какое-то устройство в локальной сети пытается связаться с устройством в интернете, оно отправляет данные на основной шлюз, который затем направляет их по соответствующему пути к назначенному устройству.
*/
?>