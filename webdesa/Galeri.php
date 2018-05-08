<?php require 'header.php'; ?>


  <div class="vendor row">
      <div style="height:100px;width:250px;background:red;float:left">
        <div class="left">
          <div class="profilebox">
            <div class="centerY">
              <h2 style="text-align:center">Hallo Borr.  </h2>
              <h6 style="padding-top:20px;"><span style="color:white;background:lightgrey;padding:5px;border-radius:5px">Online</span></h6>
            </div>
          </div>
          <div class="navigasi">
              <ul>
                <li><a href="index.php">Dashboard</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>
                <li><a href="member.php">Artikel</a><span class="icon"><i class="fa fa-pencil"></i></span></li>
                <li><a href="Galery.php">Galeri</a><span class="icon"><i class="fa fa-photo"></i></span></li>
              </ul>
          </div>
        </div>
      </div>
      <div style="width:calc(100% - 250px);float:left;">
        <div style="padding:5px 25px">
          <div class="row">
            <div style="width:48%;color:white;height:120px;background:pink;position:relative;margin:20px 1%;margin-left:0%;margin-right:2%;float:left;box-sizing:border-box;">
              <div class="centerY">
                <h1 style="text-align:center;">0</h1>
                <h4 style="text-align:center;padding-top:10px;">Pengunjung
                </h4>
              </div>
            </div>
            <div style="width:48%;position:relative;color:white;height:120px;background:pink;margin:20px 1%;float:left;box-sizing:border-box;">
              <div class="centerY">
                <h1 style="text-align:center;">25</h1>
                <h4 style="text-align:center;padding-top:10px;">Projek</h4>
              </div>
            </div>
            <div style="clear:both">

            </div>
          </div>
          <div class="box">
            <h2 style="padding:10px;display:block;border-bottom:1px solid rgba(0, 0, 0, 0.03)">Galeri</h2>
            <div style="position:relative;height:300px;">
              <div class="centerY" align="center">
    <img src="gambar 1.jpg" alt="" style="padding-left:0px; padding-top:35px; width:200px; height:280px;">
    <img src="gambar 2.jpg" alt="" style="padding-left:0px; padding-top:35px; width:200px; height:280px;">
    <img src="gambar 3.jpg" alt="" style="padding-left:0px; padding-top:35px; width:400px; height:280px;">


                <p style="padding:10px;"><br></p>
              </div>
            </div>
          </div>
          <p style="font-size:8pt;opacity:0.3;margin:10px 0;">&copy; Aufa Ariq Amanulloh - <?php echo Date('Y') ?> All Rights Reserved</p>
        </div>
      </div>
  </div>



<?php require 'footer.php'; ?>
