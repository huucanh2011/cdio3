$(document).ready(function() {
    $("#chon_suat").click(function(e) {
        e.preventDefault();
        if (ajax_sendding == true) {
            alert("Đang load ajax");
            return false;
        }
        ajax_sendding = true;
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
        $.ajax({
            url: "chonsuat",
            data: {
                phim: $("#phim").val()
            },
            type: "POST",
            success: function(data) {
                console.log(data);
            }
        });
    });
});
