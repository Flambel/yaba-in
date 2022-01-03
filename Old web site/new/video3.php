<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Fullscreen with JavaScript</h2>
<p>Click on the button to open the video in fullscreen mode.</p>
<button onclick="openFullscreen();">Open Video in Fullscreen Mode</button>
<p><strong>Tip:</strong> Press the "Esc" key to exit full screen.</p>

<video width="100%" controls id="myvideo">
  <source src="../videos/VR-yaba.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


<script>
var elem = document.getElementById("myvideo");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>

<p>Note: Internet Explorer 10 and earlier does not support the msRequestFullscreen() method.</p>

</body>
</html>
