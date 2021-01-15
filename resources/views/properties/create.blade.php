@extends ('layouts.admin')

@section ('content')

    <div class="card" id="card">
        <div class="card-header"> Voeg Eigenschap toe: </div>

        <div class="card-body">
            <form method="post" action="{{ route('properties.store') }}">
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

                <div class="field is-grouped">
                    <div class="control">

                        <br>

                        <button class="btn btn-primary" type="submit">Voeg eigenschap toe</button>

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
