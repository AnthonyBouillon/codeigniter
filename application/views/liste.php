
    <a href="<?= 'ajout' ?>">Ajouter un produit</a>
    <a href="<?= '../boutique/list' ?>">Exercice gestion du panier</a>
    <?php

        foreach($liste as $row){
            echo $row->pro_id . '<br>';
            echo $row->pro_ref . '<br>';
            echo $row->pro_libelle . '<br>';
            echo $row->pro_description . '<br><hr><br>';
        }

    ?>
