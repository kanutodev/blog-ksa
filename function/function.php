<?php
//////////// FUNCTION TO REMOVE SLASHES AND TO REMOVE SPACES //////////
function inject_checker ($con, $field){
return (htmlentities(trim(mysqli_real_escape_string($con, $field))));
}
?>