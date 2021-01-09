@extends ('layouts.admin')

@section ('content')

<div class="card" style="margin-top: 55px">
    <div class="card-header">Menu</div>
    <div class="card-body">

        <div class="row">
            <div class="column col-md-4" >
                <div class="card card-info" style="margin-top: 35px">
                    <div class="card-header text-center"
                    style="background-color: rgb(131, 129, 238); color: white">Producten</div>
                    <div class="card-body">
                        <img src="/images/products.png" alt="" style="width: 150px">

                    </div>
                </div>
            </div>

            <div class="column col-md-4">
                <div class="card card-danger" style="margin-top: 35px">
                    <div class="card-header text-center"
                    style="background-color: rgb(253, 122, 122); color: white">Product Toevegen</div>
                    <div class="card-body">
                        <img src="/images/add_product.png" alt="" style="width: 150px">
                    </div>
                </div>
            </div>

            <div class="column col-md-4">
                <div class="card card-success" style="margin-top: 35px">
                    <div class="card-header text-center"
                    style="background-color: rgb(238, 129, 238); color: white">Leeftijdscategoriën</div>
                    <div class="card-body">
                    <h1 class="text-center">3</h1>
                    </div>
                </div>
            </div>

            <div class="column col-md-4">
                <div class="card card-info" style="margin-top: 35px">
                    <div class="card-header text-center"
                    style="background-color: rgb(129, 238, 129); color: white">Categories</div>
                    <div class="card-body">
                    <h1 class="text-center">8</h1>
                    </div>
                </div>
            </div>

        </div>

        <ul>
        <li>
            <a href="{{ route('products.index') }}">Producten</a>
        </li>
        <li>
            <a href="{{ route('products.create') }}">Nieuw product</a>
        </li>
        <li>
            <a href="{{ route('age_categories.index') }}">Leeftijds categorieen</a>
        </li>
        <li>
            <a href="{{ route('age_categories.create') }}">Nieuwe leeftijds categorie</a>
        </li>
    </ul>
    <br>

        <div class="footer">
            <a href="{{ route('admin') }}">Terug naar admin</a>
        </div>
    @endsection

