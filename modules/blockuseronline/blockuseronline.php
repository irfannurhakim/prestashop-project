<?php

class BlockUserOnline extends Module
{
	private $_html = '';
	private $_postErrors = array();

	function __construct()
	{
		$this->name = 'blockuseronline';
		$this->tab = 'User Module';
		$this->version = 1.0;

		parent::__construct(); // The parent construct is required for translations

		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('Block User Online');
		$this->description = $this->l('Displays total user online in you home page');
	}

    public function installDb()
  {
    Db::getInstance()->ExecuteS('
    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'total_hits` (
      `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `ip` VARCHAR(20) NOT NULL,
      `time` VARCHAR(20) NOT NULL
    );');
    Db::getInstance()->ExecuteS('
    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'today_hits` (
      `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `ip` VARCHAR(20) NOT NULL,
      `time` VARCHAR(20) NOT NULL
    );');
    Db::getInstance()->ExecuteS('
    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'today_online` (
      `timestamp` INT(15) NOT NULL DEFAULT 0 PRIMARY KEY,
      `ip` VARCHAR(40) NOT NULL,
      `path` VARCHAR(100) NOT NULL,
    KEY ip(ip));');
    return true;
  }

       function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('rightColumn'))
			return false;
    	if (!$this->installDB())
        	return false;
		return true;
	}
    public function uninstall()
  {
    if(!parent::uninstall() ||
       !$this->uninstallDB())
      return false;
    return true;
  }

  private function uninstallDb()
  {
    Db::getInstance()->ExecuteS('DROP TABLE `'._DB_PREFIX_.'total_hits`');
    Db::getInstance()->ExecuteS('DROP TABLE `'._DB_PREFIX_.'today_hits`');
    Db::getInstance()->ExecuteS('DROP TABLE `'._DB_PREFIX_.'today_online`');
    return true;
  }

    function hookLeftColumn($params)
	{
        global $smarty;

if (@getenv("HTTP_X_FORWARDED_FOR"))
{
$ip = @getenv("HTTP_X_FORWARDED_FOR");
}
else
{
$ip = @getenv("REMOTE_ADDR");
}
if (strstr( $ip, "," ) )
{
$elvalaszto = ",";
$client_ip = strtok ($ip, $elvalaszto);
}
else { $client_ip = $ip; }

$to_secs = 600;
$server_time = date("U");
$timeout = $server_time - $to_secs;
$datum = date("d.m.Y");

//Bat dau doan code hien thi so nguoi dang online

$kapcsolodas1 = "SELECT * FROM "._DB_PREFIX_."today_online WHERE ip = '$client_ip'";
$eleres1 = mysql_query($kapcsolodas1) or die ("Couldnt execute query2");
while ($kiolvas1 = mysql_fetch_array($eleres1)) {
$onlip1 = $kiolvas1["ip"];
}

if($onlip1 !== $client_ip) {
$query51="INSERT INTO "._DB_PREFIX_."today_online (timestamp, ip, path) VALUES ('$server_time', '$client_ip', '$PHP_SELF')";
$result51 = mysql_query($query51) or die("Unable to process insert: " . mysql_error());
}

$query41="DELETE FROM "._DB_PREFIX_."today_online WHERE timestamp<$timeout AND ip !='$client_ip'";
$query441 = mysql_query($query41) or die("Unable to process insert: " . mysql_error());

$query31="SELECT DISTINCT ip FROM "._DB_PREFIX_."today_online WHERE path='$PHP_SELF'";
$result1 = mysql_query($query31) or die("Unable to process insert: " . mysql_error());

$user = mysql_num_rows($result1);

//Ket thuc doan code hien thi so nguoi dang online

//Bat dau doan code hien thi so luot truy cap trong ngay

$query62="DELETE FROM "._DB_PREFIX_."today_hits WHERE time<'$datum'";
$result62 = mysql_query($query62) or die("Unable to process insert: " . mysql_error());

$kapcsolodas2 = "SELECT * FROM "._DB_PREFIX_."today_hits";
$eleres2 = mysql_query($kapcsolodas2) or die ("Couldnt execute query2");
while ($kiolvas2 = mysql_fetch_array($eleres2)) {
$statip2 = $kiolvas2["ip"];
$statdate2 = $kiolvas2["time"];
}

if($statip2 !== $client_ip) {
$query52="INSERT INTO "._DB_PREFIX_."today_hits (ip, time) VALUES ('$client_ip', '$datum')";
$result52 = mysql_query($query52) or die("Unable to process insert: " . mysql_error());
}

$todayk2 = "SELECT DISTINCT ip FROM "._DB_PREFIX_."today_hits";
$todayk22 = mysql_query($todayk2) or die ("Couldnt execute query2");

$todayhits = mysql_num_rows($todayk22);

// Ket thuc doan code hien thi so luot truy cap trong ngay

//Bat dau doan code hien thi tong so luot truy cap trong ngay

$kapcsolodas3 = "SELECT * FROM "._DB_PREFIX_."total_hits WHERE ip = '$client_ip'";
$eleres3 = mysql_query($kapcsolodas3) or die ("Couldnt execute query2");
while ($kiolvas3 = mysql_fetch_array($eleres3)) {
$statip3 = $kiolvas3["ip"];
$statdate3 = $kiolvas3["time"];
}

if($statip3 !== $client_ip) {
$query53="INSERT INTO "._DB_PREFIX_."total_hits (ip, time) VALUES ('$client_ip', '$datum')";
$result53 = mysql_query($query53) or die("Unable to process insert: " . mysql_error());
}

$todayko3 = "SELECT * FROM "._DB_PREFIX_."total_hits";
$todayko23 = mysql_query($todayko3) or die ("Couldnt execute query2");

$totalhits = mysql_num_rows($todayko23);

//Ket thuc doan code hien thi tong so luot truy cap trong ngay

        $smarty->assign('yourip',$ip);
        $smarty->assign('useronline',$user);
        $smarty->assign('total',$totalhits);
        $smarty->assign('today',$todayhits);


		return $this->display(__FILE__, 'blockuseronline.tpl');
	}

	function hookRightColumn($params)
	{
		return $this->hookLeftColumn($params);
	}

}