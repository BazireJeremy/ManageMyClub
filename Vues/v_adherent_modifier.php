
    <div class="container">
 
 <div class="row">
     <div class="col-sm-6">
         <h2 style="text-align: center">Modification du profil</h2>
         <?php
            echo '<form action="index.php?uc=adherent&action=validmodif&p='.$_GET["p"].'" method="post" class="needs-validation" novalidate>';
            remplirChampAdherent($idcom);
         ?>
         
         <button  type="submit" class="btn btn-info btn-block" >Modifier</button>
     </form>
     </div>
 
 </div>
 </div>
 <?php

 ?>
 <script>
     // Disable form submissions if there are invalid fields
     (function() {
     'use strict';
     window.addEventListener('load', function() {
         // Get the forms we want to add validation styles to
         var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
             }
             form.classList.add('was-validated');
         }, false);
         });
     }, false);
     })();
 </script>
 </body>
</html>