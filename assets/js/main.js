var secilen_lig;
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
                $("#giris_dogrulama_text").text(x + "+" + y + " sayılarını toplayarak sonucu giriniz.");
                $("#giris_dogrulama_input").val(md5(x + y));
            }
        }
    );
});
$("#btnfrmKayit").click(function () {
    var data = $("#frmKayit").serialize();
    $.ajax({
            type: 'POST',
            url: 'settings/islem.php?islem=kayit',
            data: data,
            success: function (cevap) {
                $("#ykayitAlert").html(cevap).hide().fadeIn(700);
                var x = Math.floor((Math.random() * 10) + 1);
                var y = Math.floor((Math.random() * 10) + 1);
                $("#frmKayitgiris_dogrulama_text").text(x + "+" + y + " sayılarını toplayarak sonucu giriniz.");
                $("#frmKayitgiris_dogrulama_input").val(md5(x + y));
            }
        }
    );
});
$("#lig_olustur_btn").click(function () {
    var data = $("#lig_olustur_form").serialize();
    $.ajax({
            type: 'POST',
            url: 'settings/islem.php?islem=lig_olustur',
            data: data,
            success: function (cevap) {
                $("#lig_olustur_alert").html(cevap).hide().fadeIn(700);
            }
        }
    );
});
$("#lig_katil_btn").click(function () {
    $.ajax({
            type: 'POST',
            url: 'settings/islem.php?islem=lig_katil',
            dataType: 'json',
            data: { lig_baslik: secilen_lig},
            success: function (cevap) {
                $("#lig_alert").html(cevap).hide().fadeIn(700);
            }
        }
    );
});
$("#lig_ayril_btn").click(function () {
    $.ajax({
            type: 'POST',
            url: 'settings/islem.php?islem=lig_ayril',
            data: 0,
            success: function (cevap) {
                $("#lig_alert").html(cevap).hide().fadeIn(700);
            }
        }
    );
});
///ALIM BUTONLARI
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
                var element = document.getElementById("hisse_durum_" + sayi);
                if (element == "fas fa-minus text-info") {
                    element.classList.remove("fas fa-minus text-info");
                } else if (element == "fas fa-arrow-circle-down text-danger") {
                    element.classList.remove("fas fa-arrow-circle-down text-danger");
                } else if (element == "fas fa-arrow-circle-up text-success") {
                    element.classList.remove("fas fa-arrow-circle-up text-success");
                } else {
                }

                if (durumdegeri > 0) {
                    $("#hisse_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    $("#hisse_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
                    $("#hisse_durum_" + sayi).addClass("fas fa-arrow-circle-down text-danger");
                }
                ///////////////
                $("#hisse_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                //
                $("#hisse_deger_satim_" + sayi).text(hisse_bilgi[sayi][2]);
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
    });//hisseler
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
                    if (element == "fas fa-minus text-info") {
                        element.classList.remove("fas fa-minus text-info");
                    } else if (element == "fas fa-arrow-circle-down text-danger") {
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    } else {

                    }
                    $("#hisse_dusen_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    var element = document.getElementById("hisse_dusen_durum_" + sayi);
                    if (element == "fas fa-arrow-circle-up text-success") {
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    } else if (element == "fas fa-arrow-circle-down text-danger") {
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    } else {

                    }
                    $("#hisse_dusen_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
                    var element = document.getElementById("hisse_dusen_durum_" + sayi);
                    if (element == "fas fa-arrow-circle-up text-success") {
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    } else if (element == "fas fa-minus text-info") {
                        element.classList.remove("fas fa-minus text-info");
                    } else {

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
    });//dusen
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=tablo_yukselen_dusen',
        success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi = 99; sayi > 94; sayi--) {
                //////////////
                $("#hisse_yukselen_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                //////////////
                //////////////
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")//virgül nokta dönüşümü
                if (durumdegeri > 0) {
                    var element = document.getElementById("hisse_yukselen_durum_" + sayi);
                    if (element == "fas fa-minus text-info") {
                        element.classList.remove("fas fa-minus text-info");
                    } else if (element == "fas fa-arrow-circle-down text-danger") {
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    } else {

                    }
                    $("#hisse_yukselen_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    var element = document.getElementById("hisse_yukselen_durum_" + sayi);
                    if (element == "fas fa-arrow-circle-up text-success") {
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    } else if (element == "fas fa-arrow-circle-down text-danger") {
                        element.classList.remove("fas fa-arrow-circle-down text-danger");
                    } else {

                    }
                    $("#hisse_yukselen_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
                    var element = document.getElementById("hisse_yukselen_durum_" + sayi);
                    if (element == "fas fa-arrow-circle-up text-success") {
                        element.classList.remove("fas fa-arrow-circle-up text-success");
                    } else if (element == "fas fa-minus text-info") {
                        element.classList.remove("fas fa-minus text-info");
                    } else {

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
    });//yükselen
}

$(document).ready(function () {
    setInterval(Tablo_veri_cek, 60000);//60 saniyede bir otomatik güncelleme

});
///ALIM BUTONLARI
$(document).on('click', '#hisse_al_btn_0', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_0").text(),
        'alis_tutar': $("#hisse_deger_alim_0").text(),
        'alis_miktar': $("#rangevalue0").text(),
        'alis_komisyon': $("#komisyon0").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar0").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_1', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_1").text(),
        'alis_tutar': $("#hisse_deger_alim_1").text(),
        'alis_miktar': $("#rangevalue1").text(),
        'alis_komisyon': $("#komisyon1").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar1").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_2', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_2").text(),
        'alis_tutar': $("#hisse_deger_alim_2").text(),
        'alis_miktar': $("#rangevalue2").text(),
        'alis_komisyon': $("#komisyon2").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar2").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_3', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_3").text(),
        'alis_tutar': $("#hisse_deger_alim_3").text(),
        'alis_miktar': $("#rangevalue3").text(),
        'alis_komisyon': $("#komisyon3").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar3").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_4', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_4").text(),
        'alis_tutar': $("#hisse_deger_alim_4").text(),
        'alis_miktar': $("#rangevalue4").text(),
        'alis_komisyon': $("#komisyon4").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar4").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_5', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_5").text(),
        'alis_tutar': $("#hisse_deger_alim_5").text(),
        'alis_miktar': $("#rangevalue5").text(),
        'alis_komisyon': $("#komisyon5").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar5").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_6', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_6").text(),
        'alis_tutar': $("#hisse_deger_alim_6").text(),
        'alis_miktar': $("#rangevalue6").text(),
        'alis_komisyon': $("#komisyon6").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar6").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_7', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_7").text(),
        'alis_tutar': $("#hisse_deger_alim_7").text(),
        'alis_miktar': $("#rangevalue7").text(),
        'alis_komisyon': $("#komisyon7").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar7").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_8', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_8").text(),
        'alis_tutar': $("#hisse_deger_alim_8").text(),
        'alis_miktar': $("#rangevalue8").text(),
        'alis_komisyon': $("#komisyon8").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar8").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_9', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_9").text(),
        'alis_tutar': $("#hisse_deger_alim_9").text(),
        'alis_miktar': $("#rangevalue9").text(),
        'alis_komisyon': $("#komisyon9").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar9").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_10', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_10").text(),
        'alis_tutar': $("#hisse_deger_alim_10").text(),
        'alis_miktar': $("#rangevalue10").text(),
        'alis_komisyon': $("#komisyon10").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar10").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_11', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_11").text(),
        'alis_tutar': $("#hisse_deger_alim_11").text(),
        'alis_miktar': $("#rangevalue11").text(),
        'alis_komisyon': $("#komisyon11").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar11").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_12', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_12").text(),
        'alis_tutar': $("#hisse_deger_alim_12").text(),
        'alis_miktar': $("#rangevalue12").text(),
        'alis_komisyon': $("#komisyon12").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar12").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_13', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_13").text(),
        'alis_tutar': $("#hisse_deger_alim_13").text(),
        'alis_miktar': $("#rangevalue13").text(),
        'alis_komisyon': $("#komisyon13").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar13").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_14', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_14").text(),
        'alis_tutar': $("#hisse_deger_alim_14").text(),
        'alis_miktar': $("#rangevalue14").text(),
        'alis_komisyon': $("#komisyon14").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar14").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_15', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_15").text(),
        'alis_tutar': $("#hisse_deger_alim_15").text(),
        'alis_miktar': $("#rangevalue15").text(),
        'alis_komisyon': $("#komisyon15").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar15").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_16', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_16").text(),
        'alis_tutar': $("#hisse_deger_alim_16").text(),
        'alis_miktar': $("#rangevalue16").text(),
        'alis_komisyon': $("#komisyon16").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar16").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_17', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_17").text(),
        'alis_tutar': $("#hisse_deger_alim_17").text(),
        'alis_miktar': $("#rangevalue17").text(),
        'alis_komisyon': $("#komisyon17").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar17").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_18', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_18").text(),
        'alis_tutar': $("#hisse_deger_alim_18").text(),
        'alis_miktar': $("#rangevalue18").text(),
        'alis_komisyon': $("#komisyon18").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar18").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_19', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_19").text(),
        'alis_tutar': $("#hisse_deger_alim_19").text(),
        'alis_miktar': $("#rangevalue19").text(),
        'alis_komisyon': $("#komisyon19").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar19").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_20', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_20").text(),
        'alis_tutar': $("#hisse_deger_alim_20").text(),
        'alis_miktar': $("#rangevalue20").text(),
        'alis_komisyon': $("#komisyon20").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar20").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_21', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_21").text(),
        'alis_tutar': $("#hisse_deger_alim_21").text(),
        'alis_miktar': $("#rangevalue21").text(),
        'alis_komisyon': $("#komisyon21").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar21").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_22', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_22").text(),
        'alis_tutar': $("#hisse_deger_alim_22").text(),
        'alis_miktar': $("#rangevalue22").text(),
        'alis_komisyon': $("#komisyon22").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar22").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_23', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_23").text(),
        'alis_tutar': $("#hisse_deger_alim_23").text(),
        'alis_miktar': $("#rangevalue23").text(),
        'alis_komisyon': $("#komisyon23").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar23").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_24', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_24").text(),
        'alis_tutar': $("#hisse_deger_alim_24").text(),
        'alis_miktar': $("#rangevalue24").text(),
        'alis_komisyon': $("#komisyon24").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar24").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_25', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_25").text(),
        'alis_tutar': $("#hisse_deger_alim_25").text(),
        'alis_miktar': $("#rangevalue25").text(),
        'alis_komisyon': $("#komisyon25").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar25").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_26', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_26").text(),
        'alis_tutar': $("#hisse_deger_alim_26").text(),
        'alis_miktar': $("#rangevalue26").text(),
        'alis_komisyon': $("#komisyon26").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar26").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_27', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_27").text(),
        'alis_tutar': $("#hisse_deger_alim_27").text(),
        'alis_miktar': $("#rangevalue27").text(),
        'alis_komisyon': $("#komisyon27").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar27").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_28', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_28").text(),
        'alis_tutar': $("#hisse_deger_alim_28").text(),
        'alis_miktar': $("#rangevalue28").text(),
        'alis_komisyon': $("#komisyon28").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar28").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_29', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_29").text(),
        'alis_tutar': $("#hisse_deger_alim_29").text(),
        'alis_miktar': $("#rangevalue29").text(),
        'alis_komisyon': $("#komisyon29").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar29").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_30', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_30").text(),
        'alis_tutar': $("#hisse_deger_alim_30").text(),
        'alis_miktar': $("#rangevalue30").text(),
        'alis_komisyon': $("#komisyon30").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar30").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_31', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_31").text(),
        'alis_tutar': $("#hisse_deger_alim_31").text(),
        'alis_miktar': $("#rangevalue31").text(),
        'alis_komisyon': $("#komisyon31").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar31").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_32', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_32").text(),
        'alis_tutar': $("#hisse_deger_alim_32").text(),
        'alis_miktar': $("#rangevalue32").text(),
        'alis_komisyon': $("#komisyon32").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar32").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_33', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_33").text(),
        'alis_tutar': $("#hisse_deger_alim_33").text(),
        'alis_miktar': $("#rangevalue33").text(),
        'alis_komisyon': $("#komisyon33").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar33").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_34', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_34").text(),
        'alis_tutar': $("#hisse_deger_alim_34").text(),
        'alis_miktar': $("#rangevalue34").text(),
        'alis_komisyon': $("#komisyon34").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar34").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_35', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_35").text(),
        'alis_tutar': $("#hisse_deger_alim_35").text(),
        'alis_miktar': $("#rangevalue35").text(),
        'alis_komisyon': $("#komisyon35").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar35").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_36', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_36").text(),
        'alis_tutar': $("#hisse_deger_alim_36").text(),
        'alis_miktar': $("#rangevalue36").text(),
        'alis_komisyon': $("#komisyon36").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar36").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_37', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_37").text(),
        'alis_tutar': $("#hisse_deger_alim_37").text(),
        'alis_miktar': $("#rangevalue37").text(),
        'alis_komisyon': $("#komisyon37").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar37").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_38', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_38").text(),
        'alis_tutar': $("#hisse_deger_alim_38").text(),
        'alis_miktar': $("#rangevalue38").text(),
        'alis_komisyon': $("#komisyon38").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar38").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_39', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_39").text(),
        'alis_tutar': $("#hisse_deger_alim_39").text(),
        'alis_miktar': $("#rangevalue39").text(),
        'alis_komisyon': $("#komisyon39").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar39").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_40', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_40").text(),
        'alis_tutar': $("#hisse_deger_alim_40").text(),
        'alis_miktar': $("#rangevalue40").text(),
        'alis_komisyon': $("#komisyon40").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar40").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_41', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_41").text(),
        'alis_tutar': $("#hisse_deger_alim_41").text(),
        'alis_miktar': $("#rangevalue41").text(),
        'alis_komisyon': $("#komisyon41").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar41").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_42', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_42").text(),
        'alis_tutar': $("#hisse_deger_alim_42").text(),
        'alis_miktar': $("#rangevalue42").text(),
        'alis_komisyon': $("#komisyon42").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar42").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_43', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_43").text(),
        'alis_tutar': $("#hisse_deger_alim_43").text(),
        'alis_miktar': $("#rangevalue43").text(),
        'alis_komisyon': $("#komisyon43").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar43").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_44', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_44").text(),
        'alis_tutar': $("#hisse_deger_alim_44").text(),
        'alis_miktar': $("#rangevalue44").text(),
        'alis_komisyon': $("#komisyon44").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar44").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_45', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_45").text(),
        'alis_tutar': $("#hisse_deger_alim_45").text(),
        'alis_miktar': $("#rangevalue45").text(),
        'alis_komisyon': $("#komisyon45").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar45").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_46', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_46").text(),
        'alis_tutar': $("#hisse_deger_alim_46").text(),
        'alis_miktar': $("#rangevalue46").text(),
        'alis_komisyon': $("#komisyon46").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar46").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_47', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_47").text(),
        'alis_tutar': $("#hisse_deger_alim_47").text(),
        'alis_miktar': $("#rangevalue47").text(),
        'alis_komisyon': $("#komisyon47").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar47").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_48', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_48").text(),
        'alis_tutar': $("#hisse_deger_alim_48").text(),
        'alis_miktar': $("#rangevalue48").text(),
        'alis_komisyon': $("#komisyon48").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar48").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_49', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_49").text(),
        'alis_tutar': $("#hisse_deger_alim_49").text(),
        'alis_miktar': $("#rangevalue49").text(),
        'alis_komisyon': $("#komisyon49").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar49").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_50', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_50").text(),
        'alis_tutar': $("#hisse_deger_alim_50").text(),
        'alis_miktar': $("#rangevalue50").text(),
        'alis_komisyon': $("#komisyon50").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar50").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_51', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_51").text(),
        'alis_tutar': $("#hisse_deger_alim_51").text(),
        'alis_miktar': $("#rangevalue51").text(),
        'alis_komisyon': $("#komisyon51").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar51").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_52', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_52").text(),
        'alis_tutar': $("#hisse_deger_alim_52").text(),
        'alis_miktar': $("#rangevalue52").text(),
        'alis_komisyon': $("#komisyon52").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar52").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_53', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_53").text(),
        'alis_tutar': $("#hisse_deger_alim_53").text(),
        'alis_miktar': $("#rangevalue53").text(),
        'alis_komisyon': $("#komisyon53").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar53").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_54', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_54").text(),
        'alis_tutar': $("#hisse_deger_alim_54").text(),
        'alis_miktar': $("#rangevalue54").text(),
        'alis_komisyon': $("#komisyon54").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar54").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_55', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_55").text(),
        'alis_tutar': $("#hisse_deger_alim_55").text(),
        'alis_miktar': $("#rangevalue55").text(),
        'alis_komisyon': $("#komisyon55").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar55").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_56', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_56").text(),
        'alis_tutar': $("#hisse_deger_alim_56").text(),
        'alis_miktar': $("#rangevalue56").text(),
        'alis_komisyon': $("#komisyon56").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar56").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_57', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_57").text(),
        'alis_tutar': $("#hisse_deger_alim_57").text(),
        'alis_miktar': $("#rangevalue57").text(),
        'alis_komisyon': $("#komisyon57").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar57").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_58', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_58").text(),
        'alis_tutar': $("#hisse_deger_alim_58").text(),
        'alis_miktar': $("#rangevalue58").text(),
        'alis_komisyon': $("#komisyon58").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar58").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_59', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_59").text(),
        'alis_tutar': $("#hisse_deger_alim_59").text(),
        'alis_miktar': $("#rangevalue59").text(),
        'alis_komisyon': $("#komisyon59").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar59").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_60', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_60").text(),
        'alis_tutar': $("#hisse_deger_alim_60").text(),
        'alis_miktar': $("#rangevalue60").text(),
        'alis_komisyon': $("#komisyon60").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar60").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_61', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_61").text(),
        'alis_tutar': $("#hisse_deger_alim_61").text(),
        'alis_miktar': $("#rangevalue61").text(),
        'alis_komisyon': $("#komisyon61").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar61").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_62', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_62").text(),
        'alis_tutar': $("#hisse_deger_alim_62").text(),
        'alis_miktar': $("#rangevalue62").text(),
        'alis_komisyon': $("#komisyon62").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar62").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_63', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_63").text(),
        'alis_tutar': $("#hisse_deger_alim_63").text(),
        'alis_miktar': $("#rangevalue63").text(),
        'alis_komisyon': $("#komisyon63").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar63").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_64', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_64").text(),
        'alis_tutar': $("#hisse_deger_alim_64").text(),
        'alis_miktar': $("#rangevalue64").text(),
        'alis_komisyon': $("#komisyon64").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar64").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_65', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_65").text(),
        'alis_tutar': $("#hisse_deger_alim_65").text(),
        'alis_miktar': $("#rangevalue65").text(),
        'alis_komisyon': $("#komisyon65").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar65").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_66', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_66").text(),
        'alis_tutar': $("#hisse_deger_alim_66").text(),
        'alis_miktar': $("#rangevalue66").text(),
        'alis_komisyon': $("#komisyon66").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar66").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_67', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_67").text(),
        'alis_tutar': $("#hisse_deger_alim_67").text(),
        'alis_miktar': $("#rangevalue67").text(),
        'alis_komisyon': $("#komisyon67").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar67").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_68', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_68").text(),
        'alis_tutar': $("#hisse_deger_alim_68").text(),
        'alis_miktar': $("#rangevalue68").text(),
        'alis_komisyon': $("#komisyon68").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar68").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_69', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_69").text(),
        'alis_tutar': $("#hisse_deger_alim_69").text(),
        'alis_miktar': $("#rangevalue69").text(),
        'alis_komisyon': $("#komisyon69").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar69").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_70', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_70").text(),
        'alis_tutar': $("#hisse_deger_alim_70").text(),
        'alis_miktar': $("#rangevalue70").text(),
        'alis_komisyon': $("#komisyon70").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar70").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_71', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_71").text(),
        'alis_tutar': $("#hisse_deger_alim_71").text(),
        'alis_miktar': $("#rangevalue71").text(),
        'alis_komisyon': $("#komisyon71").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar71").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_72', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_72").text(),
        'alis_tutar': $("#hisse_deger_alim_72").text(),
        'alis_miktar': $("#rangevalue72").text(),
        'alis_komisyon': $("#komisyon72").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar72").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_73', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_73").text(),
        'alis_tutar': $("#hisse_deger_alim_73").text(),
        'alis_miktar': $("#rangevalue73").text(),
        'alis_komisyon': $("#komisyon73").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar73").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_74', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_74").text(),
        'alis_tutar': $("#hisse_deger_alim_74").text(),
        'alis_miktar': $("#rangevalue74").text(),
        'alis_komisyon': $("#komisyon74").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar74").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_75', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_75").text(),
        'alis_tutar': $("#hisse_deger_alim_75").text(),
        'alis_miktar': $("#rangevalue75").text(),
        'alis_komisyon': $("#komisyon75").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar75").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_76', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_76").text(),
        'alis_tutar': $("#hisse_deger_alim_76").text(),
        'alis_miktar': $("#rangevalue76").text(),
        'alis_komisyon': $("#komisyon76").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar76").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_77', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_77").text(),
        'alis_tutar': $("#hisse_deger_alim_77").text(),
        'alis_miktar': $("#rangevalue77").text(),
        'alis_komisyon': $("#komisyon77").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar77").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_78', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_78").text(),
        'alis_tutar': $("#hisse_deger_alim_78").text(),
        'alis_miktar': $("#rangevalue78").text(),
        'alis_komisyon': $("#komisyon78").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar78").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_79', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_79").text(),
        'alis_tutar': $("#hisse_deger_alim_79").text(),
        'alis_miktar': $("#rangevalue79").text(),
        'alis_komisyon': $("#komisyon79").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar79").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_80', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_80").text(),
        'alis_tutar': $("#hisse_deger_alim_80").text(),
        'alis_miktar': $("#rangevalue80").text(),
        'alis_komisyon': $("#komisyon80").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar80").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_81', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_81").text(),
        'alis_tutar': $("#hisse_deger_alim_81").text(),
        'alis_miktar': $("#rangevalue81").text(),
        'alis_komisyon': $("#komisyon81").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar81").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_82', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_82").text(),
        'alis_tutar': $("#hisse_deger_alim_82").text(),
        'alis_miktar': $("#rangevalue82").text(),
        'alis_komisyon': $("#komisyon82").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar82").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_83', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_83").text(),
        'alis_tutar': $("#hisse_deger_alim_83").text(),
        'alis_miktar': $("#rangevalue83").text(),
        'alis_komisyon': $("#komisyon83").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar83").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_84', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_84").text(),
        'alis_tutar': $("#hisse_deger_alim_84").text(),
        'alis_miktar': $("#rangevalue84").text(),
        'alis_komisyon': $("#komisyon84").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar84").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_85', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_85").text(),
        'alis_tutar': $("#hisse_deger_alim_85").text(),
        'alis_miktar': $("#rangevalue85").text(),
        'alis_komisyon': $("#komisyon85").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar85").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_86', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_86").text(),
        'alis_tutar': $("#hisse_deger_alim_86").text(),
        'alis_miktar': $("#rangevalue86").text(),
        'alis_komisyon': $("#komisyon86").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar86").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_87', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_87").text(),
        'alis_tutar': $("#hisse_deger_alim_87").text(),
        'alis_miktar': $("#rangevalue87").text(),
        'alis_komisyon': $("#komisyon87").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar87").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_88', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_88").text(),
        'alis_tutar': $("#hisse_deger_alim_88").text(),
        'alis_miktar': $("#rangevalue88").text(),
        'alis_komisyon': $("#komisyon88").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar88").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_89', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_89").text(),
        'alis_tutar': $("#hisse_deger_alim_89").text(),
        'alis_miktar': $("#rangevalue89").text(),
        'alis_komisyon': $("#komisyon89").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar89").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_90', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_90").text(),
        'alis_tutar': $("#hisse_deger_alim_90").text(),
        'alis_miktar': $("#rangevalue90").text(),
        'alis_komisyon': $("#komisyon90").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar90").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_91', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_91").text(),
        'alis_tutar': $("#hisse_deger_alim_91").text(),
        'alis_miktar': $("#rangevalue91").text(),
        'alis_komisyon': $("#komisyon91").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar91").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_92', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_92").text(),
        'alis_tutar': $("#hisse_deger_alim_92").text(),
        'alis_miktar': $("#rangevalue92").text(),
        'alis_komisyon': $("#komisyon92").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar92").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_93', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_93").text(),
        'alis_tutar': $("#hisse_deger_alim_93").text(),
        'alis_miktar': $("#rangevalue93").text(),
        'alis_komisyon': $("#komisyon93").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar93").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_94', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_94").text(),
        'alis_tutar': $("#hisse_deger_alim_94").text(),
        'alis_miktar': $("#rangevalue94").text(),
        'alis_komisyon': $("#komisyon94").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar94").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_95', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_95").text(),
        'alis_tutar': $("#hisse_deger_alim_95").text(),
        'alis_miktar': $("#rangevalue95").text(),
        'alis_komisyon': $("#komisyon95").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar95").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_96', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_96").text(),
        'alis_tutar': $("#hisse_deger_alim_96").text(),
        'alis_miktar': $("#rangevalue96").text(),
        'alis_komisyon': $("#komisyon96").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar96").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_97', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_97").text(),
        'alis_tutar': $("#hisse_deger_alim_97").text(),
        'alis_miktar': $("#rangevalue97").text(),
        'alis_komisyon': $("#komisyon97").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar97").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_98', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_98").text(),
        'alis_tutar': $("#hisse_deger_alim_98").text(),
        'alis_miktar': $("#rangevalue98").text(),
        'alis_komisyon': $("#komisyon98").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar98").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_al_btn_99', function () {
    var data = {
        'sembol': $("#hisse_alim_form_sembol_99").text(),
        'alis_tutar': $("#hisse_deger_alim_99").text(),
        'alis_miktar': $("#rangevalue99").text(),
        'alis_komisyon': $("#komisyon99").text(),
        'alis_toplam': $("#toplam_odenecek_alim_tutar99").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_satin_al', data: data, success: function (cevap) {
            $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
//satım butonları
$(document).on('click', '#hisse_sat_btn_0', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_0").text(),
        'sat_tutar': $("#hisse_deger_sat_0").text(),
        'sat_miktar': $("#rangevaluesat0").text(),
        'sat_komisyon': $("#komisyonsat0").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar0").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_1', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_1").text(),
        'sat_tutar': $("#hisse_deger_sat_1").text(),
        'sat_miktar': $("#rangevaluesat1").text(),
        'sat_komisyon': $("#komisyonsat1").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar1").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_2', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_2").text(),
        'sat_tutar': $("#hisse_deger_sat_2").text(),
        'sat_miktar': $("#rangevaluesat2").text(),
        'sat_komisyon': $("#komisyonsat2").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar2").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_3', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_3").text(),
        'sat_tutar': $("#hisse_deger_sat_3").text(),
        'sat_miktar': $("#rangevaluesat3").text(),
        'sat_komisyon': $("#komisyonsat3").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar3").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_4', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_4").text(),
        'sat_tutar': $("#hisse_deger_sat_4").text(),
        'sat_miktar': $("#rangevaluesat4").text(),
        'sat_komisyon': $("#komisyonsat4").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar4").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_5', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_5").text(),
        'sat_tutar': $("#hisse_deger_sat_5").text(),
        'sat_miktar': $("#rangevaluesat5").text(),
        'sat_komisyon': $("#komisyonsat5").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar5").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_6', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_6").text(),
        'sat_tutar': $("#hisse_deger_sat_6").text(),
        'sat_miktar': $("#rangevaluesat6").text(),
        'sat_komisyon': $("#komisyonsat6").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar6").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_7', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_7").text(),
        'sat_tutar': $("#hisse_deger_sat_7").text(),
        'sat_miktar': $("#rangevaluesat7").text(),
        'sat_komisyon': $("#komisyonsat7").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar7").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_8', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_8").text(),
        'sat_tutar': $("#hisse_deger_sat_8").text(),
        'sat_miktar': $("#rangevaluesat8").text(),
        'sat_komisyon': $("#komisyonsat8").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar8").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_9', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_9").text(),
        'sat_tutar': $("#hisse_deger_sat_9").text(),
        'sat_miktar': $("#rangevaluesat9").text(),
        'sat_komisyon': $("#komisyonsat9").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar9").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_10', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_10").text(),
        'sat_tutar': $("#hisse_deger_sat_10").text(),
        'sat_miktar': $("#rangevaluesat10").text(),
        'sat_komisyon': $("#komisyonsat10").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar10").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_11', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_11").text(),
        'sat_tutar': $("#hisse_deger_sat_11").text(),
        'sat_miktar': $("#rangevaluesat11").text(),
        'sat_komisyon': $("#komisyonsat11").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar11").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_12', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_12").text(),
        'sat_tutar': $("#hisse_deger_sat_12").text(),
        'sat_miktar': $("#rangevaluesat12").text(),
        'sat_komisyon': $("#komisyonsat12").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar12").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_13', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_13").text(),
        'sat_tutar': $("#hisse_deger_sat_13").text(),
        'sat_miktar': $("#rangevaluesat13").text(),
        'sat_komisyon': $("#komisyonsat13").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar13").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_14', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_14").text(),
        'sat_tutar': $("#hisse_deger_sat_14").text(),
        'sat_miktar': $("#rangevaluesat14").text(),
        'sat_komisyon': $("#komisyonsat14").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar14").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_15', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_15").text(),
        'sat_tutar': $("#hisse_deger_sat_15").text(),
        'sat_miktar': $("#rangevaluesat15").text(),
        'sat_komisyon': $("#komisyonsat15").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar15").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_16', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_16").text(),
        'sat_tutar': $("#hisse_deger_sat_16").text(),
        'sat_miktar': $("#rangevaluesat16").text(),
        'sat_komisyon': $("#komisyonsat16").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar16").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_17', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_17").text(),
        'sat_tutar': $("#hisse_deger_sat_17").text(),
        'sat_miktar': $("#rangevaluesat17").text(),
        'sat_komisyon': $("#komisyonsat17").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar17").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_18', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_18").text(),
        'sat_tutar': $("#hisse_deger_sat_18").text(),
        'sat_miktar': $("#rangevaluesat18").text(),
        'sat_komisyon': $("#komisyonsat18").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar18").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_19', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_19").text(),
        'sat_tutar': $("#hisse_deger_sat_19").text(),
        'sat_miktar': $("#rangevaluesat19").text(),
        'sat_komisyon': $("#komisyonsat19").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar19").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_20', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_20").text(),
        'sat_tutar': $("#hisse_deger_sat_20").text(),
        'sat_miktar': $("#rangevaluesat20").text(),
        'sat_komisyon': $("#komisyonsat20").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar20").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_21', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_21").text(),
        'sat_tutar': $("#hisse_deger_sat_21").text(),
        'sat_miktar': $("#rangevaluesat21").text(),
        'sat_komisyon': $("#komisyonsat21").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar21").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_22', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_22").text(),
        'sat_tutar': $("#hisse_deger_sat_22").text(),
        'sat_miktar': $("#rangevaluesat22").text(),
        'sat_komisyon': $("#komisyonsat22").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar22").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_23', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_23").text(),
        'sat_tutar': $("#hisse_deger_sat_23").text(),
        'sat_miktar': $("#rangevaluesat23").text(),
        'sat_komisyon': $("#komisyonsat23").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar23").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_24', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_24").text(),
        'sat_tutar': $("#hisse_deger_sat_24").text(),
        'sat_miktar': $("#rangevaluesat24").text(),
        'sat_komisyon': $("#komisyonsat24").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar24").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_25', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_25").text(),
        'sat_tutar': $("#hisse_deger_sat_25").text(),
        'sat_miktar': $("#rangevaluesat25").text(),
        'sat_komisyon': $("#komisyonsat25").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar25").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_26', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_26").text(),
        'sat_tutar': $("#hisse_deger_sat_26").text(),
        'sat_miktar': $("#rangevaluesat26").text(),
        'sat_komisyon': $("#komisyonsat26").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar26").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_27', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_27").text(),
        'sat_tutar': $("#hisse_deger_sat_27").text(),
        'sat_miktar': $("#rangevaluesat27").text(),
        'sat_komisyon': $("#komisyonsat27").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar27").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_28', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_28").text(),
        'sat_tutar': $("#hisse_deger_sat_28").text(),
        'sat_miktar': $("#rangevaluesat28").text(),
        'sat_komisyon': $("#komisyonsat28").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar28").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_29', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_29").text(),
        'sat_tutar': $("#hisse_deger_sat_29").text(),
        'sat_miktar': $("#rangevaluesat29").text(),
        'sat_komisyon': $("#komisyonsat29").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar29").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_30', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_30").text(),
        'sat_tutar': $("#hisse_deger_sat_30").text(),
        'sat_miktar': $("#rangevaluesat30").text(),
        'sat_komisyon': $("#komisyonsat30").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar30").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_31', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_31").text(),
        'sat_tutar': $("#hisse_deger_sat_31").text(),
        'sat_miktar': $("#rangevaluesat31").text(),
        'sat_komisyon': $("#komisyonsat31").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar31").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_32', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_32").text(),
        'sat_tutar': $("#hisse_deger_sat_32").text(),
        'sat_miktar': $("#rangevaluesat32").text(),
        'sat_komisyon': $("#komisyonsat32").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar32").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_33', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_33").text(),
        'sat_tutar': $("#hisse_deger_sat_33").text(),
        'sat_miktar': $("#rangevaluesat33").text(),
        'sat_komisyon': $("#komisyonsat33").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar33").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_34', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_34").text(),
        'sat_tutar': $("#hisse_deger_sat_34").text(),
        'sat_miktar': $("#rangevaluesat34").text(),
        'sat_komisyon': $("#komisyonsat34").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar34").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_35', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_35").text(),
        'sat_tutar': $("#hisse_deger_sat_35").text(),
        'sat_miktar': $("#rangevaluesat35").text(),
        'sat_komisyon': $("#komisyonsat35").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar35").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_36', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_36").text(),
        'sat_tutar': $("#hisse_deger_sat_36").text(),
        'sat_miktar': $("#rangevaluesat36").text(),
        'sat_komisyon': $("#komisyonsat36").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar36").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_37', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_37").text(),
        'sat_tutar': $("#hisse_deger_sat_37").text(),
        'sat_miktar': $("#rangevaluesat37").text(),
        'sat_komisyon': $("#komisyonsat37").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar37").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_38', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_38").text(),
        'sat_tutar': $("#hisse_deger_sat_38").text(),
        'sat_miktar': $("#rangevaluesat38").text(),
        'sat_komisyon': $("#komisyonsat38").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar38").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_39', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_39").text(),
        'sat_tutar': $("#hisse_deger_sat_39").text(),
        'sat_miktar': $("#rangevaluesat39").text(),
        'sat_komisyon': $("#komisyonsat39").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar39").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_40', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_40").text(),
        'sat_tutar': $("#hisse_deger_sat_40").text(),
        'sat_miktar': $("#rangevaluesat40").text(),
        'sat_komisyon': $("#komisyonsat40").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar40").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_41', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_41").text(),
        'sat_tutar': $("#hisse_deger_sat_41").text(),
        'sat_miktar': $("#rangevaluesat41").text(),
        'sat_komisyon': $("#komisyonsat41").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar41").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_42', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_42").text(),
        'sat_tutar': $("#hisse_deger_sat_42").text(),
        'sat_miktar': $("#rangevaluesat42").text(),
        'sat_komisyon': $("#komisyonsat42").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar42").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_43', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_43").text(),
        'sat_tutar': $("#hisse_deger_sat_43").text(),
        'sat_miktar': $("#rangevaluesat43").text(),
        'sat_komisyon': $("#komisyonsat43").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar43").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_44', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_44").text(),
        'sat_tutar': $("#hisse_deger_sat_44").text(),
        'sat_miktar': $("#rangevaluesat44").text(),
        'sat_komisyon': $("#komisyonsat44").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar44").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_45', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_45").text(),
        'sat_tutar': $("#hisse_deger_sat_45").text(),
        'sat_miktar': $("#rangevaluesat45").text(),
        'sat_komisyon': $("#komisyonsat45").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar45").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_46', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_46").text(),
        'sat_tutar': $("#hisse_deger_sat_46").text(),
        'sat_miktar': $("#rangevaluesat46").text(),
        'sat_komisyon': $("#komisyonsat46").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar46").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_47', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_47").text(),
        'sat_tutar': $("#hisse_deger_sat_47").text(),
        'sat_miktar': $("#rangevaluesat47").text(),
        'sat_komisyon': $("#komisyonsat47").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar47").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_48', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_48").text(),
        'sat_tutar': $("#hisse_deger_sat_48").text(),
        'sat_miktar': $("#rangevaluesat48").text(),
        'sat_komisyon': $("#komisyonsat48").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar48").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_49', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_49").text(),
        'sat_tutar': $("#hisse_deger_sat_49").text(),
        'sat_miktar': $("#rangevaluesat49").text(),
        'sat_komisyon': $("#komisyonsat49").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar49").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_50', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_50").text(),
        'sat_tutar': $("#hisse_deger_sat_50").text(),
        'sat_miktar': $("#rangevaluesat50").text(),
        'sat_komisyon': $("#komisyonsat50").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar50").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_51', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_51").text(),
        'sat_tutar': $("#hisse_deger_sat_51").text(),
        'sat_miktar': $("#rangevaluesat51").text(),
        'sat_komisyon': $("#komisyonsat51").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar51").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_52', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_52").text(),
        'sat_tutar': $("#hisse_deger_sat_52").text(),
        'sat_miktar': $("#rangevaluesat52").text(),
        'sat_komisyon': $("#komisyonsat52").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar52").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_53', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_53").text(),
        'sat_tutar': $("#hisse_deger_sat_53").text(),
        'sat_miktar': $("#rangevaluesat53").text(),
        'sat_komisyon': $("#komisyonsat53").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar53").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_54', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_54").text(),
        'sat_tutar': $("#hisse_deger_sat_54").text(),
        'sat_miktar': $("#rangevaluesat54").text(),
        'sat_komisyon': $("#komisyonsat54").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar54").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_55', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_55").text(),
        'sat_tutar': $("#hisse_deger_sat_55").text(),
        'sat_miktar': $("#rangevaluesat55").text(),
        'sat_komisyon': $("#komisyonsat55").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar55").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_56', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_56").text(),
        'sat_tutar': $("#hisse_deger_sat_56").text(),
        'sat_miktar': $("#rangevaluesat56").text(),
        'sat_komisyon': $("#komisyonsat56").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar56").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_57', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_57").text(),
        'sat_tutar': $("#hisse_deger_sat_57").text(),
        'sat_miktar': $("#rangevaluesat57").text(),
        'sat_komisyon': $("#komisyonsat57").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar57").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_58', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_58").text(),
        'sat_tutar': $("#hisse_deger_sat_58").text(),
        'sat_miktar': $("#rangevaluesat58").text(),
        'sat_komisyon': $("#komisyonsat58").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar58").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_59', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_59").text(),
        'sat_tutar': $("#hisse_deger_sat_59").text(),
        'sat_miktar': $("#rangevaluesat59").text(),
        'sat_komisyon': $("#komisyonsat59").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar59").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_60', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_60").text(),
        'sat_tutar': $("#hisse_deger_sat_60").text(),
        'sat_miktar': $("#rangevaluesat60").text(),
        'sat_komisyon': $("#komisyonsat60").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar60").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_61', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_61").text(),
        'sat_tutar': $("#hisse_deger_sat_61").text(),
        'sat_miktar': $("#rangevaluesat61").text(),
        'sat_komisyon': $("#komisyonsat61").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar61").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_62', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_62").text(),
        'sat_tutar': $("#hisse_deger_sat_62").text(),
        'sat_miktar': $("#rangevaluesat62").text(),
        'sat_komisyon': $("#komisyonsat62").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar62").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_63', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_63").text(),
        'sat_tutar': $("#hisse_deger_sat_63").text(),
        'sat_miktar': $("#rangevaluesat63").text(),
        'sat_komisyon': $("#komisyonsat63").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar63").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_64', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_64").text(),
        'sat_tutar': $("#hisse_deger_sat_64").text(),
        'sat_miktar': $("#rangevaluesat64").text(),
        'sat_komisyon': $("#komisyonsat64").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar64").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_65', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_65").text(),
        'sat_tutar': $("#hisse_deger_sat_65").text(),
        'sat_miktar': $("#rangevaluesat65").text(),
        'sat_komisyon': $("#komisyonsat65").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar65").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_66', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_66").text(),
        'sat_tutar': $("#hisse_deger_sat_66").text(),
        'sat_miktar': $("#rangevaluesat66").text(),
        'sat_komisyon': $("#komisyonsat66").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar66").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_67', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_67").text(),
        'sat_tutar': $("#hisse_deger_sat_67").text(),
        'sat_miktar': $("#rangevaluesat67").text(),
        'sat_komisyon': $("#komisyonsat67").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar67").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_68', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_68").text(),
        'sat_tutar': $("#hisse_deger_sat_68").text(),
        'sat_miktar': $("#rangevaluesat68").text(),
        'sat_komisyon': $("#komisyonsat68").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar68").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_69', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_69").text(),
        'sat_tutar': $("#hisse_deger_sat_69").text(),
        'sat_miktar': $("#rangevaluesat69").text(),
        'sat_komisyon': $("#komisyonsat69").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar69").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_70', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_70").text(),
        'sat_tutar': $("#hisse_deger_sat_70").text(),
        'sat_miktar': $("#rangevaluesat70").text(),
        'sat_komisyon': $("#komisyonsat70").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar70").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_71', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_71").text(),
        'sat_tutar': $("#hisse_deger_sat_71").text(),
        'sat_miktar': $("#rangevaluesat71").text(),
        'sat_komisyon': $("#komisyonsat71").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar71").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_72', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_72").text(),
        'sat_tutar': $("#hisse_deger_sat_72").text(),
        'sat_miktar': $("#rangevaluesat72").text(),
        'sat_komisyon': $("#komisyonsat72").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar72").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_73', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_73").text(),
        'sat_tutar': $("#hisse_deger_sat_73").text(),
        'sat_miktar': $("#rangevaluesat73").text(),
        'sat_komisyon': $("#komisyonsat73").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar73").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_74', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_74").text(),
        'sat_tutar': $("#hisse_deger_sat_74").text(),
        'sat_miktar': $("#rangevaluesat74").text(),
        'sat_komisyon': $("#komisyonsat74").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar74").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_75', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_75").text(),
        'sat_tutar': $("#hisse_deger_sat_75").text(),
        'sat_miktar': $("#rangevaluesat75").text(),
        'sat_komisyon': $("#komisyonsat75").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar75").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_76', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_76").text(),
        'sat_tutar': $("#hisse_deger_sat_76").text(),
        'sat_miktar': $("#rangevaluesat76").text(),
        'sat_komisyon': $("#komisyonsat76").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar76").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_77', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_77").text(),
        'sat_tutar': $("#hisse_deger_sat_77").text(),
        'sat_miktar': $("#rangevaluesat77").text(),
        'sat_komisyon': $("#komisyonsat77").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar77").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_78', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_78").text(),
        'sat_tutar': $("#hisse_deger_sat_78").text(),
        'sat_miktar': $("#rangevaluesat78").text(),
        'sat_komisyon': $("#komisyonsat78").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar78").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_79', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_79").text(),
        'sat_tutar': $("#hisse_deger_sat_79").text(),
        'sat_miktar': $("#rangevaluesat79").text(),
        'sat_komisyon': $("#komisyonsat79").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar79").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_80', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_80").text(),
        'sat_tutar': $("#hisse_deger_sat_80").text(),
        'sat_miktar': $("#rangevaluesat80").text(),
        'sat_komisyon': $("#komisyonsat80").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar80").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_81', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_81").text(),
        'sat_tutar': $("#hisse_deger_sat_81").text(),
        'sat_miktar': $("#rangevaluesat81").text(),
        'sat_komisyon': $("#komisyonsat81").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar81").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_82', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_82").text(),
        'sat_tutar': $("#hisse_deger_sat_82").text(),
        'sat_miktar': $("#rangevaluesat82").text(),
        'sat_komisyon': $("#komisyonsat82").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar82").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_83', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_83").text(),
        'sat_tutar': $("#hisse_deger_sat_83").text(),
        'sat_miktar': $("#rangevaluesat83").text(),
        'sat_komisyon': $("#komisyonsat83").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar83").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_84', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_84").text(),
        'sat_tutar': $("#hisse_deger_sat_84").text(),
        'sat_miktar': $("#rangevaluesat84").text(),
        'sat_komisyon': $("#komisyonsat84").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar84").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_85', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_85").text(),
        'sat_tutar': $("#hisse_deger_sat_85").text(),
        'sat_miktar': $("#rangevaluesat85").text(),
        'sat_komisyon': $("#komisyonsat85").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar85").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_86', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_86").text(),
        'sat_tutar': $("#hisse_deger_sat_86").text(),
        'sat_miktar': $("#rangevaluesat86").text(),
        'sat_komisyon': $("#komisyonsat86").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar86").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_87', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_87").text(),
        'sat_tutar': $("#hisse_deger_sat_87").text(),
        'sat_miktar': $("#rangevaluesat87").text(),
        'sat_komisyon': $("#komisyonsat87").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar87").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_88', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_88").text(),
        'sat_tutar': $("#hisse_deger_sat_88").text(),
        'sat_miktar': $("#rangevaluesat88").text(),
        'sat_komisyon': $("#komisyonsat88").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar88").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_89', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_89").text(),
        'sat_tutar': $("#hisse_deger_sat_89").text(),
        'sat_miktar': $("#rangevaluesat89").text(),
        'sat_komisyon': $("#komisyonsat89").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar89").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_90', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_90").text(),
        'sat_tutar': $("#hisse_deger_sat_90").text(),
        'sat_miktar': $("#rangevaluesat90").text(),
        'sat_komisyon': $("#komisyonsat90").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar90").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_91', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_91").text(),
        'sat_tutar': $("#hisse_deger_sat_91").text(),
        'sat_miktar': $("#rangevaluesat91").text(),
        'sat_komisyon': $("#komisyonsat91").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar91").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_92', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_92").text(),
        'sat_tutar': $("#hisse_deger_sat_92").text(),
        'sat_miktar': $("#rangevaluesat92").text(),
        'sat_komisyon': $("#komisyonsat92").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar92").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_93', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_93").text(),
        'sat_tutar': $("#hisse_deger_sat_93").text(),
        'sat_miktar': $("#rangevaluesat93").text(),
        'sat_komisyon': $("#komisyonsat93").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar93").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_94', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_94").text(),
        'sat_tutar': $("#hisse_deger_sat_94").text(),
        'sat_miktar': $("#rangevaluesat94").text(),
        'sat_komisyon': $("#komisyonsat94").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar94").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_95', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_95").text(),
        'sat_tutar': $("#hisse_deger_sat_95").text(),
        'sat_miktar': $("#rangevaluesat95").text(),
        'sat_komisyon': $("#komisyonsat95").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar95").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_96', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_96").text(),
        'sat_tutar': $("#hisse_deger_sat_96").text(),
        'sat_miktar': $("#rangevaluesat96").text(),
        'sat_komisyon': $("#komisyonsat96").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar96").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_97', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_97").text(),
        'sat_tutar': $("#hisse_deger_sat_97").text(),
        'sat_miktar': $("#rangevaluesat97").text(),
        'sat_komisyon': $("#komisyonsat97").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar97").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_98', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_98").text(),
        'sat_tutar': $("#hisse_deger_sat_98").text(),
        'sat_miktar': $("#rangevaluesat98").text(),
        'sat_komisyon': $("#komisyonsat98").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar98").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$(document).on('click', '#hisse_sat_btn_99', function () {
    var data = {
        'sembol': $("#hisse_sat_form_sembol_99").text(),
        'sat_tutar': $("#hisse_deger_sat_99").text(),
        'sat_miktar': $("#rangevaluesat99").text(),
        'sat_komisyon': $("#komisyonsat99").text(),
        'sat_toplam': $("#toplam_odenecek_sat_tutar99").text(),
        'kul_id': $("#anasayfa_kul_id").val()
    }
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=hisse_sat', data: data, success: function (cevap) {
            $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
