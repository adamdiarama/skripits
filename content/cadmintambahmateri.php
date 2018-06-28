
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">
    		
            <form action="" method="POST" enctype="multipart/form-data">
                <table width="700px;">
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>:</td>
                        <td style="padding-left:50px;">
                            <select class="form-control" style="width:250px;" name="pelajaran">
                                <?php ambilMapel($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px;">Judul Materi</td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-top:30px; padding-left:50px;"><input type="text" name="judul_materi" value="<?php ambilNamaMateri($connect) ?>"></td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px;">Deskripsi</td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-left:50px; padding-top:30px;"><textarea name="deskripsi" rows="4" cols="50"><?php ambilDeskripsi($connect); ?></textarea></td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px;">Modul</td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-left:50px; padding-top:30px;"><input type="file" id="file" name="file"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td style="padding-top:30px; padding-left: 50px;"><input type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
       </div>

    </section>