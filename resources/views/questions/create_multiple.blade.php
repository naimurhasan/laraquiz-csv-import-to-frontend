@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.questions.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['questions.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.upload_multiple_questions')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('topic_id', 'Topic*', ['class' => 'control-label']) !!}
                    {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('topic_id'))
                        <p class="help-block">
                            {{ $errors->first('topic_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12">
                <p>
                    <a href="{{ url('storage/sample_data/questions_format.xls') }}">Download Sample XLS Here</a>
                </p>
            </div>
            
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('question_text', 'Upload Questions in XLS', ['class' => 'control-label']) !!}
                    {!! Form::textarea('question_xls', old('question_xls'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

