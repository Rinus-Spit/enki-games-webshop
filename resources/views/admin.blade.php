@extends ('layouts.admin')

@section ('content')

<style>
    #link {
        text-decoration: none;
    }

    #card-create {
        margin-top: 35px;
    }

    #card-border {
        border: 1px solid rgb(202, 202, 202);
    }

    #card {
        margin-top: 55px;
        margin-bottom: 55px;
    }
    
</style>

<div class="card" id="card">
    <div class="card-header">Menu</div>
    <div class="card-body">

        <div class="row">
            <div class="column col-md-6" >
                <a href="{{ route('products.index') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Producten
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('products.create') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Product Toevoegen
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.index') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Leeftijdscategoriën                        {{-- <i class="fas fa-sort-amount-up"></i> --}}
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('age_categories.create') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Leeftijdscategorie Toevoegen
                    </div>
                </a>
            </div>
        </div>

        <div class="column col-md-6">
                <a href="{{ route('properties.index') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Eigenschappen                        {{-- <i class="fas fa-sort-amount-up"></i> --}}
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('properties.create') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Eigenschap Toevoegen
                    </div>
                </a>
            </div>
        </div>

        <div class="column col-md-6">
                <a href="{{ route('categories.index') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Categorieën                        {{-- <i class="fas fa-sort-amount-up"></i> --}}
                    </div>
                </a>
            </div>
        </div>

            <div class="column col-md-6">
                <a href="{{ route('categories.create') }}" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Categorie Toevoegen
                    </div>
                </a>
            </div>
        </div>
    </div>
<br>

    @endsection

