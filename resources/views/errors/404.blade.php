@extends('layouts.principal')
@section('content')

<!-- header-section-starts -->



  <div class="error-content">
    <div class="top-header span_top">
      <div class="logo">
        <a href="/"><img src="images/logo.png" alt="" /></a>
        <p>CINEMA MURPHY</p>
      </div>
      <div class="search v-search">
        <form>
          <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
          <input type="submit" value="">
        </form>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="error-404 text-center">
      <h2>404</h2>
      <p>Lo siento esto fue inesperado...</p>
      <a class="b-home" href="/">Retornar a la pagina</a>
    </div>
@endsection
