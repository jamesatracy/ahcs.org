(function (win, doc) {
	var carousel = doc.getElementById('carousel'),
		interval = carousel.getAttribute('data-interval'),
		ACTIVE = 'active',
		NEXT = 'next',
		PREV = 'prev',
		ITEM = 'item',
		DATA_INDEX = 'data-index',
		transitions = false,
		index = 0,
		transitioning = false,
		items,
		count,
		activeSlide,
		left,
		right,
		indicators,
		activeIndicator,
		timer;
	
	// check for css3 transitions
	if ('transition' in doc.createElement('fake').style) {
		transitions = true;
	}
	
	// carousel init
	items = doc.getElementById('carousel-inner').children;
	count = items.length;
	activeSlide = items[index];
	
	// set up data-index and transition events
	for (var i = 0, len = items.length; i < len; i++) {
		if (transitions) {
			items[i].addEventListener('transitionend', onTransitionEnd);
		}
		items[i].setAttribute(DATA_INDEX, i);
	}
	
	// carousel controls
	left = doc.getElementById('carousel-control-left');
	right = doc.getElementById('carousel-control-right');
	if (doc.addEventListener) {
		left.addEventListener('click', onControlClick);
		right.addEventListener('click', onControlClick);
	} else {
		left.attachEvent('onclick', onControlClick);
		right.attachEvent('onclick', onControlClick);
	}
	
	// carousel indicators
	indicators = doc.getElementById('carousel-indicators').children;
	activeIndicator = indicators[index];
	
	for (var i = 0, len = indicators.length; i < len; i++) {
		if (doc.addEventListener) {
			indicators[i].addEventListener('click', onIndicatorClick);
		} else {
			indicators[i].attachEvent('onclick', onIndicatorClick);
		}
	}

	// start it up
	timer = setTimeout(function() {
		slide(NEXT, items[index + 1] || items[0]);
	}, interval);
	
	// cycle the slide
	function slide(type, next) {
		var direction = type == NEXT ? 'left' : 'right',
			nextIndex = parseInt(next.getAttribute(DATA_INDEX));
			
		if (transitioning || activeSlide === next) {
			return;
		}
		if (transitions) {
			// use css3 transition animations
			transitioning = true;
			next.className += ' ' + type;
			next.offsetWidth // force reflow
			activeSlide.className += ' ' + direction;
			next.className += ' ' + direction;
			activeIndicator.className = '';
		} else {
			// just show / hide
			activeSlide.className = ITEM;
			next.className = ITEM + ' ' + ACTIVE;
			activeSlide = next;
			activeIndicator.className = '';
			activeIndicator = indicators[nextIndex];
			activeIndicator.className = ACTIVE;
		}
		
		index = nextIndex;
		
		timer = setTimeout(function() {
			slide(NEXT, getNextSlide(type));
		}, interval);
	}
	
	// get the next slide based on the type, next or prev
	function getNextSlide(type) {
		var nextIndex = type == NEXT ? index + 1 : index - 1;
		if (nextIndex < 0) {
			nextIndex = count - 1;
		} else if (nextIndex >= count) {
			nextIndex = 0;
		}
		return items[nextIndex];
	}
	
	// called when prev or next arrow is clicked
	function onControlClick(e) {
		e = e || window.event;
		var target = e.target || e.srcElement,
			type;
			
		if (target.tagName === 'SPAN') {
			target = target.parentNode;
		}
		type = target.getAttribute('data-slide');
		
		clearTimeout(timer);
		slide(type, getNextSlide(type));
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
			type = slideTo > index ? NEXT : PREV;
		
		clearTimeout(timer);
		slide(type, items[slideTo]);
	}
	
	// called when css3 transition ends
	function onTransitionEnd(e) {
		var el = e.target;
		
		if (hasClass(el, ACTIVE)) {
			el.className = ITEM;
		} else if (hasClass(el, NEXT) || hasClass(el, PREV)) {
			el.className = ITEM + ' ' + ACTIVE;
			activeSlide = el;
			activeIndicator = indicators[index];
			activeIndicator.className = ACTIVE;
			transitioning = false;
		}
	}

	// utility methods
	function hasClass(el, cls) {
	  return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
	}
}(window, document));