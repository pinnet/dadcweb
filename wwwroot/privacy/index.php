<?PHP session_start();
require_once "webroot/nocache.php";
$myfile = fopen("index.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.html"));
fclose($myfile);
?>