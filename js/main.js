window.onload = Tablo_veri_cek();
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
                    $("#hisse_durum_" + sayi).addClass("fas fa-arrow-circle-up text-success");
                } else if (durumdegeri == 0) {
                    $("#hisse_durum_" + sayi).addClass("fas fa-minus text-info");
                } else {
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
}
$(document).ready(function () {
    setInterval(Tablo_veri_cek, 5000);
});
/*

function deneme() {
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=sembol_yaz',
        success: function (cevap) {
            let hisse_sembol_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_sembol_" + sayi;
                $(str).text(hisse_sembol_[sayi]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_yuzde_id_',
        success: function (cevap) {
            hisse_durum_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_durum_" + sayi;
                if (hisse_durum_[sayi][0] > 0) {
                    $(str).addClass("fas fa-arrow-circle-up text-success");
                } else if (hisse_durum_[sayi][0] == 0) {
                    $(str).addClass("fas fa-minus text-info");
                } else {
                    $(str).addClass("fas fa-arrow-circle-down text-danger");
                }
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_fiyat_id_',
        success: function (cevap) {
            hisse_son_deger_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_son_deger_" + sayi;
                $(str).text(hisse_son_deger_[sayi][0]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_farktl_id_',
        success: function (cevap) {
            hisse_fark_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_fark_" + sayi;
                $(str).text(hisse_fark_[sayi][0]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_yuzde_',
        success: function (cevap) {
            hisse_fark_yuzde_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_fark_yuzde_" + sayi;
                $(str).text(hisse_fark_yuzde_[sayi][0]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_dusuk_id_',
        success: function (cevap) {
            hisse_en_dusuk_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_en_dusuk_" + sayi;
                $(str).text(hisse_en_dusuk_[sayi][0]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_yuksek_id_',
        success: function (cevap) {
            hisse_en_yuksek_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_en_yuksek_" + sayi;

                $(str).text(hisse_en_yuksek_[sayi]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_hacimlot_id_',
        success: function (cevap) {
            hisse_hacim_lot_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_hacim_lot_" + sayi;
                $(str).text(hisse_hacim_lot_[sayi][0]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_hacimtl_id_',
        success: function (cevap) {
            hisse_hacim_tl_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_hacim_tl_" + sayi;
                $(str).text(hisse_hacim_tl_[sayi][0]);
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: 'settings/islem.php?islem=h_td_saat_id_',
        success: function (cevap) {
            hisse_zaman_ = JSON.parse(cevap);
            for (var sayi = 0; sayi < 100; sayi++) {
                var str = "#hisse_zaman_" + sayi;
                $(str).text(hisse_zaman_[sayi][0]);
            }
        }
    });
}

* */