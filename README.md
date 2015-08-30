The Panel
========
##目前还在开发中
一个从[https://github.com/orvice/ss-panel](ss-panel) fork过来的分支。**相对原版ss-panel增加了管理FreeRadius认证的VPN服务器，以及按月/季度/年份计费和中文支付宝/Paypal接口功能。**
目前的版本仅实现按时间计费，FreeRadius认证功能，最好用于VPN服务器集群管理而非ShadowSocks服务器集群管理。

[Demo](https://www.magikvpn.com) [中文安装文档](https://github.com/magikpns/ThePanel/wiki/Install-Guide-zh_cn)



### Requirements
* PHP >= 5.4
* PDO Extension
* 同一服务器上正确安装配置的FreeRADIUS服务器
* Mysql-Server, Php-Mysql, and Freeradius-Mysql 已经被安装和配置/freeradius使用MySQL作为数据库
* 网站根目录权限设置为'711' aka 'universally writable'
* FreeRADIUS从和ss-panel相同的数据库里读取用户名密码

### Install
* 导入 sql/*.sql to your **FreeRadius** database
* Rename lib/config-sample.php to config.php,然后写入你的数据库配置。注意：这里的数据库和FreeRADIUS在同一个数据库。
* Fasten your seatbelt and enjoy.

### Admin
* uid为1和2的用户均为admin.
* 你可以自己更新uid表。

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

###LICENSE
GNU GPL
