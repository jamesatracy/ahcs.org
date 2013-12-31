<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Coming Soon";
$this->pageHeader = "Coming Soon!";
?>

<?php $this->define("content"); ?>
<p>We are working hard to bring you this feature and will make it available to you as soon as we can.</p>
<p>In the mean time, try one of the other links above or contact us if you need assistance or would like to be notified when this feature is ready:</p>
<p>
Phone: 912-367-9841<br/>
Fax: 912-367-1272<br/>
E-mail: <a href="mailto:crosbyrr@appling-hospital.org">crosbyrr@appling-hospital.org</a>
</p>
<?php $this->end(); ?>