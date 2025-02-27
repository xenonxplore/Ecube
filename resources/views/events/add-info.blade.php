@extends('layouts.app')

@section('content')
<br><br><br><br><br>
    <div class="card black-bg">
        <div class="card-body black-bg">
            <form action="/add-info" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Information Name</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name of Information" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="information" class="col-md-2 col-form-label text-md-right">Information</label>

                    <div class="col-md-8">
                        <textarea id="article-ckeditor" name="information" cols="30" rows="12" class="form-control" required>{{ old('information') }}</textarea>
                    </div>
                </div>


                <div class="black-bg form-group row ml-1">
                    <div class="col-2"></div>
                    <div class="black-bg">
                        <button type="submit" class="black-bg btn btn-reg" style="width: 900px">
                            {{ __('Add') }}
                        </button>
                    </div>
                </div>

                <div class="black-bg form-group row ml-1">
                    <div class="col-2"></div>
                    <div class="black-bg">
                        <a href="/add-q/{{$id}}" class="black-bg btn btn-google" style="width: 900px">No more additional information</a>
                    </div>
                </div>
                
            </form>

            @if (count($information) > 0)
                <br><br>
                <div class="row">
                    <div class="col-md-1">

                    </div>
                    <h2 class="page-title ml-5">Previous Information added</h2>
                </div>

                <br>

                @foreach ($information as $info)
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-1 text-right">
                            {{$info->name}}
                        </div>
                        <div class="col-8 ml-2">
                            {!!$info->info!!}
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
    </div>
@endsection