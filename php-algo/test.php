<?php 
if(!empty($_GET)){
  if(isset($_GET["nom"]) && !empty($_GET["nom"])){
    
    $nom = strip_tags($_GET["nom"]);
   define("max", "15");
  if (strlen($nom) > max){
    echo '<div class="alert alert-danger alert-dismissible container text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Erreur!</strong> votre nom est trop long </div>';
  }else{
   $voyelle = preg_match_all('/[aeuoiy]/i', $nom);
   echo "<div class='alert alert-success alert-dismissible container text-center'>
   <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
   Votre nom contient $voyelle voyelles</div>";
  }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to my Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form method="get" action="">  
    <div class="container input-group mt-3">
      <input type="text" class="form-control" placeholder="veuillez entrer votre nom svp" name="nom">
      <input class="btn btn-primary" type="submit">
    </div>
</form>

</body>
</html>
