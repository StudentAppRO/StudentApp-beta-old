<!DOCTYPE html>
<html lang="ro">

<?php
include "includes/head.php";
?>

<body>

    <!-- loading screen -->
    <div class="se-pre-con"></div>

    <!--Content start-->

    <?php
    include "includes/header.php";
    ?>


    <main role="main">

        <!-- Form contacteaza-ne -->
        <div class="row" style="margin: auto;">


            <div class="contact_form my-5">
                <div class="col contact_form_header">
                    <div class="row">
                        <div class="card col-10 col-md-8 col-lg-6 mx-auto">
                            <!-- TODO: redesign, add more contact things  -->
                            <br>
                            <div class="loading mx-auto">
                                <h2>Contactează-ne</h2>
                                <br>
                                <p>Folosind acest formular ne veți ajuta să îmbunătățim aplicația. Puteți sugera câteva
                                    modificări,
                                    raportați erori ca să ajutați alți elevi.</p>
                                <br>
                            </div>
                            <br>
                            <br>
                            <div class="container form-top ">

                                <div class="form_in loading">
                                    <div class="panel panel-danger">
                                        <div class="panel-body">

                                            <form id='contact' name='contact' method='POST' data-netlify-recaptcha="true" data-netlify="true" netlify-honeypot="bot-field" action="/StudentApp/success.html/?success=true">
                                                <!-- Currently with no action="/StudentApp/success.html" tag in <form> -->
                                                <input type='hidden' name='form-name' value='contact' />
                                                <div class="form-group">
                                                    <!-- <label><i class="fa fa-user" aria-hidden="true"></i> Name</label> -->
                                                    <input type="text" name="name" class="form-control" placeholder="Nume">
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label> -->
                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label> -->
                                                    <textarea rows="3" name="message" class="form-control" placeholder="Mesajul dumnevoastră..."></textarea>
                                                </div>
                                                <!-- Recaptcha -->
                                                <div netlify-recaptcha></div>
                                                <br>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-raised btn-block btn-success">Trimite →</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include "includes/footer.php"; ?>

</body>

</html>