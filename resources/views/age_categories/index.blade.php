@extends ('layouts.admin')

@section ('content')

        <ul>
            <div class="card card-default" style="margin-top: 55px">
                <div class="card-header">Leeftijdscategoriën</div>
                <table class="table table-hover">
                    <thead>
                        <th>Leeftijdscategorie</th>
                        <th>Delete</th>
                        <th>Edit</th>

                    </thead>
                    <tbody>

        @foreach ($age_categories as $age_category)

        <tr>
            <td><a href="{{ route('age_categories.show', $age_categories) }}"> {{ $age_category->description }} </a></td>
            <td>                        <form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                @csrf
                @method('DELETE')
                <button class="btn" type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
                </form></td>
            <td><a href="{{ route('age_categories.edit', $age_categories) }}">
                <i class="fas fa-edit" style="margin-top:10px"></i>
                </a></td>
        </tr>
        {{-- <li class="">
                    <h3>
                        <a href="{{ route('age_categories.show', $age_categories) }}"> {{ $age_category->description }} </a>
                        <a href="{{ route('age_categories.edit', $age_categories) }}">
                        <i class="fas fa-edit"></i>
                        </a>
                        <form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </form>
                    </h3>
                </li> --}}
            @endforeach

        </tbody>
    </thead>

    </div>
</div>
@endsection


