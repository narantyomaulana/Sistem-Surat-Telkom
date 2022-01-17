<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_suratmasuk WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat Masuk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                   <!--  <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_surat" value="<?=$data['no_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div> -->

						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Pengirim Surat</label>
                            <div class="col-sm-5">
                                <input type="text" name="asal_surat" value="<?=$data['asal_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Asal Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="waktu" class="col-sm-3 control-label">Waktu</label>
                            <div class="col-sm-3">
                                <input type="time" name="waktu"  value="<?=$data['waktu']?>" class="form-control"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-5">
                                <input type="text" name="perihal" value="<?=$data['perihal']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Perihal Surat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Tujuan Unit</label>
                            <div class="col-sm-5">
                                <input type="text" name="tujuansurat" value="<?=$data['tujuansurat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tujuan Unit">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="namapenerima" class="col-sm-3 control-label">Nama Penerima Surat</label>
                            <div class="col-sm-5">
                                <input type="text" name="namapenerima" value="<?=$data['namapenerima']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Penerima Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_penerima_surat" class="col-sm-3 control-label">Tanggal Penerima Surat</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_penerima_surat" value="<?=$data['tgl_penerima_surat']?>" class="form-control" placeholder="Inputkan Tanggal Penerima Surat" required>
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
                                    <span class="fa fa-edit"></span> Update Data Surat Masuk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=s_masuk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat Masuk
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
    $waktu   = $_POST['waktu'];
	$namapenerima   = $_POST['namapenerima'];
    $tgl_penerima_surat   = $_POST['tgl_penerima_surat'];
    $perihal    = $_POST['perihal'];
    $tujuansurat    = $_POST['tujuansurat'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['file']['name'];
    $ukuran = $_FILES['file']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //buat sql
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$rand.'_'.$filename);
    $sql="UPDATE tb_suratmasuk SET no_surat='$no_surat',asal_surat='$asal_surat',tgl_masuk='$tglmasuk', waktu='$waktu', namapenerima='$namapenerima',tgl_penerima_surat='$tgl_penerima_surat', perihal ='$perihal',tujuansurat='$tujuansurat',file = '$xx' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=s_masuk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



