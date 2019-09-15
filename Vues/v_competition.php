<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="container">
    <h2 style="text-align: center"> Liste des compétitions</h2>
                                                             
    <div class="table-responsive">  
    <div class="list-group">        
        <table class="table">
            <thead>
            <tr>
                <th>Date</th>
                <th>Compétition</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
           
    
        <?php
            AfficheCompetitions($idcom);
        
        ?>
    
        
            </tbody>
        </table>
    </div>
    </div>
</div>
      </body>
</html>