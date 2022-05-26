Comment installer WordPress : 

WordPress est bien connu pour sa facilité d’installation. Dans la plupart des cas, son installation se fait facilement et prend moins de cinq minutes. Un grand nombre d’hébergeurs proposent des outils (par exemple Fantastico ou Softaculous) pour installer automatiquement WordPress.
Si vous souhaitez installer WordPress vous-même, les instructions suivantes vous guideront.

Instructions de base : 

Si vous êtes à l’aise avec ce type d’installation, voici la version rapide des instructions

Étape 1 : télécharger et décompresser : 

Si vous allez téléverser WordPress sur un serveur web distant, téléchargez l’archive WordPress sur votre ordinateur et décompressez-la ;
Si vous allez utiliser un client FTP, passez à l’étape suivante, le téléversement des fichiers est expliqué plus tard ;
Si vous avez un accès shell à votre serveur et êtes à l’aise avec l’utilisation d’un terminal, vous pouvez télécharger WordPress sur votre serveur en utilisant wget (ou lynx, ou un autre logiciel de navigateur en mode texte) :
téléchargez WordPress wget https://wordpress.org/latest.tar.gz ;
puis décompressez l’archive tar -xzvf latest.tar.gz
L’archive sera décompressée dans un dossier wordpress dans le même répertoire où vous avez téléchargé latest.tar.gz ;

Étape 2 : créer une base de données et un utilisateur : 

Si vous utilisez un fournisseur d’hébergement, vous avez peut-être déjà une base de données WordPress configurée ou il peut y avoir un outil de configuration automatisée pour le faire. Consultez les pages d’aide de votre hébergeur ou votre panneau de contrôle pour le vérifier.

Si vous devez créer votre base de données manuellement et que vous utilisez phpMyAdmin, suivez les instructions ci-après. Si vous utilisez un autre outil comme Plesk ou cPanel, lisez l’article « Créer une base de données pour WordPress ».

Si vous disposez uniquement d’une base de données et qu’elle est déjà utilisée, vous pouvez quand même l’utiliser pour WordPress mais assurez-vous d’avoir des préfixes de tables différents pour ne pas écraser les tables existantes.

En utilisant phpMyAdmin

Si phpMyAdmin est installé sur votre serveur, vous pouvez suivre ces instructions pour créer votre identifiant WordPress et votre base de données. Si vous travaillez en local sur votre ordinateur, la plupart des distributions Linux permettent d’installer phpMyAdmin automatiquement.


Étape 3 : configurer le fichier wp-config.php : 

Vous pouvez soit créer et configurer vous-même le fichier wp-config.php, soit passer cette étape et laisser WordPress le faire lui-même lors du processus d’installation (étape 5). Si vous choisissez cette seconde option, vous devrez tout de même indiquer les informations de votre base de données à WordPress.

Pour des explications détaillées et étape par étape sur la création du fichier wp-config.php et les clés secrètes, lisez l’article « Modifier le fichier wp-config.php ».

Retournez à l’emplacement où vous avez décompressé l’archive WordPress à l’étape 1, renommez le fichier wp-config-sample.php en wp-config.php, et ouvrez-le dans un éditeur de texte.

Étape 4 : téléverser les fichiers : 

Maintenant vous devez choisir à quelle adresse votre site WordPress sera accessible pour déterminer à quel endroit placer les fichiers :

Dans le répertoire racine, accessible à l’adresse https://example.com ;
Dans un sous-dossier, accessible à l’adresse https://example.com/blog ;
Note : l’emplacement racine de votre dossier web dans votre serveur web peut varier selon les hébergeurs et systèmes d’exploitation. Vérifiez avec votre hébergeur ou administrateur système si vous ne savez pas où il se trouve.
