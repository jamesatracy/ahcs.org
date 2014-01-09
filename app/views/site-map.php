<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Site Map";
$this->pageHeader = "Site Map";
?>

<?php $this->define("content"); ?>
<ul>
	<li><a href="<?php echo $this->urlAlias('home'); ?>">Home</a></li>
	<li><a href="<?php echo $this->urlAlias('about'); ?>">About Appling HealthCare</a></li>
	<li><a href="<?php echo $this->urlAlias('coming-soon'); ?>">Billing &amp; Insurance</a></li>
	<li><a href="<?php echo $this->urlAlias('jobs'); ?>">Job Opportunities</a></li>
	<li><a href="<?php echo $this->urlAlias('patient-visitor-services'); ?>">Patient &amp; Visitor Services</a></li>
	<li><a href="<?php echo $this->urlAlias('physician-services-directory'); ?>">Physician &amp; Services Directory</a></li>
	<li><a href="<?php echo $this->urlAlias('pavilion-senior-care'); ?>">Senior Care &amp; Pavilion</a></li>
</ul>
<?php $this->end(); ?>