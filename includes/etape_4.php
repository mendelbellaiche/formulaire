<?php
    if (isset($u)) {
        $email = $u->getEmail();
        $pwd = $u->getPwd();
    }
 ?>

 <!-- ETAPE 4 -->
<div class="container" id="etape3">

    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" value="<?php echo $email; ?>">
    </div>

    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
    </div>

    <button type="button" class="btn btn-primary btn-lg previous">Précédent</button>
    <button type="button" class="btn btn-success btn-lg pull-right" id="validation">Valider</button>

</div>
