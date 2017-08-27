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
<?php
    echo "<select class=\"selectpicker\" name=\"main\" onchange=\"document.location=this.options[this.selectedIndex].value\">
        <option>Type select:</option>
        <option value=\"atn.php\">ATN</option>
        <option value=\"okn.php\">OKN</option>
    </select>";

        if (isset($_GET["main"])){
        if ($_GET["main"] == "okn") {
            echo "<select class='selectpicker' name='on_net' onchange=\"window.location='index.php?okn='+this.value\">
                <option>OKN select:</option>
                <option value='Artema49'>Artema49(Orion)</option>
                <option value='Dzerzhinskogo158'>Dzerzhinskogo158(Evropark)</option>
                <option value='Dzerzhinskogo160'>Dzerzhinskogo160(Evropark)</option>
                <option value='Dzerzhinskogo199'>Dzerzhinskogo199(Zatinackiy)</option>
                <option value='Dovatorcev30B'>Dovatorcev30B(Evropark)</option>
                <option value='Dovatorcev33A'>Dovatorcev33A(Burakova)</option>
                <option value='Dovatorcev61'>Dovatorcev61(ORTC)</option>
                <option value='Dovatorcev61A'>Dovatorcev61A(Bastion-2)</option>
                <option value='K.Marksa47-49'>K.Marksa47-49(Evropeyskiy)</option>
                <option value='K.Marksa53'>K.Marksa53(Evropeyskiy)</option>
                <option value='Kulakova9V'>Kulakova9V(Serkov)</option>
                <option value='Kulakova12V'>Kulakova12V(Souz-8)</option>
                <option value='Kulakova15V'>Kulakova15V(Serkov)</option>
                <option value='Kulakova16V'>Kulakova16V(Neptun)</option>
                <option value='Lenina394'>Lenina394(TehMontazh)</option>
                <option value='Mira319'>Mira319(Nika)</option>
                <option value='Parallelniy8'>Parallelniy8(Brat)</option>
                <option value='Pirogova68/3'>Pirogova68/3(Kompleks)</option>
                <option value='Pushkina9'>Pushkina9(Kapital)</option>
                <option value='50let5'>50let5(NoviyRim)</option>
                <option value='50let16A'>50let16A(Cvetnik)</option>
                <option value='50let16I'>50let16I(Gorozont)</option>
                <option value='50let43B'>50let43B(Prezident)</option>
                <option value='50let63B'>50let63B(VATT)</option>
                </select>";}
        }
if (isset($_GET["okn"])){
    if ($_GET["okn"] == "Artema49"){
        echo "<select class='selectpicker' name='acc' onchange=\"window.location='./acc/artema49.php?main='+this.value\">
                <option>ACC select</option>
                <option value='acc57-1-Artema49a.STV'>acc57-1-Artema49a.STV</option>
                <option value='acc57-2-Artema49a.STV'>acc57-2-Artema49a.STV</option>             
          </select>";
    }}
?>

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