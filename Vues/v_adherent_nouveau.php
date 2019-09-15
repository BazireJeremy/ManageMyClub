
    <div class="container">
 
    <div class="row">
        <div class="col-sm-6">
            <h2 style="text-align: center">Creation adherent</h2>
        <form action="index.php?uc=adherent&action=validnouveau" method="post" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nom" class="center">Nom:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="date">Date de naissance:</label>
                    <input class="form-control" type="date" id="date" name="date" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                    <input type="tel" maxlength="10" class="form-control" id="telephone" placeholder="Enter username" name="telephone" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Enter username" name="adresse" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="compA">Complément adresse:</label>
                    <input type="text" class="form-control" id="compA" placeholder="Enter username" name="compA" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="codeP">Code postal:</label>
                    <input type="text" class="form-control" id="codeP" placeholder="Enter username" name="codeP" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="ville">Ville:</label>
                    <input type="text" class="form-control" id="ville" placeholder="Enter username" name="ville" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="email" style="text-align: center">Adresse mail:</label>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">@</span>
                    </div>
                        
                    <input type="text" class="form-control" id="email" placeholder="Enter username" name="email" required>
            
                </div>
                <div class="valid-feedback">Correct.</div>
                <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="numL">Numéro de licence:</label>
                    <input type="text" class="form-control" id="numL" placeholder="Enter username" name="numL" maxlength="10">
                    
            </div>
            <div class="form-group">
                <label for="sexe">Sexe:</label>
                <div class="radio">
                    <label><input type="radio" name="sexe" id="sexe" value="homme">Homme</label>
                    <label><input type="radio" name="sexe" id="sexe" value="femme">Femme</label>
                </div>
            </div>
            
            <button  type="submit" class="btn btn-primary btn-block" >Valider</button>
        </form>

        
        </div>
    
    </div>
    </div>
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
