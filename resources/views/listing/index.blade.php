@extends('layouts.frontend.app')
@section('content')
    <div class="media-top-space">
      <img src="{{ asset('assets/frontend/img/banner.jpg') }}" width="100%">
    </div>
    <section class="slider d-flex align-items-center" style="background: #fff;">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                  <div class="text-white" align="left">
                                    <div class="card-body mt-5" style="">
                                      @if(session()->get('success'))
                                        <div class="alert alert-success">
                                          {{ session()->get('success') }}  
                                        </div><br />
                                      @endif
                                      @if ($errors->any())
                                        <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                        </div><br/>
                                      @endif
                                      <h3 align="center" class="pb-4">SUBMIT LINK HERE</h3>
                                      <div class="row">
                                        <div class="col-lg-4 sidebar">
                                          <div class="single-slidebar">
                                              <h4>Categories</h4>
                                              <ul class="cat-list">
                                                @foreach($categories as $category)
                                                  <li><a class="justify-content-between d-flex" onclick="{{$category->name}}()"><p>{{ $category->name }}</p></a></li>
                                                @endforeach
                                              </ul>
                                          </div>
                                        </div>
                                        <div class="col-lg-7 sidebar">
                                          <form method="post" class="single-slidebar text-dark" action="{{ route('listing.store') }}">
                                              @csrf
                                              <div class="form-row">
                                                
                                                @if (Auth::check())
                                                <div class="form-group col-6">    
                                                    <label for="name">Name:</label>
                                                    <p class="bold">{{ Auth::user()->name }}</p>
                                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}" style="display: none;" />
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="email">Email:</label>
                                                    <p class="bold">{{ Auth::user()->email }}</p>
                                                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}" style="display: none;" />
                                                </div>
                                                @else
                                                <div class="form-group col-6">    
                                                    <label for="name">Name:</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required/>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="email">Email:</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Enter your email" />
                                                </div>
                                                @endif
                                                <div class="form-group col-6">
                                                    <label for="title">Title:</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" required/>
                                                </div>               
                                                <div class="form-group col-6">
                                                  <label for="category_id">Category:</label>
                                                    <select name="category_id" class="form-control w-100" id="mySelect">
                                                      <option value="" style="font-weight: bold;">-- Choose any one --</option>
                                                      @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="URL">URL:</label>
                                                  <input type="text" class="form-control" name="URL" placeholder="Enter Your URL" required/>
                                              </div>
                                              <div class="form-group">
                                                <label for="description">Description:</label>
                                                <textarea name="description" class="form-control" rows="5" cols="100%"  placeholder="Description."></textarea>
                                              </div>
                                              <div class="form-group">
                                                  <label for="meta_description">Meta_description:</label>
                                                  <textarea name="meta_description" class="form-control" rows="3" cols="100%" maxlength="200" placeholder="Only 200 characters."></textarea>
                                              </div>
                                              <div class="form-group">
                                                  <label for="keyword">Keywords:</label>
                                                  <textarea name="keyword" class="form-control" rows="3" cols="100%"  placeholder="Use (,) to separate keywords."></textarea>
                                              </div>

                                              <div class="form-group mb-3">
                                                <label for="package_id">Select Payment :</label>
                                                  <select name="package_id" class="form-control w-100">
                                                    <option value="" style="font-weight: bold;">-- Choose any Package --</option>
                                                    @foreach($packages as $package)
                                                      <option value="{{ $package->id }}">{{ $package->name }}</option>
                                                    @endforeach
                                                  </select>
                                              </div><br>
                                              <button type="submit" class="btn btn-primary">Submit URL</button>
                                          </form>
                                        </div>
                                        <div class="col-lg-2 sidebar">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @guest
      <section>
        <div class="container">
          <p>
            <b class="text-dark">Note :</b> ** Please login first to see your submitted record. <a class="ticker-btn pl-3" href="" data-toggle="modal" data-target="#ModalLogin">{{ __('Login') }}</a>
            @if (Route::has('register'))
              <a class="ticker-btn pl-3" href="" data-toggle="modal" data-target="#ModalRegister">{{ __('Register') }}</a>
            @endif
          </p>
        </div>
      </section>
  @else
      
  @endguest


  @foreach($categories as $category)
    <script>
    function {{$category->name}}() {
      document.getElementById("mySelect").value = "{{$category->id}}";
    }
    </script>
  @endforeach


@endsection
