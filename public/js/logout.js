$(document).on('click', '#logout', function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax
    ({
        type: 'POST',
        url: '/logout',
        success: function()
        {
            window.location.href = '/logout';
        },
        error: function (){
            alert('Lỗi đã xảy ra');
        }
    });
});
