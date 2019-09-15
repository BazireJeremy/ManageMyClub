<div class="container">
 
    <div class="row">
        <div class="col-sm-6">
            <h2 style="text-align: center">Creation Competition</h2>
        <form action="index.php?uc=competition&action=validnouveau" method="post" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="nomC" class="center">Nom de la compétition :</label>
                    <input type="text" class="form-control" id="nomC" placeholder="Nom" name="nomC" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            
            <div class="form-group">
                <label for="date">Date compétition:</label>
                    <input class="form-control" type="date" id="date" name="date" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="lieu">Lieu:</label>
                    <input type="text" class="form-control" id="lieu" placeholder="Lieu" name="lieu" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
            </div>
            <div class="form-group">
                <label for="genre">Genre :</label>
                    <input type="text" class="form-control" id="genre" placeholder="genre" name="genre" required>
                    <div class="valid-feedback">Correct.</div>
                    <div class="invalid-feedback">Veuillez renseigner ce champ.</div>
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