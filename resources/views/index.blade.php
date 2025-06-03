@extends('components.master')

@section('content')
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                   <img src="{{ asset('assets/images/police.jpg') }}" class="w-75" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Yearly Breakup -->
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Vision</h5>
                            <p class="fs-3 mb-0">
                               To build a safer, more transparent society by fostering seamless communication and trust between citizens and law enforcement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <h5 class="card-title mb-9 fw-semibold"> Mission </h5>
                                <p class="fs-3 mb-0">To empower citizens and law enforcement through a seamless digital platform that enables real-time reporting, efficient communication, and community collaboration—promoting safety, transparency, and trust across all levels of society.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
