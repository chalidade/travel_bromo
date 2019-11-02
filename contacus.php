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
  <h5 style="font-weight:800">Contact Us</h5>
  <hr style="width:30%;color:grey;border:1px thin">
  <div class="row" style="margin-top:70px;padding:80px;padding-top:0px">
    <div class="row">
      <div class="col s6">
        <form role="form" action="admin/proses/route.php?page=contacus" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="save">
        <input type="hidden" name="table" value="message">
        <input type="hidden" name="data[]" value="">
        <div class="col s12 white" style="border-radius:10px;padding-left: 40px;">
          <h6 style="font-size:14px;padding-left: 10px;color:#000;text-transform:capitalize;font-weight:800; text-align:left">Full Name</h6>
          <input type="text" name="data[]" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;">
        </div>
        <div class="col s12 white" style="border-radius:10px;padding-left: 40px;">
          <h6 style="font-size:14px;padding-left: 10px;color:#000;text-transform:capitalize;font-weight:800; text-align:left">Email</h6>
          <input type="email" name="data[]" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;">
        </div>
        <div class="col s12 white" style="border-radius:10px;padding-left: 40px;">
          <h6 style="font-size:14px;padding-left: 10px;color:#000;text-transform:capitalize;font-weight:800; text-align:left">Phone</h6>
          <input type="text" name="data[]" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;">
        </div>
        <div class="col s12 white" style="border-radius:10px;padding-left: 40px;">
          <h6 style="font-size:14px;padding-left: 10px;color:#000;text-transform:capitalize;font-weight:800; text-align:left">Message</h6>
          <textarea name="data[]" style="padding:5px;width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 150px;border: none;"></textarea>
        </div>
        <div class="col s12 white" style="border-radius:10px;padding-left: 40px;margin-top:20px">
          <input type="submit" value="Send" style="border:none;width:100%; margin:5px;padding:8px;background: #01579b;color: white;font-weight: 700;border-radius;border-radius: 20px;">
        </div>
      </div>
      </form>
      <div class="col s6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.539665310003!2d106.8391596140317!3d-6.192291562389556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f43f5ed22fb9%3A0xed4ef3f92ddf6491!2sMenara%20Digitaraya!5e0!3m2!1sid!2sid!4v1572316244799!5m2!1sid!2sid" width="100%" height="480" style="border-radius:20px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>

<?php include "component/footer.php"; ?>
