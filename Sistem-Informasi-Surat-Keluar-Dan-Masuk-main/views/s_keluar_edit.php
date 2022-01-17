<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_suratkeluar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_surat" value="<?=$data['no_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_keluar" value="<?=$data['tgl_keluar']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal keluar" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Tujuan Unit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuansurat" value="<?=$data['tujuansurat']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Tujuan Unit" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" value="<?=$data['perihal']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Perihal Surat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="namapenerima" value="<?=$data['namapenerima']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                      
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Surat Keluar</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=s_keluar&actions=tampil" class="btn btn-danger btn-sm">
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
    $no_surat   = $_POST['no_surat'];
	$asal_surat = $_POST['asal_surat'];
    $tujuansurat = $_POST['tujuansurat'];
    $tglkeluar   = $_POST['tgl_keluar'];
	$penerbit  = $_POST['penerbit'];
    $perihal    = $_POST['perihal'];
    $namapenerima = $_POST['namapenerima'];
    //buat sql
    $sql="UPDATE tb_suratkeluar SET no_surat='$no_surat',asal_surat='$asal_surat',tujuansurat = '$tujuansurat',tgl_keluar='$tglkeluar',penerbit='$penerbit',perihal='$perihal',namapenerima ='$namapenerima' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=s_keluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



