
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px; height:500px; width:800px; background-color:#ffffff; border:1px solid #c2c4c6;">
            
            <form action="" method="POST" enctype="multipart/form-data">
                <table width="700px;">
                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Mata Pelajaran</label></td>
                        <td style="padding-top:50px; padding-left:50px;"></td>
                        <td style="padding-left:50px; padding-top:50px;">
                            <select class="form-control" style="width:250px;" name="pelajaran">
                                <?php ambilMapel($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Materi</label></td>
                        <td style="padding-top:50px; padding-left:50px;">:</td>
                        <td style="padding-top:50px; padding-left:50px;">
                            <select class="form-control" style="width:250px;" name="materi">
                                <?php ambilMateri($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:50px; padding-left:50px;"><label>Judul</label></td>
                        <td style="padding-top:50px; padding-left:50px;">:</td>
                        <td style="padding-left:50px; padding-top:50px;"><input type="text" class="form-control" name="judul" value="<?php ambilJudul($connect, $id) ?>"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td style="padding-top:50px; padding-left: 250px;"><input type="submit" class="btn btn-block btn-success" style='width:70px;' name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
       </div>

    </section>