# 157-sprachpaket-spanish
Sprachpaket SPANISCH für Zen Cart 1.5.7 deutsch 

* Anpassung des Spanish Language Pack (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack) von torvista  für die deutsche Zen Cart Version 1.5.7

* utf-8
* Frontend von native speaker übersetzt 

* Dieses Sprachpaket stellt eine komplette spanische Übersetzung (Übersetzunggrad 100%) für das Frontend der Grundversion bereit. 
* Die Sprachdefinitionen sind vollständig für die deutsche Zen Cart Version angepasst, so dass es auch mit PHP8 keine Probleme geben sollte. 
* Dieses Sprachpaket geht davon aus, dass im Shop CSS Buttons verwendet werden und liefert keine spanischen Grafikbuttons mit. 

* Da es seit Zen Cart 1.5.7 deutsch nicht mehr nötig ist, die Administration auf andere Sprachen umzuschalten (außer zum Bearbeiten von Define Pages unter Tools > Seiteneditor) stellt dieses Sprachpaket keine spanische Übersetzung für den Adminbereich bereit.
* Im Adminbereich gibt es nur wenige Dateien, die spanische Texte für Kunden enthalten müssen, da sie für die Bestellstatusaktualisierung, Emailversand, usw. an Kunden herangezogen werden, die auf spanisch bestellt haben:

* DEINADMIN/includes/languages/spanish/extra_definitions/orders_status_updates_admin.php
* DEINADMIN/includes/languages/spanish/email_extras.php
* DEINADMIN/includes/languages/spanish/orders.php 

* Die entsprechenden Definitionen dieser Dateien sind auf spanisch übersetzt, alle andere Definitionen des Adminbereichs sind auf deutsch.

* Falls Sie einen komplett spanischen Adminbereich benötigen, z.B. weil Ihr Shop von einer Person administriert wird, die ausschließlich spanisch spricht, dann müssen Sie die entsprechenden Admin Definitionen selbst übersetzen.
