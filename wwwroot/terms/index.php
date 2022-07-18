<?PHP 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
$myfile = fopen("index.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.html"));
fclose($myfile);
echo "<---".session_id()."--->"; 
?>