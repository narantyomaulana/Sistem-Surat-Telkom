<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body>
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_suratmasuk WHERE id='" . $_GET ['id'] . "'";
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
                        <h2>Sistem Informasi Surat Masuk Telkom Witel Yogyakarta </h2>
                        <h4>Jl.Kota Baru Yogyakarta<br>Kota Yogyakarta, DIY, 55224</h4>
                        <hr>
                        <h3>Informasi Surat</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>

								<!-- <tr>
                                    <td>Nomor Surat</td> <td><?= $data['no_surat'] ?></td>
                                </tr> -->

                                <tr>
                                    <td width="200">Pengirim Surat</td> <td><?= $data['asal_surat'] ?></td>
                                </tr>

								<tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>

                                <tr>
                                    <td>Waktu</td> <td><?= $data['waktu'] ?></td>
                                </tr>

								<tr>
                                    <td>Nama Penerima</td> <td><?= $data['namapenerima'] ?></td>
                                </tr>

                                 <tr>
                                    <td>Tanggal Penerima</td> <td><?= $data['tgl_penerima_surat'] ?></td>
                                </tr>

								<tr>
                                    <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                                </tr>

                                <tr>
                                    <td>Tujuan Unit</td> <td><?= $data['tujuansurat'] ?></td>
                                </tr>
                            </tbody>
                            <!-- <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Personal<strong></u><br>
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