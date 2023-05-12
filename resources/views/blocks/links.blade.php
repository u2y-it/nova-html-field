@if(!empty($links) && is_array($links))
    <div class="flex justify-start space-x-2">
        @foreach($links as $link)
            @if(!empty($link['href']))
                <a
                    href="{{$link['href']}}"
                    @if(!empty($link['target']))
                        target="{{$link['target']}}"
                    @else
                        target="_self"
                    @endif
                    @if(!empty($link['title']))
                        title="{{$link['title']}}"
                    @endif
                    class="block {{!empty($link['class'])?$link['class']:'link-default'}}">
                    @if(isset($link['linkText']))
                        {!! $link['linkText'] !!}
                    @else
                        <svg
                            width="24px"
                            height="24px"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    @endif
                </a>
            @endif
        @endforeach
    </div>
@else
    <span>&mdash;</span>
@endif
