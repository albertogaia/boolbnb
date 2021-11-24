{{-- Creazione appartamenti --}}
@extends('layouts.dashboard')
@section('title', 'New Apartment')
    
@section('content')
<form action="{{ route('host.apartments.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <h1>Aggiungi un nuovo appartamento</h1>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Add Title">
    </div>
    <div>
        <label for="type" class="form-label">Tipologia</label>
        <select name="type" id="type">
            <option value=""> -- Seleziona -- </option>
            <option value=""> Appartamento </option>
            <option value=""> Stanza</option>
        </select>
    </div>
    <div>
        <label for="content" class="form-label">Descrizione dell'appartamento</label>
        <textarea name="content" class="form-control" id="content" placeholder="Add content"></textarea>
    </div>
    {{--L'utente può utilizzare le frecce per sceglire il valore ma anche inserirlo, se lo inserisce controllare che metta solo un numero--}}
    <div>
        <label for="mq">Metri quadrati</label>
        <input type="number" id="mq" name="mq" min="30" max="300" placeholder="Add square meters min 1 max 5">
    </div>
    <div>
        <label for="n_rooms">Numero stanze</label>
        <input type="number" id="n_rooms" name="n_rooms" min="1" max="5" placeholder="Add square meters min 1 max 5">
    </div>
    <div>
        <label for="n_beds">Numero letti</label>
        <input type="number" id="n_beds" name="n_beds" min="1" max="5" placeholder="Add square meters min 1 max 5">
    </div>
    <div>
        <label for="n_baths">Numero bagni</label>
        <input type="number" id="n_baths" name="n_baths" min="1" max="5" placeholder="Add square meters min 1 max 5">
    </div>
    <div>
        <label for="n_guests">Numero ospiti</label>
        <input type="number" id="n_guests" name="n_guests" min="1" max="5" maxlength="1" placeholder="Add square meters min 1 max 5">
    </div>
    <div>
        <label for="pet" class="form-label">Animali</label>
        <select name="pet" id="pet">
            <option value=""> -- Seleziona -- </option>
            <option value="Sono ammessi"> Certo che sono ammessi </option>
            <option value="Non sono ammessi"> Mi dispiace, non sono ammessi gli animali </option>
        </select>
    </div>
    <div>
        <label for="h_checkin">Orario checkin</label>
        <input type="time" id="h_checkin" name="h_checkin">
    </div>
    <div>
        <label for="h_checkout">Orario checkout</label>
        <input type="time" id="h_checkout" name="h_checkout">
    </div>
    <div>
        <label for="price_night">Prezzo per notte</label>
        <input type="number" id="price_night" name="price_night" min="30" max="1000" placeholder="Add square meters min 30 max 1.000">
    </div>
    {{-- Inserire l'immagine dopo aver fatto lo storage --}}
    <div>
        <label for="visibility" class="form-label">Visibità appartamento</label>
        <select name="visibility" id="visibility">
            <option value=""> -- Select -- </option>
            <option value="true"> Rendi visibile l'appartamento </option>
            <option value="false"> Per il momento non rendere visibile l'appartamento </option>
        </select>
    </div>
    <div>
        <label for="city">Città</label>
        <input type="text" id="city" name="city" placeholder="Aggiungi la Città">
    </div>
    <button type="submit" class="d-block btn btn-primary">Sono pronto a registrare l'appartamento</button>
</form>
@endsection