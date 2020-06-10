/**
 * PhpStorm ile oluşturulmuştur.
 * Yazar            : CELALKUTLUER
 * Test Eden        : CELALKUTLUER
 * Hata Ayıklayan   : CELALKUTLUER
 * Date: 09.06.2020
 * Time: 20:00
 */

$("#btnSignIn").click(function () {
    var data = $("#frmSignIn").serialize();
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=giris', data: data, success: function (cevap) {
            $("#girisAlert").html(cevap).hide().fadeIn(700);
            var x = Math.floor((Math.random() * 10) + 1);
            var y = Math.floor((Math.random() * 10) + 1);
            $("#giris_dogrulama_text").text(x + "+" + y + " sayılarını toplayarak sonucu giriniz.");
            $("#giris_dogrulama_input").val(md5(x + y));
        }
    });
});
$("#btnfrmKayit").click(function () {
    var data = $("#frmKayit").serialize();
    var check = document.getElementById("frmKayitSozlesme").checked;
    if (check) {
        $.ajax({
            type: 'POST', url: 'settings/islem.php?islem=kayit', data: data, success: function (cevap) {
                $("#ykayitAlert").html(cevap).hide().fadeIn(700);
                var x = Math.floor((Math.random() * 10) + 1);
                var y = Math.floor((Math.random() * 10) + 1);
                $("#frmKayitgiris_dogrulama_text").text(x + "+" + y + " sayılarını toplayarak sonucu giriniz.");
                $("#frmKayitgiris_dogrulama_input").val(md5(x + y));
            }
        });
    } else {
        alert("Üyelik Sözleşmesini okuyun ve Üyelik Sözleşmesini okudum checkbox'ını işaretleyin.");
    }
});
$("#btnKodD").click(function () {
    var kod = document.getElementById('kod').value;
    var dkodu = document.getElementById('kod_dkodu').value;
    var toplam = document.getElementById('kod_dogrulama_input').value;

    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=kodD',
        data: {'kod': kod, dkodu: dkodu, toplam: toplam},
        success: function (cevap) {
            $("#kod_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#btnKodt").click(function () {
    /*$('#btnKodt').attr('disabled', true);*/
    var kodt = document.getElementById('kodt').value;
    var dkodu = document.getElementById('kodt_dkodu').value;
    var toplam = document.getElementById('kodt_dogrulama_input').value;

    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=kodDt',
        data: {'kodt': kodt, dkodu: dkodu, toplam: toplam},
        success: function (cevap) {
            $("#kodt_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#btnSifre_Unuttum").click(function () {
    var sif_u_eposta = document.getElementById('sif_u_eposta').value;
    var dkodu = document.getElementById('kodsif_dkodu').value;
    var toplam = document.getElementById('kodsif_dogrulama_input').value;
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=sif_u',
        data: {'sif_u_eposta': sif_u_eposta, dkodu: dkodu, toplam: toplam},
        success: function (cevap) {
            $("#sif_u_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#iletisim_btn").click(function () {
    var i_Ad = document.getElementById('iletisim_Ad').value;
    var i_Soyad = document.getElementById('iletisim_Soyad').value;
    var i_Email = document.getElementById('iletisim_Email').value;
    var i_Txt = document.getElementById('iletisim_text').value;
    var i_dkodu = document.getElementById('iletisim_dkodu').value;
    var i_toplam = document.getElementById('iletisim_toplam').value;
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=iletisim',
        data: {i_Ad: i_Ad, i_Soyad: i_Soyad, i_Email: i_Email, i_Txt: i_Txt, i_dkodu: i_dkodu, i_toplam: i_toplam},
        success: function (cevap) {
            $("#iletisim_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#but_upload").click(function () {
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file', files);
    $.ajax({
        url: 'settings/islem.php?islem=profil_resim_kayit',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function (cevap) {
            $("#profil_resim_Alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#lig_olustur_btn").click(function () {
    var data = $("#lig_olustur_form").serialize();
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=lig_olustur', data: data, success: function (cevap) {
            $("#lig_olustur_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#lig_ayril_btn").click(function () {
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=lig_ayril', data: 0, success: function (cevap) {
            $("#lig_alert").html(cevap).hide().fadeIn(700);
        }
    });
});

function Tablo_veri_cek() {
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=tablo_bilgi_al', success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                $("#hisse_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")/*virgül nokta dönüşümü*/
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
                $("#hisse_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                $("#hisse_deger_satim_" + sayi).text(hisse_bilgi[sayi][2]);
                $("#hisse_fark_" + sayi).text(hisse_bilgi[sayi][3]);
                $("#hisse_fark_yuzde_" + sayi).text(hisse_bilgi[sayi][1]);
                $("#hisse_en_dusuk_" + sayi).text(hisse_bilgi[sayi][4]);
                $("#hisse_en_yuksek_" + sayi).text(hisse_bilgi[sayi][5]);
                $("#hisse_hacim_lot_" + sayi).text(hisse_bilgi[sayi][6]);
                $("#hisse_hacim_tl_" + sayi).text(hisse_bilgi[sayi][7]);
                $("#hisse_zaman_" + sayi).text(hisse_bilgi[sayi][8]);
            }
        }
    });
    /*hisseler*/
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=tablo_yukselen_dusen', success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi = 0; sayi < 5; sayi++) {
                $("#hisse_dusen_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")
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
                $("#hisse_dusen_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                $("#hisse_dusen_fark_" + sayi).text(hisse_bilgi[sayi][1]);
            }
        }
    });
    $.ajax({
        type: 'POST', url: 'settings/islem.php?islem=tablo_yukselen_dusen', success: function (cevap) {
            hisse_bilgi = JSON.parse(cevap);
            for (var sayi = 99; sayi > 94; sayi--) {
                $("#hisse_yukselen_sembol_" + sayi).text(hisse_bilgi[sayi][0]);
                let durumdegeri = hisse_bilgi[sayi][1];
                durumdegeri = durumdegeri.toString().replace(",", ".")
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
                $("#hisse_yukselen_son_deger_" + sayi).text(hisse_bilgi[sayi][2]);
                $("#hisse_yukselen_fark_" + sayi).text(hisse_bilgi[sayi][1]);
            }
        }
    });
}

function odul_sorgula() {
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=odul_sorgulama',
        success: function (cevap) {

        }
    });
}

$(document).ready(function () {
    setInterval(Tablo_veri_cek, 60000);
    /*60 saniyede bir otomatik güncelleme*/
    setTimeout(odul_sorgula, 120000);
    /*Sıralama Ödülleri verilmedi ise vermek için. 2 dk sonra çalışır*/

    $('#profil_form_bilgi').on('input change', function () {
        $('#profil_bilgi_kaydet_btn').attr('disabled', false);
    });
    $('#profil_form_sifre').on('input change', function () {
        $('#profil_sifre_kaydet_btn').attr('disabled', false);
    });
    /**/
    $("input.phone").keyup(function () {
        var val = $(this).val();
        var bas = val.length > 15 ? val.substr(0, 15) : val;
        var son = val.length > 15 ? val.substr(15, val.length) : "";
        val = val.length > 15 ? String(bas.replace(/[\D]/g, '')) +
            String(son.replace(/[^0-9\s\-]/g, '')) : String(val.replace(/[\D]/g,
            ''));
        var str = "";
        if (val.length == 11) {
            str = "(" + val.substr(0, 3) + ") " + val.substr(3, 3) + " " +
                val.substr(6, 2) + " " + val.substr(8, 2) + " - " +
                val.substr(10, val.length);
        } else if (val.length >= 8) {
            str = "(" + val.substr(0, 3) + ") " + val.substr(3, 3) + " " +
                val.substr(6, 2) + " " + val.substr(8, val.length);
        } else if (val.length >= 6) {
            str = "(" + val.substr(0, 3) + ") " + val.substr(3, 3) + " " +
                val.substr(6, val.length);
        } else if (val.length >= 3) {
            str = "(" + val.substr(0, 3) + ") " + val.substr(3, val.length);
        } else {
            str = val;
        }
        $(this).val(str);
    });
});