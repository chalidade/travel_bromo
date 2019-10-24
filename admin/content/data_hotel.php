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
      <div class="col-lg-12 col-xs-12">
        <div class="box box-primary" style="padding:10px;">
            <div class="box-header with-border">
              <h3 class="box-title">Data Hotel</h3>
            </div>

                  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Address</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Phone Number</th>
                      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Option</th>
                    </thead>
                    <tbody>
                      <?php
                        include "proses/koneksi.php";
                        $no = 1;
                        $query = mysqli_query($connect, "SELECT * FROM `hotel`");
                        while ($hotel = mysqli_fetch_array($query)) {
                      ?>
                      <tr role="row" class="odd">
                      <td class=""><?php echo $no;$no++; ?></td>
                      <td class=""><?php echo $hotel["name"]; ?></td>
                      <td class=""><?php echo $hotel["address"]; ?></td>
                      <td class=""><?php echo $hotel["phone"]; ?></td>
                      <td class="">
                        <button type="button" class="btn btn-primary" name="button"> Edit</button>
                        <a href="proses/delete.php?data=hotel&id=<?php echo $hotel['id']; ?>&page=data_hotel" type="button" class="btn btn-danger" name="button">Delete</a>
                      </td>
                    </tr>
                      <?php
                        }
                       ?>
                  </tbody>
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
