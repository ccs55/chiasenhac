<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "zam_mysql");
mysqli_set_charset($connect, 'UTF8');
  if (mysqli_connect_errno()) {
    echo 'Failed to connect to Mysql : '.$mysqli_connect_errno();
  }

$query = "
SELECT * FROM baihat,casy WHERE baihat.CaSy=CaSy.TenCS and baihat.TenBh LIKE '%".$_POST['name']."%'
";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{

foreach($result as $key){
    ?>
    <a href="header3.php?id=<?php echo $key['TenBh'];?>" style="text-decoration:none;">
    <div id="user">
    <img width="40" src="student_image/<?php echo $key['HinhAnh']?>" id="pic"/>&nbsp;<div><div><span style="font-size:14px;"><?php echo $key['TenBh']?></span></div><div><span style="font-size:12px;"><?php echo $key['CaSy']?></span></div></div></div>
    
    </a>
    <?php
}
}



?>