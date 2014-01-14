<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-one-col");

$this->title = "Physician &amp; Services Directory";
$this->pageHeader = "Physician &amp; Services Directory";

$this->prepend("css");
echo Html::stylesheet($this->url("/assets/css/directory.css"));
$this->end();
?>

<?php $this->define("content"); ?>
<h3 class="leader">Medical Staff</h3>
<table class="table">
	<tr>
		<th></th>
		<th>Name</th>
		<th>Specialty</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Fax</th>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Abendan_Dubberly.jpg'); ?>" width="71" height="100" /></td>
		<td>Abendan-Dubberly, Josefina, MD</td>
		<td>Pediatrics</td>
		<td>Appling Pediatrics<br/>
		105 East Tollison Street, Suite D<br/>
		Baxley, Georgia 31513</td>
		<td>912-366-9866</td>
		<td>912-366-9888</td>
	</tr>
	<tr>
		<td></td>
		<td>Butler, Jeffery, MD</td>
		<td>General Surgery</td>
		<td>Appling Surgical<br/>
			821 South Main Street<br/>
			Baxley, Georgia 31513
		</td>
		<td>912-367-8499</td>
		<td>912-367-8498</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Cantey.jpg'); ?>" width="71" height="100" /></td>
		<td>Cantey, William, MD</td>
		<td>Specialty General Surgery</td>
		<td>Appling Surgical<br/>
		821 South Main Street<br/>Baxley, GA  31513</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Carter, Harrison, MD</td>
		<td>South Georgia Diagnostic and Prevention Center</td>
		<td>1093 West Parker Street<br/>
		Baxley GA  31513</td>
		<td>912-367-9559</td>
		<td></td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Cezar.jpg'); ?>" width="71" height="100" /></td>
		<td>Cezar, Teresa, MD</td>
		<td>Internal Medicine</td>
		<td>Appling Medical Group<br/>
		755 South Main Street<br/>
		Baxley, Georgia 31513
		</td>
		<td>912-367-0102</td>
		<td>912-367-9966</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Crane.jpg'); ?>" width="71" height="100" /></td>
		<td>Crane, John, MD</td>
		<td>OB/GYN</td>
		<td>Appling OB/GYN<br/>
		195-A Tollison Street<br/> 		
		Baxley, Georgia 31513
		</td>
		<td>912-367-0434</td>
		<td>912-367-0436</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Dent.jpg'); ?>" width="71" height="100" /></td>
		<td>Dent, Gary, MD</td>
		<td>South Georgia Radiology Associates</td>
		<td>24 Glendale Ave, Ste, D<br/>
		Baxley GA  31513<br/>
		<a href="http://www.southgeorgiaradiology.com" target="_blank">www.southgeorgiaradiology.com</a></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Faulk.jpg'); ?>" width="71" height="100" /></td>
		<td>Faulk, David, MD</td>
		<td>Psychiatry</td>
		<td>1606 Gloucester Street<br/>
			Brunswick, Georgia 31522<br/>
		</td>
		<td>912-265-7382</td>
		<td></td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Orlando_Fernando.jpg'); ?>" width="71" height="100" /></td>
		<td>Fernando, Orlando, MD</td>
		<td>Internal Medicine</td>
		<td>Appling Medical Group<br/>     
		755 South Main Street<br/>
		Baxley, Georgia 31513
		</td>
		<td>912-367-0102</td>
		<td>912-367-9966</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Fordham.jpg'); ?>" width="71" height="100" /></td>
		<td>Fordham, Tonya, DO</td>
		<td>Family Medicine</td>
		<td>277 Lackawanna Street<br/>	
			Baxley, Georgia 31513
		</td>
		<td>912-366-1362</td>
		<td>912-366-1363</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Graham.jpg'); ?>" width="71" height="100" /></td>
		<td>Graham, Errol, MD</td>
		<td>Internal Medicine</td>
		<td>South Georgia Medical Associates<br/>                                       
		105 E. Tollison Street, Suite B<br/>
		Baxley, Georgia 31513
		</td>
		<td>912-367-4122</td>
		<td>912-367-4136</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Johnson.jpg'); ?>" width="71" height="100" /></td>
		<td>Johnson, Evelyn, MD</td>
		<td>Family Medicine</td>
		<td>Appling Medical Group<br/>
		755 South Main Street<br/>
		Baxley, Georgia 31513
		</td>
		<td>912-367-0044</td>
		<td>912-367-9005</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_Martin.jpg'); ?>" width="71" height="100" /></td>
		<td>Martin, Garland, MD</td>
		<td>Internal Medicine</td>
		<td>Advanced Healthcare<br/>				
		23 Tippins Street<br/>
		Baxley, Georgia 31513
		</td>
		<td>912-367-5525</td>
		<td>912-367-5516</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->url('/assets/images/staff/Dr_McIntire.jpg'); ?>" width="71" height="100" /></td>
		<td>McIntire, Timothy, MD</td>
		<td>Southeastern Pathology Associates</td>
		<td>203 Indigo Dr<br/>
		Brunswick, GA  31525</td>
		<td>912-261-2669</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Paidi, Ramachandra, MD</td>
		<td>Vidalia Psychiatric Clinic</td>
		<td>106 Queens Street, Suite A<br/>
		Vidalia, Georgia 30474</td>
		<td>912-537-6060</td>
		<td></td>
	</tr>
</table>

<hr/>

<h3>Allied Health Practitioners</h3>
<p>Martha Beecher, NP<br/>
Janey Britt, CFNP<br/>
Knicole Lee, NP<br/>
Beverly Johnson, NP<br/>
Beth Smith, CRNA<br/>
Vicki Woods, CRNA<br/>
Melanie Young, NP<br/>
</p>

<hr/>

<h3>Services</h3>
<table id="services" class="table table-bordered">
	<tr>
		<td>Appling Oncology &amp; Hematology</td>
		<td>Labs for Less</td>
	</tr>
	<tr>
		<td>Ambulance Serviecs</td>
		<td>Nuclear Medicine</td>
	</tr>
	<tr>
		<td>Community Education/Resource</td>
		<td>Nursing</td>
	</tr>
	<tr>
		<td>Dietary</td>
		<td>Pavilion</td>
	</tr>
	<tr>
		<td>Environmental Services</td>
		<td>Pharmacy</td>
	</tr>
	<tr>
		<td>General Surgery</td>
		<td>Radiology</td>
	</tr>
	<tr>
		<td>Infusion Clinic</td>
		<td>Rehabilitation</td>
	</tr>
	<tr>
		<td>Inpatient Dialysis</td>
		<td>Respiratory</td>
	</tr>
	<tr>
		<td>Laboratory</td>
		<td>Senior Care Unit</td>
	</tr>
</table>
<?php $this->end(); ?>