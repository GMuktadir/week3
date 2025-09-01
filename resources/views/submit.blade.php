@extends('layouts.app')
@section('title', 'Contact Us')

@section('content') 
  <section class="py-5">
    
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Submitted</h1>
                            <p class="lead fw-normal text-muted mb-0"> @if(session('name'))
                                                                          Thank you, Your Submitted data were successfully stored in session.
                                                                        @else
                                                                          No Session data found.  
                                                                        @endif
                                                                      
                                                                      </p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                              
                              
                             
                             
                    
                              @if(session('name'))
                                <p class="lead fw-normal text-muted mb-1">Name: {{ session('name') }}</p>
                                <p class="lead fw-normal text-muted mb-0">Email: {{ session('email') }}</p>
                                <p class="lead fw-normal text-muted mb-0">Phone: {{ session('phone') }}</p>
                                <p class="lead fw-normal text-muted mb-0">Message: {{ session('message') }}</p>
                               
                              @else
                                <p class="lead fw-normal text-muted mb-0">No Session data found.</p>
                              @endif
                              
                               @if(Cookie::get('file_uploaded') === 'true')
                               <p class="lead fw-normal text-muted mb-0">File uploaded successfully</p>
                               <p class="lead fw-normal text-muted mb-0">Image Location: {{ session('image') }}</p>
                               <p class="lead fw-normal text-muted mb-0">Image:</p>
                                <div class="text-center mb-4">
                                    <img width="150px" height="120px" class="img-fluid rounded-3 my-3" src="{{ asset('storage/' . session('image')) }}" alt="Uploaded Image" />
                                </div>
                                @endif
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection