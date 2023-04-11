<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    *{
    margin: 0;
    padding:0;
}
.header{
    height: 100px;
    display:grid;
    grid-template-columns:10% 50% 40% ;
    background: #fff;
}
.img{
    height: 100px;
    width: 100px;
    margin-left: 30px;
}
.menu{
    margin-top: 39px;
    margin-bottom: 39px;
}
 .menu ul {
    display: flex;
    flex-direction: row;
    list-style-type: none;
    gap:22px;
}
.menu ul li a{
    text-decoration: none;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height:5px;
    color: #DD3333;
}
.menu ul li a:hover{
    border-bottom: 2px solid #DD3333;
}
.function{
    margin-top: 30px;
    margin-bottom: 39px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    
}
.functionsearch{
    margin-left: 50px;
    margin-top: 10px;
}
.input{
    border-top: none;
    border-left:none;
    border-right: none;
    height: 40px;
    width: 300px;
}

.button{
    width: 100px;
    height: 35px;
    border-radius: 10px;
    background:#F2DFE3;
    color: #DD3333;
    border:1px solid #F2DFE3;
    height: 40px;
}
.button a{ 
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #DD3333;
    text-decoration: none;
    padding-bottom: 5px;
}
.footer{
    width: 100%;
    background: #F2DFE3;
    height: 400px;
}
.content{
    display:grid;
    grid-template-columns: 40% 30% 30%;
    padding-top: 72px;
    padding-left: 140px;
    padding-bottom:53px ;
    padding-right: 52px;
}
.content1{ 
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    line-height: 17px;
    color: #333333;
}
.detail1{
    padding-top: 24px;
    display: grid;
    grid-template-columns: 50% 50%;
}

.img1{
    Width:396.67px;
    Height:550px;
    border-radius: 10px;
}
.category ul{
    display:flex;
    gap:10px;
}
.category ul li {
    list-style-type: none;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 18px;
}
.categorya{
    color: #777777;
}

.categoryp1{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 34px;
    line-height: 41px;
    color: #333333;
}
.categoryp2{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;
    color: #DD3333;
}
.functionbutton{
    Width:118px;
    Height:27px;
    background: #F2DFE3;
    border-radius: 20px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #DD3333;
    border: 1px solid #F2DFE3;
}
</style>
<body>
<div class="body">
      <div class="container">
        <?php
            $id = $_GET["id"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "THOITRANGSs";
            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
              die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM THOITRANGS;";
            $result = $mysqli->query($sql);
        ?>
        <!-- ***** Call to Action Start ***** -->
        <div class="detail">
          <div class="container">
            <?php if ($result->num_rows > 0) {
              // dữ liệu đầu ra của mỗi hàng //fetch_assoc là một hàm trong PHP dùng để trả về dòng kết quả từ một truy vấn SQL dưới dạng một mảng kết hợp.
            ?>
              <div class="detail1">             
                <?php while ($row = $result->fetch_assoc()) {
                  if ($id == $row["id"]) {
                ?>
                  <div class="img">
                    <img class="img1" src="<?php echo $row["img"]; ?>" alt="Card image">
                  </div>
                  <div class="detail2">
                      <p class="categoryp1"><?php echo $row["names"]; ?></p>
                      <p class="categoryp2"><?php echo $row["price"]; ?></p>
                      <div class="function">
                          <button type="submit"class="functionbutton"><a href="">Đặt mua</a> </button>
                          <button class="functionbutton"><a class="functionbutton1"  href="themgiohang.php">Giỏ hàng <i class="fa-sharp fa-solid fa-cart-shopping"></i> </a></button>
                      </div>
                    </div>
                  </div>
                <?php
                 break;
                  }
                } ?>
              </div>
            <?php }  ?>
          </div>
        </div>
      </div>
    </div>
</body>
</html>


