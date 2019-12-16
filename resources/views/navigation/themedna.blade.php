<ul class="top__navigation hideable">
@foreach($links as $link)
    @if ($link->checkAccess() && $link->url != '/admin/')
        @if (!$link->hasChilds())
            <li>@include('navigation.link')</li>
        @elseif ($link->hasGrantedChilds())
            <li class="dropdown">
                <a href="{{ url($link->url) }}" data-toggle="dropdown" class="dropdown-toggle{{ $link->isSelected()? ' selected' : '' }}" role="button" aria-haspopup="true" aria-expanded="false">{{ $link->title }} <b class="caret"></b></a>
                {!! $link->render('ul', ['args' => 'class="top__dropdown"']) !!}
            </li>
        @endif
    @endif
@endforeach
</ul>
