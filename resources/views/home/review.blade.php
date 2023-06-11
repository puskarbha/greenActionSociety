
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Client's Review</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    @foreach($reviews as $review)
                    {{-- first--}}
                    <div class="item">
                        <div class="testimonial-item">
                            <img src="{{asset('home/images/image2.jpg')}}" alt="">
                            <div class="quote-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>

                            <p>{{$review->review}}</p>
                            <h4>{{$review->name}}</h4>
                            <span class="position">{{$review->designation}}</span><br>
                            <div>
                                @for($i = 0; $i < $review->star; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                                @for($i = $review->star; $i < 5; $i++)
                                    <i class="far fa-star"></i>
                                @endfor
                            </div>



                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
