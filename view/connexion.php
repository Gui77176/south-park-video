<?php $title='Connexion'; ?>

<?php ob_start(); ?>

 <!-- Connexion-->
 <section class="page-section" id="connexion">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Connexion</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="connexionForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Email *" required="required" data-validation-required-message="Entrez votre Email." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Mot de passe *" required="required" data-validation-required-message="Entrez votre mot de passe." />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                        </div>
                        
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>