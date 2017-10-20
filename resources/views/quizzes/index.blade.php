@extends('layouts.master')

@section('content')
	<div class="panel-body">
		 <!-- New Task Form -->
        <form action="/quiz" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="quiz-name" class="col-sm-3 control-label">Quiz</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="quiz-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
            	<label for="quiz-topic" class="col-sm-3 control-label">Topic</label>
                <div class="col-sm-6">
                    <input type="text" name="topic" id="quiz-topic" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Quiz
                    </button>
                </div>
            </div>
        </form>
	</div>
@endsection