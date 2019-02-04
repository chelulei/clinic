@extends('layouts.backend.main')
{{--@section('title', 'Cab | Dashboard')--}}
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div id="clockbox" class="text-danger text-center  rounded border border-primary"></div>
        </div>
    </div>
    <section class="statistic">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">
                                <div id="patients"></div>
                            <!-- /#patients --></h2>
                            <span class="desc">Patients</span>
                            <div class="icon">
                                <i class="zmdi zmdi-accounts-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">
                                <div id="appointments">
                                    <!-- /#appointments -->
                                </div>
                            </h2>
                            <span class="desc">Appointments</span>
                            <div class="icon">
                                <i class="zmdi zmdi-border-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number">
                                <div id="events"></div>
                                <!-- /#events -->
                            </h2>
                            <span class="desc">Events</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item">
                            <h2 class="number" id="prescriptions"></h2>
                            <span class="desc">Prescriptions</span>
                            <div class="icon">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection