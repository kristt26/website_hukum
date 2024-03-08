<?= $this->extend('admin/layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="beritaController">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Daftar Berita</h5>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table datatable="ng" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Icon</th>
                                <th width="5%">Publish</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.judul}}</td>
                                <td>{{item.tanggal}}</td>
                                <td>
                                    <a href="<?= base_url() ?>/assets/berkas/berita/{{item.gambar}}" data-lightbox="photos">{{item.gambar}}</a>
                                </td>
                                <td>
                                    <a href="<?= base_url() ?>/assets/berkas/berita/{{item.gambar}}" data-lightbox="photos">{{item.icon}}</a>
                                </td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch{{$index+1}}" ng-model="item.publish" ng-change="ubah(item)">
                                        <label class="custom-control-label" for="customSwitch{{$index+1}}"></label>
                                    </div>
                                </td>
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
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form ng-submit="save()">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Berita" ng-model="model.judul">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="simple-date1" ng-model="model.tanggal">
                                    <label for="simpleDataInput">Tanggal Berita</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" ng-model="model.tanggal" id="simpleDataInput">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto Berita <sup style="color: red;">Ukuran File Gambar 1000px x 322px</sup></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" accept="image/*" ng-model="model.berkas" base-sixty-four-input>
                                        <label class="custom-file-label" for="customFile">{{model.berkas ? model.berkas.filename : model.gambar ? model.gambar :  'Pilih Gambar'}}</label>
                                    </div>
                                    <img ng-show="model.id && !model.berkas" class="img-fluid" style="border: 5px solid #555" ng-src="<?= base_url() ?>/assets/berkas/berita/{{model.gambar}}" width="30%">
                                    <img ng-show="model.berkas" class="img-fluid" style="border: 5px solid #555" data-ng-src="data:{{model.berkas.filetype}};base64,{{model.berkas.base64}}" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto Icon <sup style="color: red;">Ukuran File Gambar 348px x 261px</sup> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" accept="image/*" ng-model="model.berkas1" base-sixty-four-input>
                                        <label class="custom-file-label" for="customFile">{{model.berkas1 ? model.berkas1.filename : model.icon ? model.icon :  'Pilih icon'}}</label>
                                    </div>
                                    <img ng-show="model.id && !model.berkas1" class="img-fluid" style="border: 5px solid #555" ng-src="<?= base_url() ?>/assets/berkas/berita/{{model.icon}}" width="30%">
                                    <img ng-show="model.berkas1" class="img-fluid" style="border: 5px solid #555" data-ng-src="data:{{model.berkas1.filetype}};base64,{{model.berkas1.base64}}" width="30%">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Isi Berita</label>
                            <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" ng-model="model.isi" rows="4"></textarea>
                            <!-- <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul icon" ng-model="model.judul"> -->
                        </div>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>