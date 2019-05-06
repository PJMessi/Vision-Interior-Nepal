<div class="feature-outer">
    <div class="container">
        <div class="head">
            <h3>Featured Projects</h3>
            <p>Take a look at some of our Projects.</p>
        </div>

        @if( count($projects) > 0 )

            @if( count($projectCategories) > 0 )
                <ul class="tabs" id="ScrollToWorks">
                    <li class="active"><a href="#">All Groups</a></li>
                    @foreach ($projectCategories as $projectCategory)
                        <li><a href="#"  data-filter=".{{$projectCategory['category']}}">{{$projectCategory['category']}}</a></li>
                    @endforeach
                </ul>
            @endif

            <div class="feature-list" id="freewall">
                <div class="row tab_container">
                    @foreach ($projects as $project)
                        <div class="item {{$project->category}}">
                            <div class="feature-box">
                                <figure><img src="{{asset('storage').'/'.extractImgPath($project->images, 0)}}" alt=""></figure>
                                <div class="thumb-overlay">
                                    <div class="thumb-overlay-inner">
                                        <a href="{{route('project',['projectId'=>$project->id])}}">
                                            <h5>{{$project->title}}</h5>
                                            <p>{{cutParagraph($project->description, 80)}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4 offset-md-4" style="text-align:center;">
                <a href="{{route('projects')}}" class="btn">Show All</a>
            </div>
        @else
            <div class="col-md-4 offset-md-4" style="text-align:center;">
                <p>No projects yet</p><br>
            </div>
        @endif
    </div>
</div>
