---
title: Gestione Attributi
description: Gestione Attributi
extends: _layouts.documentation
section: content
---


# Come settare cardinality, can_verified, mandatory

ci sarà un componente livewire "gestione attributi" (che avrà come parametro il model_type, quindi se da pagina profilo, model_type = 'profile')  

andare nella pagina dei profili  
cliccare il tasto "Gestione Attributi"
si visualizzerà un elenco di extra_field_group_morph (gruppi composti) con model_type = profile e user_id = null  
selezionando una di essi si potranno settare i campi cardinality, can_verified, mandatory.