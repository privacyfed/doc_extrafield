---
title: HasExtraFieldGroups
description: Documentazione del trait HasExtraFieldGroups
extends: _layouts.documentation
section: content
---


# Documentazione del trait HasExtraFieldGroups {#has-extra-field-groups}

Il trait HasExtraFieldGroups è una trait Laravel utilizzata per gestire i campi extra associati ai modelli. Questa trait fornisce diversi metodi utilizzati per gestire i gruppi di campi extra e i campi extra associati al modello.

## Metodi

### userExtraFieldGroups(string $user_id): MorphToMany

Restituisce i gruppi di campi extra associati a un utente specificato.

####    Parametri:
        $user_id (string): L'id dell'utente di cui si vogliono recuperare i gruppi di campi.

####    Return:
        MorphToMany: Una relazione di molti a molti tra il modello e i gruppi di campi extra associati all'utente specificato.

### noUserExtraFieldGroups(): MorphToMany

Restituisce i gruppi di campi extra non associati ad alcun utente.

####    Return:
        MorphToMany: Una relazione di molti a molti tra il modello e i gruppi di campi extra che non sono associati ad alcun utente.

### extraFieldGroups(): MorphToMany

Restituisce tutti i gruppi di campi extra associati al modello.

####    Return:
        MorphToMany: Una relazione di molti a molti tra il modello e i gruppi di campi extra.

### extraFieldsByUserId(?string $user_id): MorphToMany

Restituisce i campi extra associati a un utente specificato.

####    Parametri:
        $user_id (string|null): L'id dell'utente di cui si vogliono recuperare i campi extra. Se non specificato, viene utilizzato l'id dell'utente autenticato.

####    Return:
        MorphToMany: Una relazione di molti a molti tra il modello e i campi extra associati all'utente specificato.

### extraFields(): MorphToMany

Restituisce tutti i campi extra associati al modello.

####    Return:
        MorphToMany: Una relazione di molti a molti tra il modello e i campi extra.
