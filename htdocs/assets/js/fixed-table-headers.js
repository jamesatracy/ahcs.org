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
		var table,
			tableHeight,
			tableOffset,
			rect,
			els,
			copyEls;
		
		table = document.getElementById(el.getAttribute('data-table'));
		rect = table.getBoundingClientRect();
		
		// clone table header and match the width
		el.style.width = rect.width + 'px';
		el.appendChild(
			table.querySelector('thead').cloneNode(true)
		);
		
		els = el.getElementsByTagName('th');
		copyEls = table.getElementsByTagName('th');
		
		// copy th widths to cloned header so they line up
		for (var j = 0, len = copyEls.length; j < len; j++) {
			els[j].style.width = copyEls[j].getBoundingClientRect().width + 'px';
			els[j].style.borderBottom = '0';
		}
		
		// cache these values
		tableHeight = rect.height;
		tableOffset = rect.top;
		
		window.addEventListener('scroll', function () {
			var offset = window.pageYOffset || document.body.scrollTop,
				tableBottom = tableOffset + tableHeight;
		
			// determine whether we should show or hide the fixed header
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