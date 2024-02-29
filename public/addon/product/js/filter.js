(function ($) {
	"use strict";

	var timeout = null;
	$(document).on('change', "#filterSortBy, #slider-range", function () {
		clearTimeout(timeout);
		timeout = setTimeout(() => {
			postFilter();
		}, 1000);
	});

	$(document).on('input', "#search-product, #min_price, #max_price", function () {
		timeout = setTimeout(() => {
			postFilter();
		}, 1000);
	});

	$(document).on('click', ".filterCategory, .filterTag, .filterRating, .filterDiscount, .filterPrice", function () {
		timeout = setTimeout(() => {
			postFilter();
		}, 1000);
	});

})(jQuery)


function postFilter() {
	"use strict";
	var search_key = $('#search-product').val();
	var sort_by = $('#filterSortBy option:selected').val();
	var min_price = $('#min_price').val();
	var max_price = $('#max_price').val();
	var category = [].filter.call($(':input[name^=categories]:checked'), (c) => c.checked).map(c => c.value);
	var tag = [].filter.call($(':input[name^=tags]:checked'), (c) => c.checked).map(c => c.value);
	var rating = $(':input[name=rating]:checked').val();
	var discount = $(':input[name=discount]:checked').val();
	var data = { 'search_key': search_key, 'sort_by': sort_by, 'min_price': min_price, 'max_price': max_price, 'category': category, 'tag': tag, 'rating': rating, 'discount': discount };

	$.ajax({
		type: "GET",
		url: $('#search-route').val(),
		data: data,
		datatype: "json",
		success: function (response) {
			$('#appendCourse').html(response.html)
		},
		error: function () {
			alert("Error!");
		},
	});
}