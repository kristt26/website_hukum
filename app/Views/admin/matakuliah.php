<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="kurikulumController">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Jenis Matakuliah</label>
                        <div class="input-group">
                            <select class="form-control" ng-options="item as item.jenis for item in datas.jenis" ng-model="jenis" ng-change="model.jenis=jenis.jenis; model.jenis_id=jenis.id">
                            </select>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jenis"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kurikulum</label>
                        <div class="input-group">
                            <select class="form-control" ng-options="item as item.kurikulum for item in datas.kurikulum" ng-model="kurikulum" ng-change="model.kurikulum=kurikulum.kurikulum; model.kurikulum_id=kurikulum.id">
                            </select>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kurikulum"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control" id="kode" ng-model="model.kode">
                    </div>
                    <div class="form-group">
                        <label>Matakuliah</label>
                        <input type="text" class="form-control" id="matakuliah" ng-model="model.matakuliah">
                    </div>
                    <div class="form-group">
                        <label>SKS</label>
                        <input type="text" class="form-control" id="sks" ng-model="model.sks">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5>Daftar Slide</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table datatable="ng" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Jenis</th>
                                <th>Kode</th>
                                <th>Matakuliah</th>
                                <th>SKS</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas.matakuliah">
                                <td>{{item.jenis}}</td>
                                <td>{{item.kode}}</td>
                                <td>{{item.matakuliah}}</td>
                                <td>{{item.sks}}</td>
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
    <div class="modal fade" id="jenis" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jenis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form ng-submit="tambahJenis(itemJenis)">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Matakuliah</label>
                            <input type="text" class="form-control" ng-model="itemJenis.jenis">
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
    <div class="modal fade" id="kurikulum" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kurikulum</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form ng-submit="tambahKurikulum(itemKurikulum)">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kurikulum</label>
                            <input type="text" class="form-control" ng-model="itemKurikulum.kurikulum">
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