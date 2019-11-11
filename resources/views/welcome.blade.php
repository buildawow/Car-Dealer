<script languaje="javascript">
        var getin = prompt("Necesitas una contraseña para acceder al sitio.")
        if (getin!="Cardealer")
        {location.href='{{ route('welcome') }}'}
        else
        {console.log('Contraseña correcta')}
</script>

    @include('welcome.header')
	
    @include('welcome.preloader')
	
    @include('welcome.navbar')

    {{-- @include('welcome.hero-slider')

    @include('welcome.mini-slider') --}}

    @include('welcome.advance-search')

    @include('welcome.recent-cars')

    @include('welcome.call-to-action')

    {{-- @include('welcome.testimonials') --}}

    {{-- @include('welcome.lastest-news') --}}

    @include('welcome.footer')