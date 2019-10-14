<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Hotel Menu
      <!-- <small>New Hotel</small> -->
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-12 col-xs-6">
        <div class="box box-primary" style="padding:10px;">
                <div class="box-header with-border">
                  <h3 class="box-title">Input New Hotel</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Hotel Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Hotel Name ..">
                    </div>
                    <div class="form-group">
                      <label>Hotel Description</label>
                      <textarea class="form-control" rows="4" placeholder="Hotel Description .."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="address">Hotel Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Hotel Name ..">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="number" class="form-control" id="phone" placeholder="Hotel Name ..">
                    </div>
                    <div class="form-group">
                      <label for="phone">Photo</label>
                      <label for="file" style="border:solid 1px #242424;width:100%;padding:10px">Upload Photo</label>
                      <input type="file" class="form-control" id="file" style="display:none">
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
