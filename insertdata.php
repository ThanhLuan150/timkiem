<?php
        $mysqli =new mysqli("localhost","root","", "THOITRANGSs");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="INSERT INTO THOITRANGS(id,img,names,price) VALUES
        ('1','https://bumshop.com.vn/wp-content/uploads/2019/01/10-shop-ban-ao-khoac-nam-dep-tphcm-14.jpg','Áo khoát nam','200.000'),
        ('2','https://tse3.mm.bing.net/th?id=OIP.CbU6VpQ4FA9rgVqA8f2t_wHaHa&pid=Api&P=0','Aó thun phông rộng','300.000'),
        ('3','https://tse1.mm.bing.net/th?id=OIP.v6xNWbxPPJ5qWw1IuhSvgQHaKy&pid=Api&P=0','Chân váy','250.000'),
        ('4','https://tse2.mm.bing.net/th?id=OIP.8_D3ogMl3FpBfv-10OzAMwHaFj&pid=Api&P=0','Áo  hoodies','280.000'),
        ('5','https://tse1.mm.bing.net/th?id=OIP.IiUdMS8vAX5urO8p6FqTwQHaHa&pid=Api&P=0','Áo switer nam','210.000'),
        ('6','https://saigonsneaker.com/wp-content/uploads/2020/11/Quan-Baggy-Jean-Nam-Ong-Rong-Xanh-5.jpg','Quần jean ống rộng nam','240.000'),
        ('7','https://cf.shopee.vn/file/a4f69c3c809186bb4d50d73a5755667f','Quần joker nam','170.000'),
        ('8','https://tse4.mm.bing.net/th?id=OIP.9E9e2ZtGhcjWEZ8HuYultAHaKu&pid=Api&P=0','Aó croptop','100.000'),
        ('9','http://1.bp.blogspot.com/-9h4hstWSJhk/VdScHkUas_I/AAAAAAAAYMU/zjQTwc-9spw/s1600/ao%2Bkhoac%2Bnam%2Bdep%2B%25281%2529.jpg','Aó khoát nam phá cách','260.000'),
        ('10','https://ttol.vietnamnetjsc.vn/images/2022/03/10/15/02/Diep-Lam-Anh-3.jpg','Aó thun phông rông nữ đẹp xiu xuất sắc','300.000'),
        ('11','https://tse2.mm.bing.net/th?id=OIP.ZaBGdOSNxG5yFtxjvQ4HXgHaLG&pid=Api&P=0','Chân váy nữ tôn dáng','300.000'),
        ('12','http://giaybongro.vn/upload/img/6611_1510816002.jpg','Áo hoodies','300.000'),
        ('13','https://cdn.shopify.com/s/files/1/0985/5304/products/no_battery_all_drama_switer_maroon.jpg?v=1461381959','Áo switer nam đẹp','300.000'),
        ('14','https://cf.shopee.vn/file/c1f8bffc1493f159a7da84e846bb7af7','Quần jean ống rộng nam hàn quốc','200.000'),
        ('15','https://cf.shopee.vn/file/421981092bcbd07658cde10c041977dc','Quần joker nam hàn quốc','230.000'),
        ('16','https://tse1.mm.bing.net/th?id=OIP.EnJr7szGKhN973d7tvAdTAHaLH&pid=Api&P=0','Aó croptop đẹp khoe trọn body','130.000'),
        ('17','https://cf.shopee.vn/file/4257afae4d6fc9903942372dfbd541e5','Áo khoát bomber nam đẹp ','240.000'),
        ('18','https://image-us.eva.vn/upload/2-2020/images/2020-04-10/kheo-nhu-cao-thai-ha-dien-ao-phong-thung-thinh-van-khoe-duoc-dang-dep-5170a8c11f6043b77d095b9999831d28-1586527475-83-width600height879.jpg','Aó thung nữ đẹp xỉu','400.000'),
        ('19','https://storage.googleapis.com/cdn.nhanh.vn/store1/53436/ps/20210402/1__27_.jpg','Chân váy tôn vinh vẻ đẹp','400.000'),
        ('20','https://cf.shopee.vn/file/dcff3648b74dbb12c5c76a6574007b88','Quần jean ống rộng Hàn  Quốc','250.000')
        ";

        if($mysqli ->query($sql) === true){
            echo"Records inserted successfully.";
        }
        else{
            echo"ERROR:Could not able to execute $sql.".$mysqli->error;
        }
        //close
        $mysqli ->close();
?>