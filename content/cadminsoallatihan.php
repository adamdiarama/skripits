
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">


          <div style="height:100px; width:800px; background-color:#ffffff; border:1px solid #c2c4c6; margin-bottom:50px;">
            <label style="padding-top:15px; padding-left:15px;">Mata Pelajaran</label>&ensp;&ensp; : &ensp;<?php ambilPelajaran($connect, $id); ?> <br/>
             <label style="padding-left:15px;">Materi</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : &ensp;<?php ambilMateri($connect, $id); ?> <br/>
             <label style="padding-left:15px;">Judul</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp; : &ensp;<?php ambilJudul($connect, $id); ?> <br/><br/>         
          </div>        
       


          <div class="box" style="width:900px;">
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Aksi</th>
                  </tr>
                  <?php ambilSoalLatihan($connect, $id);  ?>  
                </tbody></table>
              </div>
              <!-- /.box-body -->
          </div>

            <!-- <table style="width:700px;" border="1">
                <thead>
                    <tr>
                        <td style="padding-left:10px;">No</td>
                        <td style="padding-left:10px;">Soal</td>
                        <td style="padding-left:10px;">Aksi</td>
                    </tr>
                </thead>

                <tbody>
                    <?php ambilSoalLatihan($connect, $id) ?>
                </tbody>
            </table> -->

            <a href="admin_tambah_soal_latihan.php?lat=<?php echo $id; ?>"><button class="btn btn-block btn-success" style="width:100px;">Tambah</button></a>
       </div>

    </section>