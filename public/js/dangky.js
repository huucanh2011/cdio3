$(document).ready(function() {
    var list_city = {
        "Đà Nẵng": [
            "Hải Châu",
            "Thanh Khê",
            "Sơn Trà",
            "Ngũ Hành Sơn",
            "Liên Chiểu",
            "Hòa Vang",
            "Cẩm Lệ",
            "Hoàng Sa",
            "Khác"
        ],
        "Hà Nội": ["Hoàn Kiếm", "Ba Đình", "Hai Bà Trưng", "Khác"],
        "Hồ Chí Minh": ["1", "2", "3", "4", "5", "6", "Tân Bình", "Khác"],
        Khác: ["Khác"]
    };

    var current_city = $("#id_city").val();
    var current_district = $("#id_district").val();
    var isIE = window.navigator.userAgent.indexOf("Trident");
    var isIOS = navigator.userAgent.match(/(\(iPod|\(iPhone|\(iPad)/);
    if (isIE > 0 || isIOS) {
        // Browser IE

        // *** CHOOSE CITY AND DISTRICT ***
        // Step 1: Get current city and current district
        // Step 2:
        // - TH1: load first page, call function selectDistrict
        // --- Get all district of current city
        // - TH2: change city
        // --- Remove all list city and dictrict, not remove "Chon Quan" (disavled).
        // --- callback function selectDictrict, back TH1.

        selectDistrict(list_city, current_city);
        // funtion show district for each city
        function selectDistrict(list_city, current_name_city) {
            $.each(list_city, function(index, val) {
                var name_city = index;
                if (current_name_city && name_city == current_name_city) {
                    $(".list-city").append(
                        '<option value="' +
                            name_city +
                            '" selected>' +
                            name_city +
                            "</option>"
                    );
                } else {
                    $(".list-city").append(
                        '<option value="' +
                            name_city +
                            '">' +
                            name_city +
                            "</option>"
                    );
                }

                if (current_name_city && name_city == current_name_city) {
                    $.each(val, function(index, val) {
                        if (current_district && val == current_district) {
                            $(".list-district").append(
                                '<option value="' +
                                    val +
                                    '" class = "' +
                                    name_city +
                                    '" selected>' +
                                    val +
                                    "</option>"
                            );
                        } else {
                            $(".list-district").append(
                                '<option value="' +
                                    val +
                                    '" class = "' +
                                    name_city +
                                    '">' +
                                    val +
                                    "</option>"
                            );
                        }
                    });
                }
            });
        }

        $(".list-city").on("change", function(event) {
            event.preventDefault();
            var name_city = $(".list-city").val();
            $(".list-city option")
                .not(":disabled")
                .remove();
            $(".list-district option")
                .not(":disabled")
                .remove();
            $(".list-district option").attr("selected", "selected");
            selectDistrict(list_city, name_city);
        });
    } else {
        // Browser not IE
        $.each(list_city, function(index, val) {
            var name_city = index;
            if (current_city && name_city == current_city) {
                $(".list-city").append(
                    '<option value="' +
                        name_city +
                        '" selected>' +
                        name_city +
                        "</option>"
                );
            } else {
                $(".list-city").append(
                    '<option value="' +
                        name_city +
                        '">' +
                        name_city +
                        "</option>"
                );
            }

            $.each(val, function(index, val) {
                if (current_city && name_city == current_city) {
                    if (current_district && val == current_district) {
                        $(".list-district").append(
                            '<option value="' +
                                val +
                                '" class = "' +
                                name_city +
                                ' show-district" selected>' +
                                val +
                                "</option>"
                        );
                    } else {
                        $(".list-district").append(
                            '<option value="' +
                                val +
                                '" class = "' +
                                name_city +
                                ' show-district">' +
                                val +
                                "</option>"
                        );
                    }
                } else {
                    if (current_district && val == current_district) {
                        $(".list-district").append(
                            '<option value="' +
                                val +
                                '" class = "' +
                                name_city +
                                '" selected>' +
                                val +
                                "</option>"
                        );
                    } else {
                        $(".list-district").append(
                            '<option value="' +
                                val +
                                '" class = "' +
                                name_city +
                                '">' +
                                val +
                                "</option>"
                        );
                    }
                }
            });
        });
        $(".list-district")
            .children()
            .hide();
        $(".list-district .show-district").css("display", "block");

        // funtion show district for each city
        function selectDistrict(list_city) {
            var name_city = $(".list-city").val();
            $(".list-district")
                .children()
                .hide();
            $(".list-district option")
                .first()
                .css("display", "block")
                .prop("selected", true);
            $.each(list_city, function(index, val) {
                if (index == name_city) {
                    $(".list-district option").each(function(index, el) {
                        if ($(this).hasClass(name_city)) {
                            $(this).show();
                        }
                    });
                }
            });
        }

        $(".list-city").on("change", function(event) {
            event.preventDefault();
            selectDistrict(list_city);
        });
    }

    // Đăng ký ajax
    $("#dang-ky").click(function(e) {
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
            url: "dangky",
            data: {
                hoten: $("#hoten").val(),
                gioitinh: $("#gioitinh").val(),
                ngaysinh: $("#ngaysinh").val(),
                cmnd: $("#cmnd").val(),
                email: $("#email1").val(),
                sdt: $("#sdt").val(),
                matkhau: $("#matkhau").val(),
                matkhau1: $("#matkhau1").val(),
                thanhpho: $("#city").val(),
                quan: $("#district").val(),
                diachi: $("#diachi").val()
            },
            type: "POST",
            success: function(data) {
                console.log(data);
                if (data.error == true) {
                    $(".box_errors").show();

                    if (data.message.hoten != undefined) {
                        $(".errorhoten")
                            .show()
                            .text(data.message.hoten[0]);
                    } else {
                        $(".errorhoten").hide();
                    }
                    if (data.message.ngaysinh != undefined) {
                        $(".errorngaysinh")
                            .show()
                            .text(data.message.ngaysinh[0]);
                    } else {
                        $(".errorngaysinh").hide();
                    }
                    if (data.message.cmnd != undefined) {
                        $(".errorcmnd")
                            .show()
                            .text(data.message.cmnd[0]);
                    } else {
                        $(".errorcmnd").hide();
                    }
                    if (data.message.email != undefined) {
                        $(".erroremail")
                            .show()
                            .text(data.message.email[0]);
                    } else {
                        $(".erroremail").hide();
                    }
                    if (data.message.sdt != undefined) {
                        $(".errorsdt")
                            .show()
                            .text(data.message.sdt[0]);
                    } else {
                        $(".errorsdt").hide();
                    }
                    if (data.message.matkhau != undefined) {
                        $(".errormatkhau")
                            .show()
                            .text(data.message.matkhau[0]);
                    } else {
                        $(".errormatkhau").hide();
                    }
                    if (data.message.matkhau1 != undefined) {
                        $(".errormatkhau1")
                            .show()
                            .text(data.message.matkhau1[0]);
                    } else {
                        $(".errormatkhau1").hide();
                    }
                    setTimeout(function(){ $('.box_errors').fadeOut(2000)},4000);
                } else {
                    $("#modalDangKy").modal("hide");
                    swal({
                        title: "Good job!",
                        text: "Đăng ký thành công!",
                        icon: "success",
                        timer: "3000"
                    });
                }
            }
        }).always(function(data) {
            ajax_sendding = false;
        });
    });
});
