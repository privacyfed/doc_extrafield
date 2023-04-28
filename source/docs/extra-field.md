---
title: Extra Field
description: i dati semplici
extends: _layouts.documentation
section: content
---
## I Dati Semplici {#extra_fields}

I Dati Semplici (ExtraFields) sono i dati inseriti come Nome, Cognome, Indirizzo, Città.  
Insieme formano i Dati composti (modello ExtraFieldGroup),  
come per esempio Indirizzo Completo (composto da indirizzo e numero civico)   
oppure Nome Completo (composto da Nome e Cognome)


## Tabella ExtraField

Ogni ExtraField viene creato nella tabella ExtraField. Al suo interno verranno inseriti:  
1. nome del campo  
2. tipo di campo (esempio stringa, radio, checkbox)


## Tabella ExtraFieldMorph

Ogni dato semplice (ExtraField) può essere abbiano a un profilo (modello Profile) oppure ad un servizio (modello Service).


per migliorare la performance
da gruppo a extrafield c'è un hasmany tra loro 2
il valore di extrafield è dato dal modello->extrafield


