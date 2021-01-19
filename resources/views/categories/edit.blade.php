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
                <br>
                <div class="field">
                    <label class="label" for="image">Afbeelding</label>
                    <div class="control">
                        <input  class="form-control"
                        class="input @error('image') alert-danger @enderror"
                        type="text"
                        name="image"
                        id="product_image"
                        value="{{ $category->image }}">
                        @error('image')
                        <p class="help alert-danger">{{ $errors->first('image') }}</p>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row" id="property">Eigenschap
                    <div class="control" id="control">
                        <select id="property_id" name="property_id" class="form-control">
                            @foreach ($properties as $property)
                            <option value="{{ $property->id }}" {{ ($category->property_id == $property->id) ? 'selected' : '' }}>{{ $property->name }}</option>
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
                        <button class="btn btn-success is-link" type="submit">Pas categorie aan</button>
                    </div>
                </div>

            </form>
            <br>

            <div class="footer">
                <a href="{{ route('admin') }}" id="link">
                    <i class="fas fa-arrow-left"></i> Terug naar admin</a>
                </div>
            </div>

@endsection