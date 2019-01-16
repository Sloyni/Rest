# Comment Aider ?

## De nouvelle classes
Lors de la création de nouvelle classe, il y a certaines règles à respecter:
- Chaque classe ".php" doit contenir un namespace. Ce namespace correspond aux noms des dossiers où se situe le fichier.
- Exemple: Si l'on crée un fichier "TestController.php" dans le dossier api/controller, le namespace sera "Api\Controller".
- Chaque mot du namespace commence par une majuscule.
- Les classes modèles se situent dans le dossier api/model.
	- Ils doivent se terminer par "Model". Exemple: "TestModel"
	- Le namespace est "Api\Model".
- Les classes controlleurs se situent dans le dossier api/controller.
	- Ils doivent se terminer par "Controller". Exemple: "TestController"
	- Le namespace est "Api\Controller".
- Les classes datasource (liaison avec la bdd) se situent dans le dossier api/controller/datasourceController.
	- Ils doivent se terminer par "DataController". Exemple: "TestDataController"
	- Le namespace est "Api\Controller\DataController".


## Informations utiles
N'oubliez pas de lire [howto_tests](https://github.com/FroxyNetwork/REST/blob/develop/docs/howto_tests.md)

Ne modifiez pas le fichier AUTHORS, je le modifierai moi-même, sauf si vous me dites de ne pas vous ajouter dans la liste ^^