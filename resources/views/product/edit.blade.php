@extends('layouts.app')

@section('content')
    <h1>Modifier le produit "{{ $product->name }}"</h1>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Nom du produit" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="priceHt">Prix HT :</label>
            <input type="number" step="0.01" id="priceHt" name="priceHt" placeholder="Prix hors taxe" value="{{ $product->priceHt }}" required>
        </div>
        <div>
            <input type="hidden" name="creationDate" value="{{ $product->creationDate }}">
        </div>
        <button type="submit">Modifier</button>
    </form>
@endsection
