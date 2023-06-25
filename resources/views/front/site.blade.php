
@extends('layouts.front.site')
@section('content')
<!-- Featured properties start -->
<div class="featured-properties content-area-7">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row slick-fullwidth wow fadeInUp delay-04s">
            @isset($properties)
            @foreach($properties as $property)
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="{{route('property.details',$property->id)}}" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>{{$property ->total_price}}</div>
                            <img src="{{$property -> images[0] -> photo ?? '' }}" alt="property-box" class="img-fluid" style="height: 280px;">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.html" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="http://placehold.it/750x540" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="http://placehold.it/750x540" class="hidden"></a>
                                <a href="http://placehold.it/750x540" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.html">{{$property->name }}</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.html">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{$property ->location}}
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> {{$property -> bedroom}}
                            </li>
                            <li>
                                <i class="flaticon-bath"></i>{{$property ->bathroom}}
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> {{$property -> area}}meter
                            </li>
                           
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe 
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> {{$property->building_age}}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- services 3 start -->
<div class="services-3 content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-hotel-building"></i>
                    <h5>Apartments Clean</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-house"></i>
                    <h5>Houses</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-call-center-agent"></i>
                    <h5>Support 24/7</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-office-block"></i>
                    <h5>Commercial</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- services 3 end -->

<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Masons Villas</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Park avenue</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-3">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="container">
            <div class="row">
            @isset($cities)
                    @foreach($cities as $city)
                  
                <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInUp delay-04s d-none-992">
                    <div class="overview aa overview-box">
                        <img src="{{$city->photo}}" alt="popular-places" class="big-img">
                        <div class="mask">
                            <div class="info-2">
                                <div class="ds">
                                    <h2>{{$city->name}}</h2>
                                   
                                    <a href="properties-details.html" class="btn btn-border">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                        @endisset
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

<!-- Agent start -->
<div class="agent content-area">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFhYZGBgZHBocHBwcGhoYGhocHBkaHBoaGhkcIS4lHB4rJBoYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHjQkJCQ0NDQ0MTQ0NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NP/AABEIAPsAyQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAECBAYDBwj/xABBEAACAAQEAwUGBAQDCAMAAAABAgADESEEEjFBBVFhBiJxgZETMqGxwfBCUtHhBxRiciOCwhUWNFOSorLxM0OT/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAJBEAAwEAAgICAgIDAAAAAAAAAAECEQMhEjFBURNhIpEEMnH/2gAMAwEAAhEDEQA/APVBEhDCHEWIeFChQAKFChQDFChQoAFChRznTKWGp+6mAETZgBU2EDsRj6g5BYb/AKCK8/iDg2KgczUnxoNIH8SrMU0cmvp6UjC+bOkdPHw72zliONMTkBN/xGlL8gNYI4RZTintKtyDfQaRlcfw1/ZqV/CTpYxnpuInyyUluUWlSwFzTm2tKbAxh5t+zofHi/ibvinD2AJGanUVHqKERmf5ubKepZgNvxDy6QT7L8Rd1yNPdm0q5Ra/2qWJPnSLvFMIDXOBT8yilOrL9dOsJ9don30y9wXtKHAWZ/1i48/1jSqwIqI82n4B07y3p5gjmPu8HOA8WpQV7p1X8vVenSN+Pl+KOe+L5k10KIowIqIlHQYDQoUIwANCMKEYAImGhzDQxExDiGEOIQDwoUKABQoUKAYoUPDQAKAPF8cAHNbaeQ2r1NYMYuZlQmPN+0/F8oyIKnc7DbzjDmvxWI34Z3sH4jHzHmUzm5soJoOppGy4LhXIBZj5xnuyXDwRna7G9Tr+0b3DSaDSOWZdUdbfjJ3OCUrlN4zXF+AKRUCNOSY4zbxvUJoyiqTPLJqTMM4Zfd3FDf0v8Y2WDx6TUDoQdmApY8iPwn58o6cW4erg2EZJC0iaCls1m5EbVH3rGGuXhtUqlqNZhqL3SKodvynpygbxPh/smzp7huen6ffl2lYoZtaE08CD9YIq2ZCpuDp9RFS01jMaWMtcAx2ZQpMHIwuAllHZdDWqkfehrT0jYcPxBdKnUWMdXFWrGc/JOPUWTCMPDRqZDQoeGgAiYaJQ0MCQiUREOIQh4UKFAMUKFCgAUPDRwxc/ItrsbADUmAEtBfaLGZVyA3OtNadOUeb8ZlUYVH+XUnqT9/SNdxKac/e8TrT9/OAuGVXxKBhdzYf0ipv0NNPCOLkryo7OOcWGg4HhWlSVbJmmNfLWlzzOwEEJXHgj5Jy5CdDWq+sUu1Cz1klpAq9vIbxkeDy8fNVzNyuiG6OCGNif8NqUqIEn6RpTn5PT/wCZVhVSCOkQLRj+DTaMApND+E7Qem4jKKmD8m+w/HhYxKVEZLiGG74J0BqfK8EpnaJFsQ3pArF8YlujkAiijUc2AiKabLTxYyoz1W+xPob/ADgjwjFMO6339/WBUpxnpsw+Qv8ACLMl8j5DpSqHe21d7fKMvTJZoyRmVyPdsfDr4H5iDHDzlYjoa+Rsf+4wDwzilCbMPjB3hculWbU/ADYR2cL05uRdBGsKIrpDx0nOKFChjAAjEaw5hoYiYhxEREoQCh4aFWAYoeGhQAPA/HzglWOwFPEk/oIvxmO0GN7xVdh6VjPkrxnTTjnyrAViMSozO9woqa6E7AdNPXrGd4DNZ8akxt2c9KZWAjpxVyVyjT99fn8OUN2Yw5OJb8qIT5kqB/qjgdad0pJnqK0ddYFvw5gTQAg9NfGLGFnhRcx0biS1Ci5JAHibRsnLSbIypbz0V8FwZFYNlVd7Cnwil2gBLZFtb/1GmlrqTqIzWMNZrAmtYdpKRRTqmYiRw3EmY/t5zIgBKMhBFeRUiOOD4nNV2w80q4PdV1FjaoJ5Xp4XjfzMJXSA2OwIGwHlGbtJZhajXugt5fuGlCpBI/uJzD4mH4gpWhGqMKeBNCD009YsSXDl1/EAPTb5GGxzjMP6hpzpYiMmvkH10EMM1lOx+I5QcwU8i1frGdw69zLtanTcGCeBc1odtfDxjXjrxZlU6jQpOuL+O3wi1WKErDg95T4courpHfP7OWh4aFCiiRoaEYaARIRIGIiHhAShQhCgGKFChQARmvRSToBtrGVxshphJApuBc/GNYRUUgTj0opUHp68+dr+nOMuWU12a8Tx9GExkm45XHiSD9aCO/ZcgNMr7xRP/Jz+kW+JKGmBFGunSmhPiRAKVjBJxPesHYoa6AUXJ9B6xwJdna38muLk70EEMFJUrmWtRoeo3gfh1Da6bxyn8PaWaSJ7ygbqpOdK8spuPLnpGkrsvPLo7S+OzUqrrmNTdRr5RWkYguS+Vga7ikU5nEpqEmZIzn8yNZuvL5ROVxhWNMjq3LIT8RakTWsf43PeByXi7QE4zjQASdrxYcnXnSMx2rn5JTE+81FUcy1rddYnusQapTZX4XxCrsQfeAy9SBoPnBh/8QaVvmXWtCKEeIMed8NxDVKKQSDVK0uy1zEXr3gWp5RrOBzXZCQMoBp+bUjQ6U5jwi7nxRzTTpmlwz5Rc5vnT6iCMpBUVqBAaSa3/HYmmjrpmA2IBFo0pkWoCKgDw036QpnQp4WOHDK1CXN7HQU5EQagHw1yc6tbLQjehvUV9INAx38eePRy3/sPDGFWGjQgUNCMNDESiQiMPCAlChoeAYoeGh4QDM1BU6CAGOdmKaj2jkUAuFAJ/wCqg0g+61BHO0DsbJIXMPwMH9DenkT6xFz5LCoeMymN4aVdnLhUU52cmoyrr46frGD4xixiJwdfdL210LW1ApttG7/iFxVJMlZTjNMnGpFAciDU0PM93qM0efYQSlmo+YhSygqbjNohBN1WtLGt6bXjmvjx9G88m9M9M4TNBGU609YtYrAMwsaiACuRQg0I0i7h+PhbPb5Rn/06tztEf9nMNSY7yJKpoPEnWHncYlkVLj1EBcXxgtVUHmf0iWkW7p+2EsdjlQEsbCPNeNcUfEvmFlUNkX1GbxNI0HEFbIWYkmh8rRleBYlXBSYVuAAWJGU5yxoQDrmJvy52OkTvaOblrMRPgXDS7qALgilyL+I5Wj0ZwqKqoBQMosKAsW7xp1BaAXAMGZYZmpqaU32J8KaecFQ90HUV8SQfkIyuteDmcWl/ASxnFNKd35FfgPUwVkTCWAF61+Q/eA3C1bNTmAfA0H7RoOGYQs4YkVXMCOZOluVKxpxJt4ibedl3hsurOTvQV8IKxzkoAD43jpHdKxYctPWNChQookYxGJGIwwJiHiIh4QiUKGEPAMUOIhMdVFWIUcyaCAuP7TS09xWc9KKun5j9BCYB6B/FeKSJKn2zqtR7urEdFFz6RheI9qMRMB74lJf3AQfNzp6iM9iKGrAFidWYnlzvU+RHWE6Q8ZW7X8R/mcS8xa5KKiVArlVdSOpLHzgFi8JmlsByJHiLwSxMs526E08K6RJE0ruIz/Y8KfAO2BQCXiKsosHF2H9w/EOuvjGzltLmqGVgyndTUeHQ9I8ixUnI7LyJHltEsLi5ko5kdlPQ0r4jceMRXGn6NY5nPT7PWl4cmoFI6SpKrGK4f27dRlmy1f8AqXut5i4PlSJYnt2SCJckKTozNmp5UHzjF8NabLnnC72z4uqJ7JD321/pXmepjO9k8KWmhyaKhB8TsKHXeAk6azMWYksTUk6kneCODxeWWFBKkMWJFNRSlfh6Rs58ZxHO78q1no5xGYhBpQ20/tp6G0WcArNMOYHuk6/fLSM0mNzpLmrYnuno4FgfHUeY2jS4HFBHBpUe/ewatCKnlcRyOcrDomtWh7CIM4IrrexAFxvGnwGEyqMwv1oaXYjzvGXw/bLCM7LMzyXqK51zLmG4ZK28QI1OB4jKmj/Cmo/9rBiPIXju4uNT6Oa+TyLYEKFCjYzFChQxgARiMOYaGBKJRERKEIZmABJIAFyTYAczGR4z2upUSKACoLsKg/2Lv4n0MVu2fGi5OGltRAf8VwdT/wAtT8z9dMRjp1WCVtlryoNB9IlsaDEzFNN77zHmV5sRz0VaL8ICugeZkAAAqTSx9dYlgJw93U7dOcQwF5rddfWJKCcrDouijNz1PqbxJk7wtuPSHF4lWgY1oDYaXLcq8gGMAyhw/Be2npLBJDsA1Cgampy5jlrQUHWL/aHhsqSEyd1jVShYu1Aoq7MTrmzCwAsKC9Tf4b2UMwZ5jlCQWCgXFLgk+ABprcaUgFxPCBJzqHLkNQkvnatM1CamhqWqOZJ5wOWuzKeaapzL9GK7QYfLNzfmFfMW+VIEMkbTiXDzMDADv/hqdxYU8dK9YyMxaWIoRYjcHcGEWyuRDUjoRESICSNII8MTNntotaf5hA+kG+zUupm9E/1D9IBlnBzSqlfeQgA1tatQRyYfAxo8HjnypfNlXKetNK+XwPOAGUaHu16VA5+WnzjvhMdOk1yOVBIJFiDlupr5nTWvhCXinrW/orXmJ4cuJlXchUZWFdDUjKCTToACfCKCZ0NQ7Ai4IY+oMH+z05GnOJ2aswLR1yhwwmKzi9qMtSd6KQLm/DjyIkxVR849nLz1UpRr07pPdbJkqNiTAuhN6Guz38RcTJISefbpa5osxRzDaN4N6iPW+FcTl4iWJspwyHyKndWGx6R87CQW9zvdN/3jQdju0L4OYGu0p6CYnT86j8w+NxFzX2LMPdYaIYbEI6K6MGRgCrC4IOhETjQBjChQoAJCM52n7QezUypRrNatSL5ALMepFfjFjtZxr+Vw7OPfY5EH9RB73goBPoN48vwOKGVizXL1Y6k1Aqa61zAHevkYingLstTzQeeu9d6wGxTkOSKVyjUVrYQUxJzAkW3163HzgNi379elPhEspkOGTT7S9jXbraCOGak5h4wGR6OpG/61+kE5g74b832YQILqxB1irxPGrlVSSg3Oq9agXBNhWm0WXtQnceEC+LAFfT94bAty+1pRMi4kFQFChJZLKAKBQcoset+sA37RKKrLRnNSSWOW7akgVLbnXeK2Gw1XFqDeI4jCFJpGoJhNt+zOYmdxJaQm8XxL1NUS1O6oBG1m1r5w0+Yk4D2i+zmkV9oPdcUoMy6DQ1IvudKR3/lcx8b+vOKeNlsFVQAQGqNtj8bj0EBQOxEkoxVhQj63BB3BG8ciIJ4xc8sMPelinilf9JPoRAwVgAjGm7GpX2/9g+sZogxsOw0uqTz/AGj4GGgK86mmhrHSWuxuNtiPDp0+EPikud6E/fpExhVcVSaFP5HBWu/dcVBPpCKKrnI1cwWhqM1L0NjQgg9RQ63isXlqABmamlBT4t+kEnlMKh1FKV8Re9a2uDApxpAIYYhiCAAinYa+bfSLSCinw/SOMlIszfcMAGp7DdrGwwCTKmSTXqlTdl6bkeJ119fRwwDKQQQCCLgg3BB5R87YeyhuX2R6fOPWf4b8TzyGkE1aSe7X8j1K+hDr5CLl/An0bAmFWEYaLGeS9vuLe3xJRTVJNUXkW/8Asb17v+QRnUbIQn5lqabE1I+Bp5mOQJJJJvWpPjvDO9Xr98vpGLesEsQyTmWqliTW/hqvwt5QztU+X384WLl17y609Rr8IqSZtR1F4AGz0YA7GD0li6Kbd31tGcxkkk5lNIK8KxVDl2MJAaIglBzA9LfE6RSmJXnFzD2tz/QxCcpB26UihlTBYFmmLLRczOQFXqeu1OfSNRxXsBMZS6Tkd0oGS6itK0VzYk5hqAL6wG4fjxhp8ueyllQnMBrRgVJHrvGw/msEjJiVxKGSuZ2UszzGYXRRUlioJrl/MBUnakk/bwmt6xb9nn74XKBWooSKXr4U8jFbEYSxrU/fzgocWJxmTACod3cLuAzlqfGK7XOlPOvSJKAMqXdkI96x8GBUk+ZQ+UZ/LzjU4tKEkVuCa327wsNbiM9xGizZg5sSPBu8PnCEysRG17CL/gzz/Uo/7YxgIOkbXsZbDTer/JRAhHGclWPjFYIRqNRuNf11jR8Fwkpi7zAXocqpmyCtKlnIvTSg3Na6RpuN8ATEyFmy1yMiVQbuLVVrd7o2um0RbcSqpYm8T+xzU1TSfa+DzXGtlQ8yKcqVt8qwPQxc4k4OUczX4fvFZVixneQIfGe7QbxLLQVitjJgArAB1kGlAOX2f084PdjuMfy2LlsTRHJlPrQKxFD5MVPhWM/gzUZog7VB8fmP2hJ52J9o+kDEawF7I8U/mcJKmE1fLkf+9O6x86Zv80GY3Fp4GxovWOMmm/nE2asc60jEZYZBl1gHiTkfMNDf9R9YNpNG8A8bilYlada/IwAQxWKVlCoGrudv/cWMO+ULTkL6VtAwtWtLU6QUCUALLryAY77FgR5GAEanh2LV1F7rzpyi05FPrGYwU1FYgK9bHRxpr+ODEqcrCuRyT4A13oC+9D8IExl+YoPh4+WkVBIQZlIGhO20L+aZNZb0G9F0Ol8x6QsXMUEDISSr6d4UFBu1tYejHwEsKCosKa7X3jmW0qfgfHeOKYpRWlamg0bSrcif6RCJG6tY7BtvOFoEcSl1FPu99IznGpVJgqKFkU89KrvTZRGkzqKChttQ9ds3WM9x68xTQjugXFCcrMNKnpAJgtkEbrsklMMQa99nI2rRRTXnt4RiKRr+zeFP8sXZ3y1aigkLmrlB3FanprAmJBThvEEku4dGKOaErQlSCaMFJAbU1FQdOVDpX7YyEw2SSC0zJl9x0UEAqHYuBX81BWp9RgZ7mtjf72jtKYFSSAaW+/WC9uPCn19CmVNOku2DsalHUDYfUj6QyDekPjXJc0UmgUaqOZ0PjEUmNpkbTbLv4HoYRR0nm0D8ee6BzI/WO86dXZgeqmnwr1itiAWdQDYDw16U5UhCLuCHd8o4zjY+XziyllG0VwlyOYMUBvf4UcUyzZmGJs650/vSzeq0P+SPUo+d+EY5sPOlzl1lureK6MPNSw8491/3hw3/ADV9Y0l9EniQ6w2aK+IZ1ahH3zjkk/nGZR3nUgNj5f4htY+EE2esUpgrUHe0AFHDituZA+n1jZY3DqcCHRDVWUs1BbN3SK1rQ0U7D0jFyahhTUMPUGNp/t8Lhmw4lhmdWFwMpOc0NK1qASbbkaUvNp/A5a+QHIrTOGPv5SKaVXMGzde8KdOsewdkuDiXhkdTR5qIzPZgRMFkUgj3RuGF6m1L+UYeSi4eZU9+YUygGvusGrbTQi99YvcN49ipKPLlTiqNXu0DZCdWRj/8bGuoO5NKxUvGIJ8cxIbETylFXOwCgggEe+Bse/m0ijPmnMmwOdT/ANQijKxUtFuc1ALCr0FhtRempiZxYfKAuValq2JJJ6WAtBozrJYc6Gt/WJPMcMaLUE0seZ5ecVlPfMdZrC/ePhpsIADPEuDNIQzM6PSlaIbVtZ69/wBBGL4xiQ7KQAKA6AAXPTwgzO4nNdMrPUVFdiabE18NBAbjQGZSAdGF+h/eBiKBMb7h/cwEoHernzJMeelo9BxDZcNh0/oU/Aa+sNegRQny2B90imoNYaXPXQV8NudiIZMfMWoDMVt3a1Ft+YPgYhPxVQWZQtB+9TU6WPrCGLiWDBmS6Tc6zAqschQoVy5171mpUkNvy51+EsntEL0ZBs1RmsSoNOZpbyhYKYQ6vMJZb0YnPlqNRc11+OkSxYRmZZZBBCk5amldaEUHK9bXiQ3s23a7hcppbTU7rINOYWg02NOVvnHmk9qTD4Kf+0D6QSx/HJjKEmTaqKWABZqUIzFQA2g32EBMViAzAqCBSl9TcmvxhTPis1v9s05alvZCsiZUQ72cRWwbxZmC4izIqrHfL1jiqmJ1P2YWhgRw09Zi5WswFB11iGJwBUVPzgQjkGojrOYucxdgfG0MRJQQaRDELflHMtMXQg+MV3msTUiADrgpQMyp0BBiziaMFPj84HS5pBPlFhHsRpS48D9mExnYTDuASNGNa+d7+cSYlh3jWm2w8ALCIppE1EMRJh3Sf6f/ABIP1+ETRqUNdLfX6mII/wDqHqp/SIB6rXqPiD+kAwkNYfEIDck6ftFfDPUa+UW3NVBqBt9+sAymy7iB3F9V/wA30gm6wN4t+Hz+S9ISEDhe0egccbKsteSLpt90jBYdaso5kD4xt+0b98DkB8B+8V8AgUWiGIbuX358vvNEWb7+/KOeKfReX3+sIDjKXLdTSuo/CfEQ81i1ibHYWF+ghLBrsbwn+ZxcuW3uA536olCV8zRfOElrEZXGtViBoLemsVwY0nb/AIUMPjpqKKIx9og/pe9OlDmHlGdRKmKzAO0jEMvWCrPXK3MVilLUKIm84c4Qy4rAwvKKiTxziftoAKHtDsIRdhqItrLc6mg5C37xNcMBc86V1r0A3MAiqk5zYKTFh8M4Us2VaCt9fSLUtGY5EBDE0CqMzknYnRfoNYtp2WxDG6kA6kuGPoB9YAM67CnM/dqQSwKB1J3Ap9add/jBN+yZAIyvXny+EUpuAmyajKaakgX8x5mBoaKjGlBEBMvEGmhj3rHmKfEb/CGZRzJ8Lep+nxhCLmHau24+/C8cWUKCK1NKW011rzsfWILiLHbSw3III8dIU0C4B3PzMMZawj/KCIII5/K4/aKfBeGT5p/wpMxxzVGZfAsBQeZjRr2Ux2X/AIaYKkflrof6vCApICtppAzi691T1+n7RqJ/ZbGgf8NNPgtfkYHy+zmIxDnDqmSYgLMsyqFRUgVzCt625wB4t9YZvhiVnSxzdf8AyEajtC9Zz33p6W+hgx2e/hpiBMWZNmS5eQhgoq7GhqQaUA8amOvGuxGKZ2dPZuCxICvlbUnRwo+MDY/x3noxiPU/H02jnckxZxeBmSHZJqMjgaNrTUEEWI6gkWMcENBU/peJJYmNBG8/hzj8LhpM/ET5qq+cS73OUKGoii7VOtPyiPPJ02m9Tt06nrFCYKmgipeMk1fb/tGmOnI0qWVSWpUMfeeprUqPdHIdYzK10FBTWEkhtBX1i5I4PMNwKeYh+wKoX+1v8xERyHdfQmLk3AupysPUUPiKRxKMhs3huDCAZMNatxEvYdY6yZuYX1jpTxgGdZMupqfOItOLOESg2qNadDtHTEuAKLp844YBDnXqa16C/wCkAj0Hs5gZeGTZnYd9rd0H8KnWg3O5ueQPJi0J0+P3WMdh8UR8rxdk40ZqbxaYzTPiEAJJoACSToABudo8v7Q9ofbuVlDJKBsBZnp+JjrtYesE+1fEysplU+/3fI3b4W84xBaFTEdXoanet+daQqj4Rxzb7GEw3BiQO1tIczLV3EcM33zhs0AH0p2YwiSMNKloKAICerN3mJ8yYu8QxWRcyit7ga0gFwTGgyZdT+BBXnRQKwWlz1OhjBWej4Z2ccJxVGNCR9Y6415LjvCpGjA94aWB1AsLdIrYzBS271K8xQRVTASibOy8xXTyNQIflXro0Uy35douy8EpHcmOvjlYfIRzl8Mmqcwmqw/tI+FT84sNgxQBJt+TAX81pT0Mc5azl/KfBgR8aGBpfK/oapv0/wCwd2p7PpipORyBMWpRwtCp5EVup3HnqBHiOMDS3aW65WQlSNaEfTcHcGPdeIB65moLaA39I8q/iJhgHSbuwKnrQgj5tDmv5eJy8/H/AB8jIT208PqYlKmItzUnpHCGjU4zUcGn4djl9xjpW1fA1jSfy6rQi4jzMxseA8VLplc1ZbE6kjY/fKGmMvcTVXQqddjuDzEZZyRVG1Hz5xosS3eMA8eozhhv9P8A3CYFdJVbjWJ1MdsBhZk1wkpGdz+FRU+J2A6mgjS/7h47/lJ/+ifrBjFqMvNDBqOpBBuKUI8QYs4aYpJy8vA6jn4R6v8AxGwUs4WZOKD2iGitoaV0NPeHjWPLMLLBNaX9PlA1gJ68+i2k4j5x1lzwGryqf0+MVm+/SOE73G/tMAwTxzG+0mbZVsKb8z9PKB0RhQEj1hK1IaEYAHMKIiHMAz13slxX2mHSmqjKw5ERoZU/nXyjzH+Hc5hPZK90rUjYkG3zj0bnHNc4z0eK25QXws9NM1fGxH6x2xfC865pbZXGm4PjAMrcRY4dPYWqdYJe9GtdFL/a+JktlnSipH4kOZWHMV08zHfCccDErdT/AFELXwvGhnd5Dmv4wGGDT8ogrr0OHvsonFF3NDmIta/x0EZH+I8xfZIp97PXyCsD8SI286UqiigDwtHl38QnP8wBWwUU9T+gg41tIz/yXkMytYUKGjpPMFFnAYoy3DbaHwMVhCGsMDYzJwdQQeQrzBuD8/SNR2T7GpiU9rPzhAaIqnLn/MSaVy6C1L15RluFSxlW2pWvXuiPdpcpUVVQBVAUADQADSHK3sH9Fbh/DZOHTJJlqi75Rcnmx1Y9TFqsJoaNgSP/2Q==" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><img src="https://image.similarpng.com/very-thumbnail/2020/05/Icon-Facebook-In-circle-PNG.png" alt="agent-grid-2" class="img-fluid"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/255x285" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Martin Smith</a></h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/255x285" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html">Brandon Miller</a></h5>
                        <p>Office Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        <img src="http://placehold.it/255x285" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="#">Karen Paran</a></h5>
                        <p>Support Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
<!-- Agent end -->

<!-- Testimonial 4 start -->
<div class="testimonial-4 tml-4 content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Maria Blank</h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="http://placehold.it/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 4 end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInLeft delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="http://placehold.it/224x288" alt="blog-3" class="img-fluid blog-img">
                            <div class="user">
                                <div class="avatar">
                                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Rx Vodro</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Buying a Home</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<span class="d-none2-1200"> the 1500s, when an unknown printer took a galley of type and</span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="http://placehold.it/224x288" alt="blog-3" class="img-fluid blog-img">
                            <div class="user">
                                <div class="avatar">
                                    <img src="http://placehold.it/30x30" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Teseira</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Selling Your Home</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<span class="d-none2-1200"> the 1500s, when an unknown printer took a galley of type and</span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog start -->

<!-- Our newslatters start -->
<div class="our-newslatters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Get Newsletter</h3>
                <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                <div class="form-info">
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-color btn-md btn-message">Get it now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our newslatters end -->

@endsection