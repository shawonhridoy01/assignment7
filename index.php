<?php
$questionSet            =  [

    [
        "question" => "সঞ্চিতা- কোন কবির কাব্য সংকলন?",
        "option"   => ["রবীন্দ্রনাথ ঠাকুর",  "সত্যেন্দ্রনাথ দত্ত", "কাজী  নজরুল ইসলাম", "সুফিয়া আহম্মেদ"]

    ],

    [
        "question" => "কোন বানানটি শুদ্ধ?",
        "option"   => ["সূচিষ্মিতা", "সূচিস্মিতা সূ", "চীস্মিতা", "সুচিস্মিতা"]

    ],


    [
        "question" => "ঘুম থেকে জেগে  বৈশাখি ঝড়ে কুড়ায়েছি  ঝড়া আম’ এই লাইনটির লেখক  বা  কবি কে?",
        "option"   => ["বঙ্কিমচন্দ্র চট্টোপাধ্যায়", "সানাউল  হক", "বেগম সুফিয়া কামাল", "সুফিয়া আহম্মেদ"]

    ],



    [
        "question" => "কোনটি তদ্ভব  শব্দ ?",
        "option"   => ["চাঁদ", "সূর্য", "গগন", "নক্ষত্র"]

    ],



    [
        "question" => "ভাষার ক্ষুদ্রতম একক কোন্টি?",
        "option"   => ["বর্ণ", "শব্দ", "অক্ষর", "ধ্বনি"]

    ],


    [
        "question" => "কবি গানের প্রথম কবি –",
        "option"   => ["গোজলা পুট", "হরু ঠাকুর", "ভবানী ঘোষ", "নিতাই বৈরাগী"]

    ],


    [
        "question" => "বাঙ্গালা ভাষার ইতিবৃত্ত’ কে রচনা করেন?",
        "option"   => ["সুনীতিকুমার চট্টোপাধ্যায়", "সুকুমার সেন", "মুহম্মদ শহীদুল্লাহ্‌", "মুহম্মদ এনামুল হক"]

    ],

    [
        "question" => "কোনোদিন কর্মহীন পূর্ণ  অবকাশে  বসন্ত বাতাসে অতীতের  তীর  হাতে যে  রাত্রে বহীবে দীর্ঘশ্বাস, ঝরা বকুলের কান্না ব্যথিবে আকাশ। উপরিউক্ত চরণের রচয়িতা কে?",
        "option"   => ["শামসুর রাহমান", "রবীন্দ্রনাথ ঠাকুর", "কাজী নজরুল ইসলাম", "কোনটিই নয়"]

    ],


    [
        "question" => "কোন বাক্যে ক্রিয়া পদ উহ্য রয়েছে?",
        "option"   => ["তিনি সাঁতার কাটছেন", "ইনি আমার ভাই", "কবির বই পড়ছে",   "আমি লিখছি"]

    ],


    [
        "question" => "ক্রিয়া সম্পাদনের যন্ত্র,উপকরণ বা সহায়ককে কি বলে?",
        "option"   => ["সৈয়দ শামসুল হক", "মোহাম্মদ মনিরুজ্জামান", "আব্দুল মান্নান", "সৈয়দ আল মাহমুদ"]

    ],

];


// foreach ($questionSet as $key => $singleQuestion) {
//     echo "<pre>";
//     foreach($singleQuestion["option"] as $singleValue){
//         echo $singleValue[0];
//     }
//     echo "</pre>";
// }








?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="img/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">



    <title>Hello, world!</title>
</head>

<body>

<section id="question-section">
    <div class="container sub-question">
        <h2 class="text-success text-center mb-5">Start Exam From Now</h2>
        <div class="row">
            <?php
            shuffle($questionSet);
            foreach ($questionSet as $key => $singleQuestion) {

            ?>
                <div class="col-md-12 mb-2">
                    <h5 style="line-height: 40px;"><span style="margin-right: 10px;">(<?php echo ++$key ?>)</span><?php echo $singleQuestion["question"]; ?></h5>

                    <?php
                        
                        $everyQuestionOption= $singleQuestion["option"];
                        shuffle($everyQuestionOption);
                        foreach($everyQuestionOption as $key => $singleValue){

                        
                    ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        <?php echo $singleValue ?>
                        </label>
                    </div>
                <?php
                    };
                ?>
                </div>

            <?php
            }

            ?>
        </div>
    </div>

</section>

<h1 class="text-center mt-5 mb-5">Project 2</h1>

            <?php

                $teamMemberData = [
                    [
                        "thumbnail" => "team1",
                        "member_name" => "Shawon Hridoy",
                        "member_role" => "Web Developer",
                        "facebook_link" => "https://www.facebook.com/shawonhridoy0",
                        "twitter_link" => "https://twitter.com/shawonhridoy01",
                        "linkedin_link" => "https://linkedin.com/shawonhridoy01",
                    ],

                    [
                        "thumbnail" => "team2",
                        "member_name" => "Mohammad Shakil",
                        "member_role" => "Software Engineer",
                        "facebook_link" => "https://www.facebook.com/shawonhridoy0",
                        "twitter_link" => "https://twitter.com/shawonhridoy01",
                        "linkedin_link" => "https://linkedin.com/shawonhridoy01",
                    ],

                    [
                        "thumbnail" => "team3",
                        "member_name" => "Masum Billah",
                        "member_role" => "Project Manager",
                        "facebook_link" => "https://www.facebook.com/shawonhridoy0",
                        "twitter_link" => "https://twitter.com/shawonhridoy01",
                        "linkedin_link" => "https://linkedin.com/shawonhridoy01",
                    ],

                    [
                        "thumbnail" => "team1",
                        "member_name" => "Kamrun Nahar",
                        "member_role" => "Graphics Designer",
                        "facebook_link" => "https://www.facebook.com/shawonhridoy0",
                        "twitter_link" => "https://twitter.com/shawonhridoy01",
                        "linkedin_link" => "https://linkedin.com/shawonhridoy01",
                    ]

                
                ]
            ?>

    <div class="container main-team  ">
        <div class="row">
        <?php
                foreach($teamMemberData as $key => $everyMember){

            
        ?>
            <div class="col-md-3 team-single-section">
                <img src="./img/<?php echo $everyMember['thumbnail'];?>.jpg" alt="">
                <h4 class="mb-2 mt-2 text-success"><?php echo $everyMember["member_name"] ?></h4>
                <p class="text-black-50"><?php echo $everyMember["member_role"] ?></p>
                <ul class="social-icon">
                        <a href="<?php echo $everyMember['facebook_link'] ?>"><i class="fa-brands fa-facebook"></i></a>
                        <a href="<?php echo $everyMember['linkedin_link'] ?>"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="<?php echo $everyMember['twitter_link'] ?>"><i class="fa-brands fa-twitter"></i></a>
                </ul>

            </div>
            <?php
            };
            ?>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>