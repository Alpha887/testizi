
@extends('layouts.app')

@section('content')
    <h1>Ajouter un nouveau produit</h1>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Nom du produit" required>
        </div>
        <div>
            <label for="priceHt">Prix HT :</label>
            <input type="number" step="0.01" id="priceHt" name="priceHt" placeholder="Prix hors taxe" required>
        </div>
        <div>
            <input type="hidden" name="creationDate" value="{{ now() }}">
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection
