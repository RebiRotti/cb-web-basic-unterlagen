# Übung 21 - PHP 05


Erstelle ein kleines Lexikon bei dem du Einträge in der Datenbank abspeichern, bearbeiten und anzeigen lassen kannst.<br>
Nutze PDO als Verbindung zur Datenbank

Tabellen

user: Name, Mailadresse, Passwort

content: Titel, Beschreibung, Image (und was dir sonst noch einfällt), welcher User hats erstellt

Relation: user 1 - n content

Jeder Benutzer der sich einloggt kann nur die Einträge editieren und löschen die er auch erstellt hat

Der Benutzer der es erstellt hat kann bei jedem Eintrag sehen, wann es erstellt u geändert wurde. Die anderen Benutzer sehen diese Information nicht
