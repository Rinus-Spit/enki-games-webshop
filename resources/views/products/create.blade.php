@extends ('layouts.admin')

@section ('content')


<div class="card" style="margin-top: 55px">

    <div class="card-header">Nieuw Product</div>

    <div class="card-body">
            <h1>Nieuw product</h1>


            <form method="post" action="{{ route('products.store') }}">
                @csrf

                <div class="field">Naam
                    <div class="control">
                    <input class="form-control"
                            class="input @error('name') alert-danger @enderror"
                            type="text"
                            name="name"
                            id="product_name"
                            value="{{ old('name') }}">
                    @error('name')
                        <p class="help alert-danger">{{ $errors->first('name') }}</p>
                    @enderror
                    </div>
                </div>
<br>

                <div class="field">Samenvatting
                    <div class="control">
                        <input class="form-control"
                            class="input @error('excerpt') alert-danger @enderror"
                            type="text"
                            name="excerpt"
                            id="product_excerpt"
                            value="{{ old('excerpt') }}">
                    @error('excerpt')
                        <p class="help alert-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                    </div>
                </div>
<br>
                <div class="field">Beschrijving
                    <div class="control">
                        <textarea class="form-control"
                            class="input @error('body') alert-danger @enderror"
                            type="text"
                            name="body"
                            id="product_body">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="help alert-danger">{{ $errors->first('body') }}</p>
                    @enderror
                    </div>
                </div>
<br>
                <div class="field">Afbeelding
                    <div class="control">
                        <input class="form-control"
                            class="input @error('image') alert-danger @enderror"
                            type="text"
                            name="image"
                            id="product_image"
                            value="{{ old('image') }}">
                    @error('image')
                        <p class="help alert-danger">{{ $errors->first('image') }}</p>
                    @enderror
                    </div>
                </div>
<br>

                <div class="field">Prijs
                    <div class="control">
                        <input class="form-control"
                            class="input @error('price') alert-danger @enderror"
                            type="text"
                            name="price"
                            id="product_price"
                            value="{{ old('price') }}">
                    @error('price')
                        <p class="help alert-danger">{{ $errors->first('price') }}</p>
                    @enderror
                    </div>
                </div>
<br>
                <div class="field">Voorraad
                    <div class="control">
                        <input class="form-control"
                            class="input @error('stock') alert-danger @enderror"
                            type="text"
                            name="stock"
                            id="product_stock"
                            value="{{ old('stock') }}">
                    @error('stock')
                        <p class="help alert-danger">{{ $errors->first('stock') }}</p>
                    @enderror
                    </div>
                </div>
<br>
                <div class="field">Minimum aantal spelers
                    <div class="control">
                        <input class="form-control"
                            class="input @error('min_players') alert-danger @enderror"
                            type="text"
                            name="min_players"
                            id="product_min_players"
                            value="{{ old('min_players') }}">
                    @error('min_players')
                        <p class="help alert-danger">{{ $errors->first('min_players') }}</p>
                    @enderror
                    </div>
                </div>
<br>
                <div class="field">Maximum aantal spelers
                    <div class="control">
                        <input class="form-control"
                            class="input @error('max_players') alert-danger @enderror"
                            type="text"
                            name="max_players"
                            id="product_max_players"
                            value="{{ old('max_players') }}">
                    @error('max_players')
                        <p class="help alert-danger">{{ $errors->first('max_players') }}</p>
                    @enderror
                    </div>
                </div>
<br>
                <div class="row" style="padding-left:15px">Leeftijdscategorie
                    <div class="control" style="margin-left: 15px">
                        <select id="age_category_id" name="age_category_id" class="form-control">
                            @foreach ($age_categories as $age_category)
                            <option value="{{ $age_category->id }}" >{{ $age_category->description }}</option>
                            @endforeach
                        </select>
                        <p class="help-block"></p>
                        @if($errors->has('age_category_id'))
                            <p class="help-block">
                                {{ $errors->first('age_category_id') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-success is-link" type="submit">Voeg product toe</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="footer">
                <a href="{{ route('admin') }}">
                    <i class="fas fa-arrow-left"></i>
                    Terug naar admin</a>
            </div>

@endsection
