@extends ('layouts.admin')

@section ('content')

            <h1>Pas eigenschap aan</h1>

            <form method="post" action="{{ route('properties.update', ['property' => $property->id]) }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="name">Naam</label>
                    <div class="control">
                        <input 
                            class="input @error('name') alert-danger @enderror" 
                            type="text" 
                            name="name" 
                            id="property_name"
                            value="{{ $property->name }}">
                    @error('description')
                        <p class="help alert-danger">{{ $errors->first('name') }}</p>
                    @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-success is-link" type="submit">Pas eigenschap aan</button>
                    </div>
                </div>

            </form>

@endsection