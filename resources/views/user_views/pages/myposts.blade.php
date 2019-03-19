@extends('user_views.main')

@section('title' , ' | Contact')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2 shadow shadow-lg p-3 mb-5 bg-white rounded animate-box fadeInUp animated">
            <h1>Contact Me</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label class="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
                <div class="form-group">
                    <label class="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control shadow-sm p-3 mb-5 bg-white rounded">
                </div>
                <div class="form-group">
                    <label class="message">Message:</label>
                    <textarea type="text" name="message" id="message" class="form-control shadow-sm p-3 mb-5 bg-white rounded" placeholder="type Your Massage Here..."></textarea>
                </div>
                <input type="submit" value="Send Message" class="btn btn-outline-success shadow-sm p-3 mb-5 rounded btn-block">
            </form>
        </div>
    </div>

@endsection