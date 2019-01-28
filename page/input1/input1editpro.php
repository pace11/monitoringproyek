<section class="content-header">
    <h1>INPUT DIREKSI PEKERJAAN</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Beranda</a></li>
    </ol>
</section>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    
                    <div class="card-header">
                        <h4><i class="fa fa-file-alt"></i> Form Edit Data</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <?php
                        
                        if (isset($_POST['submit'])){
                                                        
                            $nomer_pjn_spj    = $_POST['nomer_pjn_spj'];
                            $tanggal_awal     = date("Y-m-d", strtotime($_POST['tanggal_awal']));
                            $tanggal_akhir    = date("Y-m-d", strtotime($_POST['tanggal_akhir']));
                            $pengawas         = $_POST['pengawas'];
                            $jenis_pekerjaan  = $_POST['jenis_pekerjaan'];

                                $input = mysqli_query($conn,"UPDATE tbl_input4 SET
                                        nomer_pjn_spj       = '$nomer_pjn_spj',
                                        tanggal_awal        = '$tanggal_awal',
                                        tanggal_akhir       = '$tanggal_akhir',
                                        pengawas            = '$pengawas',
                                        jenis_pekerjaan     = '$jenis_pekerjaan'                                    
                                        WHERE nomer_pjn_spj = '$nomer_pjn_spj'
                                        ") or die (mysqli_error($conn));
                                                             
                                if ($input){
                                    echo    '<div class="row">'.
                                                '<div class="col-md-12">'.
                                                    '<div class="alert alert-success alert-dismissible">'.
                                                    '<h5><i class="icon fa fa-check"></i> Alert!</h5>'.
                                                    'Data berhasil disimpan.</div>'.
                                                '</div>'.
                                            '</div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=input1'>";
                                }
                            } 
                        ?>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>