<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('slide')->insert([
        //     [    'id' => "1",
        //         'ten' => "test",
        //         'hinh' => "chi_13.jpg",
        //         'noidung' => "test",
        //         'link' =>"abc.vn",
        //     ],
        //     [
        //         'id' => "2",
        //         'ten' => "test",
        //         'hinh' => "bomtan.jpg",
        //         'noidung' => "test",
        //         'link' =>"abc.vn",
        //     ],
        //     [
        //         'id' => "3",
        //         'ten' => "test",
        //         'hinh' => "shazasd.jpg",
        //         'noidung' => "test",
        //         'link' =>"abc.vn",
        //     ],
        //     [   'id' => "4",
        //         'ten' => "test",
        //         'hinh' => "lat_mat.jpg",
        //         'noidung' => "test",
        //         'link' =>"abc.vn",
        //     ]
        // ]);
        // DB::table('theloaiphim')->insert([
        //     [
        //         'id'=> 1,
        //         'TenTheLoai'=> 'Hành động'
        //     ],
        //     [
        //         'id'=> 2,
        //         'TenTheLoai'=> 'Hài Hước'
        //     ],
        //     [
        //         'id'=> 3,
        //         'TenTheLoai'=> 'Tình Cảm'
        //     ],
        //     [
        //         'id'=> 4,
        //         'TenTheLoai'=> 'Kinh dị'
        //     ]
        // ]);
        // DB::table('quyen')->insert([
        //     [
        //         'id'=> 1,
        //         'TenQuyen'=> 'Admin'
        //     ],
        //     [
        //         'id'=> 2,
        //         'TenQuyen'=> 'Nhân viên'
        //     ],
        //     [
        //         'id '=> 3,
        //         'TenQuyen'=> 'Thành viên',
        //     ]
        // ]);
        // DB::table('taikhoan')->insert([
        //     [
        //         'email' => 'admin@gmail.com',
        //         'password' => bcrypt('123456'),
        //         'HoTen' => 'Canh',
        //         'GioiTinh' => 1,
        //         'NgaySinh' => '1998/01/01',
        //         'Hinh' => '',
        //         'CMND' => '206099912',
        //         'Sdt' => '0935646465',
        //         'ThanhPho' => 'DaNang',
        //         'Quan' => 'TK',
        //         'DiaChi' => '113',
        //         'idQuyen' =>1
        //     ],
        //     [
        //         'email' => 'thanhvien@gmail.com',
        //         'password' => bcrypt('123456'),
        //         'HoTen' => 'Tùng',
        //         'GioiTinh' => 1,
        //         'NgaySinh' => '1998/01/01',
        //         'Hinh' => '',
        //         'CMND' => '206099912',
        //         'Sdt' => '0935646465',
        //         'ThanhPho' => 'DaNang',
        //         'Quan' => 'TK',
        //         'DiaChi' => '113',
        //         'idQuyen' =>3
        //     ],
        //     [
        //         'email' => 'thanhvien1@gmail.com',
        //         'password' => bcrypt('123456'),
        //         'HoTen' => 'Thanh',
        //         'GioiTinh' => 2,
        //         'NgaySinh' => '1998/01/01',
        //         'Hinh' => '',
        //         'CMND' => '206099912',
        //         'Sdt' => '0935646465',
        //         'ThanhPho' => 'DaNang',
        //         'Quan' => 'TK',
        //         'DiaChi' => '113',
        //         'idQuyen' =>3
        //     ]
        // ]);
        // DB::table('phim')->insert([
        //     [
        //         'TenPhim'=> 'Avenger Endgame',
        //         'NoiDung'=> 'noidung1',
        //         'DaoDien'=> 'daodien1',
        //         'QuocGiaSanXuat'=> 'My',
        //         'NgonNgu'=> 'English',
        //         'Trailer' => 'test',
        //         'ThoiGian' => '180',
        //         'NgayKhoiChieu' => '2019/05/01',
        //         'NgayKetThuc' => '2019/06/01',
        //         'DoTuoiPhuHop' => 15,
        //         'idTheLoaiPhim' => 1,
        //         'Hinh' => 'Avengers-Poster.jpg'
        //     ],
        //     [
        //         'TenPhim'=> 'SHAZAM',
        //         'NoiDung'=> 'noidung2',
        //         'DaoDien'=> 'daodien2',
        //         'QuocGiaSanXuat'=> 'My',
        //         'NgonNgu'=> 'English',
        //         'Trailer' => 'test',
        //         'ThoiGian' => '100',
        //         'NgayKhoiChieu' => '2019/05/01',
        //         'NgayKetThuc' => '2019/06/01',
        //         'DoTuoiPhuHop' => 15,
        //         'idTheLoaiPhim' => 1,
        //         'Hinh' => 'SHAZAM.jpg'
        //     ],
        //     [
        //         'TenPhim'=> '5 buoc',
        //         'NoiDung'=> 'noidung3',
        //         'DaoDien'=> 'daodien3',
        //         'QuocGiaSanXuat'=> 'Han Quoc',
        //         'NgonNgu'=> 'Han Quoc',
        //         'Trailer' => 'test',
        //         'ThoiGian' => '120',
        //         'NgayKhoiChieu' => '2019/05/01',
        //         'NgayKetThuc' => '2019/06/01',
        //         'DoTuoiPhuHop' => 15,
        //         'idTheLoaiPhim' => 3,
        //         'Hinh' => '5_buoc.jpg'
        //     ],
        //     [
        //         'TenPhim'=> 'John Wick 5',
        //         'NoiDung'=> 'Sau khi trở thành "giải thưởng lớn" của giới sát thủ toàn cầu, siêu sát thủ John Wick phải cùng chú chó cưng lên đường chạy trốn. Với giá 14 triệu $, John Wick trở thành mục tiêu béo bở của bất cứ kẻ săn đầu người nào.',
        //         'DaoDien'=> 'Chad Stahelski',
        //         'QuocGiaSanXuat'=> 'Mỹ',
        //         'NgonNgu'=> 'English phụ đề Tiếng việt',
        //         'Trailer' => 'https://www.youtube.com/embed/yfG4GS9b5To',
        //         'ThoiGian' => '127',
        //         'NgayKhoiChieu' => '2019/05/1',
        //         'NgayKetThuc' => '2019/06/1',
        //         'DoTuoiPhuHop' => 15,
        //         'idTheLoaiPhim' => 1,
        //         'Hinh' => '5cc9048494558130591736_1557458327329.jpg'
        //     ]
        // ]);
        
        // DB::table('tintucphim')->insert([
        //     [
        //         'TieuDe'=> 'Captain America: Rút lui bình yên hay hy sinh ở phút cuối cùng?',
        //         'TomTat'=> 'ABC',
        //         'NoiDung'=> 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.”',
        //         'Hinh' => 'captain-america_1553570092324.jpg',
        //     ],
        //     [
        //         'TieuDe'=> 'Black widow: Rút lui bình yên hay hy sinh ở phút cuối cùng?',
        //         'TomTat'=> 'ABC',
        //         'NoiDung'=> 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.”',
        //         'Hinh' => 'black-widow-533x800-1_1554436033456.jpg',
        //     ],
        //     [
        //         'TieuDe'=> 'Varus: Rút lui bình yên hay hy sinh ở phút cuối cùng?',
        //         'TomTat'=> 'ABC',
        //         'NoiDung'=> 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.”',
        //         'Hinh' => 'jeremy-renner-as-hawkeye-in-marvels-the-avengers_1554437725573.jpeg',
        //     ],
        //     [
        //         'TieuDe'=> 'Hulk: Rút lui bình yên hay hy sinh ở phút cuối cùng?',
        //         'TomTat'=> 'ABC',
        //         'NoiDung'=> 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.”',
        //         'Hinh' => 'ruffalo_1554110472825.jpg',
        //     ],
        //     [
        //         'TieuDe'=> 'Captain America: Rút lui bình yên hay hy sinh ở phút cuối cùng?',
        //         'TomTat'=> 'ABC',
        //         'NoiDung'=> 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.”',
        //         'Hinh' => 'avengers-endgame-2_1553841144852.jpg',
        //     ],
        //     [
        //         'TieuDe'=> 'Captain America: Rút lui bình yên hay hy sinh ở phút cuối cùng?',
        //         'TomTat'=> 'ABC',
        //         'NoiDung'=> 'Từ anh thanh niên dáng nhỏ thó nhưng gan to “Tôi có thể đánh nhau cả ngày.”',
        //         'Hinh' => 'shazam-new1_1554447349883.jpg',
        //     ],
        // ]);
        // DB::table('phim')->insert([
        //     [
        //         'TenPhim'=> 'John Wick 3',
        //         'NoiDung'=> 'Sau khi trở thành "giải thưởng lớn" của giới sát thủ toàn cầu, siêu sát thủ John Wick phải cùng chú chó cưng lên đường chạy trốn. Với giá 14 triệu $, John Wick trở thành mục tiêu béo bở của bất cứ kẻ săn đầu người nào.',
        //         'DaoDien'=> 'Chad Stahelski',
        //         'QuocGiaSanXuat'=> 'Mỹ',
        //         'NgonNgu'=> 'English phụ đề Tiếng việt',
        //         'Trailer' => 'https://www.youtube.com/embed/yfG4GS9b5To',
        //         'ThoiGian' => '127',
        //         'NgayKhoiChieu' => '2019/05/30',
        //         'NgayKetThuc' => '2019/06/30',
        //         'DoTuoiPhuHop' => 15,
        //         'idTheLoaiPhim' => 1,
        //         'Hinh' => '5cc9048494558130591736_1557458327329.jpg'
        //     ]
        // ]);
        // DB::table('NgayChieu')->insert([
        //     [
        //         'NgayChieu' => '2019/05/27'
        //     ],
        //     [
        //         'NgayChieu' => '2019/05/28'
        //     ],
        //     [
        //         'NgayChieu' => '2019/05/29'
        //     ],
        //     [
        //         'NgayChieu' => '2019/05/30'
        //     ]
        // ]);
        // DB::table('suatchieu')->insert([
        //     [
        //         'GioChieu'=> '17h',
        //         'idNgayChieu'=>1,
        //         'idPhim'=>4,
        //         'idRap'=>1
        //     ],
        //     [
        //         'GioChieu'=> '18h:30',
        //         'idNgayChieu'=>1,
        //         'idPhim'=>4,
        //         'idRap'=>1
        //     ],
        //     [
        //         'GioChieu'=> '19h',
        //         'idNgayChieu'=>1,
        //         'idPhim'=>4,
        //         'idRap'=>1
        //     ],
        //     [
        //         'GioChieu'=> '20h:30',
        //         'idNgayChieu'=>2,
        //         'idPhim'=>5,
        //         'idRap'=>2
        //     ],
        //     [
        //         'GioChieu'=> '21h',
        //         'idNgayChieu'=>2,
        //         'idPhim'=>5,
        //         'idRap'=>2
        //     ],
        //     [
        //         'GioChieu'=> '22h',
        //         'idNgayChieu'=>3,
        //         'idPhim'=>5,
        //         'idRap'=>2
        //     ],
        //     [
        //         'GioChieu'=> '23h:30',
        //         'idNgayChieu'=>4,
        //         'idPhim'=>5,
        //         'idRap'=>2
        //     ],
        //     [
        //         'GioChieu'=> '24h',
        //         'idNgayChieu'=>4,
        //         'idPhim'=>5,
        //         'idRap'=>2
        //     ],
        //     [
        //         'GioChieu'=> '17h',
        //         'idNgayChieu'=>4,
        //         'idPhim'=>5,
        //         'idRap'=>2
        //     ]
        // ]);
        DB::table('phim')->insert([
            [
                'TenPhim'=> 'Ước hẹn mùa thu',
                'NoiDung'=> 'Thanh xuân thời niên thiếu của bạn là gì? Có phải là một ai đó để nhớ, để tiếc nuối mỗi khi nghĩ về? Pha Lê (Hoàng Oanh) và Duy (Trần Quốc Anh) của “Ước Hẹn Mùa Thu” cũng từng có một thanh xuân như thế…',
                'DaoDien'=> 'Nguyễn Quang Dũng',
                'QuocGiaSanXuat'=> 'Việt Nam',
                'NgonNgu'=> 'Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/vANJb4Z_qaE',
                'ThoiGian' => '111',
                'NgayKhoiChieu' => '2019/05/26',
                'NgayKetThuc' => '2019/06/10',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 3,
                'Hinh' => 'uochenmuathu1_1554878664659.jpg'
            ],
            [
                'TenPhim'=> 'GODZILLA: KING OF THE MONSTERS',
                'NoiDung'=> 'Đây là tác phẩm thứ ba thuộc vũ trụ điện ảnh quái vật của hãng Legendary và Warner Bros.. Theo đó, bộ phim có bối cảnh diễn ra vài năm sau sự kiện của phần trước. Lúc này, Godzilla phải đối mặt với những quái vật hết sức mạnh mẽ như Rồng ba đầu King Ghidorah, Rodan và sâu bướm Mothra.',
                'DaoDien'=> 'Michael Dougherty',
                'QuocGiaSanXuat'=> 'Mỹ',
                'NgonNgu'=> 'English phụ đề Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/Jc-K7QATtbg',
                'ThoiGian' => '140',
                'NgayKhoiChieu' => '2019/05/26',
                'NgayKetThuc' => '2019/06/10',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 1,
                'Hinh' => 'godzilla-king-of-the-monsters--vietnamese-teaser-poster_1550650219764.jpg'
            ],
            [
                'TenPhim'=> 'Vô gian đạo',
                'NoiDung'=> 'Bộ phim làm về đề tài cờ bạc bịp đầu tiên ở Việt Nam với sự tham gia của loạt gương mặt trẻ đầy tiềm năng: La Thành, Xuân Nghị, Huỳnh Anh... hứa hẹn sẽ đem đến cho khán giả màn trình diễn vô cùng hài hước, thú vị.',
                'DaoDien'=> 'Trần Việt Anh',
                'QuocGiaSanXuat'=> 'Việt Nam',
                'NgonNgu'=> 'Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/kXnKPi6vIjQ',
                'ThoiGian' => '113',
                'NgayKhoiChieu' => '2019/05/26',
                'NgayKetThuc' => '2019/06/10',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 2,
                'Hinh' => 'vogiandaoposter_1557386618293.jpg'
            ],
            [
                'TenPhim'=> 'THE SECRET LIFE OF PETS 2',
                'NoiDung'=> 'Tiếp tục theo chân Max và những người bạn, phần 2 của The Secret Life of Pets 2 sẽ kể về câu chuyện của những chú thú cưng sau khi chủ của chúng đi làm hoặc đi học mỗi ngày.',
                'DaoDien'=> 'Chris Renaud',
                'QuocGiaSanXuat'=> 'Mỹ',
                'NgonNgu'=> 'English phụ đề Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/a-ATxE1KmZA',
                'ThoiGian' => '86',
                'NgayKhoiChieu' => '2019/05/29',
                'NgayKetThuc' => '2019/06/10',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 2,
                'Hinh' => 'pet_1558690331193.jpg'
            ],
            [
                'TenPhim'=> 'FAST & FURIOUS: HOBBS & SHAW',
                'NoiDung'=> 'Trời ơi tin được không?! Ai mà ngờ được rằng sẽ có một ngày Luke Hobbs và Deckard Shaw lại trở thành đồng minh của nhau để cùng chống lại kẻ ác, bảo vệ nhân loại chúng ta?!',
                'DaoDien'=> 'David Leitch',
                'QuocGiaSanXuat'=> 'Mỹ',
                'NgonNgu'=> 'English phụ đề Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/pH7leY4mWec',
                'ThoiGian' => '150',
                'NgayKhoiChieu' => '2019/06/05',
                'NgayKetThuc' => '2019/06/30',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 1,
                'Hinh' => '1080wx1920h-1_1556005808825.jpg'
            ],
            [
                'TenPhim'=> 'SPIDER-MAN: FAR FROM HOME',
                'NoiDung'=> 'Trong chuyến du lịch đến châu Âu, Peter Parker và những người bạn của mình đụng độ phải một kẻ thù mới. Không những vậy, cậu còn được diện kiến Nick Fury. Liệu thử thách mới của Spider-Man sẽ khó khăn đến mức độ nào? Và vai trò của Mysterio có tác động ra sao đến chuyện phim? Hãy chờ đón bom tấn siêu anh hùng này vào tháng 7.2019 nhé!',
                'DaoDien'=> 'Jon Watts',
                'QuocGiaSanXuat'=> 'Mỹ',
                'NgonNgu'=> 'English phụ đề Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/vjYCAnjB48s',
                'ThoiGian' => '150',
                'NgayKhoiChieu' => '2019/06/06',
                'NgayKetThuc' => '2019/06/30',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 1,
                'Hinh' => 'spider-man_1558596633242.jpg'
            ],
            [
                'TenPhim'=> 'KRASUE: INHUMAN KISS',
                'NoiDung'=> 'Tại một ngôi làng ở Thái Lan, vì mắc phải lời nguyền của Ma lai rút ruột - Krasue nên hàng đêm, đầu của cô gái trẻ Sai tách ra khỏi thân thể và đi săn lùng thú vật. Để bảo vệ gia súc của mình, dân làng bắt đầu truy lùng Krasue. Riêng chỉ có anh chàng bạn thân Noi vẫn luôn sát cánh, bảo vệ Sai đến cuối cùng.',
                'DaoDien'=> 'Sitisiri Mongkolsiri',
                'QuocGiaSanXuat'=> 'Thái Lan',
                'NgonNgu'=> 'Thái phụ đề Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/yaO0wMzwses',
                'ThoiGian' => '121',
                'NgayKhoiChieu' => '2019/06/07',
                'NgayKetThuc' => '2019/06/30',
                'DoTuoiPhuHop' => 18,
                'idTheLoaiPhim' => 4,
                'Hinh' => 'nuhonmaquai_1558600977704.jpg'
            ],
            [
                'TenPhim'=> 'FRIEND ZONE',
                'NoiDung'=> 'Phim kể về câu chuyện oái ăm của Palm - anh chàng trót đem lòng yêu Gink nhưng đáng tiếc cô chỉ xếp anh vào vùng "friend zone". Chuyện tình đơn phương cứ thế kéo dài không hồi kết khi Palm không thể nói ra tấm lòng mình, còn Gink lại hẹn hò với chàng trai khác...',
                'DaoDien'=> 'Chayanop Boonprakob',
                'QuocGiaSanXuat'=> 'Thái Lan',
                'NgonNgu'=> 'Thái phụ đề Tiếng việt',
                'Trailer' => 'https://www.youtube.com/embed/A6gZd_SZoCs',
                'ThoiGian' => '120',
                'NgayKhoiChieu' => '2019/06/04',
                'NgayKetThuc' => '2019/06/30',
                'DoTuoiPhuHop' => 15,
                'idTheLoaiPhim' => 3,
                'Hinh' => 'poster_1551426978021.jpg'
            ]
        ]);
    }
}
