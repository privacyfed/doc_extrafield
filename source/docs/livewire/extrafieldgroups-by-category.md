---
title: ExtraFieldGroups\By\Category
description: Documentazione del Livewire Component ExtraFieldGroups\By\Category
extends: _layouts.documentation
section: content
---


# Livewire Component ExtraFieldGroups\By\Category {#extrafieldgroups-by-category}

Il componente Livewire ExtraFieldGroups\By\Category è utilizzato per visualizzare i gruppi di campi extra di un determinato modello, organizzati per categoria.


## Dipendenze

Il componente dipende dalle seguenti classi e interfacce:

    Illuminate\Contracts\Support\Renderable
    Illuminate\Database\Eloquent\Collection
    Illuminate\Support\Collection
    Illuminate\Support\Facades\Auth
    Livewire\Component
    Modules\Blog\Models\Category
    Modules\Cms\Actions\GetViewAction
    Modules\ExtraField\Actions
    Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction
    Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract
    Modules\ExtraField\Models\ExtraFieldGroup
    Modules\ExtraField\Models\ExtraFieldGroupMorph
    Modules\Xot\Actions\GetModelTypeByModelAction
    WireElements\Pro\Concerns\InteractsWithConfirmationModal

## Proprietà pubbliche

Il componente ha le seguenti proprietà pubbliche:

    user_id: una stringa che rappresenta l'ID dell'utente autenticato
    cat_id: una stringa che rappresenta l'ID della categoria selezionata
    tpl: una stringa che rappresenta il nome del template da utilizzare per la visualizzazione
    model: un'istanza di HasExtraFieldGroupsContract che rappresenta il modello per il quale visualizzare i campi extra
    model_type: una stringa che rappresenta il tipo di modello
    model_id: una stringa che rappresenta l'ID del modello
    category_name: una stringa che rappresenta il nome della categoria selezionata

## Metodi pubblici

Il componente ha i seguenti metodi pubblici:

    mount(HasExtraFieldGroupsContract $model, string $tpl = 'v1'): questo metodo viene chiamato al momento del mount del componente e inizializza le proprietà pubbliche del componente
    render(): Renderable: questo metodo renderizza il componente e restituisce un'istanza di Illuminate\Contracts\Support\Renderable
    getGroups(Collection $categories): Collection: questo metodo restituisce una collezione di gruppi di campi extra organizzati per categoria
    showCat(string $cat_id): void: questo metodo imposta l'ID della categoria selezionata e il nome della categoria
    toggleFavourite(string $uuid): void: questo metodo gestisce l'azione di aggiungere o rimuovere un gruppo di campi extra dai preferiti
    addGroup(): void: questo metodo apre la modale per creare un nuovo gruppo di campi extra
    getFieldsByGroup(ExtraFieldGroup $group): EloquentCollection: questo metodo restituisce una collezione di campi extra per un determinato gruppo

## Eventi

Il componente emette i seguenti eventi:

    refresh: questo evento viene emesso quando è necessario aggiornare il componente

## Utilizzo

Il componente può essere utilizzato all'interno di una vista Blade utilizzando il seguente codice:
blade

        <livewire:extra-field-groups.by.category :model="$model" />

Dove $model è un'istanza di HasExtraFieldGroupsContract.