@extends('layouts.backend.main')
{{--@section('title', 'Cab | Dashboard')--}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
            </div>
        </div>
    </div>
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">300</h2>
                            <span class="desc">Doctors</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">100</h2>
                            <span class="desc">Patients</span>
                            <div class="icon">
                                <i class="zmdi zmdi-accounts-alt"></i></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">1,086</h2>
                            <span class="desc">Secretaries</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">100</h2>
                            <span class="desc">total employess</span>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection