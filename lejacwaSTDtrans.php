<?php 

$DisplayBC = GetBreadCrumbs($selectID);

$DisplayTitleBanner = GetTitleBanner($selectID);

?>

<div class="WAbreadCrumb">
<?php print $DisplayBC; ?>
</div>

<div class="WAtitleBorder">
<?php print $DisplayTitleBanner; ?>
</div>

<div class="WAmain">
<br>
<p>
&nbsp;<?php print $DisplayWKarea; ?>
</p>
</div>

<div class="WAselect">
&nbsp;<p>Select Area </p>
</div>
