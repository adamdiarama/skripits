
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:50px; margin-left:100px; height:500px; width:900px; background-color:white; border:1px solid #c2c4c6;">
    		
            <form action="" method="POST" enctype="multipart/form-data">
                <table width="700px;">
                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Mata Pelajaran</label></td>
                        <td></td>
                        <td style="padding-left:50px; padding-top:50px;">
                            <select class="form-control" style="width:250px;" name="pelajaran">
                                <?php ambilMapel($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Judul Materi</label></td>
                        <td style="padding-top:50px; padding-left:50px;"></td>
                        <td style="padding-top:50px; padding-left:50px;"><input type="text" class="form-control" name="judul_materi" value="<?php ambilNamaMateri($connect) ?>"></td>
                    </tr>

                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Deskripsi</label></td>
                        <td style="padding-top:50px; padding-left:50px;"></td>
                        <td style="padding-left:50px; padding-top:50px;"><textarea name="deskripsi" class="form-control" rows="4" cols="50"><?php ambilDeskripsi($connect); ?></textarea></td>
                    </tr>

                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Modul</label></td>
                        <td style="padding-top:50px; padding-left:50px;"></td>
                        <td style="padding-left:50px; padding-top:50px;"><input type="file" id="file" name="file"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td style="padding-top:50px; padding-left: 350px;"><input type="submit" class="btn btn-block btn-success" style="width:70px;" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
       </div>

    </section>