<?php $id=$_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "zam_mysql");
mysqli_set_charset($connect, 'UTF8');
  if (mysqli_connect_errno()) {
    echo 'Failed to connect to Mysql : '.$mysqli_connect_errno();
  }
  $query = "
  SELECT * FROM casy WHERE TenCS  = '$id'
  ";
  $result = mysqli_query($connect, $query);
  $key=mysqli_fetch_assoc($result);
include 'header4.php';


?>
<div class="content" style="
						
                        width: 1079px;
                        background-color: antiquewhite;
                        margin-left: 134px;
                        min-height:2000px;
                        height:auto;
                    ">
                    
                    <div style="color:white;height:250px;width:1079px;  margin-top: 2cm;background: url('student_image/<?php echo $key['HinhAnh']?>') center center / cover no-repeat;">
                    
                    
                    
                    
                    </div>
                    
                   
                    <div style="    margin: 0 1cm;">
                    <hr style="    margin-top: 33px;border-top: 1px solid #111">
                    <div style="height:50px;width:1079px;display: -webkit-inline-box;margin-top:5px;">
                    <a href="thongtincasy.php?id=<?php echo $key['TenCS'];?>"style="text-decoration:none;">
                    <img style="    width: 50px;" src="student_image/<?php echo $key['HinhAnh']?>"/>&nbsp;
                    <div><b><span style="font-size:14px;"><?php echo $key['TenCS']?></span></b></div>
                    </a>
                            </div>
                            <hr style="    margin-top: 24px;border-bottom: 1px solid #111">
                            </div>
                            <div>
                            
                            <section class=""><div class="container"><div class="sub-container no-line-height">
                            <div class="row"><div class="col-md-8"><ul style="    width: 100%;    list-style: none;
    display: -webkit-inline-box;
    position: relative;
    z-index: 2;">
                            <li style="     width: 120px;   position: relative;float: left;display: inline-block;"><a role="button" title="Tổng quan" href="/nghe-si/Thuy-Chi/home">Tổng quan</a></li>
                            <li style="      width: 80px;  position: relative;float: left;display: inline-block;"><a role="button"  title="MV" href="/nghe-si/Thuy-Chi/video">MV</a></li>
                            <li style="      width: 80px;  position: relative;float: left;display: inline-block;"><a role="button"  title="Album" href="/nghe-si/Thuy-Chi/album">Album</a></li>
                            <li style="      width: 80px;  position: relative;float: left;display: inline-block;"><a role="button"  title="Bài hát" href="/nghe-si/Thuy-Chi/bai-hat">Bài hát</a></li>
                            <li style="      width: 80px;  position: relative;float: left;display: inline-block;"><a role="button" onclick="myfunction()" title="Giới thiệu">Giới thiệu</a></li></ul>
                            </div></div></div></div></section>
                            
                            <script>
function myfunction() {
document.getElementById("demo").innerHTML =<?php echo json_encode ($key['TieuSu']); ?>;
}
</script>

<div id="demo">

<div>
                            </body>
</html>
                            