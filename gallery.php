<?php
include "component/header.php";
?>
<!-- Navigation -->
<div class="nav2" style="z-index: 99; height: 70px; background: rgb(1, 87, 155);">
  <div class="row" style="margin-bottom:0px">
    <div class="col s2">
      <img src="img/logo.png" style="width:120px;margin-top:10px" alt="">
      <!-- <h1 class="nav-title" style="font-family:lato;font-size:20px;margin:10px;padding:5px;">Travel Anda</h1> -->
    </div>
    <div class="col s3">

    </div>
    <a href="index.php" style="color:#fff">
      <div class="nav-item col s1 waves-effect" style="margin:10px;padding:5px">
        Home
      </div>
    </a>
    <a href="package.php" style="color:#fff">
    <div class="nav-item col s1 waves-effect" style="margin:10px;padding:5px">
      Package
    </div>
    </a>
    <a href="gallery.php" style="color:#fff">
    <div class="nav-item col s1 waves-effect" style="margin:10px;padding:5px">
       Gallery
    </div>
     </a>
    <a href="contacus.php" style="color:#fff">
    <div class="nav-item col s1 waves-effect" style="margin:10px;padding:5px">
       Contact Us
    </div>
    </a>
    <div class="col s1">
      <table style="margin-top: -2px; width:100%">
        <tr>
          <td><img src="img/bendera.png" style="width:18px" alt=""></td>
          <td>(Bahasa)</td>
          <td><i class="material-icons" style="font-size:18px">keyboard_arrow_down</i></td>
        </tr>
      </table>
    </div>
    <div class="col s1" style="margin:10px">
        <a href="admin/index.php" class="nav-item waves-effect" style="padding:5px;width: 80%;height: 25px;color:#fff">Login</a>
    </div>
  </div>
</div>
<!-- End Navigation -->

<div class="" style="margin-top:160px"></div>
<div class="tour-package" style="text-align:center;margin-top:50px">
  <h5 style="font-weight:800">Our Happy Customers</h5>
  <hr style="width:30%;color:grey;border:1px thin">
  <div class="row" style="margin-top:70px;padding:80px;padding-top:0px">
    <?php
    include "admin/proses/koneksi.php";
    $query = mysqli_query($connect, "SELECT * FROM `gallery`");
    while ($data = mysqli_fetch_array($query)) {
     ?>
    <div class="col s4" style="border-radius:10px;margin-top:10px;margin-bottom:10px">
      <div class="package" style="border-radius:10px">
        <div id="myImg" class="fotoPaket" style="height:250px;border-radius: 10px;background:url('admin/proses/<?php echo $data['photo']; ?>');background-size:cover"></div>
      </div>
      </a>
    </div>
    <?php } ?>
  </div>
</div>

<?php include "component/footer.php"; ?>
