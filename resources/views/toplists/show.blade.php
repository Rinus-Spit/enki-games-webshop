@extends ('layouts.admin')

@section ('content')


<div class="card">

    <div class="card-header">  Lijst </div>
    <div class="card-body">

            <ul class="style1">
                <li class="first">
                    <h3>{{ $toplist->name }}
                    </h3>
                </li>
            </ul>

        </div>
@endsection
