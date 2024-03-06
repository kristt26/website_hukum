<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="tentangController">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Tentang</h5>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table datatable="ng" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sejarah</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th width="10%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td ng-bind-html="item.sejarah | trustAsHTML"></td>
                                <td ng-bind-html="item.visi | trustAsHTML"></td>
                                <td ng-bind-html="item.misi | trustAsHTML"></td>
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
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form ng-submit="save()">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Sejarah</label>
                            <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" id="sejarah" ng-model="model.sejarah" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" ng-model="model.visi" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" ng-model="model.misi" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>