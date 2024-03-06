<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="cplController">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Unsur</label>
                        <div class="input-group">
                            <select class="form-control" ng-model="model.unsur_id">
                                <option ng-repeat="item in datas.unsur" value="{{item.id}}">{{item.unsur}}</option>
                            </select>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unsur"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control" id="kode" ng-model="model.kode">
                    </div>
                    <div class="form-group">
                        <label>CPL</label>
                        <textarea class="form-control" rows="3" ng-model="model.cpl"></textarea>
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
                                <th>Unsur</th>
                                <th>Kode</th>
                                <th>CPL</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas.cpl">
                                <td>{{item.unsur}}</td>
                                <td>{{item.kode}}</td>
                                <td>{{item.cpl}}</td>
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
    <!-- Modal -->
    <div class="modal fade" id="unsur" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Unsur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form ng-submit="tambahUnsur(itemUnsur)">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Unsur</label>
                            <input type="text" class="form-control" ng-model="itemUnsur.unsur">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>