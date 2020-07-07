<?php
    $options = array("Granulé bois", "Gaz naturel", "Fioul", "Electrecité", "Gaz propane");

    if (isset($u)) {
        $modechauffage = $u->getModeChauffage();
    }
 ?>

<!-- ETAPE 3 -->
<div class="container" id="etape2">
    <div>
        <div class="form-group">
            <label for="modeChauffage">Méthode de chauffage:</label>
            <select class="form-control" id="modeChauffage">

                <?php

                    foreach ($options as $value) {
                        if ($modechauffage == $value) {
                            echo '<option value="'.$value.'" selected>'.$value.'</option>';
                        } else {
                            echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                    }

                 ?>

            </select>
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg previous">Précédent</button>
    <button type="button" class="btn btn-primary btn-lg pull-right" id="next2">Suivant</button>

</div>
