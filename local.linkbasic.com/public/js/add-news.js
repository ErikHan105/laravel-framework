var page = {

    init: function() {
        this.bindEvent();
        this.render();    
    },

    bindEvent: function() {

        $('body').on('click', '#add_news', function() { 

            $('#news_upload').val(tinyMCE.get('news_upload').getContent());

            $('#product_addnews').submit();

            return false;
        });

        $('body').on('submit', '#product_addnews', function() {

            $(this).ajaxSubmit({

                success: function(html) {
                    if ($('#errors', $(html)).children().length > 0) {
                        $('#errors').show();
                        $('#errors').html($('#errors', $(html)).html());
                    }else {
                        // document.location = '/admin/newslist';
                    }               
                },
            })
            return false;
        });

        $('.delete_news').on('click', function() {
            delete_id = $(this).data('news-id');
            $('#delete a').attr('href', '/admin/newslist/delete/' + delete_id);
            
        })

    },

    render: function() {

    }
}

$(document).ready(function() {    
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : 500,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };
      tinymce.init(editor_config);
    page.init();

})

