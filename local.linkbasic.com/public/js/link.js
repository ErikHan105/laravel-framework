var page = {

    init: function() {
        this.bindEvent();
        this.render();      
    },

    bindEvent: function() {
        $('.footer-about').on('click', function() {
        	target_id = '#' + $(this).data('tab-id');
        	$.ajax({
        		url: '/aboutus',
        		type: 'GET',
        		success: function (html) {
        			$('.py-4').html($('.py-4', $(html)).html());
        			$(target_id).trigger('click');
        		}
        	});

        	return false;
        })

        $('.footer-support').on('click', function() {
        	target_id = '#' + $(this).data('tab-id');
        	$.ajax({
        		url: '/support',
        		type: 'GET',
        		success: function (html) {
        			$('.py-4').html($('.py-4', $(html)).html());
        			$(target_id).trigger('click');
        		}
        	});

        	return false;
        })

        $('.footer-product').on('click', function() {
        	target_id = '#' + $(this).data('tab-id');
        	$.ajax({
        		url: '/products',
        		type: 'GET',
        		success: function (html) {
        			$('.py-4').html($('.py-4', $(html)).html());
        			$(target_id).trigger('click');
        		}
        	});

        	return false;
        })

    },

    render: function() {

    }
}
$(document).ready(function() {  

    page.init();

})
