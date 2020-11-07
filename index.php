<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Wybory na konsula Czackiego</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='assets/style.css' rel='stylesheet'>
        <link href="assets/default.min.css" rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/app.js'></script>
        <link href="assets/smartwizard.css" rel="stylesheet" type="text/css" />
        <link href="assets/smartwizarddots.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="assets/smartwizard.js"></script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
        <div class="container">
            <div class="row d-flex justify-content-center mt-120"> <h1 class="text-center">Głosowanie na konsuli i Rzecznika Praw Ucznia</h1> </div>
            <div class="row d-flex justify-content-center mt-40"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Oddaję głos </button> </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Karta do głosowania</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                            <div id="smartwizard">
                                <ul>
                                    <li><a href="#step-1">Krok 1<br /><small>Kod ucznia</small></a></li>
                                    <li><a href="#step-2">Krok 2<br /><small>Głos na konsuli</small></a></li>
                                    <li><a href="#step-3">Krok 3<br /><small>Głos na RPU</small></a></li>
                                    <li><a href="#step-4">Krok 4<br /><small>Potwierdzenie</small></a></li>
                                </ul>
                                <div>
                                    <div id="step-1">
                                        <div class="row">
                                            <div class="col-md-12 mt-15 mb-15"> <input type="text" class="form-control" placeholder="Kod (otrzymany od wychowawcy)" required> </div>
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <div class="row">
                                            <div class="col-md-12 mt-15 mb-15">
                                                <select class="custom-select" required>
                                                    <option hidden disabled selected value>Wybierz parę konsuli</option>
                                                    <option value="12">Joe Biden</option>
                                                    <option value="13">Donald Trump</option>
                                                    <option value="14">Małgorzata Kidawa-Błońska</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-3" class="">
                                        <div class="row">
                                            <div class="col-md-12 mt-15 mb-15">
                                                <select class="custom-select" required>
                                                    <option hidden disabled selected value>Wybierz Rzecznika praw ucznia</option>
                                                    <option value="12">Jacek Sasin</option>
                                                    <option value="13">Zbigniew Krzemiński</option>
                                                    <option value="14">Dariusz Skłodowski</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="">
                                        <div class="row">
                                            <div class="col-md-12 mt-15 mb-15"> <span>Upewnij się, że wprowadzone dane są poprawne - Twojego głosu już nie zmienisz kurwa. Poza tym pitoku jebany chuj ci w dupe</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>