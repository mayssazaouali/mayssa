<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
    <script src="add-product.js">
</script>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>
<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: right;
  padding: 5px;
  background-color: #FFFFFF;

}

tr:nth-child(even){background-color: #CD5C5C}

th {
  background-color: #CD5C5C;
  
}

</style>
<body>
	
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                        <h1 class="tm-site-title mb-0">Dashboard</h1>
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="livraison.php" >
                                    Livreur
                                </a>
                                
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" >
                                    Livraison
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="products.html">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="accounts.html">Accounts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Billing</a>
                                    <a class="dropdown-item" href="#">Customize</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="login.html">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="">
                    
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form name="f"action="afficherLivreur.php"  method="post">
                                
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                      
                                        
                                        <?PHP
                                        include "../core/livraisonL.php";
                                        $livraison1L=new LivraisonL();
                                        $listelivraisons=$livraison1L->afficherLivraisons();

                                        //var_dump($listeEmployes->fetchAll());
                                        ?>
                                        <table border="1">
                                        <tr>
                                        <td>Reference</td>
                                        <td>Nom</td>
                                        <td>Prenom</td>
                                        <td>E-Mail</td>
                                        <td>Telephone</td>
                                        <td>Ville</td>
                                        <td>adresse</td>
                                        <td>Code postal</td>
                                        <td>Livreur</td>
                                        <td>Supprimer</td>
                                        <td>Imprimer</td>
                                       
                                        </tr>

                                        <?PHP
                                        foreach($listelivraisons as $row){
                                          ?>
                                         <tr>
                                        <td><?PHP echo $row['ref']; ?></td>
                                        <td><?PHP echo $row['nom']; ?></td>
                                        <td><?PHP echo $row['prenom']; ?></td>
                                        <td><?PHP echo $row['mail']; ?></td>
                                        <td><?PHP echo $row['numtel']; ?></td>
                                        <td><?PHP echo $row['ville']; ?></td>
                                        <td><?PHP echo $row['adresse']; ?></td>
                                        <td><?PHP echo $row['codepostal']; ?></td>
                                         
                                          <td><?PHP echo $row['livreur']; ?></td>
                                          <td><form method="POST" action="supprimerLivraison.php">
                                        <input type="submit" name="supprimer" value="supprimer">
                                          <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
                                          <td>  <?php echo '<a href="javascript:window.print()">Imprimer  </a>'; ?>></td>
                                        </form>
                                         </td>
                                        
                                       </tr>
                                      <?PHP
                                        }
                                        ?>
                                        </table>



    
                                            
                                    </div>

                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018. Created by
                    <a href="http://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a> |  Distributed by <a href="https://themewagon.com" class="text-white tm-footer-link">ThemeWagon</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>