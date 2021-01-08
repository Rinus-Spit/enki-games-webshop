@extends ('layouts.admin')

@section ('content')

            <h1>Pas product aan</h1>

            <form method="post" action="{{ route('products.update', ['product' => $product->id]) }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="name">Naam</label>
                    <div class="control">
                        <input 
                            class="input @error('name') alert-danger @enderror" 
                            type="text" 
                            name="name" 
                            id="product_name"
                            value="{{ $product->name }}">
                    @error('name')
                        <p class="help alert-danger">{{ $errors->first('name') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Samenvatting</label>
                    <div class="control">
                        <input 
                            class="input @error('excerpt') alert-danger @enderror" 
                            type="text" 
                            name="excerpt" 
                            id="product_excerpt"
                            value="{{ $product->excerpt }}">
                    @error('excerpt')
                        <p class="help alert-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Beschrijving</label>
                    <div class="control">
                        <textarea 
                            class="input @error('body') alert-danger @enderror" 
                            type="text" 
                            name="body" 
                            id="product_body">{{ $product->body }}</textarea>
                    @error('body')
                        <p class="help alert-danger">{{ $errors->first('body') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="image">Plaatje</label>
                    <div class="control">
                        <input 
                            class="input @error('image') alert-danger @enderror" 
                            type="text" 
                            name="image" 
                            id="product_image"
                            value="{{ $product->image }}">
                    @error('image')
                        <p class="help alert-danger">{{ $errors->first('image') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="price">Prijs</label>
                    <div class="control">
                        <input 
                            class="input @error('price') alert-danger @enderror" 
                            type="text" 
                            name="price" 
                            id="product_price"
                            value="{{ $product->price }}">
                    @error('price')
                        <p class="help alert-danger">{{ $errors->first('price') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="stock">Voorraad</label>
                    <div class="control">
                        <input 
                            class="input @error('stock') alert-danger @enderror" 
                            type="text" 
                            name="stock" 
                            id="product_stock"
                            value="{{ $product->stock }}">
                    @error('stock')
                        <p class="help alert-danger">{{ $errors->first('stock') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="min_players">Minimum spelers</label>
                    <div class="control">
                        <input 
                            class="input @error('min_players') alert-danger @enderror" 
                            type="text" 
                            name="min_players" 
                            id="product_min_players"
                            value="{{ $product->min_players }}">
                    @error('min_players')
                        <p class="help alert-danger">{{ $errors->first('min_players') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="max_players">Maximum spelers</label>
                    <div class="control">
                        <input 
                            class="input @error('max_players') alert-danger @enderror" 
                            type="text" 
                            name="max_players" 
                            id="product_max_players"
                            value="{{ $product->max_players }}">
                    @error('max_players')
                        <p class="help alert-danger">{{ $errors->first('max_players') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                    
                        <label class="control-label" for="age_category_id">Leeftijds categorie</label>
                        <select id="age_category_id" name="age_category_id">
                            @foreach ($age_categories as $age_category)
                            <option value="{{ $age_category->id }}" {{ ($product->age_category_id == $age_category->id) ? 'selected' : '' }}>{{ $age_category->description }}</option>
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
                        <button class="btn btn-success is-link" type="submit">Pas product aan</button>
                    </div>
                </div>

            </form>

@endsection