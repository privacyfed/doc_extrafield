---
title: Gestione Attributi
description: Gestione Attributi
extends: _layouts.documentation
section: content
---


# Come settare cardinality, can_verified, verified_by, mandatory

Attributi del dato composto, che descrivono le sue caratteristiche:  

1. cardinality: numero di volte che si può inserire lo stesso dato  
2. can_verified: determina se il dato composto deve essere verificato  
3. verified_bye: determina la modalità di verifica, esempio tramite mail o sms  
4. mandatory: determina l'obbligo di inserimento per un determinato servizio  

Ci sono due differenti punti in cui si possono gestire, uno per i dati composti del profilo, l'altro per i dati composti del servizio.

## Dati composti del profilo

ci sarà un componente livewire "gestione attributi" (che avrà come parametro il model_type, quindi se da pagina profilo, model_type = 'profile')  

andare nella pagina dei profili  
cliccare il tasto "Gestione Attributi"
si visualizzerà un elenco di extra_field_group_morph (gruppi composti) con model_type = profile e user_id = null  
selezionando una di essi si potranno settare i campi cardinality, can_verified, mandatory.