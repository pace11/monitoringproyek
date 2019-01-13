<section class="content-header">
    <h1>Input 1</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Input</a></li>
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
                                <h3 class="box-title">Data Table Input 1</h3>
                            </div>
                            <div class="pull-right">
                                <a href="?page=input1tambah" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah Data</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="table1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NODIN USER</th>
                                            <th>TANGGAL</th>
                                            <th>URAIAN</th>
                                            <th>NILAI RAB</th>
                                            <th>NODIN REN</th>
                                            <th>TANGGAL REN</th>
                                            <th>SUMBER ANGGARAN</th>
                                            <th>NILAI HPE</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_input1");
                                            while($data = mysqli_fetch_array($query)) { ?>
                                                <tr>
                                                    <td><?= $data['nodin_user'] ?></td>
                                                    <td><?= $data['tanggal_user'] ?></td>
                                                    <td><?= $data['uraian'] ?></td>
                                                    <td><?= $data['nilai_rab'] ?></td>
                                                    <td><?= $data['nodin_ren'] ?></td>
                                                    <td><?= $data['tanggal_ren'] ?></td>
                                                    <td><?= $data['sumber_anggaran'] ?></td>
                                                    <td><?= $data['nilai_hpe'] ?></td>
                                                    <td>
                                                    <a href="?page=inpit1edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="?page=inpit1edit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                    </td>
                                                </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>