<?php
/**
 * Created by PhpStorm.
 * User: tmn_mgmt
 * Date: 17.08.17
 * Time: 11:58
 */


if (isset($_GET["main"])){
    echo "<pre>
vsi id{$_POST["id"]} static
description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
pwsignal ldp
vsi-id {$_POST["vsi"]}
mac-withdraw enable
peer 10.173.224.2
peer 10.173.224.3
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
[agg1-Lenina244.STV] <10.173.224.1>

vsi id{$_POST["id"]} static
description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
pwsignal ldp
vsi-id {$_POST["vsi"]}
mac-withdraw enable
peer 10.173.224.1
peer 10.173.224.3
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
loop-detect priority 2
loop-detect trigger interface-down enable
trust upstream not_6_7
trust 8021p
statistic enable
[agg2-Lenina244.STV] <10.173.224.2>


vsi id{$_POST["id"]} static
description {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]}
pwsignal ldp
vsi-id {$_POST["vsi"]}
mac-withdraw enable
peer 10.173.224.2
peer 10.173.224.1
mtu 9600
tnl-policy tnl_policy

interface GigabitEthernet1/1/14.{$_POST["port"]}
 description ---### [int] {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]} ###---
 mtu 9600
 control-vid {$_POST["port"]} dot1q-termination
 vlan-group 1
  statistic enable
  user-queue cir {$_POST["speed"]} pir {$_POST["speed"]} flow-queue uni inbound
  user-queue cir {$_POST["speed"]} pir {$_POST["speed"]} flow-queue uni outbound
 dot1q termination vid {$_POST["port"]} vlan-group 1
 l2 binding vsi {$_POST["vsi"]}
 loop-detect enable
 loop-detect block 10
 loop-detect priority 4
 loop-detect trigger interface-down enable
 trust upstream not_6_7
 trust 8021p
[agg1-Zhukova27.STV] <10.173.224.3>

interface Ethernet0/0/{$_POST["port"]}
 description ---### [int] {$_POST["name"]} Sc.{$_POST["scala"]} ID-{$_POST["id"]} SO-{$_POST["po"]} 1C-{$_POST["1c"]} ###---
 port link-type dot1q-tunnel
 port default vlan {$_POST["port"]}
 loopback-detect enable
 stp disable
 undo ntdp enable
 undo ndp enable
 port-security enable
 port-security protect-action protect
 port-security max-mac-num 100
 port-security aging-time 5 type inactivity
 jumboframe enable 9712
 qos lr outbound cir {$_POST["speed"]}
 qos lr inbound cir {$_POST["speed"]}
[{$_POST["acc"]}] <10.173.228.175>

</pre>";
};
?>


