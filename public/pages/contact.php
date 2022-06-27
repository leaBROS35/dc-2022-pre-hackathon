<?php include('../data/db.php'); ?>

<?php 
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
       var_dump($_POST);
        //mail('jenny.viannay75@gmail.com', 'sujet', $_GET['message']);
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $websiteTitle; ?> - Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <?php include('../layouts/header.php'); ?>
    <p><?= !empty($error) ? $error : '' ?></p>
    <form method="POST">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <div class="form-group">
        <label for="pet-select">Choose a pet:</label>

        <select name="technos" id="pet-select">
            <option value="">--Please choose an option--</option>
            <?php foreach ($about['technos'] as $techno ) { ?>
                <option value="<?php echo $techno; ?>"><?php echo $techno; ?></option>
            <?php } ?>
        </select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>