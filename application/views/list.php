<?php


?>
<style>
</style>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Liste de produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Panier</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="container">
    <table class="table">
        <tr>
            <th>Référence</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Prix</th>
        </tr>
        <tr>
            <?php
            foreach($list as $row){
                echo '<tr>';
                echo '<td>' . $row->pro_ref . ' <a href="add_modif?id=' . $row->pro_id . '">Modifier</a></td>';
                echo '<td>' . $row->pro_libelle . '</td>';
                echo '<td><img src="../../assets/image/' . $row->pro_id . '.' . $row->pro_photo . '" class="img-fluid" width="150px"></td>';
                echo '<td>' . $row->pro_prix . '</td>';
                echo '</tr>';
            } 
            ?>
        </tr>
    </table>
</div>
