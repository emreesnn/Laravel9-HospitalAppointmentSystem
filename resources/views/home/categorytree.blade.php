@foreach($children as $subcategory)
    <ul class="dropdown-menu">
        @if(count($subcategory->$children))
            <li class="dropdown"> {{$subcategory->title}}</li>
            <li class="active">
                @include('home.categorytree',['children'=>$subcategory->$children])
            </li>
            <hr>
        @else
            <li><a href="{{route('categorypoliclinics',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
    </ul>
@endforeach
