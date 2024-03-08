<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="kegiatanController">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Kegiatan</label>
                        <input type="text" class="form-control" id="kegiatan" ng-model="model.kegiatan">
                    </div>
                    <div class="form-group" id="simple-date1" ng-model="model.tanggal">
                        <label for="simpleDataInput">Tanggal</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" ng-model="model.tanggal" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" ng-model="model.desc" rows="2"></textarea>
                        <!-- <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Gambar" ng-model="model.judul"> -->
                    </div>
                    <div class="form-group">
                        <label>File <sup style="color: red;">Ukuran File Gambar 1000px x 322px</sup></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" accept="image/*" ng-model="model.berkas" base-sixty-four-input>
                            <label class="custom-file-label" for="customFile">{{model.berkas ? model.berkas.filename : model.foto ? model.foto :  'Pilih Gambar'}}</label>
                        </div>
                        <img ng-show="model.id && !model.berkas" class="img-fluid" style="border: 5px solid #555" ng-src="<?= base_url() ?>/assets/berkas/akademik/{{model.foto}}" width="30%">
                        <img ng-show="model.berkas" class="img-fluid" style="border: 5px solid #555" data-ng-src="data:{{model.berkas.filetype}};base64,{{model.berkas.base64}}" width="30%">
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
                                <th>Kegiatan</th>
                                <th>Tanggal</th>
                                <!-- <th>Desc</th> -->
                                <th>Foto</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.kegiatan}}</td>
                                <td>{{item.tanggal}}</td>
                                <!-- <td ng-bind-html="item.desc | trustAsHTML"></td> -->
                                <td><a href="assets/berkas/akademik/{{item.foto}}">{{item.foto}}</a></td>
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