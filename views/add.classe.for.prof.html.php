<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=webRoot?>/styles.css/addstyle.css">
</head>
<body>
    <div class="container">
            <div class="info2">
                <div class="type">
                    <p>Nom:<span id="typeField"><?=$prof['nom'] ?></span></p>
                </div>
                <div class="Date">
                    <p>Prenom:<span id="dateField"><?=$prof['prenom']?></span></p>
                </div>
                <div class="Date">
                    <p>Grade:<span id="dateField"><?=$prof['grade']?></span></p>
                </div>
            </div>
        <form action="<?=webRoot?>?page=liste_prof" method="POST">
            <div class="typeField">
                <label for="">Classe:</label>
                <div class="modulesfield">
                <?php if($classes):?>
                    <?php foreach($classes as $classe):?>
                        <div class="module">
                            <label for="<?=$classe["id"] ?>"><?=$classe["libelle"]?></label>
                            <input type="checkbox" name="classesIds[]" id="<?=$classe["id"] ?>" value="<?=$classe["id"] ?>">
                        </div>
                    <?php endforeach;?>
                <?php else:?>
                    <span>N/A</span>
                <?php endif;?>
                </div>
            </div>
            <div></div>
            <div class="btnField">
                <button id="a1" type="submit" name="page" value="form-add-classe-for-prof2">Anuler</button>
                <button type="submit" name="page" value="form-add-classe-for-prof">Enregistrer</button>
                <input type="hidden" name="prof_id" value="<?=$prof['id'] ?>">

            </div>
        </form>
    </div>
</body>
</html>