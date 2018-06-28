
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">
    		
            <form action="" method="POST">
                <table width="700px;">
                    <tr>
                        <td>Nama Mapel</td>
                        <td>:</td>
                        <td style="padding-left:50px;"><input type="text" name="nama_mapel" value="<?php ambilNamaMapel($connect, $id) ?>"></td>
                    </tr>

                    <tr>
                        <td style="padding-top:30px;">Deskripsi</td>
                        <td style="padding-top:30px;">:</td>
                        <td style="padding-left:50px; padding-top:30px;"><textarea name="deskripsi" rows="4" cols="50"><?php ambilDeskripsi($connect, $id); ?></textarea></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td style="padding-left: 50px;"><input type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
       </div>

    </section>