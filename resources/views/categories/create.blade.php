@extends ('layouts.admin')

@section ('content')

    <div class="card" id="card">
        <div class="card-header"> Voeg Categorie toe: </div>

        <div class="card-body">
            <form method="post" action="{{ route('categories.store') }}">
                @csrf
                <div class="field">
                    <label for="name">Naam</label>
                        <div class="control">

                            <input class="form-control"
                            class="input @error('name') alert-danger @enderror"
                            type="text"
                            name="name"
                            id="property_name"
                            value="{{ old('name') }}">
                        @error('description')
                        <p class="help alert-danger">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row" id="property">Eigenschap
                    <div class="control" id="control">
                        <select id="property_id" name="property_id" class="form-control">
                            @foreach ($properties as $property)
                            <option value="{{ $property->id }}" >{{ $property->name }}</option>
                            @endforeach
                        </select>
                        <p class="help-block"></p>
                        @if($errors->has('property_id'))
                        <p class="help-block">
                            {{ $errors->first('property_id') }}
                        </p>
                        @endif
                    </div>
                </div>
                <br>
                <div class="field is-grouped">
                    <div class="control">

                        <br>

                        <button class="btn btn-primary" type="submit">Voeg Categorie toe</button>

                    </div>
                </div>
            </form>

            <br>

            <div class="footer">
                <a href="{{ route('admin') }}" id="link">
                    <i class="fas fa-arrow-left"></i> Terug naar admin</a>
                </div>
            </div>
        </div>
        @endsection
