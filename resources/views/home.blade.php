@extends('layouts.app')

@section('page-name', 'Home Dashboard')

@section('content')
    <style>
        .small-box {
            border-radius: .25rem;
            box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
            display: block;
            margin-bottom: 20px;
            position: relative;
        }
        .small-box .inner {
            color: #fff!important;
        }
        .small-box>.inner {
            padding: 10px;
        }
        .small-box h3 {
            font-size: 2.2rem;
            font-weight: 700;
            margin: 0 0 10px 0;
            padding: 0;
            white-space: nowrap;
        }
        .small-box p {
            font-size: 1rem;
        }
        .small-box .icon {
            color: rgba(0,0,0,.15);
            z-index: 0;
        }
        .small-box .icon>i {
            font-size: 90px;
            position: absolute;
            right: 15px;
            top: 15px;
            transition: all .3s linear;
        }
        .bg-info {
            background-color: #4e73df!important;
        }
    </style>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Category::count() }}</h3>

                            <p>All Categories</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-database"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Service::count() }}</h3>

                            <p>All Services</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\News::count() }}</h3>

                            <p>All News</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Contact::count() }}</h3>

                            <p>Contact Requests</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-phone-square-alt"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="jumbotron shadow-sm text-center" style="background-color: #fff;">
                <img class="mx-auto d-block img-fluid" src="{{ asset('img/almansour.jpeg') }}" alt="Almansour">
            </div>
        </section>
    </div>
@endsection
