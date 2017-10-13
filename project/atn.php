<?php
/**
 * Created by PhpStorm.
 * User: tmn_mgmt
 * Date: 16.08.17
 * Time: 15:06
 */

header("Content-type: text/html; charset=utf-8;");

define('SQL_USERNAME','root');
define('SQL_PASSWORD','nokia');
define('SQL_HOST','localhost');
define('SQL_PORT','8889');
define('SQL_DB','project');

define('PNG','image/png');
define('JPEG','image/jpeg');
define('JPG','image/jpg');

$link = mysqli_init();

$success = mysqli_real_connect($link, SQL_HOST, SQL_USERNAME, SQL_PASSWORD, SQL_DB, SQL_PORT);

if (!$success) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

$query_atn = mysqli_query($link,'SELECT * FROM ne_report WHERE `NE Name` LIKE \'%atn%\'');


if (isset($_POST["ne_ip"])){
    echo "<pre>
    vsi id{$_POST["id"]} static
 description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
 mac-limit maximum 100 rate 0
 pwsignal ldp
  vsi-id {$_POST["vsi"]}
  mac-withdraw enable
  peer 10.173.224.2
  peer {$_POST["ne_ip"]} negotiation-vc-id 224001{$_POST["vsi"]} tnl-policy atn_policy upe ignore-standby-state
  peer {$_POST["ne_ip"]} negotiation-vc-id 224001{$_POST["vsi"]} pw id{$_POST["id"]}
 mtu 9600
 ignore-ac-state
 tnl-policy tnl_policy

  interface {$_POST["eth_trunk"]}.{$_POST["vlan"]}
 description ---### [int] {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]} ###---
 set flow-stat interval 300
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
 [agg1-Lenina244.STV] <10.173.224.1>

 vsi id{$_POST["id"]} static
 description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
 mac-limit maximum 100 rate 0
 pwsignal ldp
  vsi-id {$_POST["vsi"]}
  mac-withdraw enable
  peer 10.173.224.1
  peer {$_POST["ne_ip"]} negotiation-vc-id 224001{$_POST["vsi"]} tnl-policy atn_policy upe ignore-standby-state
  peer {$_POST["ne_ip"]} negotiation-vc-id 224001{$_POST["vsi"]} pw id{$_POST["id"]}
 mtu 9600
 ignore-ac-state
 tnl-policy tnl_policy

  interface {$_POST["eth_trunk"]}.{$_POST["vlan"]}
 description ---### [int] {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]} ###---
 set flow-stat interval 300
 mtu 9600
 control-vid {$_POST["vlan"]} dot1q-termination
 dot1q termination vid {$_POST["vlan"]}
 l2 binding vsi id{$_POST["id"]}
 loop-detect enable
 loop-detect block 10
 loop-detect priority 2
 loop-detect trigger interface-down enable
 trust upstream not_6_7
 trust 8021p
 statistic enable
 [agg2-Lenina244.STV] <10.173.224.2>

 interface GigabitEthernet0/2/{$_POST["atn_port"]}.{$_POST["vlan"]}
 vlan-type dot1q {$_POST["vlan"]}
 description ---### [int] {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]} ###---
 mtu 9500
 mpls l2vc 10.173.224.1 pw-template PW 224001{$_POST["vsi"]} ignore-standby-state
 mpls l2vc 10.173.224.2 pw-template PW 224002{$_POST["vsi"]} secondary
 mpls l2vpn redundancy independent
 statistic enable
 loop-detect enable
 qos-profile uni-{$_POST["speed"]}-inbound inbound
 qos-profile uni-{$_POST["speed"]}-outbound outbound
 trust upstream not_6_7
 [{$_POST["ne_name"]}]
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
<h3>ATN</h3>
<a href="index.php" class="navbar-link">Main</a>

<form class="form-horizontal" method="post" action="./atn.php" enctype="multipart/form-data">
    <select class="selectpicker" name="on_net">
        <option value="cisco2">cisco2</option>
        <option value="pe">pe</option>
    </select><br>
    <select class="selectpicker" name="eth_trunk">
        <option value="eth-trunk5">eth-trunk5</option>
        <option value="eth-trunk2">eth-trunk2</option>
    </select><br>
    <select class="selectpicker" name="ne_ip">
        <?php
        while ($row = mysqli_fetch_assoc($query_atn)){
            echo "<option value='{$row["NE IP Address"]}'>{$row["NE Name"]}</option>";}
        ?>
    </select><br>
    <input class="input-sm" type="text" value="vlan" name="vlan">
    <input class="input-sm" type="text" value="speed" name="speed">
    <input class="input-sm" type="text" value="vsi" name="vsi"><br>
    <input class="input-sm" type="text" value="name" name="name">
    <input class="input-sm" type="text" value="scala" name="scala">
    <input class="input-sm" type="text" value="po" name="po"><br>
    <input class="input-sm" type="text" value="1c" name="1c">
    <input class="input-sm" type="text" value="id" name="id">
    <input class="input-sm" type="text" value="atn_port" name="atn_port"><br>
    <input class="btn btn-success" type="submit" value="next page">
</form>

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
