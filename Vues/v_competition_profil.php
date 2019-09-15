<div class="row " style="margin-top: 70px">
    <div class="col-xs-6 col-sm-4" style="text-align: center">
        
            <?php
             afficheProfilCompetition($idcom);
            ?>
            
            
        
        
    </div>
    <div class="col-xs-6 col-sm-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Inscrit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Classement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">tt</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content"> 
          <div id="home" class="container tab-pane active"><br>
            <h2 style="text-align:center"> Liste des inscrits  </h2>
            <div class="list-group">
                <?php
                echo '<a href="index.php?uc=competition&action=inscrire&c= '.$_GET["c"].'" class="list-group-item list-group-item-action list-group-item-info"> <img style="display:block; margin : auto;" src="Images/add.png" class="img-rounded border" alt="modif" name="modif"> </a>';
                ?>
            </div>
            </div>
          <div id="menu1" class="container tab-pane fade"><br>
              <div class="row align-items-center justify-content-center">
                  <h3 >Liste Amis</h3>
              </div>
              
            
          </div>
        </div>
    </div>
    <!--<div class="clearfix visible-xs-block"></div>-->
    <div class="col-xs-6 col-sm-4">
      
    </div>
</div>
        
    </body>
</html>