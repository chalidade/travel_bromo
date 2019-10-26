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
              <h3 class="box-title">Data Booking</h3>
            </div>

                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Package Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Person</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Leader Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Phone Number</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Total Payment</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        include "proses/koneksi.php";
                        $no = 1;
                        $query = mysqli_query($connect, "SELECT * FROM `booking`");
                        while ($booking = mysqli_fetch_array($query)) {
                          $id   = $booking["id"];
                      ?>
                      <tr role="row" class="odd">
                      <td class=""><?php echo $no;$no++; ?></td>
                      <td class=""><?php echo $booking["name"]; ?></td>
                      <td class=""><?php echo $booking["person"]; ?> Person</td>
                      <td class=""><?php echo $booking["leader"]; ?></td>
                      <td class=""><?php echo $booking["phone"]; ?></td>
                      <td class="sorting_1">Rp <?php echo $booking["payment"]; ?></td>
                      <td class="">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default<?php echo $id; ?>">View</button>
                        <div class="modal fade" id="modal-default<?php echo $id; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Detail Bookint</h4>
                            </div>
                            <div class="modal-body" style="padding:40px">
                              <div class="row">
                                <div class="col-md-3">
                                  <b>Kode Booking</b>
                                </div>
                                <div class="col-md-9">
                                  <?php echo rand(10,100);?>
                                </div>
                                <div class="col-md-3">
                                  <b>Pakage Name</b>
                                </div>
                                <div class="col-md-9">
                                  <?php echo $booking["name"]; ?>
                                </div>
                                <div class="col-md-3">
                                  <b>Person</b>
                                </div>
                                <div class="col-md-9">
                                  <?php echo $booking["person"]; ?> Person
                                </div>
                                <div class="col-md-3">
                                <b>  Leader Name</b>
                                </div>
                                <div class="col-md-9">
                                  <?php echo $booking["leader"]; ?>
                                </div>
                                <div class="col-md-3">
                                  <b>Phone Number</b>
                                </div>
                                <div class="col-md-9">
                                  <?php echo $booking["phone"]; ?>
                                </div><div class="col-md-3">
                                  <b>Payment</b>
                                </div>
                                <div class="col-md-9">
                                  Rp <?php echo $booking["payment"]; ?>
                                </div>
                                <div class="col-md-3">
                                  <b>Description</b>
                                </div>
                                <div class="col-md-9">
                                  <?php echo $booking["description"]; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                        <button type="button" class="btn btn-primary" name="button"> Edit</button>
                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="proses/delete.php?data=booking&id=<?php echo $booking['id']; ?>&page=data_booking" type="button" class="btn btn-danger" name="button">Delete</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              <!-- /.box -->
            </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
