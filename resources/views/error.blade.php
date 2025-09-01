@extends('layouts.app')
@section('title', '404 - Page Not Found')

@section('content') 
<section class="py-5">
    
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">404 - Page Not Found</h1>
                             <p class="lead fw-normal text-muted mb-1"> Sorry, the page you are looking for does not exist.</p>
                            <a href="{{ url('/') }}">Go to Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection