<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal-back.css">
    <link rel="stylesheet" href="styles-old.css">
    <title>Hello, world!</title>
  </head>
  <body>
   
    <?php
      include ('menu BO.php');
      ?>

      <?php 
	include ("menu-horizontal-Back.php"); 
	?>
      
      <br>
      <section>
        <h2>Informations Société</h2>
        
        <form class="form4" action="" method="post">
  
          <div class="form-group row">
              <label for="nom_societe" class="col-sm-2 col-form-label">Nom de la société</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nom_societe" placeholder="Société 1">
              </div>
          </div>
  
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">SIRET</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email" placeholder="123456789123">
            </div>
         </div>
  
          <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Référent Société</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="réferent@societe1.com">
              </div>
          </div>
  
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="email" placeholder="06 88 77 55 21">
            </div>
          </div>
        
  
          <div class="form-group row">
            <label for="nom_societe" class="col-sm-2 col-form-label">Référent Back Office</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nom_societe" placeholder="Admin">
            </div>
          </div>
  
          <div class="form-group row">
              <label for="role" class="col-sm-2 col-form-label">Statut</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="licence" placeholder="crée">
                </div>
          </div>
  
          <div class="form-group4">
                  <label for="statut" class="col-sm-2 col-form-label">NB de Licences</label>
                  <div class="col-sm-1">
                    <input type="number" class="form-control" id="statut" placeholder="5">
                  </div>
    
            <label for="statut" class="col-sm-2 col-form-label">NB de Licences disponibles</label>
            <div class="col-sm-1">
              <input type="number" class="form-control" id="statut" placeholder="4">
            </div>
          </div>
      
          <div class="text-center button" style="display:-webkit-inline-box ;">
              <input type="submit" class="btn btn-secondary" value="Annuler">
              <input type="submit" class="btn btn-success" value="Enregister">
          </div>
  
      </form>        
  
  
  
      </div>
        
           
    </section>

      <h2 class="societegerer1" style="color: #ce352c;">Licences Distribué:</h2>

      <table class="table text-center mx-auto m-5">
        <thead>
          <tr class="table table-secondary">
            <th scope="col" class="text-center">Personne</th>
            <th scope="col" class="text-center">Statut</th>
            <th scope="col" class="text-center">Action</th>
            <th scope="col" class="text-center">Statut</th>
          </tr>
        </thead>

          <tbody style="text-align: center;">
            <tr>
              <td class="text-center">referent@societe1.com</td>
              <td class="text-center">Invitation Envoyée</td>
              <td class="text-center">Supprimer</td>
              <td class="text-center">Actif</td>
            </tr>
          </tbody>

      </table>      


     
        <footer style="bottom: -273px !important;">
          <a href="M9.html"><button><</button></a>
          <p class="copyright">Copyright Eurêka C.I</p>
          <img class="logofooter" src="img/logosign.png" alt="">
          <a href="M11.html"><button>></button></a>
      </footer>
    
      
 
      

      <script src="maquette.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>