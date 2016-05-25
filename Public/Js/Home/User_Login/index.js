/**
 * Created by Administrator on 2016/3/30.
 */
$(function(){
    $('#join_btn').on('click',function(){
        var username = $('#username').val();
        var password = $('#password').val();
        var url = $(this).attr('req_url');
        $.ajax({
            url     : "/home/user/login/in",
            type    : "post",
            dataType: 'json',
            data    : {
                username : username,
                password : password
            },
            success : function (data) {
                console.log(data);
                window.location.href = url;
            }
        });
    });
});