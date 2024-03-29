<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php base_url();?>/assets/img/logo-dark-min.png" rel="icon">
    <link href="<?php base_url();?>/assets/img/logo-dark-min.png" rel="apple-touch-icon">

    <title>CMS Baznas Bazis DKI Jakarta</title>

    <!-- Custom fonts for this template -->
    <link href="<?php base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php base_url(); ?>/assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?php base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php base_url(); ?>/assets/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>/assets/css/datepicker.min.css" rel="stylesheet"/>

    <script src="<?php base_url(); ?>/assets/js/demo/tinymce-demo.min.js"></script>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar -->
        <?php $this->load->view('partials/sidebar'); ?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- navbar -->
                <?php $this->load->view('partials/navbar'); ?>

                <!-- content -->
                <?= @$content; ?>
            </div>
            <!-- End of Main Content -->

            <!-- footer -->
            <?php $this->load->view('partials/footer'); ?>

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- logout-modal -->
    <?php $this->load->view('partials/logout-modal'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php base_url(); ?>/assets/js/demo/datatables-demo.js"></script>

    <!-- TinyMCE -->
    <script>
        function example_image_upload_handler (blobInfo, success, failure) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCrendentials = false;
            xhr.open('POST', "<?php echo base_url('article/upload')?>");

            xhr.onload = function () {
                var json;
                if (xhr.status != 200) {
                    failure('Http Error:' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: '+xhr.responseText);
                    return;
                }

                success(json.location);
            }

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        }

        tinymce.init({
            selector: '.tinymce',
            plugins: 'image link media table wordcount lists',
            toolbar: 'undo redo | styles | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image media',
            paste_as_text: true,
            file_picker_types: 'file image media',
            images_upload_url: '<?php echo base_url()?>article/upload',
            image_upload_handler: example_image_upload_handler,
            relative_urls: false,
            remove_script_host: false,
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function () {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { alt: file.name });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            },
        });

        function example_image_upload_handler_about (blobInfo, success, failure) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCrendentials = false;
            xhr.open('POST', "<?php echo base_url('about/upload')?>");

            xhr.onload = function () {
                var json;
                if (xhr.status != 200) {
                    failure('Http Error:' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: '+xhr.responseText);
                    return;
                }

                success(json.location);
            }

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        }
        
        tinymce.init({
            selector: '.tinymceabout',
            plugins: 'image link media table wordcount lists',
            toolbar: 'undo redo | styles | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image media',
            paste_as_text: true,
            file_picker_types: 'file image media',
            images_upload_url: '<?php echo base_url()?>about/upload',
            image_upload_handler: example_image_upload_handler_about,
            relative_urls: false,
            remove_script_host: false,
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function () {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { alt: file.name });
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            },
        });
    </script>
    <!-- Swal -->
    <script src="<?php base_url(); ?>/assets/js/demo/swal-demo.min.js"></script>
    <!-- flash -->
    <?php if($this->session->flashdata('flashSimpan')){ ?>
        <script type="text/javascript">
            swal("Sukses!", "<?php echo $this->session->flashdata('flashSimpan'); ?>", "success");
        </script>
    <?php } else if($this->session->flashdata('flashUpdate')) {
    ?>
        <script type="text/javascript">
            swal("Sukses!", "<?php echo $this->session->flashdata('flashUpdate'); ?>", "success");            
        </script>
    <?php } else if($this->session->flashdata('flashHapus')) {
    ?>
        <script type="text/javascript">
            swal("Sukses!", "<?php echo $this->session->flashdata('flashHapus'); ?>", "success");
        </script>
    <?php } else if($this->session->flashdata('flashGagal')){
    ?>
        <script type="text/javascript">
            swal("Error!", "<?php echo $this->session->flashdata('flashGagal'); ?>", "error");
        </script>
    <?php } ?>
    <script src="<?php base_url(); ?>/assets/js/demo/select2-demo.min.js"></script>
    <script src="<?php base_url(); ?>/assets/js/demo/datepicker.min.js"></script>
    <script type="text/javascript">
        function searchMenu() {
            let data = document.querySelector('#search_menu').value;
            if (data.match(/article/g)||data.match(/artikel/g)) {
                window.location.href='article';
            } else if (data.match(/dashboar/g)||data.match(/home/g)) {
                window.location.href='dashboard';
            } else if (data.match(/tentang/g)||data.match(/about/g)) {
                window.location.href='about';
            } else if (data.match(/zakat/g)) {
                window.location.href='zakat';
            } else if (data.match(/hubungi/g)||data.match(/contact/g)) {
                window.location.href='contact';
            } else if (data.match(/banner/g)) {
                window.location.href='banner';
            } else if (data.match(/headline/g)) {
                window.location.href='headline';
            } else if (data.match(/mitra/g)||data.match(/kerjasama/g)) {
                window.location.href='collaboration';
            } else if (data.match(/divisi/g)||data.match(/division/g)||data.match(/unit/g)) {
                window.location.href='division';
            } else if (data.match(/transaksi/g)||data.match(/transaction/g)||data.match(/zakat/g)) {
                window.location.href='transaction';
            } else if (data.match(/rekening/g)||data.match(/bank/g)) {
                window.location.href='bank';
            } else if (data.match(/program/g)) {
                window.location.href='program';
            } else if (data.match(/category/g)||data.match(/berita/g)||data.match(/news/g)||data.match(/kategori/g)) {
                window.location.href='category';
            } else if (data.match(/galeri/g)||data.match(/gallery/g)) {
                window.location.href='gallery';
            } else if (data.match(/publikasi/g)||data.match(/publication/g)) {
                window.location.href='publication';
            } else if (data.match(/laporan/g)||data.match(/report/g)) {
                window.location.href='report';
            } else if (data.match(/donatur/g)||data.match(/mustahik/g)||data.match(/muzakki/g)||data.match(/user/g)) {
                window.location.href='user';
            } else if (data.match(/role/g)||data.match(/bagian/g)||data.match(/peran/g)) {
                window.location.href='role';
            } else if (data.match(/admin/g)) {
                window.location.href='admin';
            } else {
                alert('Silahkan masukkan menu yang tersedia');
            }
        }

        function hapus(url){
            swal({
                title: "Anda yakin menghapus data ini?",
                text: "Data akan terhapus dari database",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    location = url;
                    swal("Data berhasil dihapus!", {
                    icon: "success",
                    });
                }
            });
        }
        $(".article").select2();
        $(".js-example-basic-multiple").select2({
            ajax: {
                url: "<?php base_url()?>/api/artikel",
                dataType: 'json',
                delay: 250,
                // data: function (params) {
                //     return {
                //         q: params.term, 
                //         page: params.page
                //     };
                // },
                processResults: function (data) {
                    return {
                        results: data.items
                    };
                },
            },
        });
        // Data Picker Initialization
        $('.datepicker').datepicker();

        $(document).ready(function(){
            function jumfoto() {
                let jum = $("#jum_foto").val();
                document.querySelector(".foto").innerHTML = "";
                console.log(jum);
                for (let index = 0; index < jum; index++) {
                    document.querySelector(".foto").innerHTML += "<div class='form-group'>"+
                    "<input type='hidden' id='old_content_gallery' name=old_content_gallery[]'"+
                    "value='' class='form-control'>"+
                    "<img src='' alt='' width='100'>"+
                    "</div>"+
                    "<div class='form-group'>"+
                    "<label for='content_gallery'>Foto</label>"+
                    "<input type='file' id='content_gallery' name='content_gallery[]' class='form-control'>"+
                    "</div>";
                }
            }
            $("#jum_foto").change(function(){
                jumfoto();
            });
        });
    </script>
</body>
</html>
<?php die;?>