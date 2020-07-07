<!-- ETAPE 1 -->
<div class="container" id="etape0">
    <?php
        if (isset($u)) {
            $nom = $u->getNom();
            $prenom = $u->getPrenom();
        }
    ?>
    <div>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" value="<?php echo $nom; ?>">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" value="<?php echo $prenom; ?>">
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg pull-right" class="next" id="next0">Suivant</button>

</div>
