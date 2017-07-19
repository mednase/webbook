/**
 * Created by medna on 31/01/2017.
 */
$(document).ready(function () {
    $('.notif').click(function () {
        $(this).off();
        $.ajax({
            url:'/notifications',
            type:'post',
            dataType: 'json',
            success:function (data) {
                var newNotif=0;
                $.each(data, function () {
                    var cls="";
                    if(!this.seen){
                        newNotif++;
                        cls="unseen";
                    }
                    $('#notificatin-list').append(
                        '<li class="'+cls+'">' +
                        '<a href="'+this.url+'">' +
                        '<span class="time">'+this.date+'</span>' +
                        '<span class="details">' + this.message+'</span>' +
                        '</span>' +
                        '</a>' +
                        '</li>'
                    )
                });
                $("#newNotif").text(newNotif+'nouveau');
                $("#bade-notification").remove();
            }
        })
    });
});