$(document).ready(function () {
	// fancy fixed header rows
	$('.header-fixed').each(function () {
		var $this = $(this),
			$table = $('#' + $this.attr('data-table')),
			tableWidth = $table.width(),
			tableHeight = $table.height(),
			tableOffset = $table.offset().top,
			$header = $table.find('thead').clone(),
			$fixedHeader = $this.append($header),
			$ths = $this.find('th'),
			i;
			
		$fixedHeader.width(tableWidth);
		
		i = 0;
		$table.find('th').each(function () {
			$ths[i].width = $(this).width();
			i++;
		});
		
		$(window).bind('scroll', function () {
			var offset = $(this).scrollTop(),
				tableBottom = tableOffset + tableHeight;
		
			if (offset >= tableOffset && $fixedHeader.is(":hidden") && offset <= tableBottom) {
				$fixedHeader.show();
			} else if (offset < tableOffset || offset > tableBottom) {
				$fixedHeader.hide();
			}
		});
	});
});