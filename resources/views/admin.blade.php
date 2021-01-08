@extends ('layouts.admin')

@section ('content')

        <ul>
        <li><a href="{{ route('products.index') }}">Producten</a></li>
        <li><a href="{{ route('products.create') }}">Nieuw product</a></li>
        <li><a href="{{ route('age_categories.index') }}">Leeftijds categorieen</a></li>
        <li><a href="{{ route('age_categories.create') }}">Nieuwe leeftijds categorie</a></li>
        </ul>

@endsection