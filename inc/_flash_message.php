<?php
    if (isset($_SESSION["message"])) {
      ?>
        <div class="alert alert-primary" role="alert">
        <?= htmlspecialchars($_SESSION["message"], ENT_QUOTES); ?>
        </div>
      <?php

      unset($_SESSION["message"]);
    }
?>