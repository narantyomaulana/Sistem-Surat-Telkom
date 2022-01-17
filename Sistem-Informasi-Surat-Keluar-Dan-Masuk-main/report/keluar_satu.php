<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_suratkeluar WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Pengadilan Negeri Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PEMINJAMAN ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nomor Agenda</td> <td><?= $data['no_surat'] ?></td>
                                </tr>
                               <!--  <tr>
                                    <td>Asal Surat</td> <td><?= $data['asal_surat'] ?></td>
                                </tr> -->
                                <tr>
                                    <td>Tanggal Keluar</td> <td><?= $data['tgl_keluar'] ?></td>
                                </tr>
                                <tr>
                                    <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                                </tr>
								<tr>
                                    <td>Tujuan Unit<td><?= $data['tujuansurat'] ?> hari</td>
                                </tr>

                                <tr>
                                    <td>Keterangan</td> <td><?= $data['namapenerima'] ?> hari</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>

<script type="text/javascript">
    window.print();

</script>
