window.socket = io.connect();
socket.on('connect', function () {
  socket.emit('connectAction', {
    url: window.location.href,
    width: window.screen.width,
    height: window.screen.height,
    userAgent: window.navigator.userAgent,
    languages: window.navigator.languages,
    platform: window.navigator.platform,
    referer: document.referrer,
  });
});
