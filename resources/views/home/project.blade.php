<section class="projact">
    <h1 style="text-align: center;font-family:'Edwardian Script ITC' ,serif;font-size: 80px">Our works</h1>
    <div class="project-bar">
        <div class="row">
            @foreach($projects as $project)
            {{-- card-1 --}}
            <div class="col-md-3">
                <div class="card" style="margin: 10px;">
                    <img src="{{asset('home/images/image2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{$project->title}}</b></h5>
                        <p class="card-text">{{$project->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach<div class="row">
                </div>
        </div>
    </div>
</section>
