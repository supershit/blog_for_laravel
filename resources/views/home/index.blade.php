@extends('homelayout')
@section('title')
<title>{{$title}}</title>
@endsection

@section('head')

<header>
  <div class="logo" data-scroll-reveal="enter right over 1s"><a href="/"><img src="homes/images/logo.png"></a></div>
  
<nav class="topnav" data-scroll-reveal="enter bottom over 1s after 1s">
	  <a href="index.html"><span>首页</span><span class="en">Home</span></a>
	  @foreach($cats as $cat)
	  <a href="{{$cat->name}}.html"><span>{{$cat->name}}</span><span class="en">About</span></a>
	  @endforeach
	
	  <a href="gbook.html"><span>留言</span><span class="en">Saying</span></a>
</nav>

</header>

@endsection
@section('content')

<article>
  <div class="container">

   <ul class="cbp_tmtimeline">
   				@foreach($posts as $post)
					<li>
						<time class="cbp_tmtime"><span>{{substr(explode(" ",$post->created_at)['0'],5)}}</span> <span>{{substr(explode(" ",$post->created_at)['0'],0,4)}}</span></time>
						<div class="cbp_tmicon"></div>
						<div class="cbp_tmlabel" data-scroll-reveal="enter right over 1s" >
							<h2>{{$post->title}}</h2>
							 <p><span class="blogpic"><a href="/"><img src="{{$post->img}}"></a></span>{{substr($post->content,0,75)}}.......</p>
                             <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
						</div>
					</li>
				@endforeach

					
				</ul>
  </div>
</article>

@endsection