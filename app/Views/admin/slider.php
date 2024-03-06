<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="sliderController">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <p>Pastikan ukuran gambar 1250px x 591px</p>
            </div>
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Judul Text</label>
                        <input type="text" class="form-control" id="text" ng-model="model.text">
                    </div>
                    <div class="form-group">
                        <label>Desc</label>
                        <input type="text" class="form-control" id="desc" ng-model="model.desc">
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" accept="image/*" ng-model="model.berkas" base-sixty-four-input>
                            <label class="custom-file-label" for="customFile">{{model.berkas ? model.berkas.filename : model.file ? model.file :  'Pilih File'}}</label>
                        </div>
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
                                <th>Judul Text</th>
                                <th>Desc</th>
                                <th>File</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.text}}</td>
                                <td>{{item.desc}}</td>
                                <td><a href="assets/berkas/slider/{{item.file}}">{{item.file}}</a></td>
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