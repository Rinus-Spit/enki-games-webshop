@extends ('layouts.admin')

@section ('content')


<div class="card">

    <div class="card-header">  Eigenschap </div>
    <div class="card-body">

            <ul class="style1">
                <li class="first">
                    <h3>{{ $property->name }}
                    </h3>
                </li>
            </ul>

        </div>
@endsection
