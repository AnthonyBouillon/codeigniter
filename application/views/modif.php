<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification</title>
</head>
<body>
    <form action="" method="POST">
	
        <input type="text" name="pro_libelle" value="<?= !empty($produits->pro_libelle) ? $produits->pro_libelle : ''; ?>"><br>
	
        <input type="text" name="pro_ref" value="<?= $produits->pro_ref; ?>"><br>
	
        <input type="hidden" name="pro_id" value="<?= $produits->pro_id?>"><br>
	
        <input type="submit" value="Modifier"><br>
    
    </form>
</body>
</html>