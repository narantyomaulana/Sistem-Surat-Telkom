<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body>
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Surat Masuk Telkom Witel Yogyakarta </h2>
                        <h4>Jl.Kota Baru Yogyakarta <br>Kota Yogyakarta, DIY, 55224</h4>
                        <hr>
                        <h3>DATA SELURUH SURAT MASUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                                <th>No.</th>
                              <!--   <th>Nomor Surat</th> -->
                                <th>Pengirim Surat</th>
                                <th>Tanggal Masuk</th>
                                <th>Waktu</th>
                                <th>Nama Penerima</th>
                                <th>Tanggal Penerima</th>
                                <th>Perihal</th>
                                <th>Tujuan Unit</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_suratmasuk";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<!-- <td><?= $data['no_surat'] ?></td> -->
                                    <td><?= $data['asal_surat'] ?></td>
									<td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['waktu'] ?></td>
									<td><?= $data['namapenerima'] ?></td>
                                    <td><?= $data['tgl_penerima_surat'] ?></td>
									<td><?= $data['perihal'] ?></td>
                                    <td><?= $data['tujuansurat'] ?></td>
                                </tr>
                                <br>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <!-- <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Faras Wahyuddin Sirait<strong></u><br>
                                        NIM.17220155
									</td>
								</tr>
							</tfoot>  -->
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>

<script type="text/javascript">
    window.print();

</script>