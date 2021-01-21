@extends ('layouts.admin')

@section ('content')


<div class="card">

    <div class="card-header">  Categorie </div>
    <div class="card-body">

            <ul class="style1">
                <li class="first">
                    <h3>{{ $category->name }}
                    </h3>
                </li>
            </ul>

        </div>
@endsection
