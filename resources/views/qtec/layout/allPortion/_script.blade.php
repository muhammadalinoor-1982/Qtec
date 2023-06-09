<!-- Global Vendor, plugins & Activation JS -->
<script src="{{asset('public/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('public/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('public/assets/js/vendor/bootstrap.min.js')}}"></script>
<!--toastr Js-->
<script src="{{asset('public/assets/js/toastr.min.js')}}"></script>
<script src="{{asset('public/assets/js/vendor/bootstrap.min.js')}}"></script>
<!--Plugins JS-->
<script src="{{asset('public/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/tippy4.min.js.js')}}"></script>
<!--Main JS-->
<script src="{{asset('public/assets/js/main.js')}}"></script>

{{--Exportable data table--}}
<script src="{{asset('public/assets/js/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/datatables/datatables.active.js')}}"></script>

<!-- Date Range Picker -->
<script src="{{asset('public/assets/js/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/daterangepicker/daterangepicker.active.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/inputmask/bootstrap-inputmask.js')}}"></script>

<!--Echarts-->
<script src="{{asset('public/assets/js/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/chartjs/chartjs.active.js')}}"></script>

<!--VMap-->
<script src="{{asset('public/assets/js/plugins/vmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/vmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/vmap/vmap.active.js')}}"></script>
<!--summer note-->
<script src="{{asset('public/assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/summernote/summernote.active.js')}}"></script>
<!--File Upload-->
<script src="{{asset('public/assets/js/plugins/filepond/filepond.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/filepond/filepond.active.js')}}"></script>
<!-- Select Plugins & Activation JS -->
<script src="{{asset('public/assets/js/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/select2/select2.active.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/nice-select/niceSelect.active.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/bootstrap-select/bootstrapSelect.active.js')}}"></script>
<!-- text area summer note JS -->
<script src="{{asset('public/assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/summernote/summernote.active.js')}}"></script>
<!-- dropify JS -->
<script src="{{asset('public/assets/js/plugins/dropify/dropify.min.js')}}"></script>
<script src="{{asset('public/assets/js/plugins/dropify/dropify.active.js')}}"></script>
<script>$('.dropify').dropify();</script>

{{--start Toastr--}}
<script>
        @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
{{--End Toastr--}}

{{--start multiple image previow upload--}}
<script type="text/javascript">
    function previewImages() {

        var preview = document.querySelector('#preview');

        if (this.files) {
            [].forEach.call(this.files, readAndPreview);
        }

        function readAndPreview(file) {

            // Make sure `file.name` matches our extensions criteria
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            } // else...

            var reader = new FileReader();

            reader.addEventListener("load", function() {
                var image = new Image();
                image.height = 100;
                image.title  = file.name;
                image.src    = this.result;
                preview.appendChild(image);
            });

            reader.readAsDataURL(file);

        }

    }

    document.querySelector('#file-input').addEventListener("change", previewImages);
</script>
{{--end multiple image previow upload--}}

{{--Start Ttextarea area Editor--}}
<script>
    $('.summernote').summernote({
        height: 250,
    });
</script>
{{--End Ttextarea area Editor--}}

{{--Start Date Range Picker--}}
<script>
    $('.input-date').daterangepicker();
</script>
{{--End Date Range Picker--}}
@stack('footer')


