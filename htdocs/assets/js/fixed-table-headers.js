(function () {
	var elements;
	
	if(!document.querySelectorAll || 
	   !window.addEventListener) {
		// graceful IE degradation
		return;
	}
	
	// initialize fixed table headers
	elements = document.querySelectorAll('.header-fixed');
	for (var i = 0, len = elements.length; i < len; i++) {
		initHeader(elements[i]);
	}
	
	function initHeader(el) {
		var $this = $(el),
			$table = $(document.getElementById(el.getAttribute('data-table'))),
			tableWidth = $table.width(),
			tableHeight = $table.height(),
			tableOffset = $table.offset().top,
			$header = $table.find('thead').clone(),
			$fixedHeader = $this.append($header),
			$ths = $this.find('th'),
			j;
		
		$fixedHeader.width(tableWidth);
		
		j = 0;
		$table.find('th').each(function () {
			$ths[j].width = $(this).width();
			$ths.css('border-bottom', '0');
			j++;
		});
		
		window.addEventListener('scroll', function () {
			var offset = window.pageYOffset || document.body.scrollTop,
				tableBottom = tableOffset + tableHeight;
		
			if (el.style.display == 'none' && 
			    offset >= tableOffset && 
			    offset <= tableBottom) {
				el.style.display = 'table';
			} else if (offset < tableOffset || 
					   offset > tableBottom) {
				el.style.display = 'none';
			}
		});
	}
}());