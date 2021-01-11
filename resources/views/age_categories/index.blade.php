@extends ('layouts.admin')

@section ('content')

<div class="card card-default" id="card"">
    <div class="card-header">Leeftijdscategoriën</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Leeftijdscategorie</th>
                    <th></th>
                    <th>Delete</th>
                    <tbody class="table table-hover">

                        @foreach ($age_categories as $age_category)
                            <tr>
                                <td><a href="{{ route('age_categories.show', $age_categories) }}" id="link"> {{ $age_category->description }}</a></td>

                                <td></td>
                                <td><form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit" id="button"><i class="fas fa-trash-alt" id="trash"></i></button>
                                </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </thead>
            </table>
        </div>

        <br>

        <div class="footer" id="footer">
                <a href="{{ route('admin') }}" id="link">
                    <i class="fas fa-arrow-left"></i>
                    Terug naar admin
                </a>

                <div class="text-right" id="text-right">
                    <a href="{{ route('age_categories.create') }}" id="link">
                        Leeftijdscategoriën toevoegen
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                    <br>
                    <br>

                </tbody>

                @endsection


