<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="lulusanController">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Profile</label>
                        <input type="text" class="form-control" id="profile" ng-model="model.profile">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control form-control-sm" ng-model="model.desc" rows="2"></textarea>
                        <!-- <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Gambar" ng-model="model.judul"> -->
                    </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <input type="text" class="form-control" id="icon" ng-model="model.icon">
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
                                <th>Profile Lulusan</th>
                                <th>Deskripsi</th>
                                <th>Icon</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.profile}}</td>
                                <td>{{item.desc}}</td>
                                <td ng-bind-html="item.icon | trustAsHTML"></td>
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