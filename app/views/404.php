<?php 
$this->extend("/layouts/layout");
$this->extend("/layouts/page-two-col");

$this->title = "Page Missing";
$this->pageHeader = "Oops! Page Missing";
?>

<?php $this->define("content"); ?>
<h3 class="leader">HTTP 404: Page Not Found</h3>
<p>Sorry, but we could not find the page located at <?php echo $this->request->getPath(); ?>. It may have moved or you may have a bad link.</p>
<p>Try one of the links above or contact us if you need assistance:</p>
<p>
Phone: 912-367-9841<br/>
Fax: 912-367-1272<br/>
E-mail: <a href="mailto:crosbyrr@appling-hospital.org">crosbyrr@appling-hospital.org</a>
</p>
<?php $this->end(); ?>