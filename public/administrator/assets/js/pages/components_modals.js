/* ------------------------------------------------------------------------------
 *
 *  # Modal dialogs and extensions
 *
 *  Specific JS code additions for components_modals.html page
 *
 *  Version: 1.0
 *  Latest update: Aug 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function () {


    // Bootbox extension
    // ------------------------------

    // Alert dialog
    $('#alert').on('click', function () {
        bootbox.alert("Native alert dialog has been replaced with Bootbox alert box.");
    });

    // Confirmation dialog
    $('#confirm').on('click', function () {
        bootbox.confirm("Native confirm dialog has been replaced with Bootbox confirm box.", function (result) {
            bootbox.alert("Confirm result: " + result)
        });
    });

    // Prompt dialog
    $('#prompt').on('click', function () {
        bootbox.prompt("Please enter your name", function (result) {
            if (result === null) {
                bootbox.alert("Prompt dismissed");
            } else {
                bootbox.alert("Hi <b>" + result + "</b>");
            }
        });
    });



    // Modal callbacks
    // ------------------------------

    // onShow callback
    $('#onshow_callback').on('click', function () {
        $('#modal_default').on('show.bs.modal', function () {
            alert('onShow callback fired.')
        });
    });

    // onShown callback
    $('#onshown_callback').on('click', function () {
        $('#modal_form_vertical').on('shown.bs.modal', function () {
            alert('onShown callback fired.')
        });
    });

    // onHide callback
    $('#onhide_callback').on('click', function () {
        $('#modal_subtitle').on('hide.bs.modal', function () {
            alert('onHide callback fired.')
        });
    });

    // onHidden callback
    $('#onhidden_callback').on('click', function () {
        $('#modal_theme_success').on('hidden.bs.modal', function () {
            alert('onHidden callback fired.')
        });
    });

    // onLoaded callback
    $('#onloaded_callback').on('click', function () {
        $('#modal_remote').on('loaded.bs.modal', function () {
            alert('onLoaded callback fired.')
        });
    });



    // Sweet Alert extension
    // ------------------------------

    // Basic
    $('#sweet_basic').on('click', function () {
        swal({
            title: "Here's a message!",
            confirmButtonColor: "#2196F3"
        });
    });

    // With title
    $('#sweet_title_text').on('click', function () {
        swal({
            title: "Here's a message!",
            text: "It's pretty, isn't it?",
            confirmButtonColor: "#2196F3"
        });
    });

    // Auto closing
    $('#sweet_auto_closer').on('click', function () {
        swal({
            title: "Auto close alert!",
            text: "I will close in 2 seconds.",
            confirmButtonColor: "#2196F3",
            timer: 2000
        });
    });


    //
    // Contextual alerts
    //

    // Success alert
    $('#sweet_success').on('click', function () {
        swal({
            title: "Sukses!",
            text: "",
            confirmButtonColor: "#66BB6A",
            type: "success"
        });
    });

    // Error alert
    $('#sweet_error').on('click', function () {
        swal({
            title: "Oops...",
            text: "Something went wrong!",
            confirmButtonColor: "#EF5350",
            type: "error"
        });
    });

    // Warning alert
    $('#sweet_warning').on('click', function () {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, delete it!"
        });
    });

    // Info alert
    $('#sweet_info').on('click', function () {
        swal({
            title: "Apakah anda yakin, Ingin keluar?",
            text: "",
            confirmButtonColor: "#2196F3",
            type: "info"
        });
    });

    // Alert combination
    $('#sweet_combine').on('click', function () {
        swal({
            title: "Apakah Anda Yakin?",
            text: "Anda akan menghapus / menghilangkan produk ini!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Ya, setuju!",
            cancelButtonText: "Tidak, batalkan!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
                function (isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: "Terhapus!",
                            text: "Produk anda telah terhapus!",
                            confirmButtonColor: "#66BB6A",
                            type: "success"
                        });
                    } else {
                        swal({
                            title: "Dibatalkan",
                            text: "Produk tidak terhapus :)",
                            confirmButtonColor: "#2196F3",
                            type: "error"
                        });
                    }
                });
    });


    // delete account admin
    $('#account-administrator').on('click', function () {
        swal({
            title: "Apakah Anda Yakin?",
            text: "Anda akan menghapus akun ini!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            closeOnConfirm: false,
            closeOnCancel: false
        },
                function (isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: "Terhapus!",
                            text: "",
                            confirmButtonColor: "#66BB6A",
                            type: "success"
                        });
                    } else {
                        swal({
                            title: "Dibatalkan",
                            text: "",
                            confirmButtonColor: "#2196F3",
                            type: "error"
                        });
                    }
                });
    });

});
