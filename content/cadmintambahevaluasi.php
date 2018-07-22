
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px; height:500px; width:800px; background-color:#ffffff; border:1px solid #c2c4c6;">
            
            <form action="" method="POST" enctype="multipart/form-data">
                <p style="padding-left:50px; padding-top:50px;"><label>Tambah Evaluasi</label></p><br/>
                <table width="700px;">
                    <tr>
                        <td style="padding-left:50px;"><label>Mata Pelajaran</label></td>
                        <td></td>
                        <td style="padding-left:50px;">
                            <select class="form-control" style="width:250px;" name="pelajaran">
                                <?php ambilMapel($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px; padding-left:50px;"><label>Materi</label></td>
                        <td style="padding-top:30px;"></td>
                        <td style="padding-top:30px; padding-left:50px;">
                            <select class="form-control" style="width:250px;" name="materi">
                                <?php ambilMateri($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px; padding-left:50px;"><label>Judul</label></td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-left:50px; padding-top:30px;"><input type="text" name="judul" class="form-control" value="<?php ambilJudul($connect, $id) ?>"></td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px; padding-left:50px;"><label>Waktu (menit)</label></td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-left:50px; padding-top:30px;"><input type="text" class="form-control" name="waktu" value="<?php ambilWaktu($connect, $id) ?>"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td style="padding-top:30px; padding-left: 500px;"><input type="submit" name="submit" style="width:75px;" class="btn btn-block btn-success" value="submit"></td>
                    </tr>
                </table>
            </form>
       </div>

    </section>