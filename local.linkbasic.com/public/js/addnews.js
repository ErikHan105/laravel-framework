var page = {
    delete_id: null,
    init: function() {
        this.bindEvent();
        this.render();    
    },

    bindEvent: function() {
        $('body').on('click', '#save_companyinfo', function() { 
            $('#who_ck').val(CKEDITOR.instances['who_ck'].getData());
            $('#profession_ck').val(CKEDITOR.instances['profession_ck'].getData());
            $('#qualification_ck').val(CKEDITOR.instances['qualification_ck'].getData());
            $('#service_ck').val(CKEDITOR.instances['service_ck'].getData());
            $('#quality_ck').val(CKEDITOR.instances['quality_ck'].getData());
            $('#course_ck').val(CKEDITOR.instances['course_ck'].getData());
            $('#edit_companyinfo').submit();

            return false;
        });

        $('body').on('submit', '#edit_companyinfo', function() {

            $(this).ajaxSubmit({

                success: function(html) {
                    if ($('#errors', $(html)).children().length > 0) {
                        $('#errors').show();
                        $('#errors').html($('#errors', $(html)).html());
                    }else {
                        document.location = '/';
                    }               
                },
            })
            return false;
        });  


        $('body').on('click', '.delete_news', function() {

            delete_id = $(this).data('news-id');
            console.log(delete_id);
            $('#delete_news a').attr('href', '/admin/newslist/delete/' + delete_id);

        })      


    },

    render: function() {

    }
}

$(document).ready(function() {    
    
    page.init();

})

