<?php
/**
 * Created by PhpStorm.
 * User: tmn_mgmt
 * Date: 07.08.17
 * Time: 14:20
 */

var_dump($_POST);

if ($_POST["type_ne"] == "acc"){
    echo    "<pre>interface GigabitEthernet0/0.{$_POST["vlan"]}
description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
bandwidth {$_POST["speed"]} 
encapsulation dot1Q {$_POST["vlan"]}
ip address !!! 255.255.255.252
ip verify unicast reverse-path
no ip redirects
no ip proxy-arp
no cdp enable
service-policy input {$_POST["speed"]}k-in
service-policy output {$_POST["speed"]}k-out
[cisco2.Stavropol]

vsi id{$_POST["id"]} static
description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
pwsignal ldp
vsi-id {$_POST["vsi"]}
mac-withdraw enable
peer 10.173.224.2
!!!! peer !!!!
mtu 9600
ignore-ac-state
tnl-policy tnl_policy

interface {$_POST["eth_trunk"]}.{$_POST["vlan"]}
description ---### [int] {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]} ###---
set flow-stat interval 30
mtu 9600
control-vid {$_POST["vlan"]} dot1q-termination
dot1q termination vid {$_POST["vlan"]}
l2 binding vsi id{$_POST["id"]}
loop-detect enable
loop-detect block 10
loop-detect priority 1
loop-detect trigger interface-down enable
trust upstream not_6_7
trust 8021p
statistic enable
[agg1-Lenina244.STV]
</pre>";

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listing</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<a href="index.php" class="navbar-link">Main</a>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
</body>
</html>

