<?php include ("../../portfolio-web.php"); ?>


<script>

function setSelectedIndex(s, v) {
for ( var i = 0; i < s.options.length; i++ ) {
if ( s.options[i].text == v ) {
s.options[i].selected = true;
return;
}
}
}
setSelectedIndex(document.getElementById('projetos'),"Wilza Tour");

</script>