## Pages static

## Instruction :

### Dans le composer.json
___
```
    "psr-4": {
        "App\\": "app/",
        "Pages\\" : "pages/"
    }
```
### Dans le config/app.php insérer dans le tableau des providers
___
```
        /*
        * Admin Panel Service Provider
        */
        Pages\PagesServiceProvider::class,
```
### Recréer l'autoload : 
___
``` composer dumpautoload ``` dans le terminal.