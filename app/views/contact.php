<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Contact";
$this->pageHeader = "Contact Us";
?>

<?php $this->define("content"); ?>
<p><strong>Call (912) 367-9841</strong></p>
<div class="row">
	<div class="col-xs-6">
		<p>
		Primary Business Address<br/>
		P.O. Box 2070<br/>
		163 E. Tollison St<br/>
		Baxley, GA 31515
		</p>
	</div>
	<div class="col-xs-6">
		<p>
		Phone: 912-367-9841<br/>
		Fax: 912-367-1272<br/>
		E-mail: <a href="mailto:crosbyrr@appling-hospital.org">crosbyrr@appling-hospital.org</a>
		</p>
	</div>
</div>
<p>
	<iframe width="625" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=163+East+Tollison+Street&amp;sll=31.769423,-82.349052&amp;sspn=0.003986,0.006877&amp;g=E+Tollison+St,+Baxley,+Appling,+Georgia+31513&amp;ie=UTF8&amp;hq=&amp;hnear=163+Tollison+St,+Baxley,+Appling,+Georgia+31513&amp;ll=31.769149,-82.356519&amp;spn=0.007972,0.013754&amp;z=14&amp;iwloc=lyrftr:m,8386415143205370759,31.769004,-82.348237&amp;output=embed"></iframe>
</p>
<p><a href="http://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=163+East+Tollison+Street&sll=31.769423,-82.349052&sspn=0.003986,0.006877&g=E+Tollison+St,+Baxley,+Appling,+Georgia+31513&ie=UTF8&hq=&hnear=163+Tollison+St,+Baxley,+Appling,+Georgia+31513&ll=31.769149,-82.356519&spn=0.007972,0.013754&z=14&iwloc=lyrftr:m,8386415143205370759,31.769004,-82.348237" target="_blank">View Larger Map</a></p>
<?php $this->end(); ?>