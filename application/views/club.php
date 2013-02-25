<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 

    <head>
        <title>Un livre d'or avec CodeIgniter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->config->item('charset'); ?>" />
    </head>

    <body>
        <div id="messages">
            <h1>Le club</h1>

            <p>
                Ceci est la page de présentation du club
            </p>
            <p>
                Il y a <?php echo $nb_activites; ?> dans le club actuellement. </br>
                Les activités :
                <?php foreach ($activites as $activite): ?>
                    <p>
                        <div id="<?php echo $activite->id; ?>"> <?php echo $activite->libelle; ?></div>
                    </p>
                <?php endforeach; ?>

            </p>
            <p>
                <a href="<?php echo site_url(array('accueil', 'mAccueil')) ?>">accueil</a>
            </p>
        </div>
    </body>
</html>
