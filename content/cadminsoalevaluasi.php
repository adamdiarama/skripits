
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">
       <div style="height:100px; width:800px; background-color:#ffffff; border:1px solid #c2c4c6;">
        <label style="padding-top:15px; padding-left:20px;">Mata Pelajaran</label> : <?php ambilPelajaran($connect, $id); ?> <br/>
         <label style="padding-left:20px;">Materi</label> : <?php ambilMateri($connect, $id); ?> <br/>
         <label style="padding-left:20px;">Judul</label> : <?php ambilJudul($connect, $id); ?> <br/><br/> 
       </div>
       
       <div style="padding-top:50px;">
          <div class="box" style="width:900px;">
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>No</th>
                      <th>Soal</th>
                      <th>Aksi</th>
                    </tr>
                    <?php ambilSoalEvaluasi($connect, $id) ?>  
                  </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>  
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
                    <?php ambilSoalEvaluasi($connect, $id) ?>
                </tbody>
            </table> -->

            <a href="admin_tambah_soal_evaluasi.php?lat=<?php echo $id; ?>"><button>Tambah</button></a>
       </div>

    </section>