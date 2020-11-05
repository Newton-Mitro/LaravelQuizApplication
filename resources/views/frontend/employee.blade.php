@extends('layouts.app')

@section('page_title', 'Page Title')

@section('content')
    <section class="container card p-4">
        <form method="post" id="" action="">
            <div class="row mb-1">
                <div class="col-12">
                    <div class="">
                        <h2>কর্মচারীর তথ্য</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5><strong>কর্মচারীর নাম: </strong> {{ $employee->employee_name }}</h5>
                    <span><strong>কর্মচারীর আইডি: </strong> {{$employee->employee_id_no}}</span><br>
                    <span><strong>বিভাগ: </strong> {{$employee->department}}</span>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">’কর্মদক্ষতা মূল্যায়ন’ পর্বে আপনাকে স্বাগতম</h2>
                    <div>
                        <p>মূল্যায়ন শুরুর পূর্বে নীচের নির্দেশনাসমূহ লক্ষ্য করুন:</p>
                        <ul>
                            <li>মূল্যায়ন-এর জন্য মোট সময় ১৫ মিনিট।</li>
                            <li>পর্যায়ক্রমে ৬টি বিষয়ের উপর মূল্যায়ন হবে। প্রতিটি বিষয়ে মোট ৫টি করে প্রশ্ন থাকবে যার জন্য সময় বরাদ্দ ২ মিনিট ৩০ সেকেন্ড।</li>
                            <li>২ মিনিট ৩০ সেকেন্ড পর স্বয়ংক্রিয়ভাবে পরবর্তী বিষয় শুরু হবে। পূর্ববর্তী বিষয়ে পুনরায় ফিরে যাওয়া সম্ভব হবে না।</li>
                        </ul>
                        <p>আপনি কি এখন ‘কর্মদক্ষতা মূল্যায়ন’ পর্বে অংশগ্রহণ করার জন্য প্রস্তুত? তাহলে START বাটন চাপুন।</p>
                        <p class="">আপনার জন্য রইল শুভ কামনা।</p>
                    </div>
                </div>
            </div>
            <div class="row p-2 mt-5">
                <div class="col-12 text-center">
                    <a onclick='openPopup()' type="submit" href="about:blank"
                       class="btn btn-lg btn-success">START <br> {{$exam->title}}<br> {{date('Y', strtotime($exam->exam_date))}}</a>
                </div>
            </div>
        </form>
    </section>
@endsection
