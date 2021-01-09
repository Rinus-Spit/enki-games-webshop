@extends ('layouts.admin')

@section ('content')

            <div class="card card-default" style="margin-top: 55px">
                <table class="table table-hover">
                    <thead>
                        <th>Leeftijdscategorie</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </thead>

    <tbody class="table table-hover">
        @foreach ($age_categories as $age_category)
                        <tr>
                            <td>
                            <a href="{{ route('age_categories.show', $age_categories) }}"> {{ $age_category->description }}</a>
                             </td>
                        <td>
                        <form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                                @csrf
                                    @method('DELETE')
                                     <button class="btn" type="submit">
                                   <i class="fas fa-trash-alt"></i>
                        </button>
                </form>
            </td>
            <td>
                <a href="{{ route('age_categories.edit', $age_categories) }}">
                            <i class="fas fa-edit" style="margin-top:10px"></i>
                </a>
            </td>
        </tr>
    @endforeach
</div>
</tbody>

@endsection
<div><a href="{{ route('admin') }}"><i class="fas fa-arrow-left"></i>
    Terug naar admin</a></div>

