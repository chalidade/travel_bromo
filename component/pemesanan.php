<div style="margin-top:550px;z-index:999;">
  <div class="row">
    <div class="col s3"></div>
    <div class="col s6 white" style="border-radius:20px;box-shadow: 0px 5px 12px #c0c0c03d;">
      <div class="row" style="padding:20px;font-size:12px;font-weight:800;margin-bottom: 0px;">
        <form class="" action="form_pemesanan.php" method="post">
        <div class="col s3">
          DESTINATION
          <input type="text" name="destination" class="modal-trigger" href="#destination" style="width:90%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;" value="Bromo Mountain">
        </div>
        <div class="col s3">
          TRAVELERS
          <input type="text" class="modal-trigger" href="#traveler" style="width:90%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;" value="2 Person">
        </div>
        <div class="col s3">
          DURATION
          <input type="text" id="durationform" name="duration" class="modal-trigger" href="#duration" style="width:90%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;" value="1 Day">
        </div>
        <div class="col s3">
        <br>
          <input type="submit" name="duration" value="Let's Go" style="margin-top:10px;text-align:center;margin-top:5px;background:#42a5f5 ;color:#fff;border-radius:20px;font-size:10px;height: 30px;border: none;width:100%">
        </div>
      </form>
      </div>
    </div>
    <div class="col s3"></div>
  </div>
</div>

  <!-- Modal Structure -->
  <div id="traveler" class="modal" style="display: inline-table;">
    <div class="modal-content" style="padding:20px;padding-left: 40px;padding-right: 40px;padding-top: 30px;">
      <h6 style="font-weight:800">TRAVELERS</h6>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Find Your Destinaton" type="text" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;" class="autocomplete">
          </div>
        <div class="col s6">
          <div class="" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 40px;border: none;">
            <div class="row">
              <div class="col s2">
                <i class="material-icons" style="color:#242424;font-size:24px;margin-top:5px">person</i>
              </div>
              <div class="col s6" style="text-align:left">
                <p style="font-weight:800;margin-top:3px">Adult<br>
                  <font style="font-size:8px;font-weight:100px;color:#d4d4d4">(Age 12 and over)</font></p>
              </div>
              <div class="col s4">

              </div>
            </div>
          </div>
         </div>
        <div class="col s6">
          <div class="" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 40px;border: none;">
            <div class="row">
              <div class="col s2">
                <i class="material-icons" style="color:#242424;font-size:24px;margin-top:5px">child_care</i>
              </div>
              <div class="col s6" style="text-align:left">
                <p style="font-weight:800;margin-top:3px">Child<br>
                  <font style="font-size:8px;font-weight:100px;color:#d4d4d4">(Age 2 - 10)</font></p>
              </div>
              <div class="col s4">

              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col s12">
        <center>
          <input type="submit" name="duration" value="Done" style="margin-top:20px;text-align:center;background:#42a5f5 ;color:#fff;border-radius:20px;font-size:10px;height: 30px;border: none;width:30%">
        </center>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Modal Structure -->
  <div id="destination" class="modal" style="display: inline-table;">
    <div class="modal-content" style="padding:20px;padding-left: 40px;padding-right: 40px;padding-top: 30px;">
      <h6 style="font-weight:800">DESTINATION</h6>
      <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Find Your Destinaton" type="text" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;" class="autocomplete">
          </div>
          <div class="col s12" style="margin-top:-20px">
            <p style="font-weight:800;font-size:12px;">Choose More Destinaton</p>
          </div>
          <div class="row" >
            <div class="col s4" style="margin-top:10px;">
              <div class="destination_bg" style="background:url('img/gunung_bromo2.jpg');width: 100%;height: 110px;border-radius: 20px;background-size: cover;">
                  <p style="margin:0px;padding-top:60px;padding-left:10px;color:#fff;font-size:12px;font-weight:800">Bromo Mountain<br>
                    <i class="material-icons" style="color:orange;font-size:9px;">star</i>
                    <font style="font-size:10px;margin-right:5px">4.5</font>
                  </p>
              </div>
            </div>
            <div class="col s4" style="margin-top:15px;">
              <div class="destination_bg" style="background:url('img/rafting.jpg');width: 100%;height: 110px;border-radius: 20px;background-size: cover;">
                <p style="margin:0px;padding-top:60px;padding-left:10px;color:#fff;font-size:12px;font-weight:800">Rafting<br>
                  <i class="material-icons" style="color:orange;font-size:9px;">star</i>
                  <font style="font-size:10px;margin-right:5px">4.5</font>
                </p>
              </div>
            </div>
            <div class="col s4" style="margin-top:15px;">
              <div class="destination_bg" style="background:url('img/gili_ketapang.jpg');width: 100%;height: 110px;border-radius: 20px;background-size: cover;">
                <p style="margin:0px;padding-top:60px;padding-left:10px;color:#fff;font-size:12px;font-weight:800">Gili Ketapang<br>
                  <i class="material-icons" style="color:orange;font-size:9px;">star</i>
                  <font style="font-size:10px;margin-right:5px">4.5</font>
                </p>
              </div>
            </div>

            <div class="col s4" style="margin-top:15px;">
              <div class="destination_bg" style="background:url('img/madakaripura.jpg');width: 100%;height: 110px;border-radius: 20px;background-size: cover;">
                <p style="margin:0px;padding-top:60px;padding-left:10px;color:#fff;font-size:12px;font-weight:800">Madakaripura Waterfall<br>
                  <i class="material-icons" style="color:orange;font-size:9px;">star</i>
                  <font style="font-size:10px;margin-right:5px">4.5</font>
                </p>
              </div>
            </div>
            <div class="col s4" style="margin-top:15px;">
              <div class="destination_bg" style="background:url('img/ranu_agung.jpg');width: 100%;height: 110px;border-radius: 20px;background-size: cover;">
                <p style="margin:0px;padding-top:60px;padding-left:10px;color:#fff;font-size:12px;font-weight:800">Ranu Agung<br>
                  <i class="material-icons" style="color:orange;font-size:9px;">star</i>
                  <font style="font-size:10px;margin-right:5px">4.5</font>
                </p>
              </div>
            </div>
            <div class="col s4" style="margin-top:15px;">
              <div class="destination_bg" style="background:url('img/gunung_bromo.png');width: 100%;height: 110px;border-radius: 20px;background-size: cover;">
                <p style="margin:0px;padding-top:60px;padding-left:10px;color:#fff;font-size:12px;font-weight:800">Bromo Mountain<br>
                  <i class="material-icons" style="color:orange;font-size:9px;">star</i>
                  <font style="font-size:10px;margin-right:5px">4.5</font>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>


  <!-- Modal Structure -->
  <div id="duration" class="modal" style="display: inline-table;">
    <div class="modal-content" style="padding:20px;padding-left: 40px;padding-right: 40px;padding-top: 30px;height:450px">
      <h6 style="font-weight:800">TRAVELERS</h6>
        <div class="row">
          <div class="input-field col s12">
            <input type="text" id="daterange" name="daterange" placeholder="Select Date" style="width:95%;margin-top:5px;background:#f5f5f5;border-radius:20px; padding-left:20px;font-size:10px;height: 30px;border: none;"/>
          </div>
        </div>
    </div>
</div>
