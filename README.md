The Panel
========
##Currently unavailable and under developement
A fork of [ss-panel](https://github.com/orvice/ss-panel) version 2 which added PPTP VPN and IPsec VPN native authentication and accounting using freeradius.

Note that this software is opensourced by MaGiK Private Network Solutions Ltd, a network solutions company. We originally developed The Panel simply as an add-on to support VPN management through ss-panel. We sell VPNs and WE USE THIS PORTAL NATIVELY. Different than other VPN sellers, we think that everything should be opensource and should be crystal clear for technical users and geeks. So we made our decision to opensource our module to the outside world, hoping that what we do would make a change, even little, to the ugly internet condition of China.

If you are not so familiar with PHP, FreeRadius and VPN stuffs and cannot afford setting up a VPN cluster on your own, Use our service: [MaGiK VPN](https://magikpns.com/vpn"). We charge at a fairly low rate, for only ￥25 CNY per month, which we believe every ITer can afford.

If you simply want to show your support or donate some money, buy our VPN to support us. Thank you and have fun messing with The Panel.
[Demo](https://portal.magikpns.com) [中文安装文档](https://github.com/magikpns/ThePanel/wiki/Install-Guide-zh_cn)



### Requirements
* PHP >= 5.4
* PDO Extension
* FreeRadius Set up and running correctly on the same host
* Mysql-Server, Php-Mysql, and Freeradius-Mysql installed and running correctly
* Website root directory permission set to '711' aka 'universally writable'
* FreeRadius SQL Table in the same Mysql database with The Panel SQL Tables

### Install
* Import sql/*.sql to your **FreeRadius** database
* Rename lib/config-sample.php to config.php,and edit the database infomation. **Note**: Point your db directly to whatever FreeRadius uses for authentication and accounting. Otherwise it wont work.
* Fasten your seatbelt and enjoy.

### Admin
* The users whose uids are 1 and 2 are Admins by default.
* You can Add User ID into table 'ss_user_admin' yourself to appoint your admins.

### Send mail using mail-gun
Run:

```
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar  install
```

### Thanks to

* [AdminLTE](https://github.com/almasaeed2010/AdminLTE)
* [Medoo](https://github.com/catfan/Medoo)
* [ss-panel](https://github.com/orvice/ss-panel)
* @orvice for developing the original ss-panel

