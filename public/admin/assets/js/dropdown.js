$("#provinsi").change(function (event) {
    $.get("get-kabupaten/" + event.target.value + "", function (response) {
        // console.log(response);
        $("#kabupaten").empty();
        $("#kabupaten").append("<option value=''>" + "Pilih Kecamatan" + "</option>");
        for (i = 0; i < response.length; i++) {
            $("#kabupaten").append("<option value='" + response[i].city_id + "'>" + response[i].city_name + " " + response[i].type + "</option>");
        }
    });
});
$("#kabupaten").change(function (event) {
    $.get("get-kecamatan/" + event.target.value + "", function (response) {
        // console.log(response);
        $("#kecamatan").empty();
        $("#kecamatan").append("<option value=''>" + "Pilih Kecamatan" + "</option>");
        for (i = 0; i < response.length; i++) {
            $("#kecamatan").append("<option value='"+ response[i].subdistrict_id + "'>" + response[i].subdistrict_name + "</option>");
        }
    });
});

$("#provinsilain").change(function (event) {
    $.get("get-kabupaten/" + event.target.value + "", function (response) {
        // console.log(response);
        $("#kabupatenlain").empty();
        $("#kabupatenlain").append("<option value=''>" + "Pilih Kecamatan" + "</option>");
        for (i = 0; i < response.length; i++) {
            $("#kabupatenlain").append("<option value='" + response[i].city_id + "'>" + response[i].city_name + " " + response[i].type + "</option>");
        }
    });
});
$("#kabupatenlain").change(function (event) {
    $.get("get-kecamatan/" + event.target.value + "", function (response) {
        // console.log(response);
        $("#kecamatanlain").empty();
        $("#kecamatanlain").append("<option value=''>" + "Pilih Kecamatan" + "</option>");
        for (i = 0; i < response.length; i++) {
            $("#kecamatanlain").append("<option value='"+ response[i].subdistrict_id + "'>" + response[i].subdistrict_name + "</option>");
        }
    });
});