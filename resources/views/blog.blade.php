
@extends('layout')


@section('title')
ბლოგი
@endsection

@section('content')


<!-- blog -->
<section id="blog" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h2>ფიტნეს ბლოგი</h2>
                <p>ფიტნეს-ინსტრუქტორის რჩევები</p>
            </div>
            
            @foreach($blog as $value)
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s" style="margin-bottom: 70px;">
                <div class="blog-thumb">
                    <span class="blog-date">{{$value->category}} / {{$value->date}}</span>
                    <h3 class="blog-title"><a href="{{ url('/singleblog', $value->id) }}">{{$value->title}}</a></h3>
                    <h5 id="blog-author">ავტორი: {{$value->author}}</h5>
                </div>
            </div>
            @endforeach
            <nav class="numbering" align="center">
                
                {{ $blog->links() }}
                
            </nav>

            
        </nav>
    </div>
</div>
</section>

@endsection