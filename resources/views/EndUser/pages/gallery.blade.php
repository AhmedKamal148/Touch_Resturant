<div class="container">
    <div class="row">
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".breakfast">Breakfast</a></li>
                        <li><a href="#" data-filter=".lunch">Lunch</a></li>
                        <li><a href="#" data-filter=".dinner">Dinner</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="portfolio-items">
            @foreach($meals as $meal)
                <div class="col-sm-6 col-md-4 col-lg-4 {{$meal->meal_time}}">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="{{$meal->image_url}}" title="{{$meal->name}}"
                               data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>{{$meal->name}}</h4>
                                </div>
                                <img src="{{$meal->image_url}}" class="img-responsive"
                                     alt="Project Title"
                                >
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>