@extends ('layouts.admin')

@section ('content')

<div class="card card-default" style="margin-top: 35px">
    <div class="card-header">Leeftijdscategoriën</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Leeftijdscategorie</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <tbody class="table table-hover">

                    @foreach ($age_categories as $age_category)
                        <tr>
                            <td><a href="{{ route('age_categories.show', $age_categories) }}"> {{ $age_category->description }}</a></td>

                            <td><a href="{{ route('age_categories.edit', $age_categories) }}"><i class="fas fa-edit" style="margin-top:10px"></i></a></td>

                            <td><form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </thead>
            </table>
        </div>
                    <br>
     <div class="footer" style="margin-left: 35px"><a href="{{ route('admin') }}">
        <i class="fas fa-arrow-left"></i>Terug naar admin</a>
        <br>
        <br>
</tbody>

@endsection


