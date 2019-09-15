<div class="row " style="margin-top: 70px">
    <div class="col-xs-6 col-sm-4" style="text-align: center">
        
            <?php
             afficheProfilAdherent($idcom);
            ?>
            
            
        
        
    </div>
    <div class="col-xs-6 col-sm-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Competition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Licence</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Frais</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="home" class="container tab-pane active"><br>
          <div class="table-responsive">          
            <table class="table">
                <thead>
                <tr>
                    <th>Date compétition</th>
                    <th>Nom de la compétition</th>
                    <th>Résultat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>35</td>
                    <td>New York</td>
                    <td>USA</td>
                </tr>
                </tbody>
            </table>
            </div>
          </div>
          <div id="menu1" class="container tab-pane fade"><br>
              <div class="row align-items-center justify-content-center">
                  <h3 >Liste Amis</h3>
              </div>
              
            <ul class="list-group">
                <?php
                    afficheListeAmis($idcom,$_SESSION['utilisateur']['email']);
                ?>   
            </ul>
          </div>
        </div>
    </div>
    <!--<div class="clearfix visible-xs-block"></div>-->
    <div class="col-xs-6 col-sm-4">
      
    </div>
</div>
        
    </body>
</html>
