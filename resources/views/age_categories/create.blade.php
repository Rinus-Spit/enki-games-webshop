@extends ('layouts.admin')

@section ('content')

            <h1>Nieuwe leeftijds categorie</h1>

            <form method="post" action="{{ route('age_categories.store') }}">
                @csrf

                <div class="field">
                    <label class="label" for="description">Beschrijving</label>
                    <div class="control">
                        <input 
                            class="input @error('name') alert-danger @enderror" 
                            type="text" 
                            name="description" 
                            id="product_description"
                            value="{{ old('description') }}">
                    @error('description')
                        <p class="help alert-danger">{{ $errors->first('description') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Voeg leeftijds categorie toe</button>
                    </div>
                </div>
            </form>

@endsection