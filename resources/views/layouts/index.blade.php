<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
    
    <!-- CSS W3schools -->
    <!-- <link rel="stylesheet" href="css/w3.css"> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/myCSS.css">
<!-- 
    <link rel="stylesheet" href="css/chitietCSS.css"> -->

    <title>CDIO3</title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="overflow-x:hidden">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
    <!-- Header -->
    @include('layouts.header')
    <!-- End Header -->

    <!-- Main content -->
    @yield('content')
    <!-- End main content -->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- End Footer -->

    <!-- jQuery library -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <script src="moment.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Datepicker JS -->
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    
	<script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/dangky.js"></script>

    <!-- <script src="js/dangnhap.js"></script> -->

    <!-- JS W3schools -->
    <!-- <script src="js/w3.js"></script> -->

    <!-- SweetAlert -->
    <script src="js/sweetalert.min.js"></script>

    <!-- MyJS -->
    <script src="js/myJS.js"></script>
    

    @yield('script')

    <script>
        var ajax_sendding = false;
    </script>

    <script>
    $(document).ready(function(){

        $("#Hinh").on("change", function(){
            var file = this.files[0].name;
            var dflt = $(this).attr("placeholder");
            if($(this).val()!=""){
            $('#tenhinh').text(file);
            } else {
            $('#tenhinh').text(dflt);
            }
        });

    });
    
    </script>

    <script>
    // $(document).ready(function(){

    // $('#timkiem').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
    //     var query = $(this).val(); //lấy gía trị ng dùng gõ
    //     if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
    //     {
    //     var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
    //     $.ajax({
    //     url:"{{ route('timkiem') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
    //     method:"POST", // phương thức gửi dữ liệu.
    //     data:{query:query, _token:_token},
    //     success:function(data){ //dữ liệu nhận về
    //         console.log(data);
    //     $('#ketqua').fadeIn();  
    //     $('#ketqua').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
    //     }
    //     });
    //     }
    // });

    // $(document).on('click', 'li', function(){  
    //     $('#timkiem').val($(this).text());  
    //     $('#ketqua').fadeOut();  
    // });  

    // });
    </script>

    <script>
        $(function(){
            $('#ngaysinh').datepicker({
                format : 'yyyy/mm/dd',
                autoclose : true
            });
        });
    </script>
    
    <script>
        @if(Session::has('thongbao') || $errors->count())
        $(document).ready(function() {
            $('#modalDangNhap').modal('show');
        });
        @endif
        // window.onload = function()
        // {
        //     setTimeout(function(e){},2000);
        //     $('#image_loading').fadeOut()
        // };
    </script>

    <script>
    $(document).ready(function () {
        $('.lazy').slick({
            autoplay: true,
            autoplayspeed: 2000,
            fade: true
        });
    });
    </script>

</body>
</html>