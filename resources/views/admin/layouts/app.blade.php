<!DOCTYPE html>

<html lang="en"
    dir="ltr">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="title" content="" />
    <meta name="description"
        content="{{ $site_settings['meta_description_en']}}" />
    <meta name="keywords"
        content="{{ $site_settings['meta_keyword_en'] }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ $site_settings->favicon }}" />

    <!--begin::Fonts-->


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->


    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style-ltr.bundle.css') }}"
        rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- ajax -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- end ajax -->


  
    {{-- text editor --}}

{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="https://cdn.tiny.cloud/1/zv4xtgpoxlxchlqnp9a9in90cdrfirjia4zetjdw9q5tvi3e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
     tinymce.init({
       selector: 'textarea#editor', });
</script>

    {{-- end text editor --}}
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            {{-- Sidebar --}}
            @include('admin.includes.sidebar')

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include('admin.includes.header')

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    @yield('toolbar')
                    <!--end::Toolbar-->
                    <div class="container">
                        @yield('content')
                    </div>



                    @include('admin.includes.footer')

                </div>
                <!--end::Wrapper-->

            </div>
            <!--end::Page-->

        </div>
        <!--end::Root-->

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('admin/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('admin/js/image-uploader.min.js') }}"></script>

    <!--end::Page Custom Javascript-->

    <!--end::Javascript-->
    @yield('script')

    <!-- my scripts> -->
    <script>
        $(document).ready(function() {
            // var id = $( "#sel_cat" ).val();

            $('#sel_cat').change(function() {

                $('#sel_product').empty();

                var id = $("#sel_cat").val();
                console.log(id);
                $.ajax({
                    url: '/admin/catProduct/' + id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {

                        var len = 0;
                        if (response['data'] != null) {
                            len = response['data'].length;
                        }
                        if (len > 0) {
                            // Read data and create <option >
                            for (var i = 0; i < len; i++) {
                                var id = response['data'][i].id;
                                var name = response['data'][i].name_en;
                                var option = "<option value='" + id + "'>" + name + "</option>";
                                $("#sel_product").append(option);
                                //  $('#sub').append(sub);
                            }
                        }
                    }
                }); //end ajax
            }); //end on change
            // image preview
            $(".image").change(function() {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.image-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            }); // end of image preview

            // favicon preview
            $(".favicon").change(function() {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.favicon-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            }); // end of favicon preview
            // logo preview
            $(".logo").change(function() {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.logo-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            }); // end of logo preview
            // image 1 preview
            $(".aboutimage1").change(function() {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.aboutimage1-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            }); // end of image1 preview
            // image 2 preview
            $(".aboutimage2").change(function() {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.aboutimage2-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            }); // end of image2 preview
            // team preview
            $(".team").change(function() {

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.team-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            }); // end of image2 preview



        });
    </script>
    <!-- end my scripts -->



   {{-- text editor --}}
<script>
    // Initialize TinyMCE
    tinymce.init({
        selector: '#editor',
        height: 300,
        menubar: false,
        plugins: 'lists link image code',
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
        setup: function (editor) {
            editor.on('change', function () {
                editor.save(); // Automatically save changes to the textarea
            });
        }
    });

    // Handle submit button click
    document.getElementById('submit').addEventListener('click', function() {
        const content = tinymce.get('editor').getContent();
        console.log(content); // Handle the content as needed
    });
</script>
{{--end text editor --}}


</body>
<!--end::Body-->

</html>
