@isset($reasons)
    <ul>
        @foreach($reasons as $reason)
            <li>
                {{$reason}}
            </li>
        @endforeach
    </ul>
@endisset
