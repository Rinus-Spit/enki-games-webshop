@extends ('layouts.admin')

@section ('content')

            <h1>Pas leeftijds categorie aan</h1>

            <form method="post" action="{{ route('age_categories.update', ['age_category' => $age_category->id]) }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="description">Beschrijving</label>
                    <div class="control">
                        <input 
                            class="input @error('name') alert-danger @enderror" 
                            type="text" 
                            name="description" 
                            id="product_description"
                            value="{{ $product->description }}">
                    @error('description')
                        <p class="help alert-danger">{{ $errors->first('description') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-success is-link" type="submit">Pas product aan</button>
                    </div>
                </div>

            </form>

@endsection