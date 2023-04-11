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
    .background{
    background: #EFEFEF;
    padding-bottom: 30px;
    }
    .backgroundp1{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;

    color: #000000;
    }

    .title{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 29px;
        color: #000000;
        }

    .list_schools{
            display: grid ;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap:30px;
            list-style-type:none;
    }
    .item{
        background: #fff;
        border-radius: 10px 10px 10px 10px;
    }
    .img4{
        Width:262px;
        Height:290px;
        border-radius: 10px 10px 0 0 ;
    }
    .informationproductp1{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #000000;
        margin-left: 13px;
    }
    .informationproductp2{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #ED2353;
        margin-left: 13px;
    }
    .button111{
        margin-bottom:20px;
        margin-left: 13px;
    }
    .bt2{
        background: gray;
        border-radius: 20px;
        border: 1px solid  #F2DFE3 ;
        height:30px;
        width: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 17px;
       
    }
    .a1{
        color: #000000;
    }
    .input{
        width: 300px;
        height:40px;
        border-radius: 10px;
        border: 1px solid #EFEFEF ;
        outline: none;
    }
    .input1{
        height:40px;
        border-radius: 10px;
        background: blue;
        border: 1px solid blue;
        color:white
    }

</style>
<body>  
    <script>
		function search() {
			// Do something when user clicks on search button
			location.reload(); // Reload the page
		}
	</script>
    <div class="background">
        <div class="container">
                    <br>
                    <p class="backgroundp1">Thời Trang hot trend</p>
                    <form method="get" action="search.php">
                        <input class="input" type="text" name="search_query" placeholder="Nhập từ khóa tìm kiếm">
                        <button class="input1" type="submit" name="search"  onclick="search()">Tìm kiếm</button>
                    </form>

                    <br>
                    <br>
                    <button>thứ tự tăng dần</button>
                    <button>thứ tự giảm dần</button>
                    <button>Aó thun phông rộng</button>
                    <button>Áo khoát nam</button>
                    <button>Chân váy</button>
                    <button>Áo hoodies</button>
                    <button>Áo switer nam</button>
                    <br>
                <?php
                // Kết nối đến cơ sở dữ liệu
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "THOITRANGSs";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Lấy dữ liệu từ form tìm kiếm
                if (isset($_GET['search'])) {
                    $search_query = $_GET['search_query'];

                    // Tìm kiếm dữ liệu trong cơ sở dữ liệu
                    $sql = "SELECT * FROM THOITRANGS WHERE  names LIKE '%$search_query%'";
                    $result = $conn->query($sql);

                    // Hiển thị kết quả tìm kiếm
                    if ($result->num_rows > 0) {
                        // output data of each row
                    ?>
                        <br><br>
                        <div class="list_schools">
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                    <div class="item">
                                        <div class="image11">
                                            <img class="img4" src="<?php echo $row["img"]; ?>" alt="">
                                        </div>
                                        <br>
                                        <div class="informationproduct">
                                            <p class="informationproductp1"><?php echo $row["names"]; ?></p>
                                            <p class="informationproductp2"><?php echo $row["price"]; ?></p>
                                        <div class="button111">
                                            <button class="bt2"><a class="a1"  href="detail.php?id=<?php echo $row["id"];?>">Detail</a></button>  
                                            <button class="bt2"><a class="a1" href="orders.php?id=<?php echo $row["id"];?>">Đặt thuê</a></button>
                                        </div>
                                    </div>
                            </div>
                        <?php  }
                        } else {
                            echo "Không có kết quả để hiển thị ra";
                        }
                }

        ?>
        </div>
    </div>
        </body>
</html>
