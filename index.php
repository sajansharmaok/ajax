<!DOCTYPE html>
<html>
<body>

<h1 id="demo">kida ji</h1>


<button type="button" onclick="reset()">Change</button>

<script>
function reset() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "text.php", false);
  xhttp.send();
  document.getElementById("demo").innerHTML = xhttp.responseText;
}

</script>

</body>
</html>
