<div class="team-outer">
    <div class="container">
        <div class="head">
            <h3>Expert Team</h3>
            <p>Here are some of our hardworking team members.</p>
        </div>
        <div class="team-list">
            <div class="row">
                @if( count($team) )
                    @foreach ($team as $member)
                        <div class="col-sm-3 col-xs-12">
                            <div class="team-box">
                                <figure><img src="{{asset('storage').'/'.$member->image}}" alt=""></figure>
                                <h4>{{$member->name}}</h4>
                                <p>{{$member->role}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-4 offset-md-4" style="text-align:center;">
                        <p>No team member added</p><br>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

