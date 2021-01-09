@extends ('layouts.admin')

@section ('content')


<div class="card">

    <div class="card-header">  Leeftijdscategoriën </div>
    <div class="card-body">

            <ul class="style1">
                <li class="first">
                    <h3>{{ $age_category->description }}
                    </h3>
                </li>
            </ul>

        </div>
@endsection
