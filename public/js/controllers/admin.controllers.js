angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('sliderController', sliderController)
    .controller('galeriController', galeriController)
    .controller('beritaController', beritaController)
    .controller('kerjasamaController', kerjasamaController)
    .controller('cplController', cplController)
    .controller('pengumumanController', pengumumanController)
    .controller('tentangController', tentangController)
    .controller('videoController', videoController)
    .controller('pengajarController', pengajarController)
    .controller('kurikulumController', kurikulumController)
    .controller('prestasiController', prestasiController)
    .controller('kegiatanController', kegiatanController)
    .controller('arsipController', arsipController)
    .controller('lulusanController', lulusanController)
    ;

function dashboardController($scope, dashboardServices) {
    $scope.setTitle = "Dashboard";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.paragraph = "Sistem penjurusan menggunakan metode Moora pada SMA .....";
    // dashboardServices.get().then(res=>{
    //     $scope.datas = res;
    // })
}

function sliderController($scope, slideServices, pesan, helperServices) {
    $scope.setTitle = "Slider";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    slideServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                slideServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                slideServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        slideServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
    }
}

function galeriController($scope, galeriServices, pesan, helperServices) {
    $scope.setTitle = "Galery";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    galeriServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                galeriServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                galeriServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        galeriServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            galeriServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function beritaController($scope, beritaServices, pesan, helperServices) {
    $scope.setTitle = "Berita";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        selector: 'textarea#full-featured',
        plugins: 'preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount imagetools noneditable help  charmap  quickbars emoticons',
        tinydrive_token_provider: 'aaa7934ce1766dd9c1afaeff6b70e6092ceb71b5d61d7e215c27f8e8b92af9b4',
        menu: {
            tc: {
                title: 'Comments',
                items: 'addcomment showcomments deleteallconversations'
            }
        },
        menubar: 'file edit view insert format tools table tc help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor  removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
        
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'http://localhost/admin/berita' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
        content_style: '.mymention{ color: gray; }',
        contextmenu: 'link image imagetools table',
        a11y_advanced_options: true,
        /*
        The following settings require more configuration than shown here.
        For information on configuring the plugin, see:
        https://www.tiny.cloud/docs/plugins/premium/.
        */
        
    };
    beritaServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                beritaServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                beritaServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        beritaServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $("#modelId").modal('show');
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            beritaServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function kerjasamaController($scope, kerjasamaServices, pesan, helperServices) {
    $scope.setTitle = "Kerjasama";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    kerjasamaServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                kerjasamaServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                kerjasamaServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        kerjasamaServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            kerjasamaServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function cplController($scope, cplServices, unsurServices, pesan, helperServices) {
    $scope.setTitle = "CPL";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    cplServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                cplServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                cplServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.tambahUnsur = (param)=>{
        unsurServices.post(param).then(res=>{
            $scope.datas.unsur.push(res);
            pesan.Success("Berhasil menambah unsur");
            $("#unsur").modal('hide');
            param = {};
        })
    }

    $scope.ubah = (param) => {
        cplServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $("#modelId").modal('show');
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            cplServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function pengumumanController($scope, pengumumanServices, pesan, helperServices) {
    $scope.setTitle = "Prodi";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight alignleft aligncenter alignright | numlist bullist indent outdent | emoticons charmap | removeformat | code'
    };
    pengumumanServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                pengumumanServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                pengumumanServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        pengumumanServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $("#modelId").modal('show');
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            pengumumanServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function tentangController($scope, tentangServices, pesan, helperServices) {
    $scope.setTitle = "Tentang";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight alignleft aligncenter alignright | numlist bullist indent outdent | emoticons charmap | removeformat | code'
    };
    tentangServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                tentangServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            } else {
                tentangServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        tentangServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $("#tambah").modal('show');
        document.getElementById("sejarah").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            tentangServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function videoController($scope, videoServices, pesan, helperServices) {
    $scope.setTitle = "Video";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    videoServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                videoServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                videoServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        videoServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            videoServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function pengajarController($scope, pengajarServices, pesan, helperServices) {
    $scope.setTitle = "Berita";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        selector: 'textarea#full-featured',
        plugins: 'preview importcss tinydrive searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount imagetools noneditable help  charmap  quickbars emoticons',
        tinydrive_token_provider: 'aaa7934ce1766dd9c1afaeff6b70e6092ceb71b5d61d7e215c27f8e8b92af9b4',
        menu: {
            tc: {
                title: 'Comments',
                items: 'addcomment showcomments deleteallconversations'
            }
        },
        menubar: 'file edit view insert format tools table tc help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor  removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
        
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        importcss_append: true,
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
        content_style: '.mymention{ color: gray; }',
        contextmenu: 'link image imagetools table',
        a11y_advanced_options: true,
        /*
        The following settings require more configuration than shown here.
        For information on configuring the plugin, see:
        https://www.tiny.cloud/docs/plugins/premium/.
        */
        
    };
    pengajarServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                pengajarServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                pengajarServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        pengajarServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $("#modelId").modal('show');
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            pengajarServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function kurikulumController($scope, kurikulumServices, pesan, helperServices) {
    $scope.setTitle = "Prodi";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    kurikulumServices.get().then((res) => {
        $scope.datas = res;
    })

    $scope.tambahJenis = (param)=>{
        kurikulumServices.jenis(param).then(res=>{
            $scope.datas.jenis.push(res);
            pesan.Success("Berhasil menambah jenis");
            $("#jenis").modal('hide');
            $scope.itemJenis = {};
        })
    }

    $scope.tambahKurikulum = (param)=>{
        kurikulumServices.kurikulum(param).then(res=>{
            $scope.datas.kurikulum.push(res);
            pesan.Success("Berhasil menambah kurikulum");
            $("#kurikulum").modal('hide');
            $scope.itemKurikulum = {};
        })
    }
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                kurikulumServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                kurikulumServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        kurikulumServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $scope.jenis = $scope.datas.jenis.find(x=>x.id == item.jenis_id);
        $scope.kurikulum = $scope.datas.kurikulum.find(x=>x.id == item.kurikulum_id);
        // $("#modelId").modal('show');
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            kurikulumServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function prestasiController($scope, prestasiServices, pesan, helperServices) {
    $scope.setTitle = "Prestasi";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight alignleft aligncenter alignright | numlist bullist indent outdent | emoticons charmap | removeformat | code'
    };
    prestasiServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                prestasiServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            } else {
                prestasiServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        prestasiServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        // $("#tambah").modal('show');
        document.getElementById("prestasi").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            prestasiServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function kegiatanController($scope, kegiatanServices, pesan, helperServices) {
    $scope.setTitle = "Kegiatan";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight alignleft aligncenter alignright | numlist bullist indent outdent | emoticons charmap | removeformat | code'
    };
    kegiatanServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                kegiatanServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            } else {
                kegiatanServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        kegiatanServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        // $("#tambah").modal('show');
        document.getElementById("prestasi").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            kegiatanServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function arsipController($scope, arsipServices, pesan, helperServices) {
    $scope.setTitle = "Arsip";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    arsipServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                arsipServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            } else {
                arsipServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $("#tambah").modal('hide');
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        arsipServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        // $("#tambah").modal('show');
        document.getElementById("prestasi").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            arsipServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function lulusanController($scope, lulusanServices, pesan, helperServices) {
    $scope.setTitle = "Profile Lulusan";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    lulusanServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                lulusanServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                lulusanServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        lulusanServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param) => {
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            lulusanServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}


