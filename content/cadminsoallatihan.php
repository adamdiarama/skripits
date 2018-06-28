
    <!-- Main content -->
    <section class="content">
      
       <div style="margin-top:100px; margin-left:100px;">
       Mata Pelajaran : <?php ambilPelajaran($connect, $id); ?> <br/>
       Materi : <?php ambilMateri($connect, $id); ?> <br/>
       Judul : <?php ambilJudul($connect, $id); ?> <br/><br/>


            <table style="width:700px;" border="1">
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
            </table>

            <a href="admin_tambah_soal_latihan.php"><button>Tambah</button></a>
       </div>

    </section>