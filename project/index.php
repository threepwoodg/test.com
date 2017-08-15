<?php
/**
 * Created by PhpStorm.
 * User: tmn_mgmt
 * Date: 04.08.17
 * Time: 15:35
 */

header("Content-type: text/html; charset=utf-8;");

define('SQL_USERNAME','root');
define('SQL_PASSWORD','root');
define('SQL_HOST','localhost');
define('SQL_PORT','8889');
define('SQL_DB','ne');

define('PNG','image/png');
define('JPEG','image/jpeg');
define('JPG','image/jpg');

$link = mysqli_init();

$success = mysqli_real_connect($link, SQL_HOST, SQL_USERNAME, SQL_PASSWORD, SQL_DB, SQL_PORT);

$query = mysqli_query($link,'SELECT * FROM `ne_report`');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>

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
<h3>MEN listing</h3>
<form class="form-horizontal" method="post" action="./acc.php" enctype="multipart/form-data">
    <select class="selectpicker" name="okn">
        <option value="Artema49">Artema49(Orion)</option>
        <option value="Dzerzhinskogo158">Dzerzhinskogo158(Evropark)</option>
        <option value="Dzerzhinskogo160">Dzerzhinskogo160(Evropark)</option>
        <option value="Dzerzhinskogo199">Dzerzhinskogo199(Zatinackiy)</option>
        <option value="Dovatorcev30B">Dovatorcev30B(Evropark)</option>
        <option value="Dovatorcev33A">Dovatorcev33A(Burakova)</option>
        <option value="Dovatorcev61">Dovatorcev61(ORTC)</option>
        <option value="Dovatorcev61A">Dovatorcev61A(Bastion-2)</option>
        <option value="K.Marksa47-49">K.Marksa47-49(Evropeyskiy)</option>
        <option value="K.Marksa53">K.Marksa53(Evropeyskiy)</option>
        <option value="Kulakova9V">Kulakova9V(Serkov)</option>
        <option value="Kulakova12V">Kulakova12V(Souz-8)</option>
        <option value="Kulakova15V">Kulakova15V(Serkov)</option>
        <option value="Kulakova16V">Kulakova16V(Neptun)</option>
        <option value="Lenina394">Lenina394(TehMontazh)</option>
        <option value="Mira319">Mira319(Nika)</option>
        <option value="Parallelniy8">Parallelniy8(Brat)</option>
        <option value="Pirogova68/3">Pirogova68/3(Kompleks)</option>
        <option value="Pushkina9">Pushkina9(Kapital)</option>
        <option value="50let5">50let5()</option>
        <option value="50let16A">50let16A(Cvetnik)</option>
        <option value="50let16I">50let16I(Gorozont)</option>
        <option value="50let43B">50let43B(Prezident)</option>
        <option value="50let63B">50let63B(VATT)</option>
    </select>
    <select class="selectpicker" name="pe">
        <option value="cisco2">cisco2</option>
        <option value="pe">PE</option>
    </select>
    <select class="selectpicker" name="eth_trunk">
        <option value="eth-trunk5">eth-trunk5</option>
        <option value="eth-trunk2">eth-trunk2</option>
    </select>
    <input class="input-sm" type="text" value="№ vlan" name="vlan">
    <input class="input-sm" type="text" value="speed" name="speed">
    <input class="input-sm" type="text" value="vsi" name="vsi">
    <input class="input-sm" type="text" value="name" name="name">
    <input class="input-sm" type="text" value="scala" name="scala">
    <input class="input-sm" type="text" value="po" name="po">
    <input class="input-sm" type="text" value="1c" name="1c">
    <input class="input-sm" type="text" value="id" name="id">
    <select class="selectpicker" name="type_ne">
        <option value="acc">acc</option>
        <option value="atn">atn</option>
    </select>
    <select class="selectpicker" name="ne_ip">
        <?php
        while ($row = mysqli_fetch_assoc($query)){
            echo "<option value='{$row["NE IP Address"]}'>{$row["NE Name"]}</option>";
        }
        ?>
    </select>
    <input type="hidden" name="ne_name" value='<?php
    while ($row = mysqli_fetch_assoc($query)){
        echo "<option value=''>{$row["NE Name"]}";
    }
    ?>'>
    <input class="btn btn-success" type="submit" value="next page">
</form>
SERKOV M. P. Sc.RU034 ID-4301840 SO-1341550 1C-10172795
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