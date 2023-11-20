<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chouminage</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <form>
        <input list="html_elements" name="web_language">
            <datalist id="html_elements">
                @foreach ($villes as $ville)
                    <option value="{{ $ville->nomville  .' ('. $ville->codepostalville .')'}}"></option>
                @endforeach
            </datalist>
        <input type="submit" name="rechercher" value="Rechercher">    
    </form>
</body>
</html>