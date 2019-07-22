@extends('layouts.frontend.app')

@section('content')
<!-- start banner Area -->
        <section class="banner-area relative" id="home">    
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-12">
                        <h1 class="text-white">
                            <span>150+</span> Listings posted last week             
                        </h1>   
                        <form action="https://colorlib.com/preview/theme/joblisting/search.html" class="serach-form-area">
                            <div class="row justify-content-center form-wrap">
                                <div class="col-lg-7 form-cols">
                                    <input type="text" class="form-control" name="search" placeholder="Search your URL here...">
                                </div>
                                <div class="col-lg-3 form-cols">
                                    <div class="default-select" id="default-selects2">
                                        <select>
                                            <option value="1">Select Category</option>
                                            <option value="2">Medical</option>
                                            <option value="3">Technology</option>
                                            <option value="4">Goverment</option>
                                            <option value="5">Development</option>
                                        </select>
                                    </div>                                      
                                </div>
                                <div class="col-lg-2 form-cols">
                                    <button type="button" class="btn btn-info">
                                      <span class="lnr lnr-magnifier"></span> Search
                                    </button>
                                </div>                              
                            </div>
                        </form> 
                        <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
                    </div>                                          
                </div>
            </div>
        </section>
        <!-- End banner Area -->    

        <!-- Start features Area -->
        <section class="features-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Submit Link</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Latest Link</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Top Link</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>About Us</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing.
                            </p>
                        </div>
                    </div>                                                                      
                </div>
            </div>  
        </section>
        <!-- End features Area -->
        
        <!-- Start popular-post Area -->
        <section class="popular-post-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="active-popular-post-carusel">
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/p1.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p2.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p1.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p2.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p1.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>  
                        <div class="single-popular-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/p2.png') }}" alt="">
                                <a class="btns text-uppercase" href="#">view job post</a>
                            </div>
                            <div class="details">
                                <a href="#"><h4>Creative Designer</h4></a>
                                <h6>Los Angeles</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                                </p>
                            </div>
                        </div>                                                                                                                                                          
                    </div>
                </div>
            </div>  
        </section>
        <!-- End popular-post Area -->
        
        <!-- Start feature-cat Area -->
        <section class="feature-cat-area pt-100" id="category">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Featured Job Categories</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>                      
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o1.png') }}" alt="">
                            </a>
                            <p>Accounting</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o2.png') }}" alt="">
                            </a>
                            <p>Development</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o3.png') }}" alt="">
                            </a>
                            <p>Technology</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o4.png') }}" alt="">
                            </a>
                            <p>Media & News</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o5.png') }}" alt="">
                            </a>
                            <p>Medical</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{ asset('assets/frontend/img/o6.png') }}" alt="">
                            </a>
                            <p>Goverment</p>
                        </div>          
                    </div>                                                                                                          
                </div>
            </div>  
        </section>
        <!-- End feature-cat Area -->
        
        <!-- Start post Area -->
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>                                                          
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/img/post.png') }}" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>                  
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>                 
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>  
                        
                        <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="single-slidebar">
                            <h4>Categories</h4>
                            <ul class="cat-list">
                                <li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
                            </ul>
                        </div>

                        <div class="single-slidebar">
                            <h4>Top listings</h4>
                            <div class="active-relatedjob-carusel">
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}') }}" alt="">
                                    <a href="single.html"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                    </p>
                                    <h5>Job Nature: Full time</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                    <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                    <a href="#" class="btns text-uppercase">Apply job</a>
                                </div>
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}" alt="">
                                    <a href="single.html"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                    </p>
                                    <h5>Job Nature: Full time</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                    <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                    <a href="#" class="btns text-uppercase">Apply job</a>
                                </div>
                                <div class="single-rated">
                                    <img class="img-fluid" src="{{ asset('assets/frontend/img/r1.jpg') }}" alt="">
                                    <a href="single.html"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                    </p>
                                    <h5>Job Nature: Full time</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                    <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                                    <a href="#" class="btns text-uppercase">Apply job</a>
                                </div>                                                                      
                            </div>
                        </div>                          

                        <div class="single-slidebar">
                            <h4>Jobs by Category</h4>
                            <ul class="cat-list">
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
                                <li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
                            </ul>
                        </div>
                

                    </div>
                </div>
            </div>  
        </section>
        <!-- End post Area -->
            
        <!-- Start callto-action Area -->
        <section class="callto-action-area section-gap" id="join">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            <a class="primary-btn" href="#">I am a Candidate</a>
                            <a class="primary-btn" href="#">Request Free Demo</a>
                        </div>
                    </div>
                </div>  
            </div>  
        </section>
@endsection