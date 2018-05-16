@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @if (count($microposts) > 0)
                     <div class="col-xs-6">
                    {!! Form::open(['route' => 'microposts.store']) !!}
                
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      
                    {!! Form::close() !!}
                    @include('microposts.microposts', ['microposts' => $microposts])
                    </div>
                @else
                 <div class="col-xs-6">
                    {!! Form::open(['route' => 'microposts.store']) !!}
                     
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      
                    {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection