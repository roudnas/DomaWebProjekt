<?php

  if (isset($_SESSION['userRole']) && $_SESSION['userRole'] == "Admin") {
      echo "<button class='btn btn-dark mb-2' data-toggle='modal' data-target='#userDeleteModal'>Smazat uživatele</button>
      <button class='btn btn-dark mb-2' data-toggle='modal' data-target='#userAddModal'>Přidat uživatele</button>";
  }

 ?>
