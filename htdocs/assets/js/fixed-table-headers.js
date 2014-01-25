(function (win, doc) {
	var elements;
	
	if(!doc.querySelectorAll) {
		// graceful IE degradation
		return;
	}
	
	// initialize fixed table headers
	elements = doc.querySelectorAll('.header-fixed');
	for (var i = 0, len = elements.length; i < len; i++) {
		initHeader(elements[i]);
	}
	
	function initHeader(el) {
		var table,
			thead,
			tableHeight,
			tableOffset,
			rect,
			els,
			copyEls,
			copyRect,
			scroll = win.addEventListener ? 'scroll' : 'onscroll',
			addEvent = win.addEventListener || win.attachEvent;
		
		table = doc.getElementById(el.getAttribute('data-table'));
		rect = table.getBoundingClientRect();
		
		// clone the real table's thead so we can copy it over to the fixed table
		thead = table.querySelector('thead').cloneNode(true);
		els = thead.children[0].children; // cloned table ths
		copyEls = table.getElementsByTagName('th');
		
		// copy th widths to cloned header so they line up
		for (var j = 0, len = copyEls.length; j < len; j++) {
			copyRect = copyEls[j].getBoundingClientRect();
			els[j].style.width = (copyRect.right - copyRect.left) + 'px';
			els[j].style.borderBottom = '0';
		}
		
		// now we can update the fixed table with the cloned nodes
		el.style.width = (rect.right - rect.left) + 'px';
		el.appendChild(thead);
		
		// cache these values
		tableHeight = rect.height;
		tableOffset = rect.top;
		
		addEvent(scroll, function () {
			var offset = win.pageYOffset || document.body.scrollTop,
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
}(window, document));