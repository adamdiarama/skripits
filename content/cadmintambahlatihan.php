
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
                        <td style="padding-top:30px;">Materi</td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-top:30px; padding-left:50px;">
                            <select class="form-control" style="width:250px;" name="materi">
                                <?php ambilMateri($connect); ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px;">Judul</td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-left:50px; padding-top:30px;"><input type="text" name="judul" value="<?php ambilJudul($connect, $id) ?>"></td>
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