@extends ('layouts.admin')

@section ('content')

<div class="card" style="margin-top: 55px">
    <div class="card-header">Menu</div>
    <div class="card-body">

        <div class="row">
            <div class="column col-md-6" >
                <a href="{{ route('products.index') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center" style="border: 1px  solid rgb(202, 202, 202)">Producten
                        <i class="fas fa-box-open"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('products.create') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center" style="border: 1px  solid rgb(202, 202, 202)">Product Toevoegen
                        <i class="fas fa-plus"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.index') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center" style="border: 1px solid rgb(202, 202, 202)">Leeftijdscategoriën
                        <i class="fas fa-sort-amount-up"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.create') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center" style="border: 1px solid rgb(202, 202, 202)">Leeftijdscategorie Toevoegen
                        <i class="fas fa-plus-circle"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
<br>

    @endsection

