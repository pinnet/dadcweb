const buttonBindings = [
    { id: "prev", cb: () => webamp.previousTrack() },
    { id: "play", cb: () => webamp.play() },
    { id: "pause", cb: () => webamp.pause() },
    { id: "stop", cb: () => webamp.stop() },
    { id: "next", cb: () => webamp.nextTrack() },
    { id: "close", cb: () => webamp.close() }
  ];
  buttonBindings.forEach(({ id, cb }) => {
    document.getElementById(id).addEventListener("click", cb);
  });
  
  // An example of shoing the currently playing track
  webamp.onTrackDidChange((trackInfo) => {
    const { artist, title } = trackInfo.metaData;
    // Another option might be to set `document.title`;
    document.getElementById(
      "current-track"
    ).innerText = `Now playing: ${title} by ${artist}`;
  });