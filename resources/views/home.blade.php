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
            <div class="column col-md-12">
                <a href="/admin" id="link">
                <div class="card card-body" id="card-create">
                    <div class="card-header text-center" id="card-border">Admin
                    </div>
                </a>
            </div>
        </div>

            </div>
        </div>
    </div>
<br>

    @endsection

