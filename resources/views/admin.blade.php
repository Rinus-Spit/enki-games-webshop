@extends ('layouts.admin')

@section ('content')

<div class="card" style="margin-top: 55px">
    <div class="card-header">Menu</div>
    <div class="card-body">

        <div class="row">
            <div class="column col-md-6" >
                <a href="{{ route('products.index') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center">Producten
                        <i class="fas fa-box-open"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('products.create') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center">Product Toevoegen
                        <i class="fas fa-plus"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.index') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center">Leeftijdscategoriën
                        <i class="fas fa-bolt"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.create') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center">Leeftijdscategorie Toevoegen
                        <i class="fas fa-user-plus"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
<br>

    @endsection

