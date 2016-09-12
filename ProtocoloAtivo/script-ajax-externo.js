<script>
$(function () {
 $('#modal').modal('toggle');
});

function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("emitente").innerHTML = xmlhttp.responseText;
      }
    };
    xmlhttp.open("POST", "Emitente/"+str+"/Buscar", true);
    xmlhttp.send();
  }
}
</script>