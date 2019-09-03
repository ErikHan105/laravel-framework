// $(document).ready(function () {
// 	$('body').on('submit', '#sendemail_form', function() {
// 		$(this).ajaxSubmit({

//             success: function(html) {

//                 if ($('#errors', $(html)).children().length > 0) {
//                     $('#errors').show();
//                     $('#errors').html($('#errors', $(html)).html());
//                 }else {
//                     document.location = '/support';
//                 }               
//             },
//         })
//         return false;
// 	})

// 	$('body').on('click', '#send', function() {
// 		$('#sendemail_form').submit();
// 	})
// })