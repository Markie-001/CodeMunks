# CodeMunks 🐿️🍳

Een receptenplatform voor studenten uit Generatie Z. Gebruikers kunnen snel, eenvoudig en budgetvriendelijk recepten ontdekken, en na het inloggen hun eigen recepten toevoegen en verwijderen.

Gemaakt met **PHP**, **MySQL** en **HTML/CSS**, volgens de Design Thinking-methode.

---

## Functies

- 📖 Recepten bekijken in een overzicht met foto's
- 🏷️ Filteren op categorie (Ontbijt, Lunch, Diner, Dessert)
- 🔍 Detailpagina per recept met tabbladen: *Beschrijving*, *Ingrediënten* en *Instructie*
- 👤 Registreren en inloggen (wachtwoorden worden gehasht met `password_hash`)
- ➕ Recept toevoegen met foto-upload (alleen ingelogd)
- 🗑️ Recept verwijderen (alleen ingelogd)
- 📱 Responsive voor desktop, tablet en mobiel

---

## Projectstructuur

```
CodeMunks/
├── assets/                     # Logo, achtergrond, moodboard, ERD en receptfoto's
├── docs/
│   └── assets/                 # Afbeeldingen voor de documentatie (empathy map e.d.)
├── include/                    # Controllers: logica + databasequery's
│   ├── recept.php              # Overzicht van recepten (startpagina) + filter
│   ├── login.php               # Inloggen
│   ├── registeren.php          # Account aanmaken
│   ├── uitloggen.php           # Sessie beëindigen
│   ├── recept_toevoegen.php    # Nieuw recept opslaan (incl. foto-upload)
│   └── recept_verwijderen.php  # Recept verwijderen
├── view/                       # Views: de HTML-templates
│   ├── overzicht_view.php
│   ├── details_view.php
│   ├── login_view.php
│   ├── registeren_view.php
│   ├── view_toevoegen.php
│   └── recept_verwijderen_view.php
├── config.php                  # Databaseverbinding (PDO)
├── database.sql                # Database-export (tabellen + voorbeelddata)
├── recept_details.php          # Detailpagina van één recept
├── style.css                   # Alle styling
├── 01-empathize.md             # Design Thinking – fase 1
├── 02-define.md                # Design Thinking – fase 2
├── 03-ideate.md                # Design Thinking – fase 3
├── 04-prototype.md             # Design Thinking – fase 4
└── 05-test.md                  # Design Thinking – fase 5
```

De code is opgesplitst in **logica** (`include/`) en **weergave** (`view/`): een bestand in `include/` haalt de data op en laadt daarna de bijbehorende view.

---

## Database

Database: `demo_recept`

| Tabel         | Kolommen                                                                              |
| ------------- | ------------------------------------------------------------------------------------- |
| `categorie`   | `id`, `naam`                                                                          |
| `demo_recept` | `id`, `gerecht`, `beschrijving`, `ingredienten`, `instructie`, `foto`, `categorie_id` |
| `gebruikers`  | `id`, `gebruikersnaam` (uniek), `wachtwoord` (hash)                                   |

`demo_recept.categorie_id` verwijst naar `categorie.id`. Het volledige ERD staat in `assets/Speedo-ERD.png`.

---

## Installatie (lokaal)

**Benodigd:** PHP 8+, MySQL en een lokale server zoals MAMP, XAMPP of Laragon.

1. **Clone de repository**
   ```bash
   git clone https://github.com/Markie-001/CodeMunks.git
   ```
2. **Zet de map in je webserver-root** (bijv. `htdocs/` bij MAMP/XAMPP).
3. **Importeer de database**
   ```bash
   mysql -u root -p < database.sql
   ```
   Of importeer `database.sql` via phpMyAdmin. Hierdoor wordt de database `demo_recept` met voorbeeldrecepten aangemaakt.
4. **Controleer `config.php`** en pas zo nodig de inloggegevens aan:
   ```php
   $host = 'localhost';
   $db   = 'demo_recept';
   $user = 'root';
   $pass = 'root';
   ```
5. **Open de site** in je browser:
   ```
   http://localhost/CodeMunks/include/recept.php
   ```

---

## Pagina's

| Pagina              | URL                                   | Inloggen nodig? |
| ------------------- | ------------------------------------- | :-------------: |
| Receptenoverzicht   | `include/recept.php`                  |       Nee       |
| Recept details      | `recept_details.php?id=…`             |       Nee       |
| Inloggen            | `include/login.php`                   |       Nee       |
| Registreren         | `include/registeren.php`              |       Nee       |
| Recept toevoegen    | `include/recept_toevoegen.php`        |       Ja        |
| Recept verwijderen  | `include/recept_verwijderen.php?id=…` |       Ja        |

---

## Design Thinking

Het ontwerpproces staat beschreven in vijf fasen:

1. [Empathize](01-empathize.md): doelgroep, pijnpunten en behoeftes
2. [Define](02-define.md): probleemstelling en programma van eisen (MoSCoW)
3. [Ideate](03-ideate.md): concepten en conceptkeuze
4. [Prototype](04-prototype.md): wireframes, visual design en techniek
5. [Test](05-test.md): testopzet, resultaten en iteratie

---

## Technieken

- **Frontend:** HTML, CSS, Google Fonts (Lexend, Playfair Display, Rubik, Pixelify Sans)
- **Backend:** PHP met PDO (prepared statements)
- **Database:** MySQL
