<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT PENGAWAS </h1>
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
                            <div class="pull-left">
                                <h3 class="box-title">Form Pengisian Pengawas</h3>
                            </div>
                        </div>
                        <div class="box-body">
                                        
                            <form action="?page=input1tambahpro" method="post" enctype="multipart/form-data">
                                        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nomor PJN/SPJ</label>    
                                            <select id="nopjn" class="form-control">
                                            <option style="display:none;">-- pilih salah satu --</option>
                                            <?php 
                                            $noPjn = mysqli_query($conn, "SELECT * FROM tbl_input4");
                                            while($getnoPjn = mysqli_fetch_array($noPjn)){
                                                echo "<option value='".$getnoPjn['nomer_pjn_spj']."'>".$getnoPjn['nomer_pjn_spj']."</option>";
                                            } 
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">   
                                            <label>Jenis Pekerjaan</label>
                                            <input type="text" id="jenispekerjaan" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8" id="tblsktm">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Uraian</th>
                                                <th>Harga</th>
                                                <th>Bobot</th>
                                                <th>Hari Kerja</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>PEKERJAAN GALIAN</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>PERBAIKAN BEKAS GALIAN</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>PEKERJAAN BORING</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>PENARIKAN DAN PENYAMBUNGAN</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>MATERIAL PELENGKAP</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>PEKERJAAN LAIN-LAIN</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>PENGADAAN MATERIAL</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>PEKERJAAN ANGKUTAN</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-8" id="tblsipil">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Uraian</th>
                                                <th>Harga</th>
                                                <th>Bobot</th>
                                                <th>Hari Kerja</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Masak Siomay</td>
                                                <td>
                                                    <input type="text" class="form-control" name="harga">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="bobot">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="hari_kerja">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

function autofill(){
      var kks = $ ("#kks").val();
      $.ajax({
        url : 'autofill-ajax.php',
        data : 'kks='+kks,
      }).done (function(data){
        var json = data;
        var obj = JSON.parse(json);
        $("#eq").val(obj.eq);
        $("#boboteq").val(obj.boboteq);
        $("#noeq").val(obj.noeq);
      });
    }

</script>