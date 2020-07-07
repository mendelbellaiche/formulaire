<!-- ETAPE 2 -->
<div class="container" id="etape1">
    <?php
        if (isset($u)) {
            $superficie = $u->getSuperficie();
        }
    ?>
    <div>
        <div class="form-group">
            <label for="superficie">Surface en m<sup>2</sup>:</label>
            <input type="number" class="form-control" id="superficie" value="<?php echo $superficie; ?>">
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg previous">Précédent</button>
    <button type="button" class="btn btn-primary btn-lg pull-right" id="next1">Suivant</button>

</div>
