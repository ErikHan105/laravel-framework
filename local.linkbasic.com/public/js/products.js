 
$(document).ready(function() {
	var category_id = 1;
	var page_link_url = '';
    // $('body').on('click', '.category',function() {
    //     if ($(this).next('ul').css('display') == 'none') {
    //         $(this).next('ul').css('display', 'block');
    //     } else {
    //         $(this).next('ul').css('display', 'none');
    //     }
    // })    

    $('body').on('click', '.category', function () {
    	category_id = $(this).data('category-id');
    	ajax();
    })

    // $('body').on('click', '.subcategory > li', function () {
    // 	category_id = $(this).data('category-id');
    // 	ajax();
    // })

    $('body').on('click', '.image_menu', function () {
    	category_id = $(this).data('category-id');
    	ajax();
    	return false;
    })
    
    $('body').on('click', '.page-link' , function () {
    	page_link_url = $(this).attr('href');
    	page_ajax();
    	return false;
    })



    function ajax() {
    	$.ajax({
			url: '/products',
			type: 'GET',
			data: {
				category_id: category_id,
			},
			success: function(html) {

				$('#view_products').html($('#view_products', $(html)).html());
			}
		})
    }

    function page_ajax() {
    	$.ajax({
			url: page_link_url,
			data: {
				category_id: category_id,
			},
			type: 'GET',
			success: function(html) {

				$('#view_products').html($('#view_products', $(html)).html());
			}
		})
    }

})
