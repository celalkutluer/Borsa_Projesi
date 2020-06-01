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
    var kod =document.getElementById('kod').value;
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=kodD',
        data: {'kod': kod },
        success: function (cevap) {
            $("#kod_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#btnKodt").click(function () {
    $('#btnKodt').attr('disabled', true);
    var kodt =document.getElementById('kodt').value;
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=kodDt',
        data: {'kodt': kodt },
        success: function (cevap) {
            $("#kodt_alert").html(cevap).hide().fadeIn(700);
        }
    });
});
$("#btnSifre_Unuttum").click(function () {
    var sif_u_eposta =document.getElementById('sif_u_eposta').value;
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=sif_u',
        data: {'sif_u_eposta': sif_u_eposta },
        success: function (cevap) {
            $("#sif_u_alert").html(cevap).hide().fadeIn(700);
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
    });/*hisseler*/
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
$(document).ready(function () {
    setInterval(Tablo_veri_cek, 60000);/*60 saniyede bir otomatik güncelleme*/
    $('#profil_form_bilgi').on('input change', function () {
        $('#profil_bilgi_kaydet_btn').attr('disabled', false);
    });
    $('#profil_form_sifre').on('input change', function () {
        $('#profil_sifre_kaydet_btn').attr('disabled', false);
    });
});