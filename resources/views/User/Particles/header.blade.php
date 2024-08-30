{{-- Using Bootsrap CSS --}}
<header class="header_section long_section px-0">
  <nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="{{url('')}}">
      <span>
        Ruasma
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('aspirasi') }}">Aspirasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}"> About</a>
          </li>
        </ul>
      </div>
      <div class="quote_btn-container">
      </div>
    </div>
  </nav>
</header>

{{-- Using Tailwind CSS --}}
{{-- <header class="w-full">
  <nav class="w-full">
    <div class="w-full flex flex-row justify-center items-center py-3 mx-6 px-12">
      <div class="w-full text-left">
        <a href="{{url('')}}">
<span class="font-extrabold text-3xl">
  Ruasma
</span>
</a>
</div>
<div class="w-full">
  <ul class="flex flex-row justify-center items-center">
    <li class="mx-2">
      <a href="{{url('/home?view=Home')}}" class="{{$view == 'Home' ? 'text-black' : 'text-black/60'}} hover:text-black/90 active:text-black font-reguler text-lg">Home</a>
    </li>
    <li class="mx-2">
      <a href="{{url('home?view=Aspirasi')}}" class="{{$view == 'Aspirasi' ? 'text-black' : 'text-black/60'}} hover:text-black/90 active:text-black font-reguler text-lg">Aspirasi</a>
    </li>
    <li class="mx-2">
      <a href="{{url('/home?view=About')}}" class="{{$view == 'About' ? 'text-black' : 'text-black/60'}} hover:text-black/90 active:text-black font-reguler text-lg">About</a>
    </li>
  </ul>
</div>
<div class="w-full"></div>
</div>
</nav>
</header> --}}