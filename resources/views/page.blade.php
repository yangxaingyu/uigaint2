@extends('main.main')

@section('page')


<div class="container">
    <div class="gamfi-breadcrumbs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="breadcrumbs-area sec-heading">
                        <div class="sub-inner mb-15">
                            <a class="breadcrumbs-link" href="/">Home</a>
                            <span class="sub-title">{{$res['title']}}</span>
                            <img class="heading-left-image" src="/storage/images//steps.png" alt="Steps-Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-description">
        <p>
                {!! $res['content'] !!}
        </p>
        <h3>
            Contact Us:
        </h3>
        <p>Email:   {{$data['value']}}</p>
    </div>

</div>



@stop
