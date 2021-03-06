<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    <link rel="stylesheet" href="css/timeline.css">
    <style>
        a {color: black; }
        a:hover {text-decoration: none; color:  linear-gradient(to bottom, #729EBF 0%, #333A40 100%); }
        .img_logo {position: absolute; left: 4%; top: 8%; }

        .img_logo img {height: 40px; } 
        .contenu {margin-top: 40px; display: flex; }

        .date_fin {position: relative; left: 0%; }
        label#date_fin.col-lg-4.col-form-label {position: relative; left: 20%; }
        .register {position: relative; left: 13%; }
        .gerer_participants {background-color: rgb(134, 174, 226); }
        th {color: white; }
        td {background-color: whitesmoke; text-align: center; }
        .gestion {position: relative; left: -16%; }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }


        .settings {display: flex; justify-content: space-between;  }
        .settings1 {display: flex; justify-content: space-between; }
        .facts {border: 1px solid black; border-radius: 2em; background-color: #ce352c; color: white; }
        /* .new_user {position: absolute; left: 59%; top: 50%; } */
        /* .facts .new_user a {background-color: brown; } */
        .overlay {position: fixed; top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.7); transition: opacity 500ms; visibility: hidden; opacity: 0; }
        .overlay:target {visibility: visible; opacity: 1; }
        #popup4 {position: absolute; z-index: 5; height: 57em; top: 19%; left: 10%; width: 80%; }
        #popup3 {position: absolute; z-index: 5; height: 57em; top: 19%; left: 10%; width: 80%; }


        #popup1 {position: absolute; z-index: 5; height: 57em; top: 19%; left: 10%; width: 80%; }
        span {font-size: 1em; }
        .popup {margin: 70px auto; padding: 20px; background: #fff; border-radius: 5px; width: 50%; position: relative; transition: all 5s ease-in-out; }
        .close {position: absolute; top: 5%; right: 3%; font-size: xx-large; }
        .valid {text-align: center; margin-top: 20px; }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <title>Détails du projet</title>
</head>
<body>
   <?php 
	include ("fo-header.php"); 
	?>
	<?php 
	include ("menu-horizontal.php"); 
	?>


    <!-- <div class="img_logo">
        <img src="img/image001.png" alt="">
    </div> -->
    
    <div class="contenu">

        <div class="container form">
        
            <div class="form-group row">
                <div class="text-center mx-auto projet">
                    <h1  style="color: #ce352c;">Acronyme du projet</h1>
                </div>
            </div>
            <div class="form-group row" style="display: flex;">
                <div class="text-center mx-auto">
                    <button type="button" class="btn btn-outline-primary">Collaboratif</button>
                    <button type="button" class="btn btn-outline-secondary">PPP - R&D</button>
                    <button type="button" class="btn btn-outline-success">Eligible RDI</button>
                </div>
            </div>
<!-- 
            <div class="form-group row">
                <label for="projet" class="col-sm-2 col-form-label">Projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="projet">
                </div>
            </div> -->
            <div class="form-group row">
                <label for="titre" class="col-lg-2 col-form-label">Titre</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="titre" placeholder="Développement IP" disabled>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="statut" class="col-lg-2 col-form-label">Statut</label>
                <div class="col-lg-8">
                    <select id="statut" class="form-control"  disabled>
                        <option selected>En cours</option>
                        <option>Création</option>
                        <option>Terminé</option>
                    </select>                
                </div>
            </div> -->
            <div class="form-group row">
                <label for="liste_projets" class="col-lg-2 col-form-label">Résumé</label>
                <div class="col-lg-8">
                    <textarea class="form-control" id="liste_projets" rows="3"  disabled>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ratione rem repellat dolores ut recusandae asperiores corrupti, quo, id provident dolorem voluptatum excepturi perspiciatis quia possimus! Laudantium sed dolore labore?</textarea>
                </div>    
            </div>
            <div class="form-group row">
                <label for="chef_projet" class="col-lg-2 col-form-label">Chef du projet</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="chef_projet" placeholder="Sylvain Clément"  disabled>
                </div>
            </div>
            <div class="bloc">
                <div class="date">
                    <!-- <div class="date_debut form-group row">
                        <label for="date_debut" class="col-lg-4 col-form-label" id="date_fin">Date de début</label>
                        <div class="col-lg-2" style="position: relative; left: -17%;">
                          <input type="date" class="form-control" id="date_debut">
                        </div>
                        <div class="settings"  style="margin-left: 5%;" >
                            <div class="gestion">
                                <a href="bo-form_utili.php"><input type="button" class="btn btn-success" value="Fichiers joints"></a>
                            </div>
                            <div class="new_user"  style="margin-left: -14%;">
                                <a href="bo-form_utili.php"><input type="button" class="btn btn-success" value="Gestion des participants"></a>
                            </div>
                            <div class="new_user" style="position: relative; left: 13%;">
                                <a href="bo-form_utili.php"><input type="button" class="btn btn-success" value="Modifier le projet"></a>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="date_debut" class="col-lg-2 col-form-label">Date de début</label>
                        <div class="col-lg-2">
                          <input type="date" class="form-control" id="date_debut"  disabled>
                        </div>
                        <label for="date_fin" class="col-lg-4 col-form-label" id="date_fin">Date de fin</label>
                        <div class="col-lg-2">
                            <input type="date" class="form-control" id="date_fin"  disabled>
                        </div>
                    </div>
                    <div class="form-group row" style="position: relative; left: -12%; margin-top: 7%;">
                        <div class="col-lg-4 mx-auto settings"  style="margin-left: 5%;">
                            <div class="gestion">
                                <a href="fo-liste-fichiers.php"><input type="button" class="btn btn-success" style="width: 30.2vh;" value="Fichiers joints"></a>
                            </div>
                            <div class="new_user"  style="margin-left: -12%;">
                                <a class="button" href="#popup3"><input type="button" class="btn btn-success" style="width: 30.2vh;" value="Gestion des participants"></a>
                            </div>
                            <div class="new_user" style="position: relative; left: 5%;">
                                <a href="#popup4"><input type="button" class="btn btn-success" style="width: 30.2vh;" value="Modifier le projet"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" style="position: relative; left: -12%;">
                        <div class="col-lg-4 mx-auto settings"  style="margin-left: 5%;">
                            <div class="gestion">
                                <a href="#"><input type="button" class="btn btn-success" style="width: 30.2vh;" value="Ajouter un fichier"></a>
                            </div>
                            <div class="new_user"  style="margin-left: -12%;">
                                <a href="fo-new-user.php"><input type="button" class="btn btn-success" style="width: 30.2vh;" value="Ajouter un participant"></a>
                            </div>
                            <div class="new_user" style="position: relative; left: 5%;">
                                <a class="button" href="#popup1" ><input type="submit" class="btn btn-success" style="width: 30.2vh;" value="Ajouter un fait marquant"></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="date_fin form-group row">
                        <label for="date_fin" class="col-lg-4 col-form-label" id="date_fin">Date de fin</label>
                        <div class="col-lg-2" style="position: relative; left: -17%;">
                            <input type="date" class="form-control" id="date_fin">
                        </div>
                        <div class="settings1">
                            <div class="gestion">
                                <a href="#popup3"><input type="button" class="btn btn-success" value="Ajouter un fichier"></a>
                            </div>
                            <div class="new_user"  style="margin-left: -16%;">
                                <a href="bo-form_utili.php"><input type="button" class="btn btn-success" value="Ajouter un particpant"></a>
                            </div>
                            <div class="new_user">
                                <a class="button" href="#popup1"><input type="submit" class="btn btn-success" value="Ajouter un fait marquant"></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div id="popup4" class="overlay">
        <div class="popup">
            <h5 class="text-center m-4" style="font-size: 2em;">Modifier le projet</h5>    
            <a class="close" href="#">&times;</a>
            <div class="form-group row">
                <label for="titre" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="titre" placeholder="Développement IP">
                </div>
            </div>
            <div class="form-group row">
                <label for="statut" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-8">
                    <select id="statut" class="form-control" >
                        <option selected>En cours</option>
                        <option>Création</option>
                        <option>Terminé</option>
                    </select>                
                </div>
            </div>
            <div class="form-group row">
                <label for="liste_projets" class="col-sm-2 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="liste_projets" rows="3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ratione rem repellat dolores ut recusandae asperiores corrupti, quo, id provident dolorem voluptatum excepturi perspiciatis quia possimus! Laudantium sed dolore labore?</textarea>
                </div>    
            </div>
            <div class="form-group row">
                <label for="chef_projet" class="col-sm-2 col-form-label">Chef du projet</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="chef_projet" placeholder="Sylvain Clément">
                </div>
            </div>
            <div class="bloc">
                <div class="date">
                    <div class="form-group row">
                        <label for="date_debut" class="col-sm-2 col-form-label">Date de début</label>
                        <div class="col-sm-2">
                          <input type="date" class="form-control" id="date_debut">
                        </div>
                        <label for="date_fin" class="col-sm-4 col-form-label" id="date_fin">Date de fin</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" id="date_fin">
                        </div>
                    </div>      
                </div>
            </div>
            <div class="text-center new_user">
                <a href="fo-projet-02.php"><input type="button" class="btn btn-success" value="Modifier"></a>
            </div>      
        </div>
    </div>

    <div id="popup3" class="overlay">
        <div class="popup">
            <h5 class="text-center m-4" style="font-size: 2em;">Gérer les participants</h5>    
            <a class="close" href="#">&times;</a>
            <table class="table table-bordered col-md text-center mx-auto m-5" style="max-width: 90%;">
                <thead>
                    <tr class="gerer_participants">
                        <th>Participants</th>
                        <th>Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Administrateur</td>
                        <td style="background: white; border: white;"><div><a href="fo-admin-01.php"><img src="https://img.icons8.com/small/36/000000/edit.png"/></a></div></td>
                        <td style="background: white; border: white;"><div><a href="#"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/36/000000/filled-trash.png"/></a></div></td>

                    </tr>
                    <tr>
                        <td>Kévin Njifenju</td>
                        <td>Administrateur</td>
                        <td style="background: white; border: white;"><div><a href="fo-admin-01.php"><img src="https://img.icons8.com/small/36/000000/edit.png"/></a></div></td>
                        <td style="background: white; border: white;"><div><a href="#"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/36/000000/filled-trash.png"/></a></div></td>
                    </tr>
                    <tr>
                        <td>Sylvain Clément</td>
                        <td>Chef de projet</td>
                        <td style="background: white; border: white;"><div><a href="fo-admin-01.php"><img src="https://img.icons8.com/small/36/000000/edit.png"/></a></div></td>
                        <td style="background: white; border: white;"><div><a href="#"><img onclick="confirm" class="delete" src="https://img.icons8.com/small/36/000000/filled-trash.png"/></a></div></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center new_user">
                <a href="fo-new-user.php"><input type="button" class="btn btn-success" value="Ajouter"></a>
            </div>
        </div>
    </div>
        
    <!-- <div class="facts">
        <h2 class="text-center mx-auto m-4" style="font-size: 2em;">Faits marquants</h2>
        <div class="text-center new_user">
            <a class="button" href="#popup1"><input type="submit" value="Ajouter un fait marquant"></a>
        </div>
    </div> -->

    <div id="popup1" class="overlay">
        <div class="popup">
            <h4 class="text-center mb-4">Projet : Développement ID</h4>
            <div class="projet form-group row" style="position: relative; left: 3%;">
                <label for="titre" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" id="projet" placeholder="Management and Entreprenurship (MSc)">
                </div>
            </div> 
            <!-- <h2 class="text-center m-4">Projet : <span>Développement IP</span> </h2> -->
            <a class="close" href="#">&times;</a>
            <div class="col-lg mx-auto">
                <textarea class="form-control" id="liste_projets" rows="11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis doloremque voluptate similique tempora eius alias, vitae reprehenderit est, molestiae illum vero consequatur illo quis blanditiis ab nemo consectetur delectus nisi! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat enim nesciunt, quod ratione impedit adipisci nulla eveniet corporis, ad porro iure, saepe soluta! Laboriosam possimus modi nostrum asperiores, nihil obcaecati.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem totam exercitationem ducimus architecto! Magnam doloribus ducimus velit ut provident assumenda! Omnis non suscipit architecto ad! Nemo tempora autem soluta rem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe id voluptate dolorum. Placeat quos natus quam non molestiae odio! Earum ipsa praesentium error repellendus tempora soluta molestias consectetur eum sint.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, culpa. Illo molestias excepturi natus, sunt laboriosam exercitationem dolorum? Labore, natus eligendi! Maiores vero labore et sed distinctio, quo aliquam laboriosam.</textarea>
            </div> 
            <div class="valid">
                <a href="fo-projet-02.php"><input type="button" class="btn btn-success" value="Valider">
            </div>         
        </div>
    </div> 

    <div class="main-container" style="margin-top: 7vh;">
        <section id="timeline" class="timeline-outer">
            <div class="container" id="content">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="text-center mx-auto facts">
                            <h1 style="font-size: 2.5em; text-decoration: none; ">Faits marquants</h1>
                        </div>
                        <ul class="timeline">
                            <a href="#"><li class="event">
                                <h4 style="font-size: 1em;" data-date="22 Sept 2020">22 Sept 2020 - <span>Kévin Njifenju</span></h4>
                                <p><h3>Management and Entreprenurship (MSc)</h3></p>
                                <p>
                                    This September 2015 I will begin an MSc in Management and Entrepreneurship at
                                    University of Sussex, to broaden my knowledge and gain skills necessary for my
                                    future in business and management.
                                </p>
                            </li></a>
                            <a href="#"><li class="event">
                                <h4 style="font-size: 1em;" data-date="12 Sept 2020">12 Sept 2020 - <span>Sylvain Clément</span></h4>
                                <p><h3>Claromentis</h3></p>
                                <p>
                                    Claromentis is an intranet software provider company. I started working at the
                                    Brighton office as a Marketing Designer while I was still attending my final year at
                                    the University of Sussex. My primary responsibilities included creating corporate
                                    identity
                                    for the company; I re-designed their website, and have created marketing materials
                                    such as brochures.
                                </p>
                                <p>
                                    Since graduating from university, I have also undertaken responsibilities for
                                    designing a product for the company. The roles I have been given have provided the
                                    perfect opportunity to implement the skills I have gained throughout my higher
                                    education, as well as experiencing the running of a successful business.
                                </p>
                            </li></a>
                            <a href="#"><li class="event">
                                <h4 style="font-size: 1em;" data-date="14 Juil 2020">14 Juil 2020 - <span>Kévin Njifenju</span></h4>
                                <p><h3>Games & Multimedia Environments BSc (Hons)</h3></p>
                                <p>Throughout my degree I have gained expansive knowledge of informatics areas including
                                    Human Computer Interaction, Multimedia Design and Development, Program Analysis and
                                    Design For my final year project, I created a 2D Puzzler Game for iOS
                                    called 'Flat Ball' and received a first. I therefore hope to release this game and
                                    further develop it to add new levels and improve the features.
                                </p>
                            </li></a>
                            <a href="#"><li class="event">
                                <h4 style="font-size: 1em;" data-date="22 Mai 2020">15 Juin 2020 - <span>Yanny Appadoo</span></h4>
                                <p><h3>1108 Studios</h3></p>
                                <p>This is a small startup that a friend and I created to gain more skills and apply
                                    those I had learned while completing my diploma. Since its inception, as a front -
                                    end web developer I have advised, designed and built web solutions for numerous
                                    clients.
                                </p>
                            </li></a>
                            <a href="#"><li class="event">
                                <h4 style="font-size: 1em;" data-date="22 Mai 2020">22 Mai 2020 - <span>Fleury Vuadiambo</span></h4>
                                <p><h3>IT Practitioners BTEC National Diploma</h3></p>
                                <p>This is where my interest in building things for interactive media began. During my
                                    first computing course I studied a range of core topics including multimedia design,
                                    database design, computer games development, computer networks and object
                                    oriented programming.
                                </p>
                            </li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- <a class="portfolio-link" target "_blank" href="http://www.erpik.com">
            <h6>www.erpik.com</h6>
        </a> -->
        <br />
    </div>


    <?php
        include ("footer.php");
    ?>
        
</body>
</html>