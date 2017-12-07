<!DOCTYPE HTML>
<html>
<head>
<style>
#div1 {
    width: 350px;
    height: 350px;
    padding: 10px;
    border: 2px solid #aaaaaa;
}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>

<p>Drag the Mouse into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="images.jpg" draggable="true" ondragstart="drag(event)">

</body>
</html>