@extends ('layouts.admin')

@section ('content')

<div class="card card-default" id="card"">
    <div class="card-header">Eigenschappen</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Eigenschap</th>
                    <th></th>
                    <th>Delete</th>
                    </tr>
                    <tbody class="table table-hover">

                        @foreach ($properties as $property)
                            <tr>
                                <td><a href="{{ route('properties.show', $property) }}" id="link"> {{ $property->name }}</a>
                                <a href="{{ route('properties.edit', $property) }}"><i class="fas fa-edit"></i></a>
                                </td>

                                <td></td>
                                <td><form class="inline" method="post" action="{{ route('properties.destroy',$property->id,false) }}">
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
        {{$properties->links()}}

        <br>

        <div class="footer" id="footer">
                <a href="{{ route('admin') }}" id="link">
                    <i class="fas fa-arrow-left"></i>
                    Terug naar admin
                </a>

                <div class="text-right" id="text-right">
                    <a href="{{ route('properties.create') }}" id="link">
                        Eigenschap toevoegen
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                    <br>
                    <br>

                </tbody>

                @endsection


