# Kompetenzcheck


Erstelle ein kleines Kundenverwaltungssystem bei dem du Einträge in der Datenbank abspeichern, bearbeiten und anzeigen lassen kannst.<br>
Nutze MySQLi als Verbindung zur Datenbank

Tabellen

user: Name, Mailadresse, Passwort

Kunde: Firmenname, Ansprechperson, Telefonnummer, Adressfeld, (und was dir sonst noch einfällt), welcher User hats erstellt, erstellt am, bearbeitet am

Relation: user 1 - n kunde

Jeder Benutzer der sich einloggt kann nur die Einträge editieren und löschen die er auch erstellt hat

Der Benutzer der es erstellt hat kann bei jedem Eintrag sehen, wann es erstellt u geändert wurde. Die anderen Benutzer sehen diese Information nicht
