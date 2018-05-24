    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('mete[name="_token"]').attr('content')
        }
    })

    // js tambah merek
    $('#frmMerek').on('submit', function (e) {
        e.preventDefault();
        var form = $('#frmMerek');
        var formData = form.serialize();
        var url = form.attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: formData,
            // async   : true,
            // dataType : 'json', 
            success: function (data) {
                console.log(data);
            }
        });
    })

    // js tambah kategori
    $('#frmKategori').on('submit', function (e) {
        e.preventDefault();
        var form = $('#frmKategori');
        var formData = form.serialize();
        var url = form.attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: formData,
            // async   : true,
            // dataType : 'json', 
            success: function (data) {
                console.log(data);
            }
        });
    })

    // js tambah jenis produk
    $('#frmJenisproduk').on('submit', function (e) {
        e.preventDefault();
        var form = $('#frmJenisproduk');
        var formData = form.serialize();
        var url = form.attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: formData,
            // async   : true,
            // dataType : 'json', 
            success: function (data) {
                console.log(data);
            }
        });
    })

    $(document).on('click', '.btn-add-gambar', function (e) {
        e.preventDefault();
        var controlForm = $('.controls:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add-gambar')
                .removeClass('btn-add-gambar').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="icon-minus3 position-left"></span>&nbsp;&nbsp;Hapus&nbsp;&nbsp;');
    }).on('click', '.btn-remove', function (e)
    {
        $(this).parents('.entry:first').remove();

        e.preventDefault();
        return false;
    });