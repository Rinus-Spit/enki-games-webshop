@extends ('layouts.admin')

@section ('content')

            <h1>Pas categorie aan</h1>

            <form method="post" action="{{ route('categories.update', ['category' => $category->id]) }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="name">Naam</label>
                    <div class="control">
                        <input 
                            class="input @error('name') alert-danger @enderror" 
                            type="text" 
                            name="name" 
                            id="category_name"
                            value="{{ $category->name }}">
                    @error('description')
                        <p class="help alert-danger">{{ $errors->first('name') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-success is-link" type="submit">Pas categorie aan</button>
                    </div>
                </div>

            </form>

@endsection