jQuery(function($){
	$('.table').footable({
		"paging": {
			"enabled": true,
			"size": 30,
			"countFormat": "{CP} de {TP}"
		},
		"sorting": {
			"enabled": true
		},
		"filtering": {
			"enabled": true,
			"placeholder": "Buscar",
			"dropdownTitle":"Campos para buscar",
			"container":"#data-filter-container"
		}
	});
});