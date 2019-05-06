<div class="service-outer blox-box">
    <div class="container">
        <div class="head">
            <h3>Latest From the Blog</h3>
            <p>Here are few of our blog posts, care to read?</p>
        </div>
        <div class="service-list">

            <div class="row">
                @if( count($posts) > 0 )
                    @foreach ($posts as $post)

                        <div class="col-sm-4 col-xs-12">
                            <div class="service-box">
                                <figure><img src="{{asset('storage').'/'.$post->image}}" alt=""></figure>
                                <div class="service-detail">
                                    <h4>{{$post->title}}</h4>
                                    <span class="badge badge-secondary">{{$post->created_at->diffForHumans()}}</span>
                                    <span class="badge badge-secondary">{{$post->category->name}}</span>
                                    <p>{!!cutParagraph($post->body, 150)!!}</p>

                                    <a href="{{route('blog',['blogId'=>$post->id])}}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                @else
                    <div class="col-md-4 offset-md-4" style="text-align:center;">
                        <p>No featured posts</p><br>
                        <a href="{{route('blogs')}}" class="btn">Show All</a>
                    </div>
                @endif

            </div>

        </div>
    </div>
</div>
