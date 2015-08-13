The Panel
========
##目前还在开发中
一个从[https://github.com/orvice/ss-panel](ss-panel) fork过来的分支。**相对原版ss-panel增加了管理FreeRadius认证的VPN服务器，以及按月/季度/年份计费和中文支付宝/Paypal接口功能。**
目前的版本仅实现按时间计费，FreeRadius认证功能，最好用于VPN服务器集群管理而非ShadowSocks服务器集群管理。

[Demo](https://portal.magikpns.com) [中文安装文档](https://github.com/magikpns/ThePanel/wiki/Install-Guide-zh_cn)



### Requirements
* PHP >= 5.4
* PDO Extension
* 同一服务器上正确安装配置的FreeRADIUS服务器
* Mysql-Server, Php-Mysql, and Freeradius-Mysql 已经被安装和配置/freeradius使用MySQL作为数据库
* 网站根目录权限设置为'711' aka 'universally writable'
* FreeRADIUS从和ss-panel相同的数据库里读取用户名密码

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

###LICENSE
GNU GPL
