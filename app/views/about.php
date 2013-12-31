<?php 
$this->extend("layout");
$this->extend("page-two-col");

$this->title = "About";
$this->pageHeader = "About Appling HealthCare";
?>

<?php $this->define("content"); ?>
<a href="http://www.dnv.com" target="_blank"><img src="<?php echo $this->url("/assets/images/dnv-accredited.jpg"); ?>" width="120" height="150" align="right" alt="DNV Accredited" /></a>
<p>Since 1951 Appling HealthCare System has been dedicated to providing our patients/residents the highest quality of medical care possible.</p>

<p>Appling HealthCare System, located in Baxley, Georgia is a licensed, non-profit acute care medical facility. Appling HealthCare System is licensed for 49 beds (15 of these beds serves as our Geriatric Behavioral Health Unit) and offers an array of high quality, technologically advanced inpatient and outpatient health care services to Appling County and surrounding communities. Appling HealthCare System is accredited by "DNV" Det Norske Veritas. DNV is the first and only CMS approved accreditation service that surveys annually and integrates ISO 9001 quality methods with Medicare Conditions of Participation.</p>

<p><img src="<?php echo $this->url('/assets/images/about-appling.jpg'); ?>" alt="About Appling HealthCare" width="625" height="268" /></p>

<h3>Our Mission</h3>
<p>The mission of Appling HealthCare System is to provide our Patient/Resident with quality health care at the highest level possible.</p>

<h3>Our Values</h3>
<p>Continual provision of quality HealthCare to all citizens in our region, always place the patients/residents needs first. Respect patients rights and maintain confidentiality. Educate staff continuously to ensure professionalism and quality.</p>
<?php $this->end(); ?>