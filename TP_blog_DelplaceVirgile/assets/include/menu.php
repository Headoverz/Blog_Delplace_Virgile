     <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header ">
                <a class="navbar-brand" href="index.php"><h3>Blog de Virgile <small>Pour m'initier à PHP</small></h3></a>;
            </div>
            
            <!-- Page du site -->
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="index.php">Accueil</a>
                    </li>
                     <?php if($connect == true ){ ?>
                    <li class="page-scroll">
                        <a href="ajouterArticle.php">Rédiger un article</a>
                    </li>
                    <?php } ?>

                     <?php if($connect == false ){ ?>
                     <li class="page-scroll">
                        <a href="inscription.php">Inscription</a>
                    </li>
                    <li class="page-scroll">
                        <a href="connexion.php">Connexion</a>
                    </li>
                     <?php } else { ?>
                      <li class="page-scroll">
                        <a href="assets/include/action.php?action=deconnexion">Deconnexion</a>
                    </li>
                     <?php } ?>
                </ul>
            </div>
            <!-- Fin Page du site -->
            
            <!-- Formulaire de recherche -->
            <div class="col-xs-4 pull-right" >
                <form action="index.php"  method="post" name="formSearch">
                    <div class="row col-xs-12">
                        <div class="col-xs-10 "><input type="text" name="keyWord" class="form-control col-xs-12 " id="searchInput" value=rechercher></div>
                        <div class=""><img src="assets/images/loupe_logo.png" alt="Submit" id="loupeLogo" class="img-responsive pull-right" onclick="document.forms['formSearch'].submit();" /></div>
                    </div>
                </form>
            </div>
            <!-- Fin Formulaire de recherche -->
           
        </div>
      
    </nav>
    <!-- Fin Navigation -->