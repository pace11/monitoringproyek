<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT DIREKSI PEKERJAAN</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Tambah Data</h3>
                        </div>
                        
                        <form action="?page=input1tambahpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor PJN/SPJ</label>    
                                        <input type="text" class="form-control" name="nomer_pjn_spj" placeholder="Masukan Nomor PJN/SPJ" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>    
                                        <input type="date" class="form-control" name="tanggal_awal" placeholder="Masukan Tanggal Awal" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>    
                                        <input type="date" class="form-control" name="tanggal_akhir" placeholder="Masukan Tanggal Akhir" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label>Pengawas</label>    
                                        <input type="text" class="form-control" name="pengawas" placeholder="Masukan nama pengawas" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">   
                                        <label>Jenis Pekerjaan</label>
                                        <select class="form-control" name="jenis_pekerjaan">
                                        <option value="" style="display:none;">-- pilih salah satu --</option>
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