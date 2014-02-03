<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Patient &amp; Visitor Services";
$this->pageHeader = "Patient &amp; Visitor Services";
?>

<?php $this->define("content"); ?>
<h3 class="leader">Thank you for choosing Appling HealthCare System</h3>
<p>Information related to a patient's stay (i.e. visiting hours, patient rights &amp; responsibilities) are located in our Patient Guide, coming soon.</p>

<h3>Patient Forms</h3>
<p><a href="<?php echo $this->url('/assets/docs/Appling_Rehab_Patient_Information_Sheet.pdf'); ?>">Appling Rehab Patient Information Sheet</a></p>
<p><a href="<?php echo $this->url('/assets/docs/Attendance_and_Authorization_to_Disclose_Health_Information.pdf'); ?>">Attendance and Authorization to Disclose Health Information</a></p>
<p><a href="<?php echo $this->url('/assets/docs/Copy_of_Patient_Record_of_Disclosures.pdf'); ?>">Copy of Patient Record of Disclosures</a></p>
<p><a href="<?php echo $this->url('/assets/docs/medical_history_information.pdf'); ?>">Medical History Information</a></p>
<p><a href="<?php echo $this->url('/assets/docs/Pain_Scale_Assessment.pdf'); ?>">Pain Scale Assessment</a></p>

<hr/>

<p><strong>Your comments and concerns are important to us</strong></p>
<p>We want to hear from you regarding your satisfaction with our care and services, as well as suggestions for improvement. To help us measure our efforts, we follow up with our patients after their hospital stay, and if we contact you by mail, we hope you will take a moment to respond to our survey questions (provided by NRC Picker). Your comments will help us improve the way we provide care. We also welcome and encourage your comments at any time. All information is used to support our efforts to <strong>continually improve the quality</strong> of your care and safety. We encourage you to call the Patient Liaison to share your concerns at (912) 367-9841 ext.1283.</p>
<p>Should we be unable to resolve your concerns, we encourage you to contact the Georgia Department of Community Health, Two Peachtree St, NW Atlanta, GA 30303 (404-657-5726 or 800-878-6442).</p>
<?php $this->end(); ?>