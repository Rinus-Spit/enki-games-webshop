@extends ('layouts.admin')

@section ('content')

<div class="card" style="margin-top: 55px">
    <div class="card-header">Menu</div>
    <div class="card-body">

        <div class="row">
            <div class="column col-md-6" >
                <a href="{{ route('products.index') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center"
                        style="background-color: rgb(61, 149, 155); color: white">Producten
                        <i class="fas fa-box-open"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('products.create') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center"
                        style="background-color: rgb(152, 165, 69); color: white">Product Toevoegen
                        <i class="fas fa-plus"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.index') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center"
                        style="background-color: rgb(124, 65, 124); color: white">Leeftijdscategoriën
                        <i class="fas fa-bolt"></i>
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.create') }}" style="text-decoration: none">
                <div class="card card-body" style="margin-top: 35px">
                    <div class="card-header text-center"
                        style="background-color: rgb(62, 145, 62); color: white">Leeftijdscategorie Toevoegen
                        <i class="fas fa-user-plus"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
<br>

    @endsection

