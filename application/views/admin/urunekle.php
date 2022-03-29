<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url(); ?>assets/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?php echo base_url(); ?>assets/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="<?php echo base_url(); ?>" class="brand-logo">
                        <img alt="Logo" src="<?php echo base_url(); ?>img/logo1.png" />
                    </a>
                    <!--end::Logo-->

                    <!--end::Logo-->

                    <?php $this->load->view('templates/garsonnav.php'); ?>

                    <!--begin::Container-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="col-xl-2">
                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="card card-custom">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Menüye Ürün Ekle
                                    </h3>
                                </div>
                                <!--begin::Form-->
                                <form action="<?php echo base_url("Admin/urunekle"); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Ürün Adı <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="ürün adı" name="ad" />
                                        </div>
                                        <div class="form-group">
                                            <label>Ürün Açıklaması <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="ürün kısa açıklaması" name="info" />
                                        </div>
                                        <div class="form-group">
                                            <label>Fiyat <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="fiyat" name="fiyat" />
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto">
                                            <label class="custom-file-label" for="customFile">Fotoğraf</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelect1">Kategori <span class="text-danger">*</span></label>
                                            <select class="form-control" id="exampleSelect1" name="grup_id">
                                                <option value="1">Menü</option>
                                                <option value="2">Yiyecekler</option>
                                                <option value="3">FastFood</option>
                                                <option value="4">Aperatifler</option>
                                                <option value="5">Salata</option>
                                                <option value="6">Atıştırmalık</option>
                                                <option value="7">Tatlı</option>
                                                <option value="8">İçecekler</option>
                                                <option value="9">Kahve</option>
                                               
                                            </select>
                                        </div>

                                    </div>
                                    <div class="card-footer">


                                        <button type="submit" class="btn btn-primary mr-2">Ekle</button>
                                        <button type="reset" class="btn btn-secondary">Vazgeç</button>
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>



                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->

            </div>
        </div>
    </div>
    </div>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?php echo base_url(); ?>assets/plugins.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/prismjs.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo base_url(); ?>assets/students.js"></script>
    <!--end::Page Scripts-->

</body>

</html>