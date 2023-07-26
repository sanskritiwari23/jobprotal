$('form#form-submit').submit(function(e){
    e.preventDefault();
    var formdata = $(this).serializeArray();
    $.ajax({
        'type' : 'post',
        'data' : formdata,
        'url' : 'ajax-data.php',
        'success' : function(response){
            var json = JSON.parse(response);
            if(!json.error)
            {
                window.location.href='dashboard.php';
                $('body').find('span.error_message').text(json.message);
            }
            else{
                $('body').find('span.error_message').text(json.message);
            }
        }
    });
});