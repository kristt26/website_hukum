angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('sliderController', sliderController)
    .controller('galeriController', galeriController)
    .controller('beritaController', beritaController)
    .controller('kerjasamaController', kerjasamaController)
    .controller('prodiController', prodiController)
    .controller('pengumumanController', pengumumanController)
    .controller('videoController', videoController)
    .controller('pengajarController', pengajarController)
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
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            slideServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }

    $scope.subKlasifikasi = (param) => {
        document.location.href = helperServices.url + "admin/sub_klasifikasi/data/" + param.id;
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

function prodiController($scope, prodiServices, pesan, helperServices) {
    $scope.setTitle = "Prodi";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight alignleft aligncenter alignright | numlist bullist indent outdent | emoticons charmap | removeformat | code'
    };
    prodiServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                prodiServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                prodiServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param) => {
        prodiServices.put(param).then(res => {
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
            prodiServices.deleted(param).then(res => {
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

function pengajarController($scope, pengajarServices, prodiServices, pesan, helperServices) {
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
    pengajarServices.get().then((res) => {
        $scope.datas = res;
    })
    prodiServices.get().then((res)=>{
        $scope.prodi = res;
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

