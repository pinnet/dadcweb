<?PHP session_start();
require_once "webroot/nocache.php";
?>
<!doctype html>
<html lang="en-us">
    <body>
        <!-- the canvas *must not* have any border or padding, or mouse coords will be wrong -->
        <canvas  id="canvas" style="border: 0px none;"></canvas>
        <script type="text/javascript" >
            var Module = {
                arguments: ['+sound'],
                canvas: document.getElementById('canvas'),
            };
        </script>
        <script type="text/javascript" src="js/x64.js"></script>
    </body>
</html>
