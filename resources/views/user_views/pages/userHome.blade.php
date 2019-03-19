@extends('user_views.main')

@section('title' , "my profile")

@section('stylesheet')
{!! Html::style('css/parsley.css') !!}
<style>
    .home-ic{
        position: absolute;
        left: 15%;
        margin-top: 16px;
        margin-bottom: 10px;
        background-color: white;
        border-radius: 50%;
        height: 37px;
        width: 40px;
        padding-left: 4px;
    }    
    .btn-an{
        height: 27px;
        padding-top: 1px;
        font-size: 15px;
    }
    .n-menu{
        word-spacing: 23px;
        margin-top: 14px;
        margin-left: 0px;
        font-size: 14px;
    }
    .n-menu a{
        padding-right: 12px;
        padding-left: 8px;
        color: #586069;
        padding-bottom: 16px;
    }
    .n-menu a i{
        margin-left: 4px;
        background-color: #ededee;
        border-radius: 50%;
        padding: 2px 4px;
        font-size: 11px;
    }
    .n-menu a:hover{
        padding-right: 12px;
        padding-left: 8px;
        text-decoration: none;
        color: black;
        border-bottom: 2px solid #b5b3b3;  
    }
    .editF {
        width: 177px;
        display: inline;
        height: 29px;
    }
    .sumEdit{
        font-size: 13px;
        
        padding: 3px 6px;
    }
    
</style>    
@endsection



@section('content')
    
    <div class="row">
        <div class="col-md-3">
            <div  style="border-style: solid;border-color:whitesmoke;border-width: 2px; width: 230px ;height: auto; border-radius:5%;  ">
                <span><a href="{{ route('user.edit',auth::user()->id) }}"><img alt="@m-HARD" class="avatar float-left mr-1" src="{{ asset('images/avatar/profile.jpg') }}" height="229" width="227"></a></span>
                <br><br><br><br><br><br><br><br >
                <span  class="home-ic" ><i class="fa fa-home fa-2x"></i></span>
                <br><br>
                <span style="margin-left: 10px;font-family: Times New Roman "> {{ auth::user()->stutus }}</span>
            </div>
            <div >
                <br>
                <strong class="text-center" style="font-size: 24px;font-style: italic;">{{ auth::user()->name }}</strong><br>
                <small style="font-style:normal;font-size: 16px; ">{{ auth::user()->n_name }}</small>
            </div>
            <br>


            <div id="div-1">
                
                <p class="bio"> {{ auth::user()->bio }}</p>
                <br>
                <p class="company"><i class="fa fa-users" aria-hidden="true"></i> {{ auth::user()->company }}</p>
                <p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; {{ auth::user()->location }}</p>
                <p class="url"><i class="fa fa-link" aria-hidden="true"></i> {{ auth::user()->url}}</p>
                {!! Form::submit('Edit' , ['class' => 'btn btn-light btn-block border border-secondary btn-an','id'=>'sub-1','onclick'=>'mydisabled()']) !!}
            </div>


            <div id="div-2" style="display: none">
                {!! Form::model(auth::user() , array('route' => array('user.update' , auth::user()->id) , 'method' => 'PUT' , 'data-parsley-validate' => '')) !!}
    
                    <p class="bio">
                    {{ Form::textarea('bio' , null , ['class' => 'form-control' ,  'maxlength' => "100", 'rows'=>'3']) }}
                    </p>
                        
                    <p class="company"><i class="fa fa-users" aria-hidden="true"></i>
                    {{ Form::text('company' , null , ['class' => 'form-control editF'  , 'maxlength' => "30"]) }}
                    </p>
                       
                    <p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    &nbsp;&nbsp;{{ Form::text('location' , null , ['class' => 'form-control editF'  , 'maxlength' => "30"]) }}
                    </p>
                        
                    <p class="url"><i class="fa fa-link" aria-hidden="true"></i>
                    {{ Form::text('url' , null , ['class' => 'form-control editF' ,'data-parsley-type'=>"email" , 'maxlength' => "40"]) }}
                    </p>
                        
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::submit('Save' , ['class' => 'btn btn-success sumEdit']) !!}
                            
                            {!! Form::label('Cancel' , null , ['style'=>'margin-top:6px','class' => 'btn btn-light sumEdit border border-secondary','onclick'=>'mydisabled()']) !!}
                        </div>
                    </div>
                
                {!! Form::close() !!}
                
            </div>
        </div>

        
        <div class="col-md-9">
           <div class="n-menu" >
               <a href="#" style="border-bottom: 2px solid #c0502c;color: black;">Overview</a>
               <a href="#">Repositories<i>20</i></a>
               <a href="#">Project<i>6</i></a>
               <a href="#">Stars<i>6</i></a>
               <a href="#">Followers<i>50</i></a>
               <a href="#">Following<i>2</i></a>
           </div>
           <hr><br>     
           <div>
               <div class="row" style="margin-left: 0px;margin-top: -14px;">
                   <img src="{{ asset('images/userView/pic1.png') }}" alt="@m-hard">
               </div>
               <br>
               <div class="row" style="margin-left: 0px;margin-bottom: 28px;margin-top: 5px;">
                   <img src="{{ asset('images/userView/pic2.png') }}" alt="@m-hard">
               </div>
               
               <div class="row" style="margin-left: 0px">
                   <img src="{{ asset('images/userView/pic3.png') }}" alt="@m-hard">
               </div>
           </div>
           


        </div>
    </div>


<br>




    
@endsection

@section('javascript')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
    <script>
        var element1 = document.getElementById("div-1");
        var element2 = document.getElementById("div-2");
        function mydisabled() {
            if (element1.style.display==="none"){
                element1.style.display = "block";
                element2.style.display = "none";
            }
            else{
                element1.style.display = "none";
                element2.style.display = "block";
            }
        }


    </script>
@endsection