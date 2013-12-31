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
<p><strong>Med Surg - (PCT) - Part time (7p -7a)</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
    <li>Must have certification as nursing assistant</li>
    <li>Current CPR certification</li>
    <li>Computer charting (a plus)</li>
</ol>

<p><strong>ICU - (RN) - Full time  (7p-7a)</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
	<li>Current Georgia RN license</li>
	<li>ACLS &amp;PALS certified</li>
	<li>Must have current CPR certification</li>
	<li>2-3 years experience preferred</li>
</ol>

<p><strong>IT Systems and Network Administrator - Full time</strong></p>
<p>QUALIFICATIONS:</p>
<ol>
   <li>3-5 years of related IT experience plus, BS degree in computer science, information
        technology or equivalent years experience can be substituted on a one to one basis</li>
   <li>Must exercise discretion and judgement, strong problem solving, troubleshooting and
        De-bugging skills</li>
   <li>Excellent customer service, communication and presentation skills</li>
   <li>Network (Cisco) and Windows system administration experience, both server and desktop</li>
   <li>Manage and troubleshoot networks as well as intranet and internet connectivity throughout
        the organization</li>
   <li>Ability to configure, install, administer and maintain MS server, DHCP, DNS,
        MS Exchange, VMware servers and telephony equipment</li>
   <li>Troubleshoot issues with Outlook/Exchange, wireless, VPN, network and printer connectivity
   <li>Hospital experience a plus</li>
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