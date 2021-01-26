@extends ('layouts.admin')

@section ('content')

    <div class="card" id="card">
        <div class="card-header"> Voeg lijst toe: </div>

        <div class="card-body">
            <form method="post" action="{{ route('toplists.store') }}">
                @csrf
                <div class="field">
                    <label for="name">Naam</label>
                        <div class="control">

                            <input class="form-control"
                            class="input @error('name') alert-danger @enderror"
                            type="text"
                            name="name"
                            id="category_name"
                            value="{{ old('name') }}">
                        @error('description')
                        <p class="help alert-danger">{{ $errors->first('name') }}</p>
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
                <div class="field is-grouped">
                    <div class="control">

                        <br>

                        <button class="btn btn-primary" type="submit">Voeg lijst toe</button>

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
