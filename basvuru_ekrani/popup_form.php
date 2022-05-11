<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>



    <button class="basvuru-popup" style="transform: rotate(90deg);" data-bs-toggle="modal" data-bs-target="#basvuru-popup">Basvuru Yap</button>

    <!-- Modal -->
    <div class="modal fade" id="basvuru-popup" tabindex="-1" aria-labelledby="basvuru-popupLabel" aria-hidden="true">
        <div class="modal-dialog popup-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
                <div class="container">
                    <h1>Basvuru Formu</h1>
                    <div class="form-container">
            
                        <form>
                            <input type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="row-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tam_ad_input" class="form-label">Adiniz Soyadiniz</label>
                                        <input type="text" class="form-control" id="tam_ad_input">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sektor_input" class="form-label">Sektor</label>
                                        <select class="form-select" id="sektor_input">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="tc_no_input" class="form-label">TC NO</label>
                                        <input type="number" class="form-control" id="tc_no_input">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sehir_input" class="form-label">Sehir</label>
                                        <select class="form-select" id="sehir_input">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email_input" class="form-label">E-Posta Adresiniz</label>
                                        <input type="email" class="form-control" id="email_input">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tel_no_input" class="form-label">Telefon Numaraniz</label>
                                        <input type="number" class="form-control" id="tel_no_input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="talep_edilen_tutar_input" class="form-label">Talep Edilen Tutar</label>
                                        <input type="number" class="form-control" id="talep_edilen_tutar_input">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kredi_vade_input" class="form-label">Vade Seciniz</label>
                                        <select class="form-select" id="kredi_vade_input">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="musteri_notu_input" class="form-label">Iletmek istediginiz notunuz</label>
                                        <textarea class="form-control" id="musteri_notu_input" rows="4"></textarea>
                                    </div>
                                   
                                </div>
                            </div>
                            
                            <div class="row submit-row">
                                <div class="col-md-6">
                                    <div class="gizlilik-group">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="gizlilik_check">
                                            <label class="form-check-label" for="gizlilik_check" >Bu formu doldurarak Gizlilik politikası koşullarını kabul ettiğimi beyan ederim.</label>
                                        </div>
                                        <!-- Modal   data-bs-toggle="modal" data-bs-target="#gizlilikModal"
                                        <div class="modal fade" id="gizlilikModal" tabindex="-1" aria-labelledby="gizlilikModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="gizlilikModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam hic facere vitae similique facilis dignissimos, harum quam, dolore, fugit molestiae omnis minima veritatis nobis natus obcaecati doloremque voluptatem quod odio laborum sed id beatae ipsum enim? Ipsam facilis rem iure. Libero animi maxime optio veritatis, numquam laborum repellendus et dolore officiis quis quidem voluptatem quisquam iste earum ratione tempore cumque? Suscipit, modi exercitationem vel cum deserunt molestiae incidunt assumenda fugit numquam porro reiciendis. Voluptatem nostrum iusto dolore cum reprehenderit odio aut ipsa corporis optio ducimus, placeat aspernatur at quia. Laborum autem quidem tempora totam porro modi voluptate, rem ipsum est.
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kapat</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="kvkk-group">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="kvkk_check">
                                            <label class="form-check-label" for="kvkk_check" >Bu formu doldurarak KVKK koşullarını kabul ettiğimi beyan ederim.</label>
                                        </div>
                                        <!-- Modal   data-bs-toggle="modal" data-bs-target="#kvkkModal"
                                        <div class="modal fade" id="kvkkModal" tabindex="-1" aria-labelledby="kvkkModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="kvkkModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam hic facere vitae similique facilis dignissimos, harum quam, dolore, fugit molestiae omnis minima veritatis nobis natus obcaecati doloremque voluptatem quod odio laborum sed id beatae ipsum enim? Ipsam facilis rem iure. Libero animi maxime optio veritatis, numquam laborum repellendus et dolore officiis quis quidem voluptatem quisquam iste earum ratione tempore cumque? Suscipit, modi exercitationem vel cum deserunt molestiae incidunt assumenda fugit numquam porro reiciendis. Voluptatem nostrum iusto dolore cum reprehenderit odio aut ipsa corporis optio ducimus, placeat aspernatur at quia. Laborum autem quidem tempora totam porro modi voluptate, rem ipsum est.
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kapat</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="veri_isleme_check">
                                            <label class="form-check-label" for="veri_isleme_check">Misyon Kredi tarafından aşağıdaki yollarla tarafıma ticari elektronik ileti iletilmesini kabul ederim.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary form_gonder">Basvur</button>
                                </div>
                            </div>        
                        </form>
            
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>