<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Preference Menu
      <!-- <small>New Hotel</small> -->
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <!-- Slider -->
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="box box-primary" style="padding:10px;">
                <div class="box-header with-border">
                  <i class="fa fa-gear"></i><h3 class="box-title">Slider</h3>
                </div>
                <!-- /.box-header -->
                <form action="proses/slider.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group">
                          <img src="<?php echo $home['slider1']; ?>" alt="" style="width:100%">
                          <label for="file1" style="border:solid 1px #242424;width:100%;padding:10px">Change Photo</label>
                          <input type="file" name="file1" class="form-control" id="file1" style="display:none">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="desc1" rows="4" placeholder="Description .. "><?php echo $home['desc1']; ?></textarea>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <div class="col-md-4">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group">
                          <img src="<?php echo $home['slider2']; ?>" alt="" style="width:100%">
                          <label for="file2" style="border:solid 1px #242424;width:100%;padding:10px">Change Photo</label>
                          <input type="file" name="file2" class="form-control" id="file2" style="display:none">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="desc2" rows="4" placeholder="Description .. "><?php echo $home['desc2']; ?></textarea>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <div class="col-md-4">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group">
                          <img src="<?php echo $home['slider3']; ?>" alt="" style="width:100%">
                          <label for="file3" style="border:solid 1px #242424;width:100%;padding:10px">Change Photo</label>
                          <input type="file" name="file3" class="form-control" id="file3" style="display:none">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="desc3" rows="4" placeholder="Description .. "><?php echo $home['desc3']; ?></textarea>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </form>
        </div>
    </div>
  </div>
    <!-- /End Slider -->


    <!-- Package -->
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="box box-primary" style="padding:10px;">
                <div class="box-header with-border">
                  <i class="fa fa-gear"></i><h3 class="box-title">Package</h3>
                </div>
                <!-- /.box-header -->
                <form role="form">
                <div class="row">
                  <div class="col-md-3">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group" style="border:solid 1px;padding:10px;border-radius:5px">
                          <img src="../img/gunung_bromo.png" alt="" style="width:100%">
                          <h5 style="text-align:center;font-weight:800">Paket Wisata Bromo</h5>
                          <p style="font-size:10px;text-align:center">
                            <i class="fa fa-star" style="margin-right:2px;margin-left:5px;color:orange"></i> 4.5
                            <i class="fa fa-user" style="margin-right:2px;margin-left:5px;"></i> 5 Person
                            <font style="font-weight:800" style="margin-right:2px;margin-left:5px;">IDR </font> : 500K</p>
                          <center>
                          <button type="button" class="btn btn-success" name="button" style="font-size:12px;">Change</button>
                        </center>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <div class="col-md-3">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group" style="border:solid 1px;padding:10px;border-radius:5px">
                          <img src="../img/gunung_bromo.png" alt="" style="width:100%">
                          <h5 style="text-align:center;font-weight:800">Paket Wisata Bromo</h5>
                          <p style="font-size:10px;text-align:center">
                            <i class="fa fa-star" style="margin-right:2px;margin-left:5px;color:orange"></i> 4.5
                            <i class="fa fa-user" style="margin-right:2px;margin-left:5px;"></i> 5 Person
                            <font style="font-weight:800" style="margin-right:2px;margin-left:5px;">IDR </font> : 500K</p>
                          <center>
                          <button type="button" class="btn btn-success" name="button" style="font-size:12px;">Change</button>
                        </center>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <div class="col-md-3">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group" style="border:solid 1px;padding:10px;border-radius:5px">
                          <img src="../img/gunung_bromo.png" alt="" style="width:100%">
                          <h5 style="text-align:center;font-weight:800">Paket Wisata Bromo</h5>
                          <p style="font-size:10px;text-align:center">
                            <i class="fa fa-star" style="margin-right:2px;margin-left:5px;color:orange"></i> 4.5
                            <i class="fa fa-user" style="margin-right:2px;margin-left:5px;"></i> 5 Person
                            <font style="font-weight:800" style="margin-right:2px;margin-left:5px;">IDR </font> : 500K</p>
                          <center>
                          <button type="button" class="btn btn-success" name="button" style="font-size:12px;">Change</button>
                        </center>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <div class="col-md-3">
                    <!-- form start -->
                      <div class="box-body">
                        <div class="form-group" style="border:solid 1px;padding:10px;border-radius:5px">
                          <img src="../img/gunung_bromo.png" alt="" style="width:100%">
                          <h5 style="text-align:center;font-weight:800">Paket Wisata Bromo</h5>
                          <p style="font-size:10px;text-align:center">
                            <i class="fa fa-star" style="margin-right:2px;margin-left:5px;color:orange"></i> 4.5
                            <i class="fa fa-user" style="margin-right:2px;margin-left:5px;"></i> 5 Person
                            <font style="font-weight:800" style="margin-right:2px;margin-left:5px;">IDR </font> : 500K</p>
                          <center>
                          <button type="button" class="btn btn-success" name="button" style="font-size:12px;">Change</button>
                        </center>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                </div>
          </form>
        </div>
    </div>
  </div>

  <!-- Slider -->
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="box box-primary" style="padding:10px;">
              <div class="box-header with-border">
                <i class="fa fa-gear"></i><h3 class="box-title">Why Choose Us</h3>
              </div>
              <!-- /.box-header -->
              <form role="form">
              <div class="row">
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 1</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 2</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 3</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 4</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 5</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 6</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 7</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="col-md-3">
                  <!-- form start -->
                    <div class="box-body">
                      <div class="form-group">
                        <h4 style="text-align:center">Item 8</h4>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title .. "></textarea>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Description .. "></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
      </div>
  </div>
</div>
  <!-- /End Slider -->
    <!-- /End Package -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
