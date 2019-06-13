<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
<body>
	<h1 id="demo">Time kinna ho gya</h1>

<script type="text/javascript">
	

// 	function text() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.open("GET", "time.php", false);
//   xhttp.send();
//   document.getElementById("demo").innerHTML = xhttp.responseText;

// }
$(document).ready(function(){
$("#demo").click (function(){


$.ajax({
        type: "GET",
        url: "ajax/time.php",
        data: 'page=' + btn_page,
        success: function (demo) {
            var a = data; // This line shows error.
            $.ajax({
                type: "GET",
                url: "time.php",
                data: 'page=' + a,
                success: function (demo) {

                }
            });
        }
    });

});
});
</script>


</body>
</html>