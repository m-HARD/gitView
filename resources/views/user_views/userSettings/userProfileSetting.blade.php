@extends('user_views.main')

@section('title' , "user Profile Setting")

@section('stylesheet')
{!! Html::style('css/parsley.css') !!}
<style>
    .row .col-md-3 .nav{
        border: 1px solid #d1d5da;
        border-radius:5px; 
    }
    .row .col-md-3 .n1{
        border-bottom: 1px solid #d1d5da;
        font-size:13px;
    }
    .home-ic{
        color: white;
        position: absolute;
        right: 63%;
        padding: 2px 10px;
        border-radius: 14px;
        background-color: #24292e
    }
</style>    
@endsection



@section('content')
    
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item n1" >
                  <a class="nav-link active" style="color: black;background-color: #f3f5f8" href="#">Personal settings</a>
                </li>
                <li class="nav-item n1" style="border-left:3px solid #c0502c;">
                  <a class="nav-link" style="color: black" href="#">Profile</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Email</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">notifications</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Billing</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">SSH and GPG keys</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Security</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Sessions</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Blocked users</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Repositoris</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Organizations</a>
                </li>
                <li class="nav-item n1">
                  <a class="nav-link" href="#">Saved replise</a>
                </li>
                <li class="nav-item n1" style="border-bottom:1px solid #d1d5da;">
                  <a class="nav-link" href="#">Applications</a>
                </li>
                
            </ul>
            <ul class="nav flex-column" style="margin-top: 20px;">
            <li class="nav-item n1" style="border-bottom:1px solid #d1d5da;">
                  <a class="nav-link" href="#" tabindex="-1">Developer Setting</a>
                </li>
            </ul>
        </div>

        
        <div class="col-md-9">
           <h4>Public profile</h4>
           <hr>

            <div class="row">
                <div class="col-md-8">
                    {!! Form::model(auth::user() , array('route' => array('user.update' , auth::user()->id) , 'method' => 'PUT' , 'data-parsley-validate' => '')) !!}
    


                    {!! Form::label('n_name', 'Name :',['style' => '   margin-top: 10px;']) !!}
                    {!! Form::text('n_name', null, ['class' => 'form-control' , 'required' => '' , 'maxlength' => "10" ]) !!}
                    
                    {!! Form::label('email', 'Public Email :',['style' => '   margin-top: 10px;']) !!}
                    {!! Form::select('email', ['L' => 'Select a verified email to display'], 'L',['class' => 'form-control' , 'maxlength' => "30" ,'disabled' => 'disabled','style'=>'width: auto;']); !!}
                    <div style="font-size: 11px" >You have set your email address to private. To toggle email privacy, go to <a href="#">email settings</a>  and uncheck "Keep my email address private."</div>
            <br>
                    {!! Form::label('bio', 'Bio :') !!}
                    {!! Form::textarea('bio' , null , ['class' => 'form-control' , 'maxlength' => "100", 'rows'=>'3']) !!}
                    <div style="font-size: 11px">You can @mention other users and organizations to link to them.</div>
            <br>
                    {!! Form::label('url', 'Url :',[]) !!}
                    {!! Form::text('url', null, ['class' => 'form-control', 'maxlength' => "30",'data-parsley-type'=>"email" ]) !!}
            <br>
                    {!! Form::label('company', 'Company :',[]) !!}
                    {!! Form::text('company', null, ['class' => 'form-control', 'maxlength' => "30" ]) !!}
                    <div style="font-size: 11px">You can @mention your company’s GitHub organization to link it.</div>
            <hr style="my-2">           
                {!! Form::label('location', 'Location :',[]) !!}
                {!! Form::text('location', null, ['class' => 'form-control' , 'maxlength' => "30" ]) !!}
                <div class="" style="font-size: 11px">All of the fields on this page are optional and can be
                     deleted at any time, and by filling them out,
                     you're giving us consent to share this data wherever your user profile appears.
                     Please see our privacy statement to learn more about how we use this information'.</div>

                     {!! Form::submit('Save Changes', ['class' => 'btn btn-success' , 'style' => '   margin-top: 10px;']) !!}

                {!! Form::close() !!}
                </div>

                <div class="col-md-4">
                    <h5>Profile picture</h5>
                    <div  style="width: 200px ;height: 200px; border-radius:5%;  ">
                        <span>
                            <img alt="@m-HARD" class="avatar float-left mr-1" src="{{ asset('images/avatar/profile.jpg') }}" height="200" width="200"></span>
                            <br><br><br><br><br><br><br>
                            <span  class="home-ic" ><i class="fa fa-pencil fa-1x">&nbsp;Edit</i>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>


<br>




    
@endsection

@section('javascript')
    {!! Html::script('js/parsley.min.js') !!}
    <script>
      
    </script>
@endsection