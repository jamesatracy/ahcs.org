<?php 
$this->extend("layout");
$this->extend("page-two-col");

$this->title = "Pavillion &amp; Senior Care";
$this->pageHeader = "Pavillion &amp; Senior Care";
?>

<?php $this->define("content"); ?>
<?php
/*<img src="<?php echo $this->url('/assets/images/the-pavillion.jpg'); ?>" width="233" height="350" alt="The Pavillion" align="right" style="margin:5px" /> */ 
?>

<h3>The Pavilion</h3>
<h4>State of the Art 101 bed Nursing Home</h4>

<p>At the Pavilion, we value each resident and are committed to caring for them in the personalized manner that they deserve.</p>
<p>Residents of the Pavilion received personalized nursing care 24 hours a day, 7 days a week.</p>
<p>Some additional benefits of being a resident of the Pavilion are:</p>
<ul>
	<li>Chef dining with in-between meal snacks and room service for our resident's convenience.</li> 
	<li>Housekeeping Services</li>
	<li>Activities and outings are scheduled and catered to the individual preferences</li>
	<li>A beauty parlor with a licensed beautician</li>
	<li>Chapel to meet all spiritual needs</li>
</ul>

<p><img src="<?php echo $this->url('/assets/images/the-pavillion-outside.jpg'); ?>" width="625" height="300" alt="The Pavillion" /></p>

<h3>The Senior Care Unit</h3>
<h4>Recovery for Seniors</h4>

<p>Aging can present unique mental health needs and challenges that older adults often find difficult to overcome.  The Senior Care Unit at Appling HealthCare System assists older adults and their families in understanding and learning to cope with these problems related to the aging process.  Our goal is to maintain and enhance the patient's self respect during every phase of treatment.</p>

<p>
<img src="<?php echo $this->url('/assets/images/senior-care-unit.jpg'); ?>" width="300" height="200" alt="The Senior Care Unit" />
<img src="<?php echo $this->url('/assets/images/senior-care-activity.jpg'); ?>" width="300" height="200" alt="The Senior Care Unit" />
</p>

<h4>A Comprehensive Approach to Healing</h4>

<p>We take a holistic view through the assessment and treatment of the physical, emotional, and lifestyle changes that come with age.  Care is administered through our clinical team of professionals lead by a psychiatrist and consisting of nurses, social workers, and technicians who are specially trained in psychiatric care.</p>

<p>We place great value on family involvement in the treatment process.  We urge family members to participate as much as possible in the program that we provide.  We believe that a patient's recovery is enhanced when the family participates in the process.</p>

<p>Signs and Symptoms that May Indicate a Need for Treatment:</p>
<ul>
	<li>Depressed mood, extreme sadness or irritability</li>
	<li>Feeling useless, helpless, hopeless</li>
	<li>Personality Changes over time</li>
	<li>Unexplained physical ailments</li>
	<li>Changes in eating and sleeping patterns; fluctuations in weight</li>
	<li>Loss of interest in appearance/hygiene</li>
	<li>Increasing difficulty remembering ordinary things</li>
	<li>Confused thinking, difficulty concentrating</li>
	<li>Excessive fears, anxieties, suspicions</li>
	<li>Feeling rejected by others</li>
	<li>Withdrawal from family &amp; friends</li>
	<li>Hearing voices or imagining things that do not exist</li>
	<li>Needing more medication than should be necessary for a physical condition</li>
	<li>Refusal to take needed medications</li>
	<li>Suicidal thoughts</li>
	<li>Growing inability to cope with living daily</li>
</ul>
<?php $this->end(); ?>