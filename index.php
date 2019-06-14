<!DOCTYPE html>
<html>
<body>
  <h4> Helooo</h4>
<h1 id="demo">kida ji</h1>


<button type="button" onclick="load()">Change</button>

<script>
function load() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "text.php", false);
  xhttp.send();
  document.getElementById("demo").innerHTML = xhttp.responseText;
}

</script>

</body>
</html>
