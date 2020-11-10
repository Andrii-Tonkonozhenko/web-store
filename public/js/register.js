$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $('#ajaxSubmit').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'/user',
            method: 'post',
            data: {
                name: jQuery('#name').val(),
                email: jQuery('#email').val(),
                password: jQuery('#password').val()
            },
            success: function(result){
                console.log(result);
            }});
    });
});
