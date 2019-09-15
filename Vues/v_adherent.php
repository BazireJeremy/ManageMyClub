
<div class="container">
    <h2 style="text-align: center"> Liste des adherents</h2>
    <input class="form-control" id="myInput" type="text" placeholder="Rechercher...">
    <br>
    <br>
    <div class="list-group" id="myList">
        <?php
            AfficheListeAdherents($idcom);
        
        ?>
    </div>

</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList a").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
      </body>
</html>

