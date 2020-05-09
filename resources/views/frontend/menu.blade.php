<div class="col-md-3 ">
            <ul class="list-group" id="menu">
                <li href="#" class="list-group-item menu1 active">
                    Menu
                </li>
                @foreach($tags as $tag)
                <li href="#" class="list-group-item menu1">
                    <a href="{{route('theloai')}}">{{$tag->name}}</a>
                </li>
              @endforeach
            </ul>
        </div>
