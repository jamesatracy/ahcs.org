<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Job Opportunities";
$this->pageHeader = "Job Opportunities";
?>

<?php $this->define("content"); ?>
<p>We are more than a career opportunity. Joining Appling HealthCare System is an opportunity to do work that matters. And there has never been a better time to work at Appling HealthCare System.</p>

<p>Come join our AHCS Family!</p>

<p><img src="<?php echo $this->url('/assets/images/job-opportunities.jpg'); ?>" width="625" height="375" alt="Job Opportunities"/></p>

<h3>Open Positions</h3>
<p><strong>Utilization Review - (Case Manager's ) (1)-Fulltime (1)-PRN</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>3-5 years experience in Utilization Review or Case Management</li>
 <li>Registered Nurse</li>
 <li>Must be able to work in fast pace high volume environment</li>
 <li>Strong clinical background</li>
 <li>Swing bed knowledge preferred</li>
 <li>Knowledge of coding/healthcare payment systems</li>
</ol>

<p><strong>Med Surg - (PCT's) - (1)- Fulltime (7a -7p) (1) -Part-time (7p -7a)</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must have certification as nursing assistant</li>
 <li>Current CPR certification</li>
 <li>Computer charting (a plus)</li>
</ol>

<p><strong>Med Surg - (RN's or LPN's) (1) Fulltime (7a-7p) (1) Fulltime (7p-7a)</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
 <li>Must have current Georgia license</li>
 <li>Current CPR certification</li>
 <li>ACLS &amp; PALS certified</li>
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