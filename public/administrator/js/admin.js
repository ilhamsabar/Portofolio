    var notif = 0;
    var order = 0;
    var cek = false;
    // notif order baru
    function getNotif(){
        $.ajax({
            url: "getNotif",
            dataType:'json',
            success: function(response){
                $("#jumlah").text(""+response.length+"");
                // var a = $("#jumlah").text(""+response.length+"");
                $("#order").empty();
                if (cek == false){
                    if (parseInt(response.length)  != 0) {
                        $('#chatAudio')[0].play();
                        console.log('play');
                        cek = true;
                    }
                }
                // $("#jumlah").text(""+response.length+"");
                // $("#order").empty();
                // for (i = 0; i < response.length; i++) {
                //     $("#order").append("<li class='media'><div class='media-body'><a href='order/view-detail/"+response[i].id_transaksi+"' class='media-heading'><span class='text-semibold'>" +response[i].no_invoice+"</span><span class='media-annotation pull-right'>" +response[i].tgl_transaksi+ "</span></a> </div> </li>");         
                // }
                if(response.length>=1){
                    $("#order").append("<span class='label label-info'>"+response.length+"</span>");                   
                }
                var timer = setTimeout("getNotif()",10000);
                console.log(response.length);
                notif   = response.length;
            }
        });
    }

    function getOrder(){
        $.ajax({
            url: "getOrder",
            dataType:'json',
            success: function(response){
                $("#jumlahx").text(""+response.length+"");
                // var a = $("#jumlahx").text(""+response.length+"");
                $("#orderx").empty();
                if (cek == false){
                    if (parseInt(response.length)  != 0) {
                        $('#chatAudio')[0].play();
                        console.log('play');
                        cek = true;
                    }
                }
                // $("#orderx").empty();
                // for (i = 0; i < response.length; i++) {
                //     $("#orderx").append("<li class='media'><div class='media-body'><a href='pembayaran/view-konfirmasi-pembayaran/"+response[i].id_transaksi+"' class='media-heading'><span class='text-semibold'>" +response[i].no_invoice+ "</span><span class='media-annotation pull-right'>04:58</span></a> </div> </li>");         
                // }
                if(response.length>=1){
                    $("#orderx").append("<span class='label label-danger'>"+response.length+"</span>");                   
                }
                var timer = setTimeout("getOrder()",10000);
                console.log(response.length);
                order   = response.length;
            }
        });
    }

    function getKomentar(){
        $.ajax({
            url: "getKomentar",
            dataType:'json',
            success: function(response){
                $("#komentar").text(""+response.length+"");
                $("#komentarx").empty();
                for (i = 0; i < response.length; i++) {
                    $("#komentarx").append("<li class='media'><div class='media-body'><a href='komentar' class='media-heading'><span class='text-semibold'>" +response[i].nama_pelanggan+ "</span></a> <span class='text-muted'>" +response[i].judul_review+ "</span> </div> </li>");         
                }
                var timer = setTimeout("getKomentar()",10000);
                console.log(response.length);
                order   = response.length;
            }
        });
    }

    // function alertnotif(){
    //     if (notif > 0 ){
    //         swal({
    //                 title: "Order",
    //                 text: "Anda memiliki order barang",
    //                 type: "info",
    //                 showCancelButton: true,
    //                 confirmButtonColor: "#009900",
    //                 confirmButtonText: "Lihat order barang",
    //                 closeOnConfirm: false
    //             },
    //             function(isConfirm){
    //                 if (isConfirm) {
    //                     document.location.href = 'notiforder'
    //                 } else {

    //                 }
    //             });
    //     }
    // }
    
    // notif order baru
    function getPengiriman(){
        $.ajax({
            url: "getPengiriman",
            dataType:'json',
            success: function(response){
                $("#jumlah").text(""+response.length+""); 
                $("#pengiriman").empty();
                if (cek == false){
                    if (parseInt(response.length)  != 0) {
                        $('#chatAudio')[0].play();
                        console.log('play');
                        cek = true;
                    }
                } 
                if(response.length>=1){
                    $("#pengiriman").append("<span class='label label-info'>"+response.length+"</span>");                   
                }
                var timer = setTimeout("getPengiriman()",10000);
                console.log(response.length);
                notif   = response.length;
            }
        });
    }

    $(document).ready(function(){
        getOrder();
        getNotif();
        getKomentar();
        getPengiriman();
        // alertnotif(); 
    });

 

   
