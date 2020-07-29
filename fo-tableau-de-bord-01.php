<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-horizontal.css">
    
    <style>
        /* body {background-color: white; color: brown; } */
        a:hover {text-decoration: none;  }
        
        .img_logo {position: absolute; left: 4%; top: 8%; }
        .img_logo img {height: 50px; }

        i {color: black; }
        .table thead th {background-color: #ce352c; color: white; }
        tr, td {background-color: #e6e6e6; }
        .btn-success {color: white; background-image: linear-gradient(to bottom, #729EBF 0%, #333A40 100%); border: none; }

    </style>
    <title>Tableau de bord modifié</title>
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
            
        <div class="container">
            
            <h1 class="text-center mt-4 mb-4"> Projets de l'année  <| 2020 |> <a href="#" style="font-size: smaller;"></h1>
             <!--   <h4 class="text-center"><a><i class="fas fa-arrow-alt-circle-left"></i></a> <| 2020 |> <a href="#"><i class="fas fa-arrow-alt-circle-right"></i></a></h4>
-->

            <table class="table table-bordered mx-auto m-5"  style="max-width: 67.9%;">
                <thead>
                    <tr class="table table-secondary">
                        <th scope="col">TABLEAU DE BORD</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Equipe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Nombre de projets de l'année en cours</th>
                        <td class="text-center">1</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre de projets de type CIR-CII</th>
                        <td class="text-center">1</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <th scope="row">Temps total passé en  heures</th>
                        <td class="text-center">70</td>
                        <td class="text-center">70</td>
                    </tr>
                </tbody>
            </table>
        
            <div class="button text-center m-4">
                <a href="fo-temps-01.php"><input type="button" class="btn btn-success" value="Mettre à jour votre feuille de temps"></a>
            </div>

        </div>

        <footer>
            <!-- <a href="index14.html"><button> < </button></a> -->
            <p class="copyright">Copyright Eurêka C.I</p>
            <img class="logofooter" src="logo.png" alt="">
            <!-- <a href="M1.html"><button> > </button></a> -->
            <!-- <a href="index4.html"><button> > </button></a> -->
        </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>