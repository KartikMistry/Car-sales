<!DOCTYPE html>
<html lang="en">
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.pano.js"></script>
<style>
.pano {
  width: 100%;
  height: 100%;
  margin: 0 auto;
  cursor: move;
}

.pano .controls {
  position: relative;
  top: 40%;
}

.pano .controls a {
  position: absolute;
  display: inline-block;
  text-decoration: none;
  color: #eee;
  font-size: 3em;
  width: 20px;
  height: 20px;
}

.pano .controls a.left { left: 10px; }

.pano .controls a.right { right: 10px; }

.pano.moving .controls a {
  opacity: 0.4;
  color: #eee;
}
</style>
<body>
<div id="myPano" class="pano">
  <div class="controls">
    <a href="#" class="left">&laquo;</a>
    <a href="#" class="right">&raquo;</a> 
  </div>
</div>
<script>
$(document).ready(function(){
$("#myPano").pano({
img: "360.jpg";
});
});
</script>

</body>
</head>
</html>

