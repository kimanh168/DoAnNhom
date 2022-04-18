<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            ['product_name' => 'Cannelé Blackberry','type_id' => 4,'price' => 40000,'image' => 'blackberry.jpg', 'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm, canelé này được làm từ công thức Wild Blackberries truyền thống được tạo ra bởi nhà sản xuất bánh kẹo nổi tiếng của Pháp Philippe Bruneton. Bí mật của quả mâm xôi nằm ở sự kiên nhẫn của người hái quả và khả năng hái chúng riêng lẻ. Dân dã nhưng cực kỳ tinh tế, quả mâm xôi đen quý giá như ngọc trai đen mặc dù chúng có rất nhiều trên toàn cầu. Một loại mứt cổ điển của Pháp.', 'created_at' => '2022/04/11','expiry' => 3, 'promotion' => 0],
            ['product_name' => 'Cannelé Caramel','type_id' => 4,'price' => 40000,'image' => 'Ccaramel.jpg','description' => 'Vỏ bánh caramel với nhân sữa trứng mềm phủ bên trên một lớp caramel chảy làm tăng thêm chút vị mặn, canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','created_at' => '2022/04/12','expiry' => 3, 'promotion' => 0 ],
            ['product_name' => 'Cannelé Chocolate','type_id' => 4,'price' => 40000,'image' => 'Csocola.jpg','description' => 'Vỏ bánh caramel với nhân sữa trứng mềm được bao bọc bằng một hình hoa thị của sô cô la đen,canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','created_at' => '2022/04/12','expiry' => 3, 'promotion' => 0 ],
            ['product_name' => 'Cannelé Coffee','type_id' => 4,'price' => 40000,'image' => 'Ccoffe.jpg','description' => 'Vỏ bánh caramel với nhân sữa trứng mềm phủ bên trên, món canelé này có hương thơm nồng nàm của cà phê, canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','created_at' => '2022/04/10','expiry' => 3, 'promotion' => 0 ],
            ['product_name' => 'Cannelé Lemon','type_id' => 4,'price' => 40000,'image' => 'Clemon.jpg','description' => 'Một lớp vỏ caramel với nhân sữa trứng mềm, loại canelé này có hương thơm với chiết xuất tự nhiên của Chanh. Chanh lần đầu tiên được trồng ở Iraq và Ba Tư và đã trở thành nguyên liệu chính trong các món ăn tinh tế và phức tạp nhất trên thế giới từ Mexico đến Ấn Độ và Việt Nam. Các thủy thủ người Anh là những người đầu tiên giới thiệu Lime ở châu Âu, do đó họ có biệt danh nổi tiếng là "Limey" vì việc sử dụng cam quýt thường xuyên.','created_at' => '2022/04/09','expiry' => 3, 'promotion' => 0 ],
            ['product_name' => 'Cannelé Matcha','type_id' => 4,'price' => 40000,'image' => 'Cmatcha.jpg','description' => 'Vỏ bánh caramel với nhân sữa trứng mềm phủ bên trên một lớp bột matcha xanh mang đậm văn hóa nhật bản, canelé nguyên bản được làm từ công thức truyền thống hứa hẹn sẽ đem lại vị ngon khó quên cho mọi người','created_at' => '2022/4/13','expiry' => 3, 'promotion' => 0 ],
            ['product_name' => 'Cookie Coco','type_id' => 3,'price' => 20000,'image' => 'cookie-coco.jpg', 'description'=> 'Một chiếc bánh quy được làm từ bơ trứng sữa có hương thơm với chiết xuất từ dừa tự nhiên thích hợp cho những bữa tiệc trà, tráng miệng. Cây dừa và trái của nó nắm bắt được bản chất của vùng nhiệt đới đầy nắng. Quả dừa thực sự là một loại hạt cực kỳ dẻo dai, có giá trị dinh dưỡng cao và đã đi khắp thế giới lướt sóng để phun lòng bàn tay của họ.','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
            ['product_name' => 'Financier Walnut','type_id' => 3,'price' => 20000,'image' => 'cookie-le.jpg', 'description'=> 'Sở dĩ được gọi như vậy vì hình dạng của chúng - những miếng bọt biển nhỏ được nung trong khuôn để trông giống như những thỏi vàng. Để tăng thêm hiệu ứng, Prue đã hoàn thiện những thứ này bằng những miếng caramel nhỏ xíu, giống như những viên vàng nhỏ thêm vào.','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
            ['product_name' => 'Ube cookie','type_id' => 3,'price' => 20000,'image' => 'Ubecookie.jpg', 'description'=> 'Bánh quy Ube crinkle là một biến tấu đẹp mắt của người Mỹ gốc Philippines trên loại bánh quy crinkle cổ điển! Ube là một loại khoai lang tím thường được sử dụng trong các món tráng miệng ở Đông Nam Á. Nó có màu tím tự nhiên, với một hương vị tinh tế giống như cả quả hồ trăn và vani. Những chiếc bánh quy ube crinkle này có màu sắc và hương vị rực rỡ từ cả mứt ube halaya và chiết xuất ube!','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
            ['product_name' => 'Birthday Boy','type_id' => 1,'price' => 260000,'image' => 'BirthDayTrai.jpg', 'description'=> 'Món quà đặc biệt dành tặng bé trai vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
            ['product_name' => 'Birthday BaBy','type_id' => 1,'price' => 270000,'image' => 'BirthdayBaBY.jpg', 'description'=> 'Lời tỏ tình của những người yêu nhau. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
            ['product_name' => 'Birthday Girl','type_id' => 1,'price' => 300000,'image' => 'BirthDayGirl.jpg', 'description'=> 'Món quà đặc biệt dành tặng bé gái vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
            ['product_name' => 'Birthday Bear','type_id' => 1,'price' => 255000,'image' => 'BirthDayGau.jpg', 'description'=> 'Món quà đặc biệt dành tặng bé vào ngày sinh nhật. Kem sữa tươi - đi theo thời gian và sự thay đổi của cuộc sống ..... vẫn là nó dòng kem sữa tươi không bao giờ gọi là cũ . Dòng kem bất thủ đi theo thời gian đã tạo nên một hương vị đặt trưng của kem sữa . Vì thế kem sữa tươi vẫn được mệnh danh là dòng kem đi theo mãi với thời gian','created_at' => '2022/04/18','expiry' => 5, 'promotion' => 0 ],
        ]);

    }
}
