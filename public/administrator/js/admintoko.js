    var notif = 0;
    function ambilNotif(){
        $.ajax({
            url: "getNotif",
            dataType:'json',
            success: function(response){
               var a = $("#jumlah").text(""+response.length+"");
                if (parseInt(response.length)  != 0) {
                    $('#chatAudio')[0].play();
                    console.log('play');
                }
                var timer = setTimeout("ambilNotif()",10000);
                console.log(response.length);
                notif   = response.length;
            }
        });
    }
    function alertnotif(){
        if (notif > 0 ){
            swal({
                    title: "Order",
                    text: "Anda memiliki order barang",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#009900",
                    confirmButtonText: "Lihat order barang",
                    closeOnConfirm: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        document.location.href = 'notiforder'
                    } else {

                    }
                });
        }
    }


        function chart(){
            $.ajax({
                url: "getDataPenjualan",
                dataType:'json',
                success: function(response){
                    var datapenjualan = response.qty;
                    console.log('chart'+response.length);
                }
            });
        }
        $(document).ready(function(){
            ambilNotif();
            alertnotif();
            //chart();
        });

        $("#konfirmasi").on("click", function (event) {
            event.preventDefault();
            swal({
                    title: "Konfirmasi ?",
                    text: "Pastikan anda telah menginput no resi dan mencetak bukti transaksi",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#28a745",
                    confirmButtonText: "Ya, Lanjutkan!",
                    cancelButtonText: "No, Batalkan!",
                    closeOnConfirm: false,
                    closeOnCancel: false },
                function(isConfirm){
                    if (isConfirm) {
                        $.ajax({
                            url: "konfirmasi-order",
                            type: "post",
                            data: $('#konfrimasiorder').serialize(),
                            beforeSend: function () {
                                swal({title: "Mohon Tunggu", text: "Proses sedang berlangsung", showConfirmButton: false});
                            },
                            success: function (d) {
                                swal({title:"Berhasil Dikonfirmasi!", text:"Order berhasil dikirim ke kontak pelanggan!", type:"success"},
                                    function(isConfirm) {
                                        if (isConfirm) {
                                            document.location.href = '../produk';
                                        } else {

                                        }
                                    }
                                );
                            }
                        });
                    } else {
                        swal("Cancelled", "Berhasil Di Batalkan :)", "error");
                    }
                });

        });

        $("#unkonfirm").on("click", function (event) {
                event.preventDefault();
                $.ajax({
                    url: "unkonfirm-order",
                    type: "post",
                    data: $('#konfrimasiorder').serialize(),
                    beforeSend: function(){
                        swal({title:"Mohon Tunggu", text:"Proses Pembatalan sedang berlangsung", showConfirmButton:false});
                    },
                    success: function (d) {
                        swal({title:"Berhasil Dibatalkan!", text:"Order pembatalan berhasil dikirim ke kontak pelanggan!", type:"success"},
                            function(isConfirm) {
                                if (isConfirm) {
                                    document.location.href = '../list-produk';
                                } else {

                                }
                            }
                        );
                    }
                });
            });

        $("#updatestok").on("submit", function (event) {
            event.preventDefault();
            $.ajax({
                url: "update-stok",
                type: "post",
                data: $('#updatestok').serialize(),
                beforeSend: function(){
                    swal({ title:"Mohon Tunggu", text:"Proses Update sedang berlangsung", showConfirmButton: false});
                },
                success: function (d) {
                    swal({ title:"Berhasil Diupdate!", text:"Stok Produk Berhasil di update", type:"success"},
                        function(isConfirm){
                            if (isConfirm) {
                                document.location.href = '../produk'
                            } else {

                            }
                        });

                },
                error: function(d){
                    sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                }
            });
        });

    $("#updatenama").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "updatenama",
            type: "post",
            data: $('#updatenama').serialize(),
            beforeSend: function(){
                swal({ title:"Mohon Tunggu", text:"Proses Update sedang berlangsung", showConfirmButton: false});
            },
            success: function (d) {
                swal({ title:"Berhasil Diupdate!", text:"Nama Produk Berhasil di update", type:"success"},
                    function(isConfirm){
                        if (isConfirm) {
                            document.location.href = '../produk'
                        } else {

                        }
                    });

            },
            error: function(d){
                sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
            }
        });
    });

        $("#updateharga").on("submit", function (event) {
            event.preventDefault();
            $.ajax({
                url: "update-harga",
                type: "post",
                data: $('#updateharga').serialize(),
                beforeSend: function(){
                    swal({ title:"Mohon Tunggu", text:"Proses Update sedang berlangsung", showConfirmButton: false});
                },
                success: function (d) {
                    swal({ title:"Berhasil Diupdate!", text:"Stok Produk Berhasil di update", type:"success"},
                        function(isConfirm){
                            if (isConfirm) {
                                document.location.href = '../produk'
                            } else {

                            }
                        });

                },
                error: function(d){
                    sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                }
            });
        });

        $("#updateaccount").on("submit", function (event) {
            event.preventDefault();
            if($('#account_pass').val() != $('#account_pass_konfirmasi').val()){
                sweetAlert("Mohon Maaf...", "Password Tidak Sama!", "error");
            }else{
                $.ajax({
                    url: "update-account",
                    type: "post",
                    data: $('#updateaccount').serialize(),
                    beforeSend: function(){
                        swal({ title:"Mohon Tunggu", text:"Proses Update sedang berlangsung", showConfirmButton: false});
                    },
                    success: function (d) {
                        if(d.status == 400){
                            swal({ title:"Mohon Maaf", text:"Password Lama Tidak Sesuai", showConfirmButton: true});
                        }else{
                            swal({ title:"Berhasil Diupdate!", text:"Password Toko Berhasil di update", type:"success"},
                                function(isConfirm){
                                    if (isConfirm) {
                                        document.location.href = 'logout'
                                    } else {

                                    }
                                });
                        }
                    },
                    error: function(d){
                        sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                    }
                });
            }

        });

        $("#createstoks").on("submit", function (event) {
                event.preventDefault();
                $.ajax({
                    url: "create-size",
                    type: "post",
                    data: $('#createstoks').serialize(),
                    beforeSend: function(){
                        swal({ title:"Mohon Tunggu", text:"Proses Update sedang berlangsung", showConfirmButton: false});
                    },
                    success: function (d) {
                        swal({ title:"Berhasil!", text:"Stok Produk Berhasil di tambah", type:"success"},
                            function(isConfirm){
                                if (isConfirm) {
                                    location.reload();
                                } else {

                                }
                            });

                    },
                    error: function(d){
                        sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                    }
                });
        });

        $("#savedeskripsi").on("click", function (event) {
                    event.preventDefault();
                    $.ajax({
                        url: "edit-deskripsi",
                        type: "post",
                        data:{_token:$('#tokenedit').val(), id_produk:$('#id_produks').val(), deskripsi:$('.click2edit').code()},
                        beforeSend: function(){
                            swal({ title:"Mohon Tunggu", text:"Proses Update sedang berlangsung", showConfirmButton: false});
                        },
                        success: function (d) {
                            swal({ title:"Berhasil!", text:"Stok Produk Berhasil di tambah", type:"success"},
                                function(isConfirm){
                                    if (isConfirm) {
                                        location.reload();
                                    } else {

                                    }
                                });

                        },
                        error: function(d){
                            sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                        }
                });
        });
