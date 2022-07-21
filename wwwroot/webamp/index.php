<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />  
</head>

<body  onClick="webamp.play()">
    <div id="app"></div>
    <marquee id="current-track"></marquee>
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

// Returns a promise indicating when it's done loading.
webamp.renderWhenReady(document.getElementById('app')).then(() => { webamp.play(); });
    </script>
</script>
</body>
</html>

       