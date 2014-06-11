<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Job Opportunities";
$this->pageHeader = "Job Opportunities";
?>

<?php $this->define("content"); ?>
<p>We are more than a career opportunity. Joining Appling HealthCare System is an opportunity to do work that matters. And there has never been a better time to work at Appling HealthCare System.</p>

<p>Come join our AHCS Family!</p>

<p><img src="<?php echo $this->url('/assets/images/job-opportunities.jpg'); ?>" width="625" height="375" alt="Image of Appling Healthcare staff"/></p>

<h3>Open Positions</h3>
<p><strong>RN’s<br/>
ER - 1- Fulltime (7p -7a) 1- PRN<br/>
Med Surg / ICU - 1- Fulltime (7a-7p) 1- Part-time (7a -7p)<br/>
Dialysis - PRN</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must have current Georgia RN License</li>
 <li>Current CPR certification</li>
 <li>ACLS &amp; PALS certified</li>
 <li>2-3 years experience preferred</li>
</ol>

<p><strong>PCT’s<br/>
Med Surg - Fulltime – (7a -7p)<br/>
Part-time 1 - (7p-7a) 1 - (7a -7p)</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must have current CNA certificate</li>
 <li>Current CPR certification</li>
 <li>Computer charting (a plus)</li>
 <li>Experience preferred</li>
</ol>

<p><strong>Radiology Tech<br/>
PRN</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must be registered by the ARRT or registry eligible</li>
 <li>Required to cross-train in other areas throughout the department</li>
 <li>Must be willing to take call and work all shifts as needed</li>
</ol>

<hr/>

<p><strong><a href="<?php echo $this->url('/assets/docs/job-application.pdf'); ?>">Download an employment application</a></strong></p>

<hr/>

<p><strong>To contact the Human Resources Department:</strong></p>

<p>Carla McLendon, Human Resource Director<br/>
(912) 367-9841 ext 1280<br/>
<a href="mailto:mclendonc@appling-hospital.org">mclendonc@appling-hospital.org</a>
</p>

<p>Tammy Johnson, Human Resource Assistant<br/>
(912) 367-9841 ext 1206<br/>
<a href="mailto:johnsonta@appling-hospital.org">johnsonta@appling-hospital.org</a>
</p>
<?php $this->end(); ?>
