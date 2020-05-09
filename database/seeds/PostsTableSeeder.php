<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $noi_dung = "
    	</h3>Nội dung tin tức: Khoá học Lập trình PHP tại trung tâm đào tạo tin học khoa phạm</h3>
    	<p>
    	<b>Hotline kỹ thuật <b>: 0967 908 907<br>
    	<b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
    	<b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	<b>Website</b>: khoapham.vn<br>
    	<b>Học Online tại :</b>online.khoapham.vn<br>
    	</p>
    	";
        DB::table('posts')->insert([
            ['tieu_de' => 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ','tom_tat' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.','noi_dung' => $noi_dung,'image' => 'FPT-2.jpg','noi_bat' => 1],
            ['tieu_de' => '300 tỷ đồng phát triển giáo dục mầm non ','tom_tat' => 'Bộ Giáo dục và Đào tạo đang xây dựng chương trình, mục tiêu quốc gia về giáo dục giai đoạn 2011-2015, trong đó dự kiến chi 300 tỷ đồng để phát triển giáo dục mầm non năm 2011. ','noi_dung' => $noi_dung,'image' => 'tre_em_set_sub.jpg','noi_bat' => 1],
            ['tieu_de' => 'Nợ giáo viên tiền tỷ chi phí phổ cập giáo dục ','tom_tat' => 'Ba năm qua, nhiều giáo viên ở Khánh Hòa bỏ công sức, kể cả tiền bạc để thực hiện phổ cập giáo dục cho học sinh trên địa bàn tỉnh, song đến nay vẫn chưa nhận được tiền chính quyền chi trả. ','noi_dung' => $noi_dung,'image' => 'pho-cap-giao-duc-nho-2.jpg','noi_bat' => 1],
            ['tieu_de' => 'Đón và chăm sóc trẻ sau giờ tan trường qua dịch vụ ','tom_tat' => 'Các bé sẽ được chăm sóc bữa ăn, tắm rửa sạch sẽ, vui chơi và học tập cùng cô giáo theo các nội dung trong sổ báo bài, mở rộng hoặc đào sâu kiến thức theo yêu cầu của phụ huynh. ','noi_dung' => $noi_dung,'image' => 'be-2.jpg','noi_bat' => 1],
            ['tieu_de' => '7 học sinh rơi từ tầng hai xuống đất vì gãy lan can ','tom_tat' => 'Đang giờ ra chơi, bất ngờ toàn bộ lan can tầng hai của Trường THCS thị trấn Chợ Rã (Bắc Kạn) gãy đổ ra ngoài, kéo theo 7 học sinh lớp 6A rơi xuống đất. ','noi_dung' => $noi_dung,'image' => 'tai_nan_set_top.gif','noi_bat' => 1],
            ['tieu_de' => 'Giáo viên TP HCM được thưởng tết tối thiểu 700.000 đồng ','tom_tat' => 'Sở GD&ĐT TP HCM vừa có thông báo về việc UBND thành phố chấp thuận đề nghị hỗ trợ mức quà tết cho cán bộ công chức trong ngành tối thiểu là 700.000 đồng. Mức thưởng này cao hơn năm ngoái 100.000 đồng. ','noi_dung' => $noi_dung,'image' => 'thuong-tet-3.jpg','noi_bat' => 1],
            ['tieu_de' => 'Mức sinh hoạt phí tối đa cho lưu học sinh là 1.200 USD ','tom_tat' => 'Đối với lưu học sinh tại Ba Lan, Bungary, Nga..., mức sinh hoạt phí sẽ tăng từ 400 USD lên 480 USD; tại Australia, New Zealand tăng từ 860 USD lên 1.032 USD và tại Mỹ, Canada, Anh, Nhật Bản tăng từ 1.000 lên 1.200 USD một người một tháng... ','noi_dung' => $noi_dung,'image' => 'du_hoc_sinh_set_sub.jpg','noi_bat' => 1],
            ['tieu_de' => 'Học sinh Hà Nội được nghỉ 11 ngày Tết ','tom_tat' => 'UBND thành phố Hà Nội vừa đồng ý với đề xuất của Sở Giáo dục và Đào tạo về việc cho học sinh nghỉ tết Tết Nguyên đán Tân Mão 11 ngày. ','noi_dung' => $noi_dung,'image' => 't2.jpg','noi_bat' => 1],
            ['tieu_de' => 'Hàng trăm nghìn học sinh nghỉ học vì giá rét ','tom_tat' => 'Sớm nay, các trường tiểu học ở Hà Nội đều trưng biển thông báo nghỉ học do nhiệt độ ở mức 8 độ C. Một vài phụ huynh không theo dõi dự báo thời tiết vẫn đưa con đến trường và ngậm ngùi quay xe ra về. ','noi_dung' => $noi_dung,'image' => 'phu_huynh_xem_lich_nghi_hoc_set_sub.jpg','noi_bat' => 1],
            ['tieu_de' => 'Phương pháp Mathnasium giúp trẻ yêu thích môn toán ','tom_tat' => 'Phương pháp dạy toán Mathnasium với 5 kỹ thuật giảng dạy bổ sung nhau, giúp trẻ em tiếp thu kiến thức toán hiệu quả, không cảm thấy áp lực và nhàm chán. ','noi_dung' => $noi_dung,'image' => 'image_250x195[1]_JPG_thumb210x0_ns.jpg','noi_bat' => 1],
            ['tieu_de' => 'Những nụ hôn ngọt ngào trong đêm tình nhân ','tom_tat' => 'Tối 13/2, hàng nghìn bạn trẻ có mặt tại cầu Ánh Sao (quận 7, TP HCM) chứng kiến những lời tỏ tình cùng những nụ hôn ngọt ngào của 100 cặp tình nhân trong "Đêm Valentine thế kỷ". ','noi_dung' => $noi_dung,'image' => '250h_jpg_thumb210x0_ns.jpg','noi_bat' => 1],
            ['tieu_de' => 'Hot girl tâm sự về ngày Valentine ','tom_tat' => 'Một bông hồng trắng bằng khăn giấy, chiếc xe đạp gắn đầy hoa, hay bài thơ của chàng "thi sĩ" vô danh gửi tặng… là những món quà đầy ấn tượng mà hot girl Midu từng nhận được trong các mùa Valentine. ','noi_dung' => $noi_dung,'image' => 'hot-girl-valentine-2.jpg','noi_bat' => 1],
            ['tieu_de' => 'Nên duyên chồng vợ từ mạng mai mối ','tom_tat' => 'Quen nhau qua trang web kết bạn, để chiếm được tình cảm của cô nàng cao tới 1,71 m, chàng trai cao 1,58 m kiên trì tỏ tình tới 10 lần và hạnh phúc đã mỉm cười với họ. ','noi_dung' => $noi_dung,'image' => 'cap_doi_hoan_hao_set_sub.jpg','noi_bat' => 1],
            ['tieu_de' => 'Những món quà Valentine làm từ tình yêu ','tom_tat' => 'Cặm cụi cả tuần để thêu móc chìa khóa bằng len tặng người yêu, làm tranh bằng chính những hạt đỗ "kỷ niệm ngày quen nhau" của hai đứa là cách mà giới trẻ đang làm để tặng người yêu dịp lễ Valentine. ','noi_dung' => $noi_dung,'image' => 'socola_set_sub.jpg','noi_bat' => 1],
            ['tieu_de' => '100 cặp tình nhân hôn nhau trên kimage khí cầu ','tom_tat' => '100 cặp tình nhân sẽ trao nhau nụ hôn trên kimage khí cầu và được tặng một bó hoa với 999 nụ hồng xanh, nhận "lời cầu hôn của thần Cupid"... trong lễ hội Valentine sẽ được tổ chức tại cầu Ánh Sao (quận 7, TP HCM) tối 13/2. ','noi_dung' => $noi_dung,'image' => 'valentine22.jpg','noi_bat' => 1],
            ['tieu_de' => 'Nhà thám hiểm 9 tuổi đặt chân tới Nam Cực ','tom_tat' => 'Vượt qua hành trình dài nhiều ngày, Phạm Vũ Thiều Quang, cậu bé 9 tuổi đã cùng bố đặt chân tới Nam Cực vào chiều mùng 1 Tết. Cậu bé đã trở thành người châu Á trẻ tuổi nhất đặt chân tới vùng đất này. ','noi_dung' => $noi_dung,'image' => 'top-2.jpg','noi_bat' => 1],
            ['tieu_de' => 'Giới trẻ nô nức xin chữ đầu năm ','tom_tat' => '9h sáng mùng 4 Tết dòng người kéo đến Văn miếu Quốc Tử Giám đông nghẹt. Nhiều bạn trẻ đứng chen chân hàng tiếng đồng hồ để xin được chữ: Trạng nguyên, Đỗ đạt, Trí, Nhân... khi xuân về. ','noi_dung' => $noi_dung,'image' => 'tre-1.jpg','noi_bat' => 1],
            ['tieu_de' => 'Mong ước đầu năm của giới trẻ ','tom_tat' => 'Trong năm mới, chàng thủ khoa ĐH Ngoại thương Tăng Văn Bình quyết tâm trau dồi ngoại ngữ để thực hiện ước mơ du học, còn Miss Teen Diễm Trang sẽ dành nhiều thời gian hơn cho hoạt động xã hội, giao lưu quốc tế. ','noi_dung' => $noi_dung,'image' => 'diem-trang-2.jpg','noi_bat' => 1],
            ['tieu_de' => 'Giám đốc tuổi mèo và thành tích đáng nể ','tom_tat' => 'Học hết lớp 9, Nguyễn Hữu Năm phải nghỉ học vì nhà nghèo lại đông con, nhưng chàng trai đất Chương Mỹ (Hà Nội) đã xuất sắc giành nhiều giải thưởng sáng tạo trẻ và hiện là chủ công ty chuyên về chế tạo máy. ','noi_dung' => $noi_dung,'image' => 'Nguyen_Huu_Nam_set_sub.jpg','noi_bat' => 1],
            ['tieu_de' => 'Học sinh vùng cao nghỉ Tết kéo dài vì giá rét','tom_tat' => 'Học sinh Hà Giang có thể nghỉ Tết Tân Mão gần 20 ngày còn học sinh Lào Cai được nghỉ Tết hơn các vùng khác 3 ngày để tránh giá rét. ','noi_dung' => $noi_dung,'image' => 'sapa9.jpg','noi_bat' => 1],
            ['tieu_de' => 'Không để thí sinh đăng ký đại học như chơi xổ số','tom_tat' => '"Chúng ta không thể để học sinh đăng ký nguyện vọng như chơi sổ xố, đến cuối cùng mới biết kết quả. Hãy để các em thấy rõ cơ hội của mình", Bộ trưởng GD&ĐT Phạm Vũ Luận phát biểu tại Hội nghị tuyển sinh sáng 18/2. ','noi_dung' => $noi_dung,'image' => 'Pham_Vu_Luan.jpg','noi_bat' => 1],
            ['tieu_de' => 'Chụp ảnh cưới tại Flamingo Đại Lải Resort ','tom_tat' => 'Với hệ sinh thái độc đáo gồm đảo với đàn chim hàng nghìn con cùng nhiều hồ, suối, bán đảo… Flamingo Đại Lải Resort là điểm đến cho các đôi uyên ương muốn tìm nơi lưu giữ khoảnh khắc trăm năm và nghỉ dưỡng cuối tuần. ','noi_dung' => $noi_dung,'image' => 'New_Imagesp2.jpg','noi_bat' => 1],
            ['tieu_de' => 'Hỗ trợ gần 3.000 vé xe tết cho sinh viên','tom_tat' => 'Mỗi khi máy bay sắp hạ cánh xuống sân bay Suvarnabhumi, tôi đều có cảm giác mình sắp được trở về nhà, về quê hương thân thương thứ hai của mình. Bạn Đặng Quốc Chí chia sẻ.Khoảng 2.700 sinh viên ngoại tỉnh có hoàn cảnh khó khăn, đang học tập tại TP HCM sẽ được tặng vé xe miễn phí về quê trong dịp tết Tân Mão.','noi_dung' => $noi_dung,'image' => 'sinhvien[1]_1.jpg','noi_bat' => 1],
            ['tieu_de' => 'Một mình ở Thái Lan ','tom_tat' => 'Không quá ồn ã tấp nập như Hong Kong, hay quá yên bình như Hội An, Bangkok khiến cho tôi cảm thấy vô cùng phấn khích, tựa hồ như vừa thức giấc sau một cơn ngủ say. Bạn Nguyễn Anh Ngọc viết. ','noi_dung' => $noi_dung,'image' => 'top1.jpg','noi_bat' => 1],
            ['tieu_de' => 'Trai Hà thành trổ tài vật cầu đầu xuân','tom_tat' => 'Những pha tranh cướp quyết liệt cùng những tiếng cười vui là hình ảnh về lễ hội vật cầu đầu xuân của các thanh niên làng Thúy Lĩnh, quận Hoàng Mai (Hà Nội), diễn ra chiều 8/2 (6 Tết). ','noi_dung' => $noi_dung,'image' => '130.jpg','noi_bat' => 1],
        ]);
    }
}
