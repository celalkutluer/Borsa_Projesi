<?php
/**
 * PhpStorm ile oluşturulmuştur.
 * Yazar            : CELALKUTLUER
 * Test Eden        : CELALKUTLUER
 * Hata Ayıklayan   : CELALKUTLUER
 * Date: 09.06.2020
 * Time: 20:00
 */
include "inc/header.php"; ?>
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i>Kayıt</h2>
                </div>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id="ykayitAlert"></div>
                    <!--ALERT-->
                    <form  id="frmKayit" method="post" >
                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Ad</label>
                                    <input id="frmKayitAd" name="frmKayitAd" type="text" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Soyad</label>
                                    <input id="frmKayitSoyad" name="frmKayitSoyad" type="text" class="form-control input-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <label>E-Posta</label>
                            <input id="frmKayitEmail" name="frmKayitEmail" type="email" class="form-control input-lg" />
                        </div>
                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Şifre</label>
                                    <input id="frmKayitSifre" name="frmKayitSifre"  name="pwd" type="password" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Yeniden Şifre</label>
                                    <input  id="frmKayitSifreconfirm" name="frmKayitSifreconfirm"  type="password" class="form-control input-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Doğum Tarihi</label>
                                    <input id="frmKayitDogum_tar" name="frmKayitDogum_tar" type="date" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Cep Telefon No</label>
                                    <!--<input id="frmKayitCepTelNo" name="frmKayitCepTelNo" type="text" data-plugin-masked-input data-input-mask="(999) 999-9999"
                                           placeholder="(555) 555-5555" class="form-control input-lg" />-->
                                    <input id="frmKayitCepTelNo" name="frmKayitCepTelNo"  class="phone form-control input-lg" type="text"
                                           maxlength="15"  />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <?php
                                $s1 = rand(1, 9);
                                $s2 = rand(1, 9);
                                $t = $s1 + $s2;
                                $y = md5($t);
                                ?>
                                <label class="pull-left" id="frmKayitgiris_dogrulama_text">
                                    <?php
                                    echo "$s1+$s2 sayılarının toplamını giriniz.";
                                    ?>
                                </label>
                                <label class="pull-right">Doğrulama</label>
                                <input id="frmKayitgiris_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                       value="<?php echo $y; ?>" name="frmKayittoplam">
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="frmKayitdkodu" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
								</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="frmKayitSozlesme" name="frmKayitSozlesme" type="checkbox"/>
                                    <label class="mb-xs mt-xs mr-xs modal-with-zoom-anim " href="#modalAnim"><a>Üyelik Sözleşmesi</a>ni kabul ediyorum.</label>
                                    <!-- Modal Animation -->
                                    <div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                <h2 class="panel-title">Üyelik Sözleşmesi</h2>
                                            </header>
                                            <div class="panel-body">
                                                <div class="modal-wrapper">
                                                    <p class="p1"><span class="s1"><span style="font-size: 14px; font-family: Arial;">Sitemize üye olmadan önce aşağıda yer alan sözleşmeyi dikkatlice okuyunuz lütfen.</span></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;"><b>1. Taraflar</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">a) www.celalkutluer.com.tr internet sitesinin faaliyetlerini yürüten Yozgat adresinde Borsa Yatırım Fantazi Ligi (Bundan böyle Borsa Yatırım Fantazi Ligi olarak anılacaktır).</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">b) www.celalkutluer.com.tr internet sitesine üye olan internet kullanıcısı ("Üye")</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;"><b>2. Sözleşmenin Konusu</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">İşbu Sözleşme'nin konusu Borsa Yatırım Fantazi Ligi'nin sahip olduğu internet sitesi www.celalkutluer.com.tr 'dan üyenin faydalanma şartlarının belirlenmesidir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;"><b>3. Tarafların Hak ve Yükümlülükleri</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.1. Üye, www.celalkutluer.com.tr internet sitesine üye olurken verdiği kişisel ve diğer sair bilgilerin kanunlar önünde doğru olduğunu, Borsa Yatırım Fantazi Ligi'nin bu bilgilerin gerçeğe aykırılığı nedeniyle uğrayacağı tüm zararları aynen ve derhal tazmin edeceğini beyan ve taahhüt <b>etmez.</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.2. Üye, Borsa Yatırım Fantazi Ligi tarafından kendisine verilmiş olan şifreyi başka kişi ya da kuruluşlara veremez, üyenin söz konusu şifreyi kullanma hakkı bizzat kendisine aittir. Bu sebeple doğabilecek tüm sorumluluk ile üçüncü kişiler veya yetkili merciler tarafından Borsa Yatırım Fantazi Ligi'ne karşı ileri sürülebilecek tüm iddia ve taleplere karşı, Borsa Yatırım Fantazi Ligi'nin söz konusu izinsiz kullanımdan kaynaklanan her türlü tazminat ve sair talep hakkı saklıdır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.3. Üye www.celalkutluer.com.tr internet sitesini kullanırken yasal mevzuat hükümlerine riayet etmeyi ve bunları ihlal etmemeyi baştan kabul ve taahhüt eder. Aksi takdirde, doğacak tüm hukuki ve cezai yükümlülükler tamamen ve münhasıran üyeyi bağlayacaktır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.4. Üye, www.celalkutluer.com.tr internet sitesini hiçbir şekilde kamu düzenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve taciz edici şekilde, yasalara aykırı bir amaç için, başkalarının fikri ve telif haklarına tecavüz edecek şekilde kullanamaz. Ayrıca, üye başkalarının hizmetleri kullanmasını önleyici veya zorlaştırıcı faaliyet (spam, virus, truva atı, vb.) ve işlemlerde bulunamaz.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.5. www.celalkutluer.com.tr internet sitesinde üyeler tarafından beyan edilen, yazılan, kullanılan fikir ve düşünceler, tamamen üyelerin kendi kişisel görüşleridir ve görüş sahibini bağlar. Bu görüş ve düşüncelerin Borsa Yatırım Fantazi Ligi'ne hiçbir ilgi ve bağlantısı yoktur. Borsa Yatırım Fantazi Ligi'nin üyenin beyan edeceği fikir ve görüşler nedeniyle üçüncü kişilerin uğrayabileceği zararlardan ve üçüncü kişilerin beyan edeceği fikir ve görüşler nedeniyle üyenin uğrayabileceği zararlardan dolayı herhangi bir sorumluluğu bulunmamaktadır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.6. Borsa Yatırım Fantazi Ligi, üye verilerinin yetkisiz kişilerce okunmasından ve üye yazılım ve verilerine gelebilecek zararlardan dolayı sorumlu olmayacaktır. Üye, www.celalkutluer.com.tr internet sitesinin kullanılmasından dolayı uğrayabileceği herhangi bir zarar yüzünden Borsa Yatırım Fantazi Liginden tazminat talep etmemeyi peşinen kabul etmiştir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.7. Üye, diğer internet kullanıcılarının yazılımlarına ve verilerine izinsiz olarak ulaşmamayı veya bunları kullanmamayı kabul etmiştir. Aksi takdirde, bundan doğacak hukuki ve cezai sorumluluklar tamamen üyeye aittir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.8. İşbu üyelik sözleşmesi içerisinde sayılan maddelerden bir ya da birkaçını ihlal eden üye işbu ihlal nedeniyle cezai ve hukuki olarak şahsen sorumlu olup, Borsa Yatırım Fantazi Ligi'ni bu ihlallerin hukuki ve cezai sonuçlarından ari tutacaktır. Ayrıca; işbu ihlal nedeniyle, olayın hukuk alanına intikal ettirilmesi halinde, Borsa Yatırım Fantazi Ligi'nin üyeye karşı üyelik sözleşmesine uyulmamasından dolayı tazminat talebinde bulunma hakkı saklıdır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.9. Borsa Yatırım Fantazi Ligi'nin her zaman tek taraflı olarak gerektiğinde üyenin üyeliğini silme, müşteriye ait dosya, belge ve bilgileri silme hakkı vardır. Üye işbu tasarrufu önceden kabul eder. Bu durumda, Borsa Yatırım Fantazi Ligi'nin hiçbir sorumluluğu yoktur.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.10. www.celalkutluer.com.tr internet sitesi yazılım ve tasarımı Borsa Yatırım Fantazi Ligi mülkiyetinde olup, bunlara ilişkin telif hakkı ve/veya diğer fikri mülkiyet hakları ilgili kanunlarca korunmakta olup, bunlar üye tarafından izinsiz kullanılamaz, iktisap edilemez ve değiştirilemez. Bu web sitesinde adı geçen başkaca şirketler ve ürünleri sahiplerinin ticari markalarıdır ve ayrıca fikri mülkiyet hakları kapsamında korunmaktadır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.11. Borsa Yatırım Fantazi Ligi tarafından www.celalkutluer.com.tr internet sitesinin iyileştirilmesi, geliştirilmesine yönelik olarak ve/veya yasal mevzuat çerçevesinde siteye erişmek için kullanılan İnternet servis sağlayıcısının adı ve Internet Protokol (IP) adresi, Siteye erişilen tarih ve saat, sitede bulunulan sırada erişilen sayfalar ve siteye doğrudan bağlanılmasını sağlayan Web sitesinin Internet adresi gibi birtakım bilgiler toplanabilir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">&nbsp;</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.12. Borsa Yatırım Fantazi Ligi, üyenin kişisel bilgilerini yasal bir zorunluluk olarak istendiğinde veya (a) yasal gereklere uygun hareket etmek veya Borsa Yatırım Fantazi Ligi'ne tebliğ edilen yasal işlemlere uymak; (b) Borsa Yatırım Fantazi Ligi ve Borsa Yatırım Fantazi Ligi web sitesi ailesinin haklarını ve mülkiyetini korumak ve savunmak için gerekli olduğuna iyi niyetle kanaat getirdiği hallerde açıklayabilir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.13. Borsa Yatırım Fantazi Ligi web sitesinin virus ve benzeri amaçlı yazılımlardan arındırılmış olması için mevcut imkanlar dahilinde tedbir alınmıştır. Bunun yanında nihai güvenliğin sağlanması için kullanıcının, kendi virus koruma sistemini tedarik etmesi ve gerekli korunmayı sağlaması gerekmektedir. Bu bağlamda üye Borsa Yatırım Fantazi Ligi web sitesi'ne girmesiyle, kendi yazılım ve işletim sistemlerinde oluşabilecek tüm hata ve bunların doğrudan yada dolaylı sonuçlarından kendisinin sorumlu olduğunu kabul etmiş sayılır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.14. Borsa Yatırım Fantazi Ligi, sitenin içeriğini dilediği zaman değiştirme, kullanıcılara sağlanan herhangi bir hizmeti değiştirme yada sona erdirme veya Borsa Yatırım Fantazi Ligi web sitesinde kayıtlı kullanıcı bilgi ve verilerini silme hakkını saklı tutar.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.15. Borsa Yatırım Fantazi Ligi, üyelik sözleşmesinin koşullarını hiçbir şekil ve surette ön ihbara ve/veya ihtara gerek kalmaksızın her zaman değiştirebilir, güncelleyebilir veya iptal edebilir. Değiştirilen, güncellenen yada yürürlükten kaldırılan her hüküm , yayın tarihinde tüm üyeler bakımından hüküm ifade edecektir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.16. Taraflar, Borsa Yatırım Fantazi Ligi'ne ait tüm bilgisayar kayıtlarının tek ve gerçek münhasır delil olarak, HUMK madde 287'ye uygun şekilde esas alınacağını ve söz konusu kayıtların bir delil sözleşmesi teşkil ettiği hususunu kabul ve beyan eder.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">3.17. Borsa Yatırım Fantazi Ligi, iş bu üyelik sözleşmesi uyarınca, üyelerinin kendisinde kayıtlı elektronik posta adreslerine bilgilendirme mailleri ve cep telefonlarına bilgilendirme SMS'leri gönderme yetkisine sahip olmakla beraber, üye işbu üyelik sözleşmesini onaylamasıyla beraber bilgilendirme maillerinin elektronik posta adresine ve bilgilendirme SMS'lerinin cep telefonuna gönderilmesini kabul etmiş sayılacaktır.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;"><b>4. Sözleşmenin Feshi</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">İşbu sözleşme üyenin üyeliğini iptal etmesi veya Borsa Yatırım Fantazi Ligi tarafından üyeliğinin iptal edilmesine kadar yürürlükte kalacaktır. Borsa Yatırım Fantazi Ligi üyenin üyelik sözleşmesinin herhangi bir hükmünü ihlal etmesi durumunda üyenin üyeliğini iptal ederek sözleşmeyi tek taraflı olarak feshedebilecektir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;"><b>5. ihtilaflarin Halli</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">İşbu sözleşmeye ilişkin ihtilaflarda Yozgat Mahkemeleri ve İcra Daireleri yetkilidir.</span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;"><b>6. Yürürlük</b></span></p>
                                                    <p class="p1"><span class="s1" style="font-size: 14px; font-family: Arial;">Üyenin, üyelik kaydı yapması üyenin üyelik sözleşmesinde yer alan tüm maddeleri okuduğu ve üyelik sözleşmesinde yer alan maddeleri kabul ettiği anlamına gelir. İşbu Sözleşme üyenin üye olması anında akdedilmiş ve karşılıklı olarak yürürlülüğe girmiştir.</span></p>
                                                    <p class="p2"><span class="s1"></span></p>
                                                </div>
                                            </div>
                                            <footer class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-12 text-right">
                                                        <button class="btn btn-default modal-dismiss">Okudum</button>
                                                    </div>
                                                </div>
                                            </footer>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="button" id="btnfrmKayit" class="btn btn-primary btn-block">Kayıt</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include "inc/footer.php"; ?>
