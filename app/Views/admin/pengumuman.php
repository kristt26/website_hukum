<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="pengumumanController">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Gambar" ng-model="model.judul">
                    </div>
                    <div class="form-group" id="simple-date1">
                        <label for="simpleDataInput">Tanggal Pengumuman</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" ng-model="model.tanggal_mulai" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date1">
                        <label for="simpleDataInput">Tanggal Selesai</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" ng-model="model.tanggal_selesai" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Isi Pengumuman</label>
                        <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" ng-model="model.isi" rows="2"></textarea>
                        <!-- <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Gambar" ng-model="model.judul"> -->
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h5>Daftar Slide</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table datatable="ng" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Judul Pengumuman</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.judul}}</td>
                                <td>{{item.tanggal_mulai}}</td>
                                <td>{{item.tanggal_selesai}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" ng-click="edit(item)"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" ng-click="delete(item)"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>