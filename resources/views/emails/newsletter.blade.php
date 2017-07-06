@component('mail::message')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <!-- header here -->
            Monografija Crne Gore
        @endcomponent
    @endslot

    {{-- Body --}}
    Posjetite nas sajt, objavili smo interesantne sadrzaje o Crnoj Gori !

 



    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            <!-- subcopy here -->
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            <!-- footer here -->
            Copyright 2017 Danilo Gacevic
        @endcomponent
    @endslot

    

@endcomponent
