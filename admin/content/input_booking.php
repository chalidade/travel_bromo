<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Booking Menu
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
                  <h3 class="box-title">Input New Booking</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="proses/route.php?page=input_booking" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="action" value="save">
                  <input type="hidden" name="table" value="booking">
                  <input type="hidden" name="data[]" value="">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Package Name</label>
                      <input type="text" class="form-control"  name="data[]" id="name" placeholder="Package Name ..">
                    </div>
                    <div class="form-group">
                      <label for="address">Person</label>
                      <input type="text" class="form-control" name="data[]" id="address" placeholder="Person ..">
                    </div>
                    <div class="form-group">
                      <label for="leader">Leader Name</label>
                      <input type="text" class="form-control" name="data[]" id="leader" placeholder="Leader Name ..">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="number" class="form-control" name="data[]" id="phone" placeholder="Phone Number ..">
                    </div>
                    <div class="form-group">
                      <label for="payment">Total Paymen</label>
                      <input type="number" class="form-control" name="data[]" id="payment" placeholder="Paymen Total ..">
                    </div>
                    <div class="form-group">
                      <label>Booking Description</label>
                      <textarea class="form-control" rows="4" name="data[]" placeholder="Booking Description .."></textarea>
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
