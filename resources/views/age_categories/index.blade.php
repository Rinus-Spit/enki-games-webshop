@extends ('layouts.admin')

@section ('content')

        <ul>
        @foreach ($age_categories as $age_category)
                <li class="">
                    <h3>
                        <a href="{{ route('age_categories.show', $age_categories) }}"> {{ $age_category->description }} </a>
                        <a href="{{ route('age_categories.edit', $age_category) }}">
                        <i class="fas fa-edit"></i>
                        </a>
                        <form class="inline" method="post" action="{{ route('age_categories.destroy',$age_category->id,false) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </h3>
                </li>
            @endforeach
        </ul>

@endsection