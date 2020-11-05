@extends('layouts.app')

@section('department_name', 'Page Title')

@section('content')
    <section class="container card p-4">
        <form method="post" id="" action="">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="">
                        <h1 class="text-center"><strong class="text-success">Congratulation!</strong></h1>
                        <h4 class="text-center"> You have successfully completed the exam.</h4>
                    </div>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 bg-gradient-gray-dark p-5 text-center">
                    <h2>ফলাফল -</h2>
                    <div class="pl-3">
                        <h6>মোট প্রশ্ন: <strong class="text-primary">{{$total_question}}</strong></h6>
                        <h6>সঠিক উত্তর: <strong class="text-success">{{$correct_answer}}</strong></h6>
                        <h6>ভুল উত্তর: <strong class="text-danger">{{$wrong_answer}}</strong></h6>
                    </div>
                    <div class="pl-3 pt-5">
                        @if($correct_answer>=0 && $correct_answer<=14)
                            <div class="text-center">
                                <p>‘কর্মদক্ষতা মূল্যায়ন’ পর্বে অংশগ্রহণ করার জন্য আপনাকে ধন্যবাদ। <br>
                                    তবে আপনি কাংখিত নম্বর লাভ করতে সক্ষম হননি।<br>
                                    ন্যূনতম কাংখিত নম্বর অর্জনের জন্য পরবর্তী সপ্তাহে নির্ধারিত সময়ে আপনাকে পুনরায় ‘কর্মদক্ষতা মূল্যায়ন’ পর্বে অংশগ্রহণ করার জন্য অনুরোধ করা হল।</p>
                            </div>
                        @elseif($correct_answer>=15 && $correct_answer<=29)
                            <div class="text-center">
                                <p>‘কর্মদক্ষতা মূল্যায়ন’ পর্বে অংশগ্রহণ করার জন্য আপনাকে ধন্যবাদ।<br>
                                    কাংখিত নম্বর লাভ করার জন্য আপনার প্রতি রইল অভিনন্দন। তবে, আরও উন্নতির জন্য আপনি পরবর্তী সপ্তাহে নির্ধারিত সময়ে পুনরায় ‘কর্মদক্ষতা মূল্যায়ন’ পর্বে অংশগ্রহণ করার সুযোগ গ্রহণ করতে পারেন।</p>
                            </div>
                        @elseif($correct_answer==30)
                            <div class="text-center">
                                <p>‘কর্মদক্ষতা মূল্যায়ন’ পর্বে অংশগ্রহণ করার জন্য আপনাকে ধন্যবাদ।<br>
                                    পূর্ণ নম্বর প্রাপ্তির এই সাফল্যের জন্য আপনাকে জানাই আন্তরিক অভিনন্দন। <br>
                                    আপনার উজ্জ্বলতর ভবিষ্যত কামনা করছি।</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </form>
    </section>
@endsection
