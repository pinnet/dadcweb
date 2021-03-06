<?php require_once "webroot/nocache.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style1.css" />  
</head>

<body>
    <div id="app"></div>
    <div id="controls">
      <button id="prev">Previous</button>
      <button id="play">Play</button>
      <button id="pause">Pause</button>
      <button id="stop">Stop</button>
      <button id="next">Next</button>
    </div>
    <script src="https://unpkg.com/webamp@1.4.2/built/webamp.bundle.min.js"></script>
    <script>
        const Webamp = window.Webamp;
        const webamp = new Webamp({
            initialTracks: [
                {
                    metaData: {
                        artist: "Groove Salad - Somafm",
                        title: "Grove Salad - Somafm",
                    },
                    // NOTE: Your audio file must be served from the same domain as your HTML
                    // file, or served with permissive CORS HTTP headers:
                    // https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
                    url: "http://ice2.somafm.com/groovesalad-128-mp3",
                    duration: 5.322286
                }
            ],
        });
        
        webamp.renderWhenReady(document.getElementById('app'));
    </script>
    <script src="index.js"></script>
</body>
</html>

       