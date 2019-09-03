var page = {
    delete_id: null,
    init: function() {
        this.bindEvent();
        this.render();    
    },

    bindEvent: function() {
        $(".imgAdd").click(function(){
            $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
        });
        $(document).on("click", "i.del" , function() {
            $(this).parent().remove();
        });
        $(function() {
            $(document).on("change",".uploadFile", function()
            {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
     
                if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
     
                reader.onloadend = function(){ // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }
          
        });
        // $('.category').on('click', function() {
        //     if ($(this).next('ul').css('display') == 'none') {
        //         $(this).next('ul').css('display', 'block');
        //     } else {
        //         $(this).next('ul').css('display', 'none');
        //     }
        // })

        // $('.subcategory li').on('click', function () {
        //     $('#category').val($(this).data('category-id'));
        //     $('#selected_cat').html('Selected Category: ' + $(this).html());
        // })

        $('body').on('click', '#save', function() {
            $('#product_desc').val(CKEDITOR.instances['product_desc'].getData());
            $('#technical').val(CKEDITOR.instances['technical'].getData());
            $('#order_info').val(CKEDITOR.instances['order_info'].getData());
            $('#product_add').submit();
            return false;
        });

        $('body').on('submit', '#product_add', function() {
            $(this).ajaxSubmit({

                success: function(html) {

                    if ($('#errors', $(html)).children().length > 0) {
                        $('#errors').show();
                        $('#errors').html($('#errors', $(html)).html());
                    }else {
                        document.location = '/admin/productlist';
                    }               
                },
            })
            return false;
        });

        $('.delete_product').on('click', function() {

            delete_id = $(this).data('product-id');
            $('#delete a').attr('href', '/admin/productlist/delete/' + delete_id);
            
        })

        $('#delete').on('click', function() {

            
        })

        $("[data-toggle=tooltip]").tooltip();

        });

    },

    render: function() {

    }
}

$(document).ready(function() {    
    page.init();

})

