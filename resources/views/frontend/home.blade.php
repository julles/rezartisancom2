@extends('frontend.layouts.main')
@section('content')
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ Frontend::asset(null) }}/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Muhamad Reza</h1>
                        <hr class="small">
                        <span class="subheading">Welcome To My Personal Website</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($blogs as $blog)
                    <div class="post-preview">
                        <a href="{{ url($blog->slug) }}">
                            <h2 class="post-title">
                                {{ $blog->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $blog->intro }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="https://github.com/julles" target="_blank">Muhamad Reza Abdul Rohim</a> on {{ $blog->created_at->format("d F, Y") }}</p>
                    </div>
                    <hr>
                @endforeach
                <!-- Pager -->
                <!--ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul-->
                {!! $blogs->render() !!}
            </div>
        </div>
    </div>
        </div>
    </article>
@endsection