# htaccess-Wartungsseite

Ab und an muss man tief ins Getriebe der eigenen Webseite einsteigen und möchte den Zugriff von Besuchern temporär ausschließen.

In dem Paket ist eine htaccess und eine Wartungsseite. Die htaccess leitet alle Aufrufe der Webseite an die Wartungsseite weiter - man kann die eigene IP-Adresse eigeben, so dass man als Admin dennoch Zugang zu der Seite hat.

## Vorbereitung
In der htaccess die eigene IP abändern - eigene IP siehe http://www.e-spin.de/software.html#htaccess-wartungsseite
In der Wartungseite die Platzhalter `<SEITENNAME>`, `<DOMAIN>`, `<DATUM>`, `<Uhrzeit>` mit den eigenen Angaben ersetzen.

Alternativ kann der Inhalt der htaccess in die eigene htaccess übernommen werden - zum Abschalten des Wartungsmodus die Zeilen mit # auskommentieren.

## Installation
Die Dateien .htaccess und _wartungsseite.php in das Basisverzeichnis hochladen (FTP). Achtung! auf dem Server vorhandene .htaccess vor Überschreiben durch Umbenennen sichern.

## De-Installation
Je nach Installation die "Wartungs-htaccess" umbenennen und vorh. htaccess wieder aktivieren - oder in der htaccess die Zeilen mit # auskommentieren.


Viel Spaß ;-)