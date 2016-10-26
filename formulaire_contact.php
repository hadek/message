<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulaire contact</h2>
  <form action="traitement.php" method ="POST">
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="nom" name="nom" class="form-control" id="nom" placeholder="Enter nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prénom:</label>
      <input type="prenom" name="prenom" class="form-control" id="prenom" placeholder="Enter prénom">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
      
    <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <button type="submit" name ="Envoyer"class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

