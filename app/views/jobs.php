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
<p><strong>AMG / Knicole Lee, NP– (Receptionist) – Part-time</sttrong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>High school diploma or GED</li>
 <li>Computer and basic office skills</li>
 <li>Excellent communication skills dealing with Physicians, Patients and family members</li>
 <li>Able to work in high pace work environment</li>
</ol>
 
<p><strong>Dialysis – (RN) – PRN</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must have current Georgia RN license</li>
 <li>Current CPR certification</li>
 <li>ACLS & PALS certified</li>
 <li>Experience required</li>
</ol>

<p><strong>Med Surg - (RN's) (2) - Fulltime (7a-7p) & (7p-7a)</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must have current Georgia license</li>
 <li>Current CPR certification</li>
 <li>ACLS & PALS certified</li>
 <li>2-3 years experience preferred</li>
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
