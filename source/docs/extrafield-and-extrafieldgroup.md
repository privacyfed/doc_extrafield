---
title: Dati Semplici e Composti
description: Dati Semplici e Composti
extends: _layouts.documentation
section: content
---
## I Dati Semplici e Composti {#extra-fields-and-extra-field-groups}

I Dati Semplici (ExtraFields) sono i dati inseriti come Nome, Cognome, Indirizzo, Città.  
Insieme formano i Dati composti (modello ExtraFieldGroup),  
come per esempio Indirizzo Completo (composto da indirizzo e numero civico)   
oppure Nome Completo (composto da Nome e Cognome).  

Quindi da un gruppo (ExtraFieldGroup) c'è una relazione hasmany con dati semplici (ExtraField).


## Tabella ExtraFields

Ogni dato semplice (modello ExtraField) viene creato nella tabella ExtraFields. Al suo interno verranno inseriti:  
1. nome del campo  
2. tipo di campo (esempio stringa, radio, checkbox)

## Tabella ExtraFieldGroups

Ogni dato composto (modello ExtraFieldGroup) viene creato nella tabella ExtraFieldGroups. Al suo interno verranno inseriti:  
1. il nome del gruppo  
2. la cardinalità  


## Tabella ExtraFieldMorph ed ExtraFieldGroupMorph

Ogni dato semplice (ExtraField) può essere abbinato a un profilo (modello Profile) oppure ad un servizio (modello Service).  
Per migliorare la performance, il valore di extrafield è dato dal **modello->extrafield**.  
I valori vengono memorizzati sia nel campo value delle tabelle  
1. ExtraFieldMorph  
2. ExtraFieldGroupMorph  

In aggiunta, nella tabella ExtraFieldGroupMorph vengono salvate  
1. le note inserite, relative al gruppo
2. l'opzione favorite


