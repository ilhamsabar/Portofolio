<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<title>{{\App\Model\Option::getOneDataBytype('nama_travel','nama','nama travel')}} - CUSTOMER SERVICE</title>--}}
    {{--<link rel="shourcut icon" href="{{asset('admin/assets/images/ABUCORP.png')}}">--}}

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/dataTables-1107.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    {{--<link href="{{asset('abucorp/css/abucorp.css')}}" rel="stylesheet" type="text/css">--}}

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Datatables  files -->
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>

    {{--Notif--}}
    <link href="{{ asset('admin/assets/css/sweetalert.css') }}" type="text/css" rel="stylesheet" />
    <script src="{{ asset('admin/assets/js/sweetalert.min.js') }}" type="text/javascript"></script>

    {{--format rupiah--}}
    <script src="{{ asset('abucorp/vendor/lib/js/jquery.maskMoney.js') }}" type="text/javascript"></script>
    <script src="{{ asset('abucorp/vendor/lib/js/numeral.min.js') }}"></script>

    <!-- /theme JS files -->
    <script type="text/javascript" src="{{asset('admin/assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    {{--Theme JS files datetime--}}
    <script type="text/javascript" src="{{asset('admin/assets/js/core/libraries/jquery_ui/datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/pickers/pickadate/picker.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_input_groups.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/form_select2.js')}}"></script>

    <!-- summernote -->
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/pages/editor_summernote.js')}}"></script>
    <!-- /summernote -->

    <script type="text/javascript">
        $(document).ready(function() {

            // SELECT SEARCH
            $(".select-search").select2();

            // FORMAT DATE TIME
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'DD-MM-YYYY'
                },
                singleDatePicker: true,
                showDropdowns: true
            }).val("");

            // CAPSLOCK ALPHABET
            $('.capslock').keyup(function () {
                $(this).val($(this).val().toUpperCase());
            });

            // DONT CAPSLOCK ALPHABET
            $('.noncapslock').keypress(function(e) {
                var s = String.fromCharCode( e.which );
                if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
                    return false;
                }
            });

            // FILTER ALPHABET ONLY
            $(".alphaonly").keypress(function (e){
                var code =e.keyCode || e.which;
                if((code<65 || code>90)
                    &&(code<97 || code>122)&&code!=32&&code!=46)
                {
                    return false;
                }
            });

            // FILTER NUMBER ONLY
            $(".numberonly").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });


        $(function (){
            var i = 1;
            $(document).on('click', '.btn-add', function (e)
            {
                e.preventDefault();
                i++;
                console.log(i);
                var controlForm = $('.controls'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="icon-cross"></i>');
            }).on('click', '.btn-remove', function (e)
            {
                $(this).parents('.entry:first').remove();
                i--;
                e.preventDefault();
                return false;
            });
        });
    </script>

</head>