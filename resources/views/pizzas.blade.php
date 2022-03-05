        @extends('layouts.layouts')

        @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>
                @foreach($pizza as $pzs)
                    <div>
                        {{$loop->index}} Type {{$pzs['type']}} base {{$pzs['base']}}
                    </div>
                @endforeach
            </div>
        </div>
        @endsection


