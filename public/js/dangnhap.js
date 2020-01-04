$(document).ready(function() {
    // Đăng nhập ajax
    $("#dang-nhap").click(function(e) {
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
            url: "dangnhap",
            data: {
                email: $("#email").val(),
                matkhau: $("#password").val(),
            },
            type: "POST",
            success: function(data) {
                console.log(data);
                if (data.error == true) {
                    $(".box_errors").show();

                    if (data.message.pass != undefined) {
                        $(".errormatkhau")
                            .show()
                            .text(data.message.password[0]);
                    } else {
                        $(".errormatkhau").hide();
                    }
                } 
            }
        }).always(function(data) {
            ajax_sendding = false;
        });
    });
});
