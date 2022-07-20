<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>WebAMP</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META name="viewport" content="width=device-width, initial-scale=1.0">
<META name="description" content="WebAMP is a web based audio player.">
<body>
<div id="app"></div>
<script src="https://unpkg.com/webamp"></script>
<script>
    const app = document.getElementById("app")
    const webamp = new Webamp();
    webamp.renderWhenReady(app);
</script>
</body>
</HTML>
<!-- Path: wwwroot\webamp\index.php -->