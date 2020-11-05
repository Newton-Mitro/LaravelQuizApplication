@extends('layouts.app')

@section('department_name', 'Page Title')

@section('content')
    <?php
    use Illuminate\Support\Facades\Session;
    ?>
    <section class="container card p-4">
        <form method="post" action="{{ route('exam.update',['id'=>Session::get("current_segment")]) }}">
            @csrf
            <div class="row mb-5">
                <div class="col-12">
                    <div class="">
                        <h4 class="text-center">{{$segment}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php $i=1 ?>
                    @foreach($questions as $question)
                        <div data-role="question-one">
                            <input type="text" hidden value="{{$question->id}}" name="question_bank_id_{{$loop->index+1}}">
                            <label><strong><span>{{$i}}. </span>{{ $question->question_text  }}
                                </strong></label>
                            <div class="answer-options">
                                <div class="form-group">
                                    @if(Session::get('employee_id')% 2 == 0)
                                    @foreach(\App\Models\AnswerOption::where("question_bank_id",$question->id)->orderBy('id', 'ASC')->get() as $option)
                                        <div class="option">

                                            <input type="radio" name="option_{{$i}}" value="{{$option->option_text}}">
                                            <label class="form-check-label">{{$option->option_text}}</label>
                                        </div>
                                    @endforeach

                                    @else
                                        @foreach(\App\Models\AnswerOption::where("question_bank_id",$question->id)->orderBy('id', 'DESC')->get() as $option)
                                            <div class="option">

                                                <input type="radio" name="option_{{$i}}" value="{{$option->option_text}}">
                                                <label class="form-check-label">{{$option->option_text}}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                        <?php $i++ ?>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row p-2 mt-5">
                <div class="col-12">
                    @if(Session::get('total_segment')>Session::get('current_segment'))
                        <button id="btnClick" type="submit" class="btn  btn-success float-right">Next >></button>
                    @else
                        <button id="btnClick" type="submit" class="btn  btn-success float-right">Finish</button>
                    @endif
                </div>
            </div>
        </form>
    </section>
{{--    <script>--}}
{{--        window.onbeforeunload = function() {--}}
{{--            return "Did you save your stuff?";--}}
{{--        }--}}
{{--    </script>--}}

@endsection
