$("#btnSignIn").click(function () {
    var data = $("#frmSignIn").serialize();
    $.ajax({
            type: 'POST',
            url: 'settings/islem.php?islem=ygiris',
            data: data,
            success: function (cevap) {
                $("#ygirisAlert").html(cevap).hide().fadeIn(700);
                var x = Math.floor((Math.random() * 10) + 1);
                var y = Math.floor((Math.random() * 10) + 1);
                $("#giris_dogrulama_text").text(x+"+"+y+" sayılarını toplayarak sonucu giriniz.");
                $("#giris_dogrulama_input").val(md5(x+y));
            }
        }
    );
});
function Tablo_veri_cek() {
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=tablo_bilgi_al',
        success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                //////////////
                $("#hisse_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                //////////////
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")//virgül nokta dönüşümü
                if (durumdegeri > 0) {
                    var element = document.getElementById("hisse_durum_" + sayi);
                    if(element=="fas fa-minus text-info"){
                        element.classList.remove("fas fa-minus text-info");
                    }
                    else if(element=="fas fa-arrow-circle-down text-danger"){
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    }
                    else{

                    }
                    $("#hisse_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    var element = document.getElementById("hisse_durum_" + sayi);
                    if(element=="fas fa-arrow-circle-up text-success"){
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    }
                    else if(element=="fas fa-arrow-circle-down text-danger"){
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    }
                    else{

                    }
                    $("#hisse_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
                    var element = document.getElementById("hisse_durum_" + sayi);
                    if(element=="fas fa-arrow-circle-up text-success"){
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    }
                    else if(element=="fas fa-minus text-info"){
                        element.classList.remove("fas fa-minus text-info");
                    }
                    else{

                    }
                    $("#hisse_durum_" + sayi).addClass("fas fa-arrow-circle-down text-danger");
                }
                ///////////////
                $("#hisse_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                ///////////////
                $("#hisse_fark_" + sayi).text(hisse_bilgi[sayi][3]);
                ///////////////
                $("#hisse_fark_yuzde_" + sayi).text(hisse_bilgi[sayi][1]);
                ///////////////
                $("#hisse_en_dusuk_" + sayi).text(hisse_bilgi[sayi][4]);
                ///////////////
                $("#hisse_en_yuksek_" + sayi).text(hisse_bilgi[sayi][5]);
                ///////////////
                $("#hisse_hacim_lot_" + sayi).text(hisse_bilgi[sayi][6]);
                ///////////////
                $("#hisse_hacim_tl_" + sayi).text(hisse_bilgi[sayi][7]);
                ///////////////
                $("#hisse_zaman_" + sayi).text(hisse_bilgi[sayi][8]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=tablo_yukselen_dusen',
        success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi = 0; sayi < 5; sayi++) {
                //////////////
                $("#hisse_dusen_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                //////////////
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")//virgül nokta dönüşümü
                if (durumdegeri > 0) {
                    var element = document.getElementById("hisse_dusen_durum_" + sayi);
                    if(element=="fas fa-minus text-info"){
                        element.classList.remove("fas fa-minus text-info");
                    }
                    else if(element=="fas fa-arrow-circle-down text-danger"){
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    }
                    else{

                    }
                    $("#hisse_dusen_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    var element = document.getElementById("hisse_dusen_durum_" + sayi);
                    if(element=="fas fa-arrow-circle-up text-success"){
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    }
                    else if(element=="fas fa-arrow-circle-down text-danger"){
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    }
                    else{

                    }
                    $("#hisse_dusen_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
                    var element = document.getElementById("hisse_dusen_durum_" + sayi);
                    if(element=="fas fa-arrow-circle-up text-success"){
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    }
                    else if(element=="fas fa-minus text-info"){
                        element.classList.remove("fas fa-minus text-info");
                    }
                    else{

                    }
                    $("#hisse_dusen_durum_" + sayi).addClass("fas fa-arrow-circle-down text-danger");
                }
                ///////////////
                $("#hisse_dusen_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                ///////////////
                $("#hisse_dusen_fark_" + sayi).text(hisse_bilgi[sayi][1]);
                ///////////////
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=tablo_yukselen_dusen',
        success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi =99; sayi >94; sayi--) {
                //////////////
                $("#hisse_yukselen_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                //////////////
                //////////////
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")//virgül nokta dönüşümü
                if (durumdegeri > 0) {
                    var element = document.getElementById("hisse_yukselen_durum_" + sayi);
                    if(element=="fas fa-minus text-info"){
                        element.classList.remove("fas fa-minus text-info");
                    }
                    else if(element=="fas fa-arrow-circle-down text-danger"){
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    }
                    else{

                    }
                    $("#hisse_yukselen_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    var element = document.getElementById("hisse_yukselen_durum_" + sayi);
                    if(element=="fas fa-arrow-circle-up text-success"){
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    }
                    else if(element=="fas fa-arrow-circle-down text-danger"){
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    }
                    else{

                    }
                    $("#hisse_yukselen_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
                    var element = document.getElementById("hisse_yukselen_durum_" + sayi);
                    if(element=="fas fa-arrow-circle-up text-success"){
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    }
                    else if(element=="fas fa-minus text-info"){
                        element.classList.remove("fas fa-minus text-info");
                    }
                    else{

                    }
                    $("#hisse_yukselen_durum_" + sayi).addClass("fas fa-arrow-circle-down text-danger");
                }
                ///////////////
                $("#hisse_yukselen_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                ///////////////
                $("#hisse_yukselen_fark_" + sayi).text(hisse_bilgi[sayi][1]);
                ///////////////
            }
        }
    });
}

$(document).ready(function () {
    setInterval(Tablo_veri_cek, 60000);//60 saniyede bir otomatik güncelleme
});
