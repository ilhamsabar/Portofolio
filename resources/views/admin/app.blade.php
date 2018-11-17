<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('admin.lib.header')

<body class="bg-dash">

@include('admin.lib.navbar')

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

    @include('admin.lib.sidebar')

    <!-- Main content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

    <!-- Footer -->
    <div class="footer text-muted">
        &copy; 2017. <a href="#">ABUCORP Customer Service</a> by <a href="http://abucorp.com" target="_blank">IT Dept.</a>
    </div>
    <!-- /footer -->

</div>
<script type="text/javascript" src="{{ asset('admin/assets/js/dropdown.js') }}"></script>
<script>
    $(document.body).on('click', '.js-submit-confirm', function (event) {
        event.preventDefault();
        var $form = $(this).closest('form');
        swal({
                title: "Are you sure..?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                confirmButtonText: "Yes",
                closeOnConfirm: true
            },
            function () {
                $form.submit();
            });
    });
</script>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
<script>
            @if (\Illuminate\Support\Facades\App::environment("development"))
        <?php $appid = "f9cfac6f-dfad-462f-b55d-de09dfcaa072"; ?>
            @else
        <?php $appid = "99fc826e-496b-4b3f-a5ef-f0f4b53b9955"; ?>
            @endif
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
        appId: "{{$appid}}",
        autoRegister: true, /* Set to true to automatically prompt visitors */
        notifyButton: {
            enable: true /* Set to false to hide */
        },
        notificationClickHandlerAction: 'origin'
    }]);
    OneSignal.push(function () {
        OneSignal.sendTags({
            'role': 'cs',
            {{--'kode_kantor' : "{{auth('cs')->user()->kd_kantor}}"--}}
        });
    });
</script>
</body>

</html>