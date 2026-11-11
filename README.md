# CodeMunks 🐿️🍳

Een receptenwebsite voor studenten. Bekijk recepten, filter op categorie en voeg na het inloggen je eigen recepten toe.

🌐 **Live:** https://codemunks.page.gd/include/recept.php

## Functies

- Recepten bekijken en filteren (Ontbijt, Lunch, Diner, Dessert)
- Detailpagina per recept
- Registreren en inloggen
- Recepten toevoegen en verwijderen (alleen ingelogd)

## Structuur

```
CodeMunks/
├── assets/            # Afbeeldingen
├── include/           # PHP-logica (login, recepten, toevoegen, verwijderen)
├── view/              # HTML-pagina's
├── config.php         # Databaseverbinding
├── database.sql       # Database met voorbeelddata
├── recept_details.php # Detailpagina
└── style.css          # Styling
```

## Lokaal draaien

1. Zet de map in `htdocs/` van MAMP of XAMPP.
2. Importeer `database.sql` via phpMyAdmin.
3. Controleer de gegevens in `config.php`.
4. Open `http://localhost/CodeMunks/include/recept.php`.

## Gemaakt met

PHP · MySQL · HTML · CSS
