<?php include_once("headerAdmin.php"); ?>

<div class="container" style="padding: 20px;">
  <div class="d-flex justify-content-between align-items-end mb-3">
    <h1>Ajouter Evaluation</h1>
    <div>
      <button id="afficherEtd" class="btn btn-dark" data-bs-toggle="collapse" href="#listeEval">
        <i class="fas fa-list"></i> Afficher les Evaluations
      </button>
    </div>
  </div>
  <div id="success" class="alert alert-success" role="alert" hidden></div>
  <div id="failed" class="alert alert-danger" role="alert" hidden></div>
  
  <form id="formulaire">
    <h1 id="succes" style="background-color: lightgreen; color:darkgreen; font-size: medium; padding :10px;" hidden>Insertion faite avec succès</h1>
    <h1 id="failed" style="background-color: #FFCCCB; color:darkred; font-size: medium; padding :10px;" hidden>Insertion non faite</h1>
    <div class="form-group row mb-3">
      <input type="hidden" id="id">
      <label for="type" class="col-sm-2 col-form-label">Type</label>
      <div class="col-sm-10">
        <select class="form-select" id="type">
          <option selected>Choisissez un type d'evalustion</option>
          <option value="1">Projet</option>
          <option value="2">Devoirs</option>
          <option value="3">Examens</option>
        </select>
        <small id="stype" style="color:red" hidden>Ce champ doit être rempli</small>
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="module" class="col-sm-2 col-form-label">Module</label>
      <div class="col-sm-10">
        <select class="form-select" id="module">
          <option selected>Choisissez un type d'evalustion</option>
          <option value="1">mod1</option>
          <option value="2">mod2</option>
          <option value="3">mod3</option>
        </select>
        <small id="smodule" style="color:red" hidden>Ce champ doit être rempli</small>
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="date" class="col-sm-2 col-form-label">Date</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="date" id="date" required>
        <small id="sdate" style="color:red" hidden>Ce champ doit être rempli</small>
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="heure" class="col-sm-2 col-form-label">Heure</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" name="heure" id="heure" required>
        <small id="sheure" style="color:red" hidden>Ce champ doit être rempli</small>
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="salle" class="col-sm-2 col-form-label">Salle</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="salle" id="salle" placeholder="A" required>
        <small id="ssalle" style="color:red" hidden>Ce champ doit être rempli</small>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-10 offset-sm-2 d-flex justify-content-between">
        <div>
          <button id="ajouter" type="submit" class="btn btn-primary me-2">
            <i class="fas fa-user-plus"></i> Ajouter un évaluation
          </button>
          <button type="reset" class="btn btn-outline-primary">
            <i class="fas fa-undo"></i> Réinitialiser
          </button>
        </div>
      </div>
    </div>
  </form>

  <h3 id="res" class="my-3 text-center" style="color:green" hidden></h3>

  <div class="row collapse mt-5" id="listeEval">
    <div class="form-group row mb-3">

      <div class="input-group">
        <div class="form-outline flex-grow-1">
          <input type="search" id="searchBar" class="form-control" placeholder="Chercher" />
        </div>
        <button type="button" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    <table id="evaluations" class="table table-bordered border-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Type</th>
          <th scope="col">Module</th>
          <th scope="col">Date</th>
          <th scope="col">Heure</th>
          <th scope="col">Salle</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody id="listStudent">
        <tr>
          <th scope="row">1</th>
          <td>Type</td>
          <td>Module</td>
          <td>markcom</td>
          <td>2000</td>
          <td>GIiiiiiii</td>
          <td class="justify-content-center">
            <button class="btn btn-primary mx-1">
              <a class="text-reset text-decoration-none" href="ajouterNote.php"><i class="fas fa-pen"></i> Noté un Etudiant</a>
            </button>
            <button class="btn btn-light btn-outline-secondary mx-1">
              <i class="fas fa-pencil-alt"></i> Modifier
            </button>
            <button class="btn btn-danger">
              <i class="fas fa-trash"></i> Supprimer
            </button>
          </td>

        </tr>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>