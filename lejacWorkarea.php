<?php

$NavInstance = getNavArrayInstance($selectID);

$WAnameInclude = $productDir."lejacwa".$NavArray[$NavInstance] ['filename'].".php";

//DEBUG echo " include = '$WAnameInclude'";

?>

<?php include ("$WAnameInclude"); ?>
