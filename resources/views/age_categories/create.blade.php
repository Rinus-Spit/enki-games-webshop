@extends ('layouts.admin')

@section ('content')

    <div class="card" style="margin-top: 55px">

        <div class="card-header"> Nieuwe leeftijdscategorie: </div>
        <div class="card-body">
            <form method="post" action="{{ route('age_categories.store') }}">
                @csrf

                <div class="field">
                    <label for="description">Beschrijving</label>
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
<br>
                        <button class="button btn-primary" type="submit">Voeg leeftijds categorie toe</button>

                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
