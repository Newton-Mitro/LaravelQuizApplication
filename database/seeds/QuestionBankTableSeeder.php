<?php

use Illuminate\Database\Seeder;

class QuestionBankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_banks')->insert([
            'id' => 1,
            'question_text' => "২০২০-২১ সালকে মুজিব বর্ষ ঘোষণা করা হয় –",
            'correct_answer' => "৬ জুলাই ২০১৮",
            'segment_id' => 1,
        ]);

        DB::table('question_banks')->insert([
            'id' => 2,
            'question_text' => "বাংলাদেশের বিজয় দিবসের সুবর্ণ জয়ন্তী –",
            'correct_answer' => "১৬ ডিসেম্বর ২০২১ সালে",
            'segment_id' => 1,
        ]);

        DB::table('question_banks')->insert([
            'id' => 3,
            'question_text' => "৭ম নারী এশিয়া কাপ টি ২০ ক্রিকেট চ্যাম্পিয়ন",
            'correct_answer' => "বাংলাদেশ",
            'segment_id' => 1,
        ]);

        DB::table('question_banks')->insert([
            'id' => 4,
            'question_text' => "বর্তমানে স্বর্ণ উৎপাদনে শীর্ষ দেশ",
            'correct_answer' => "চীন",
            'segment_id' => 1,
        ]);
        DB::table('question_banks')->insert([
            'id' => 5,
            'question_text' => "বর্তমান বিশ্বে মানব পাচারে শীর্ষ দেশ",
            'correct_answer' => "মিয়ানমার",
            'segment_id' => 1,
        ]);

        DB::table('question_banks')->insert([
            'id' => 6,
            'question_text' => "বর্তমান বিশ্বে নারীদের জন্য সবচেয়ে বিপজ্জনক দেশ",
            'correct_answer' => "ভারত",
            'segment_id' => 1,
        ]);
        DB::table('question_banks')->insert([
            'id' => 7,
            'question_text' => "বিশ্বের পূর্ণ গণতান্ত্রিক দেশের তালিকায় বাংলাদেশ",
            'correct_answer' => "৯২ তম",
            'segment_id' => 1,
        ]);

        DB::table('question_banks')->insert([
            'id' => 8,
            'question_text' => "ওয়াইফাই(Wi-Fi) নেটওয়ার্কে সংযোগ এর জন্য সংশ্লিষ্ট ডিভাইসটির সংযোগ মাধ্যম কোনটি?",
            'correct_answer' => "তারহীন সংযোগ",
            'segment_id' => 2,
        ]);
        DB::table('question_banks')->insert([
            'id' => 9,
            'question_text' => "ই-মেইল আদান-প্রদানে ব্যবহৃত SMTP- এর পূর্ণরূপ কি?",
            'correct_answer' => "Simple Mail Transfer Protocol",
            'segment_id' => 2,
        ]);
        DB::table('question_banks')->insert([
            'id' => 10,
            'question_text' => "আইওএস (IOS) মোবাইল অপারেটিং সিস্টেমটি কোন প্রতিষ্ঠান বাজারজাত করে?",
            'correct_answer' => "অ্যাপেল",
            'segment_id' => 2,
        ]);




        DB::table('question_banks')->insert([
            'id' => 11,
            'question_text' => "এন্ড্রয়েড অপারেটিং সিস্টেমের ক্ষেত্রে নিচের কোনটি সঠিক?",
            'correct_answer' => "উপরের সবগুলো সঠিক",
            'segment_id' => 2,
        ]);
        DB::table('question_banks')->insert([
            'id' => 12,
            'question_text' => "নিচের কোনটি ইনপুট ডিভাইস ?",
            'correct_answer' => "Keyboard",
            'segment_id' => 2,
        ]);
        DB::table('question_banks')->insert([
            'id' => 13,
            'question_text' => "কোনটি অপারেটিং সিস্টেম নয়?",
            'correct_answer' => "C",
            'segment_id' => 2,
        ]);
        DB::table('question_banks')->insert([
            'id' => 14,
            'question_text' => "কোন চিহ্নটি ইমেইল ঠিকানায় অবশ্যই থাকবে?",
            'correct_answer' => "@",
            'segment_id' => 2,
        ]);
        DB::table('question_banks')->insert([
            'id' => 15,
            'question_text' => "‘পয়জার’- এর সমার্থক শব্দ কোনটি?",
            'correct_answer' => "পাদুকা",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 16,
            'question_text' => "প্রত্যক্ষ কোন বস্তুর সাথে পরোক্ষ কোন বস্তুর তুলনা করলে প্রত্যক্ষ বস্তুটিকে বলা হয় ?",
            'correct_answer' => "উপমেয়",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 17,
            'question_text' => "মহর্ষি কোন সমাস?",
            'correct_answer' => "কর্মধারায়",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 18,
            'question_text' => "বাংলাদেশের প্রথম সংবাদপত্র-",
            'correct_answer' => "বেঙ্গল গেজেট",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 19,
            'question_text' => "‘ প্রতিদিন ঘরহীন ঘরে’ কাব্য গ্রন্থের রচয়িতা-",
            'correct_answer' => "শামসুর রহমান",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 20,
            'question_text' => "জসীমউদ্দীনের নাটক-",
            'correct_answer' => "বেদের মেয়ে",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 21,
            'question_text' => "‘দৃষ্টিহীন’ কার ছদ্মনাম?",
            'correct_answer' => "মধুসূদন মজুমদার",
            'segment_id' => 3,
        ]);
        DB::table('question_banks')->insert([
            'id' => 22,
            'question_text' => "বিভা :কিরণ :: সুবলিত: ?",
            'correct_answer' => "সুগঠিত",
            'segment_id' => 4,
        ]);
        DB::table('question_banks')->insert([
            'id' => 23,
            'question_text' => "কোনটি অগ্নি’র সমার্থক শব্দ নয়?",
            'correct_answer' => "প্রজ্বলিত",
            'segment_id' => 4,
        ]);
        DB::table('question_banks')->insert([
            'id' => 24,
            'question_text' => "‘আসাদের শার্ট’ কবিতার লেখক কে?",
            'correct_answer' => "শামসুর রহমান",
            'segment_id' => 4,
        ]);
        DB::table('question_banks')->insert([
            'id' => 25,
            'question_text' => "রবীন্দ্রনাথ ঠাকুরের ‘গীতাঞ্জলি’ কাব্য প্রকাশিত হয় কত সনে?",
            'correct_answer' => "১৯১০",
            'segment_id' => 4,
        ]);
        DB::table('question_banks')->insert([
            'id' => 26,
            'question_text' => "সৈয়দ মুস্তাফা সিরাজের গ্রন্থ কোনটি?",
            'correct_answer' => "অলীক মানুষ",
            'segment_id' => 4,
        ]);
        DB::table('question_banks')->insert([
            'id' => 27,
            'question_text' => "কবি কায়কোবাদ রচিত ‘মহাশ্মশান’ কাব্যের ঐতিহাসিক পটভূমি ছিল-",
            'correct_answer' => "তৃতীয় পানিপথের যুদ্ধ",
            'segment_id' => 4,
        ]);
        DB::table('question_banks')->insert([
            'id' => 28,
            'question_text' => "Submarine Cable ‘is the trem used in…….",
            'correct_answer' => "Information Technology",
            'segment_id' => 5,
        ]);
        DB::table('question_banks')->insert([
            'id' => 29,
            'question_text' => "URL হল",
            'correct_answer' => "web এর বিভিন্ন documents ও অন্যান্য resource এর ঠিকানা",
            'segment_id' => 5,
        ]);
        DB::table('question_banks')->insert([
            'id' => 30,
            'question_text' => "পারসনাল কম্পিউটার যুক্ত করে নিচের কোনটি তৈরি করা যায়?",
            'correct_answer' => "Network",
            'segment_id' => 5,
        ]);
        DB::table('question_banks')->insert([
            'id' => 31,
            'question_text' => "নীচের কোনটি ছাড়া Internet এ প্রবেশ করা সহজ না?",
            'correct_answer' => "Web Browser",
            'segment_id' => 5,
        ]);
        DB::table('question_banks')->insert([
            'id' => 32,
            'question_text' => "ডেটাবেস ব্যবহারে কী করা হয়?",
            'correct_answer' => "তথ্য সংরক্ষণ করা হয়",
            'segment_id' => 5,
        ]);
        DB::table('question_banks')->insert([
            'id' => 33,
            'question_text' => "কম্পিউটার ভাইরাস কি ?",
            'correct_answer' => "একটি ক্ষতিকারক প্রোগ্রাম",
            'segment_id' => 5,
        ]);
        DB::table('question_banks')->insert([
            'id' => 34,
            'question_text' => "Which one of the following Operating Systems is not a multitasking operating system?",
            'correct_answer' => "DOS",
            'segment_id' => 5,
        ]);

        DB::table('question_banks')->insert([
            'id' => 35,
            'question_text' => "Push এবং Pop নিচের কার সাথে সম্পর্কিত?",
            'correct_answer' => "Stack",
            'segment_id' => 6,
        ]);
        DB::table('question_banks')->insert([
            'id' => 36,
            'question_text' => "TCP দিয়ে কোনটি বোঝানো হয়?",
            'correct_answer' => "প্রোটোকল",
            'segment_id' => 6,
        ]);
        DB::table('question_banks')->insert([
            'id' => 37,
            'question_text' => "কম্পিউটার সিপিইউ (CPU) -এর কোন অংশ গাণিতিক সিদ্ধান্ত গ্রহণের কাজ করে?",
            'correct_answer' => "এ এল ইউ",
            'segment_id' => 6,
        ]);
        DB::table('question_banks')->insert([
            'id' => 38,
            'question_text' => "নিচের কোনটি সামঞ্জস্যপূর্ণ নয়?",
            'correct_answer' => "উইকিপিডিয়া",
            'segment_id' => 6,
        ]);
        DB::table('question_banks')->insert([
            'id' => 39,
            'question_text' => "কোন প্রটোকলটি ইন্টারনেট সংযোগের ক্ষেত্রে সর্বাধিক ব্যবহৃত হয়?",
            'correct_answer' => "TCP/IP",
            'segment_id' => 6,
        ]);
        DB::table('question_banks')->insert([
            'id' => 40,
            'question_text' => "ROM ভিত্তিক প্রোগ্রামের নাম কি?",
            'correct_answer' => "Firmware",
            'segment_id' => 6,
        ]);
        DB::table('question_banks')->insert([
            'id' => 41,
            'question_text' => "কোন মাধ্যমে আলোর পালস ব্যবহৃত হয়?",
            'correct_answer' => "অপটিক্যাল ফাইবার",
            'segment_id' => 6,
        ]);



    }
}
