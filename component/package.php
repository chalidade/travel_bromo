<div class="tour-package" style="text-align:center;margin-top:50px">
  <h5 style="font-weight:800">Popular Tour Packages</h5>
  <div class="row" style="margin-top:70px;">
    <div class="col s2"> </div>
    <?php
    include "admin/proses/koneksi.php";
    $query = mysqli_query($connect, "SELECT * FROM `package` LIMIT 4");
    while ($data = mysqli_fetch_array($query)) {
     ?>
    <div class="col s2" style="border-radius:10px;">
      <div class="package" style="box-shadow: 5px 7px 5px #dcdcdc40;border-radius:10px">
        <div class="fotoPaket" style="height:250px;border-top-left-radius: 10px;border-top-right-radius: 10px;background:url('admin/proses/<?php echo $data['photo']; ?>');background-size:cover"></div>
        <div class="deskripsiPaket" style="padding:2px">
          <p style="font-weight:800;font-size:12px"><?php echo $data["name"]; ?></p>
          <table style="margin-top:-20px">
            <tr style="font-size:10px;border:none">
              <td><i class="material-icons" style="color:orange;font-size:14px">star</i></td>
              <td>4,5</td>
              <td><i class="material-icons" style="color:gray;font-size:14px">people</i></td>
              <td><font style="font-size:9px"><?php echo $data["person"]; ?> Person</font></td>
              <td>IDR</td>
              <td><font style="font-weight: 800;"><?php echo $data["price"]; ?>K</font></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="col s2"></div>
  </div>
  <center><button class="btn light-blue lighten-1" style="height: 35px;border-radius:20px;font-size:10px;text-transform:Capitalize;width:140px;margin-top:15px">View All</button></center>
</div>
