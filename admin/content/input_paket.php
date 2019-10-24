<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Package Menu
      <!-- <small>New Hotel</small> -->
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="box box-primary" style="padding:10px;">
                <div class="box-header with-border">
                  <h3 class="box-title">Input New Package</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="proses/route.php?page=input_paket" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="action" value="save">
                  <input type="hidden" name="table" value="package">
                  <input type="hidden" name="data[]" value="">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Package Name</label>
                      <input type="text" name="data[]" class="form-control" id="name" placeholder="Package Name ..">
                    </div>
                    <div class="form-group">
                      <label>Package Description</label>
                      <textarea class="form-control" name="data[]" rows="4" placeholder="Package Description .."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="address">Person</label>
                      <input type="text" class="form-control" name="data[]" id="address" placeholder="Max Person ..">
                    </div>
                    <div class="form-group">
                      <label for="phone">Duration</label>
                      <input type="text" class="form-control" name="data[]" id="phone" placeholder="How Long This Trip ..">
                    </div>
                    <div class="form-group">
                      <label for="phone">Price</label>
                      <input type="number" class="form-control" name="data[]" id="phone" placeholder="Package Price ..">
                    </div>
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="hidden" name="data[]" value="">
                      <label for="photo" style="border:solid 1px #242424;width:100%;padding:10px">Upload Photo</label>
                      <input type="file" class="form-control" name="photo" value="" id="photo" style="display:none">
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
