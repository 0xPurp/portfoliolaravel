@extends('template.html')
@include("partials.navbar2")
@section('content')

    <main id="main" class="site-main">

        <section class="site-section-small portfolio">

            <div class="container">
                <h1 class="section-title-big text-center">Portfolio</h1>
            </div>

            <div class="container-fluid">
                @foreach ($dataPortfolio as $item )
            	<div class="row" id="grid">
                    <br><br>
                    <span>ID : {{$item->id}}</span><br>
                    <span>Titre : {{$item->titre}}</span><br>
                    <span>Description : {{$item->description}}</span>
                    <br><br>
            	</div><!-- /#grid -->
                @endforeach
            </div>
            
        </section><!-- /.portfolio -->

        <section class="site-section-small section-work-with-us yellow-bg text-center">

            <div class="container">

                <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
                <a class="btn" href="#">Start Now</a>

            </div>
            
        </section><!-- /.section-work-with-us -->

        <section class="social-networks">

            <div class="container-fluid">

                <div class="row">

                    <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
 
                </div>
                
            </div>
            
        </section><!-- /.social-networks -->

    </main><!-- /.site-main -->
@include("partials.footer")
@endsection
