$("#provinsi").change(function (event) {
    $.get("/get-kabupaten/" + event.target.value + "", function (response) {
        // console.log(response);
        $("#kabupaten").empty();
        $("#kabupaten").append("<option value=''>" + "PILIH KABKOT" + "</option>");
        for (i = 0; i < response.length; i++) {
            $("#kabupaten").append("<option value='" + response[i].city_id + "'>" + response[i].city_name + " " + response[i].type + "</option>");
        }
    });
});
$("#kabupaten").change(function (event) {
    $.get("/get-kecamatan/" + event.target.value + "", function (response) {
        // console.log(response);
        $("#kecamatan").empty();
        $("#kecamatan").append("<option value=''>" + "PILIH KECAMATAN" + "</option>");
        for (i = 0; i < response.length; i++) {
            $("#kecamatan").append("<option value='"+ response[i].subdistrict_id + "'>" + response[i].subdistrict_name + "</option>");
        }
    });
});