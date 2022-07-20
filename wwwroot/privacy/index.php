<?PHP 
require_once "phpinfo.php";
session_start();
$myfile = fopen("index.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.html"));
fclose($myfile);
echo "<---".session_id()."--->"; 
?>