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
