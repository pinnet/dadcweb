<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
    <div id="app" style="height: 100vh">
        <!-- Webamp will attempt to center itself within this div -->
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
webamp.renderWhenReady(document.getElementById('app'));
</script>
</body>

</html>

       