@extends ('layouts.admin')

@section ('content')

<div class="card card-default" id="card"">
    <div class="card-header">Lijsten</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Eigenschap</th>
                    <th>Categorie</th>
                    <th>Delete</th>
                    </tr>
                    <tbody class="table table-hover">

                        @foreach ($toplists as $toplist)
                            <tr>
                                <td><a href="{{ route('toplists.show', $toplist) }}" id="link"> {{ $toplist->name }}</a>
                                <a href="{{ route('toplists.edit', $toplist) }}"><i class="fas fa-edit"></i></a>
                                </td>

                                <td><form class="inline" method="post" action="{{ route('toplists.destroy',$toplist->id,false) }}">
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
        {{$toplists->links()}}

        <br>

        <div class="footer" id="footer">
                <a href="{{ route('admin') }}" id="link">
                    <i class="fas fa-arrow-left"></i>
                    Terug naar admin
                </a>

                <div class="text-right" id="text-right">
                    <a href="{{ route('toplists.create') }}" id="link">
                        Lijst toevoegen
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                    <br>
                    <br>

                </tbody>

                @endsection


