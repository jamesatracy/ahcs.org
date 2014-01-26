(function (win, doc) {
	var carousel = doc.getElementById('myCarousel'),
		interval = carousel.getAttribute('data-interval'),
		features = {},
		index = 0,
		transitioning = false,
		items,
		count,
		active,
		controls,
		indicators,
		activeIndicator,
		timer;
	
	// If available use the native method
	var getElementsByClassName = (function() {
		if (doc.getElementsByClassName) {
			return function(node, searchClass) {
				return node.getElementsByClassName(searchClass);
			}
		} else {
			return function(node, searchClass, tag) {
				var classElements = [], els, elsLen, pattern;
				if (tag == null) {
					tag = '*';
				}
				els = node.getElementsByTagName(tag);
				elsLen = els.length;
				pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
				for (var i = 0, j = 0; i < elsLen; i++) {
					if ( pattern.test(els[i].className) ) {
						classElements[j] = els[i];
						j++;
					}
				}
				return classElements;
			}
		}
	}());
	
	// check for css3 transitions
	if ('transition' in doc.createElement('fake').style) {
		features.transitions = true;
	}
	
	// check for addEventListener
	features.addEventListener = !!win.addEventListener;
	
	// carousel init
	items = getElementsByClassName(carousel, 'item', 'div');
	count = items.length;
	active = items[index];
	
	// set up transition events
	if (features.transitions) {
		for (var i = 0, len = items.length; i < len; i++) {
			items[i].addEventListener('transitionend', onTransitionEnd);
		}
	}
	
	// carousel controls
	controls = getElementsByClassName(carousel, 'carousel-control', 'a');
	for (var i = 0, len = controls.length; i < len; i++) {
		if (features.addEventListener) {
			controls[i].addEventListener('click', onControlClick);
		} else {
			controls[i].attachEvent('onclick', onControlClick);
		}
	}
	
	// carousel indicators
	indicators = getElementsByClassName(carousel, 'carousel-indicators', 'ol')[0];
	indicators = indicators.children;
	activeIndicator = indicators[index];
	
	for (var i = 0, len = indicators.length; i < len; i++) {
		if (features.addEventListener) {
			indicators[i].addEventListener('click', onIndicatorClick);
		} else {
			indicators[i].attachEvent('onclick', onIndicatorClick);
		}
	}

	// start it up
	timer = setTimeout(function() {
		slide('next', active.nextElementSibling || items[0]);
	}, interval);
	
	// cycle the slide
	function slide(type, next) {
		var direction = type == 'next' ? 'left' : 'right';
		if (transitioning || active === next) {
			return;
		}
		if (features.transitions) {
			// use css3 transition animations
			transitioning = true;
			next.className += ' ' + type;
			next.offsetWidth // force reflow
			active.className += ' ' + direction;
			next.className += ' ' + direction;
			activeIndicator.className = '';
			index = getIndex(next);
		} else {
			// just show / hide
			active.className = 'item';
			next.className = 'item active';
			active = next;
			activeIndicator.className = '';
			index = getIndex(next);
			activeIndicator = indicators[index];
			activeIndicator.className = 'active';
		}
		
		timer = setTimeout(function() {
			slide('next', getNextSlide(type, next));
		}, interval);
	}
	
	// get the next slide based on the type, next or prev, and the current slide
	function getNextSlide(type, current) {
		var nextIndex = type == 'next' ? index + 1 : index - 1;
		if (nextIndex < 0) {
			nextIndex = count - 1;
		} else if (nextIndex >= count) {
			nextIndex = 0;
		}
		return items[nextIndex];
	}
	
	// get the index for the given slide
	function getIndex(item) {
		for (var i = 0; i < count; i++) {
			if (items[i] === item) {
				return i;
			}
		}
	}
	
	// called when prev or next arrow is clicked
	function onControlClick(e) {
		e = e || window.event;
		var target = e.target || e.srcElement,
			type;
			
		if (target.tagName.toLowerCase() === 'span') {
			target = target.parentNode;
		}
		type = target.getAttribute('data-slide');
		
		clearTimeout(timer);
		slide(type, getNextSlide(type, active));
		if (e.preventDefault) {
			e.preventDefault();
		}
		e.returnValue = false;
	}
	
	// called when a slide indicator is clicked
	function onIndicatorClick(e) {
		e = e || window.event;
		var target = e.target || e.srcElement,
			slideTo = target.getAttribute('data-slide-to'),
			type = slideTo > index ? 'next' : 'prev';
		
		clearTimeout(timer);
		slide(type, items[slideTo]);
	}
	
	// called when css3 transition ends
	function onTransitionEnd(e) {
		var el = e.target;
		
		if (hasClass(el, 'active')) {
			el.className = 'item';
		} else if (hasClass(el, 'next') || hasClass(el, 'prev')) {
			el.className = 'item active';
			active = el;
			activeIndicator = indicators[index];
			activeIndicator.className = 'active';
			transitioning = false;
		}
	}

	// utility methods
	function hasClass(el, cls) {
	  return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
	}
}(window, document));