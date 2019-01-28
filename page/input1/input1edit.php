<section class="content-header">
    <h1 <i class="fa fa-plus-star"></i>INPUT DIREKSI PEKERJAAN</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<?php 
    $getdata = mysqli_query($conn, "SELECT * FROM tbl_input4 WHERE nomer_pjn_spj='$_GET[id]'") or die (mysqli_error($conn));
    $data    = mysqli_fetch_array($getdata);

?>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit Data</h3>
                        </div>
                        <form action="?page=input1editpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor PJN/SPJ</label>    
                                        <input type="text" class="form-control" name="nomer_pjn_spj" placeholder="Masukan Nomor PJN/SPJ" value="<?= $data['nomer_pjn_spj'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>    
                                        <input type="date" class="form-control" name="tanggal_awal" placeholder="Masukan Tanggal Awal" value="<?= $data['tanggal_awal'] ?>" required>
                                    </div>
                                </div>  
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>    
                                        <input type="date" class="form-control" name="tanggal_akhir" placeholder="Masukan Tanggal Akhir" value="<?= $data['tanggal_akhir'] ?>" required>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label>Pengawas</label>    
                                        <input type="text" class="form-control" name="pengawas" placeholder="Masukan nama pengawas" value="<?= $data['pengawas'] ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Pekerjaan</label> 
                                        <label>Jenis Pekerjaan</label>
                                        <select class="form-control" name="jenis_pekerjaan">
                                        <option value="" value="<?= $data['jenis_pekerjaan'] ?>" style="display:none;">-- pilih salah satu --</option>
                                        <option>SKTM</option>
                                        <option>Sipil</option>
                                        </select>
                                    </div>
                                </div>      
                            </div>
                        </div>

                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <input type="submit" name="submit" class="btn btn-danger" value = "Batal">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>