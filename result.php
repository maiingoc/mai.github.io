<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HỆ THỐNG QUẢN LÝ TRƯỜNG HỌC </title>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		  $("button").click(function(){
			alert($("#w3s").attr("href"));
		  });
		});
		</script>
<script src="Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        $('document').ready(function () {

            $('#dangnhap').mousemove(function () {
                $('#dn').text('Tên đăng nhập phải dài hơn 8 ký tự');
            });
            $('#dangnhap').mouseout(function () {
                $('#dn').text('');
            });

            $('#matkhau').mousemove(function () {
                $('#mk').text('Tên đăng nhập phải dài hơn 8 ký tự');
            });
            $('#matkhau').mouseout(function () {
                $('#mk').text('');
            });

            $('#bt4').click(function () {
                $('p').removeClass();
            });

            $('#bt5').click(function () {
                $('p').removeClass().addClass('xanh');
            });

            $('#bt6').click(function () {
                $('p').removeClass().addClass('do');
            });

            $('tr').mousemove(function () {
                $(this).addClass('maunen');
            });

            $('tr').mouseout(function () {
                $(this).removeClass();
            });
    </script>
</head>
<body>
    <div id="wraper">
        <div id="banner">
            <div class="buom1">
                <img src="images/buom.gif" width="100px" />
            </div>
            <div class="anhdong">
                <img src="images/tuyetroi.gif" />
            </div>
            <div class="wellcome">
                <img src="images/welcom.gif" width="300px" />
            </div>
        </div>
        <div id="menungang">
		<nav >
                    <a href="#" id="menu-icon"></a>
                    <ul>
                        <li  style="border-left: none; font-size: 20px"><a href="index.php">Trang chủ</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                        <a href="nangluc.php">Tư vấn lựa chọn trường</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                        <a href="thongke.php">Thống kê dữ liệu</a>
			</li>
                    </ul>
                </nav>
	</div>
        <div id="cottrai"></div>
        <div id="cotgiua"> <br />
		 <form name="dangnhap_dk" method="post" action="nangluc.php" target="body" style="">
			<p><a href="truonghoc.php" id="w3s">Bạn hãy chọn trường học phù hợp với năng lực</a></p>
		</form>	
        </div>
        <div id="cotphai"></div>
        <div id="clear"></div>
        <div id="cuoitrang">
            <h4 style="font-size: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                Website được tạo bởi Lớp DLB16HT201</h4>
        </div>
    </div>
</body>
</html>
