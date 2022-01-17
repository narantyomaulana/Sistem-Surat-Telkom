<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Surat masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

						  <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Surat Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal masuk" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="waktu" class="col-sm-3 control-label">Waktu</label>
                            <div class="col-sm-3">
                                <input type="time" name="waktu" class="form-control" value="<?=date("h:i:sa")?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Pengirim Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_surat" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerbit Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" class="form-control" id="inputPassword3" placeholder="Inputkan Perihal Surat">
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Tujuan Unit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuansurat" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nama Penerima Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="namapenerima" class="form-control" placeholder="Inputkan Asal Surat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Penerima Surat</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_penerima_surat" class="form-control"  placeholder="Inputkan Tanggal masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Foto Penyerahan</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="file" name="file">
                            </div>
                        </div>

                       
						

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=s_masukk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    // $no_surat   = $_POST['no_surat'];
	$asal_surat = $_POST['asal_surat'];
    $tglmasuk   = $_POST['tgl_masuk'];
    $waktu = $_POST['waktu'];
	// $penerima   = $_POST['penerbit'];
    $perihal    = $_POST['perihal'];
    $tujuansurat = $_POST['tujuansurat'];
    $namapenerima =$_POST['namapenerima'];
    $tgl_penerima_surat =$_POST['tgl_penerima_surat'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['file']['name'];
    $ukuran = $_FILES['file']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    //buat sql
        if(!in_array($ext,$ekstensi) ) {
            echo "<script>alert('Simpan Data Gagal');<script>";
        }else{
            if($ukuran < 1044070){		
                $xx = $rand.'_'.$filename;
		        move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$rand.'_'.$filename);
                $sql="INSERT INTO tb_suratmasuk VALUES ('','$no_surat','$asal_surat','$tglmasuk','$waktu','$penerbit','$perihal','$tujuansurat','$namapenerima','$tgl_penerima_surat','$xx')";
                $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Surat Error");
                if ($query){
                    echo "<script>window.location.assign('?page=s_masuk&actions=tampil');</script>";
                }else{
                    echo "<script>alert('Simpan Data Gagal');<script>";
                }
                
            }else{
                echo "<script>alert('File terlalu besar max 10MB');<script>";
            }
        }
    }

?>
