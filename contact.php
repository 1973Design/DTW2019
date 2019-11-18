<html>

<head>
    <title>DTW Timmerwerken</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Neem contact op met DTW Timmerwerken voor dakramen nieuwbouw en verbouw projecten">
    <meta name="author" content="">


    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:400,500,600,700,800&display=swap" rel="stylesheet">
    <script defer src="assets/fontawesome/js/all.js"></script>

</head>

<body>
    <main class="page-content">
        <header>
        <?php include '_navigation.php';?>

        </header>
        <div class="page-banner">
            <div class="row justify-content-between">

                <div class="col-lg-8 col-6">
                    <div class="page-title">
                        <h3>Contact</h3>

                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="section-banner">
                </div>
            </div>
        </div>
        <div class="algemene-pagina" >
        <!-- content formulier-->
            <div class="row justify-content-center">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12 ">
                    <div class="content">
                        <h2>Contact opnemen?</h2>
                        <p> Vragen over het plaatsen van een dakraam, verbouw of nieuwbouw mogelijkheden? Of wilt u graag dat er contact wordt opgenomen. 
                            Vul onderstaande formulier in en we nemen z.s..m contact met u op.</p>
                        <form method="post" action="form-to-email.php" name="myemailform">
                            <div class="form-group">
                                <label for="visitor_email">Email address</label>
                                <input type="email" name="visitor_email" class="form-control" id="exampleFormControlInput1" placeholder="naam@voorbeeld.com | type hier uw e-mail adres">
                            </div>
                            <div class="form-group">
                                <label for="question">Vraag over:</label>
                                <select class="form-control" name="question" id="exampleFormControlSelect1">
                                    <option>Dakramen</option>
                                    <option>Verbouw</option>
                                    <option>Niewbouw</option>
                                    <option>Overige</option>
                                    <option>Offerte aanvraag</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Opmerking:</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Verstuur formulier</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div> <!-- end content formulier-->
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-12 offset-md-3">
                    <i class="fas fa-phone mt-3 mb-3 green" aria-hidden="true"></i>
                    <h4 class="green">Telefoon</h4>
                    <p> Mobiel: 06 23 58 26 50<br/>
                        Vast: 072 5616506<br/>
                        Stuur een <a href="https://wa.me/310623582650" target="_blank"><img src="images/algemeen/whatsapp.png"/></a>
                    </p>
                        

                </div>
                <div class="col-md-3 col-sm-12">
                    <i class="fas fa-globe  mt-3 mb-3 green" aria-hidden="true"></i>
                    <h4 class="green">E-mail</h4>
                    <p>info@dtwtimmerwerken.nl</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <i class="fas fa-building  mt-3 mb-3 green" aria-hidden="true"></i>
                    <h4 class="green">Overige gegevens</h4>
                    <p>KvK-nummer:37128304</p>
                </div>
            </div>
       </div>

       

        <?php include '_footer.php';?>
    </main>



    <!-- Bootstrap core JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "></script>

    <script src="assets/js/jquery/jquery-3.3.1.slim.min.js "></script>

    <script src="bootstrap-4/js/bootstrap.min.js "></script>
</body>

</html>