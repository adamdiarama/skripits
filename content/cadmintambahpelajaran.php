
    <!-- Main content -->
    <section class="content">

            <div style="height:350px; width:900px; background-color:#ffffff; margin-top:50px; margin-left:100px; border:1px solid #c2c4c6;">
                <form action="" method="POST">
                    <table width="700px;" style="margin-left:50px;">
                        <tr>
                            <td style="padding-top:50px;"><label>Nama Mapel</label></td>
                            <td style="padding-top:50px;"></td>
                            <td style="padding-left:50px; padding-top:50px;"><input type="text" class='form-control' name="nama_mapel" value="<?php ambilNamaMapel($connect, $id) ?>"></td>
                        </tr>

                        <tr>
                            <td style="padding-top:30px;"><label>Deskripsi</label></td>
                            <td style="padding-top:30px;">:</td>
                            <td style="padding-left:50px; padding-top:30px;"><textarea name="deskripsi" class='form-control' rows="4"><?php ambilDeskripsi($connect, $id); ?></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td style="padding-left: 550px; padding-top:50px;"><input type="submit" class='btn btn-block btn-success' name="submit" value="submit"></td>
                        </tr>
                    </table>
                </form>    
            </div>
    		

    </section>