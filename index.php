<?php
include 'script-login.php';
include "./conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>Allbet บริการเกมคาสิโน อย่างครบวงจร ระบบฝากถอน AUTO 3 วินาที</title>
    <meta name="title" content="Allbet บริการเกมคาสิโน อย่างครบวงจร ระบบฝากถอน AUTO 3 วินาที " />
    <meta name="description" content="บริการความสนุก Allbet กับทางเว็บไซต์ที่เปิดให้บริการสำหรับผู้เล่นทุกวัน และเสถียรที่สุดกับทาง คาสิโนออนไลน์ มาพร้อมกับสุดยอดรูปแบบของ เกมคาสิโน  คาสิโนออนไลน์ สล็อตออนไลน์ หวยออนไลน์ บาคาร่าออนไลน์" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="allbet ">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Allbet บริการเกมคาสิโน อย่างครบวงจร ระบบฝากถอน AUTO 3 วินาที" />
    <meta property="og:description" content="บริการความสนุก Allbet กับทางเว็บไซต์ที่เปิดให้บริการสำหรับผู้เล่นทุกวัน และเสถียรที่สุดกับทาง คาสิโนออนไลน์ มาพร้อมกับสุดยอดรูปแบบของ เกมคาสิโน  คาสิโนออนไลน์ สล็อตออนไลน์ หวยออนไลน์ บาคาร่าออนไลน์" />
    <meta property="og:url" content="https://www.allbet-789.com/" />
    <meta property="og:site_name" content="allbet" />
    <meta property="og:image" content="./img/logo-allbet789.webp" />

    <meta property="twitter:url" content="https://www.allbet-789.com/">
    <meta property="twitter:image" content="./img/logo-allbet789.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Allbet บริการเกมคาสิโน อย่างครบวงจร ระบบฝากถอน AUTO 3 วินาที" />
    <meta name="twitter:description" content="บริการความสนุก Allbet กับทางเว็บไซต์ที่เปิดให้บริการสำหรับผู้เล่นทุกวัน และเสถียรที่สุดกับทาง คาสิโนออนไลน์ มาพร้อมกับสุดยอดรูปแบบของ เกมคาสิโน  คาสิโนออนไลน์ สล็อตออนไลน์ หวยออนไลน์ บาคาร่าออนไลน์" />
    <meta name="twitter:site" content="allbet">
    <meta name="twitter:creator" content="allbet">

    <link rel="canonical" href="https://www.allbet-789.com/" />
    <link rel="alternate" href="https://www.allbet-789.com/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.allbet-789.com/",
            "logo": "https://www.allbet-789.com/img/logo-allbet789.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "allbet",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "https://www.allbet-789.com/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "https://www.allbet-789.com/",
            "name": "allbet",
            "description": "Allbet บริการเกมคาสิโน อย่างครบวงจร ระบบฝากถอน AUTO 3 วินาที",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://www.allbet-789.com/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "allbet"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "https://www.allbet-789.com/img/logo-allbet789.webp",
                "https://www.allbet-789.com/img/bannerallbet-789.webp",
                "https://www.allbet-789.com/img/img-allbet789-shom01.webp"
            ],
            "name": "allbet",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "https://www.allbet-789.com/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>
</head>

<body>
    <header class="haeder">
        <button class="open_navber_moblie" type="button" onclick="openNav()">&equiv;</button>
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <a href="./">
                        <img data-src="./img/logo-allbet789.webp" class="lazy img-fluid  fate-in-out" width="285" height="120" alt="logo allbet789">
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="box-login">
                        <a href="http://aff.789first.com/login">Login</a>
                        <a href="http://aff.789first.com/register">Sign in</a>
                    </div>
                </div>
            </div>
            <form method="POST" onSubmit="JavaScript:return fncSubmit();" class="mainlogin-nonepc">
                <input type="text" class="int-username" name="name" placeholder="Username / ชื่อผู้ใช้" required>
                <input type="password" class="int-password" name="pass" placeholder="Password / รหัสผ่าน" required>
                <button type="submit" name="create-post" class="btn-login">เข้าสู่ระบบ</button>
                <button type="button" onclick="window.location.href='http://aff.789first.com/register'">สมัครสมาชิก</button>
                <button type="button" onclick="window.location.href='https://line.me/ti/p/~@789First'">สมัครผ่านไลน์</button>
            </form>
        </div>

    </header>
    <nav class="navlinks">
        <div class="container bg-nav px-0" style="background-image: url(./img/bg-nav.webp);">
            <ul>
                <li><a href="./">Allbet</a></li>
                <li><a href="./entrance/">ทางเข้า</a></li>
                <li><a href="./download/">ดาวน์โหลด</a></li>
                <li><a href="./apply/">สมัครสมาชิก</a></li>
                <li><a href="./promotion/">โปรโมชั่น</a></li>
                <li><a href="./asset/">ลิงค์รับทรัพย์</a></li>
                <li><a href="./contact/">ติดต่อเรา</a></li>
            </ul>
        </div>
    </nav>
    <div id="mySidenav" class="sidenav-slide">
        <span class="closebtn" onclick="closeNav()">&times;</span>
        <div class="sidenav">
            <a href="./">Allbet</a>
            <a href="./entrance/">ทางเข้า</a>
            <a href="./download/">ดาวน์โหลด</a>
            <a href="./apply/">สมัครสมาชิก</a>
            <a href="./promotion/">โปรโมชั่น</a>
            <a href="./asset/">ลิงค์รับทรัพย์</a>
            <a href="./contact/">ติดต่อเรา</a>
        </div>
    </div>
    <section class="baner">
        <div class="container">
            <div class="d-block text-center py-3">
                <img data-src="./img/bannerallbet-789.webp" class="lazy img-fluid" width="100%" height="100%" alt="banner allbet-789">
            </div>
        </div>
    </section>
    <section class="about-imgshow">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                    <img data-src="./img/img-allbet789-shom01.webp" class="lazy img-max" width="417" height="287" alt="ฝาก ถอน อัตโนมัติ">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                    <img data-src="./img/img-allbet789-shom02.webp" class="lazy img-max" width="417" height="287" alt="มีความมั่นคง">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                    <img data-src="./img/img-allbet789-shom03.webp" class="lazy img-max" width="417" height="287" alt="เล่นง่ายได้เงินจริง">
                </div>
            </div>
        </div>
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="content">
            <section class="data-main">
                <div class="container">
                    <div class="heading-text">
                        <h1>Allbet</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                            <p class="mb-0"><strong>Allbet</strong> บริการเกมคาสิโน อย่างครบวงจรด้วยแพลตฟอร์มที่มีเกมยอดเยี่ยมคอยบริการสำหรับผู้เล่นด้วยความคมชัดของภาพ 4k ซึ่งถือได้ว่าเป็นเจ้าแรกที่ได้รับการยอมรับ ด้วยการพัฒนาปรับปรุงอยู่ตลอดเวลาจนได้เป็นที่เรียกติดปากกันว่า ผู้นำเทคโนโลยีเกมคาสิโนเจ้าแรก กับการันตีการเข้าร่วมสนุกของเกมโดยการดูย้อนหลังได้พร้อมทั้งระบบการเข้าใช้งานได้อย่างสะดวก และรวดเร็วผ่าน app บนมือถือที่สามารถเล่นได้ทั้ง android และ iOS </p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                            <p class="mb-0">ถือเป็นเว็บไซต์ผู้ผลิตเกมอันดับ 1 กับระบบเกมคาสิโนที่ถูกคัดสรรเกมด้วยการพัฒนาซอฟต์แวร์กับนักโปรแกรมเมอร์ผู้เชี่ยวชาญ และน่าเชื่อถือให้เข้าร่วมสนุกได้ผ่าน browser ที่มีสัญญาณอินเทอร์เน็ตเพื่อจะทำให้กับผู้ที่ชื่นชอบสามารถเข้าใช้บริการได้กับทุกช่วงเวลาตามต้องการ กับการเข้าใช้บริการที่ดีและ มีความทันสมัยมาพร้อมกับสิทธิพิเศษต่างๆ มากมายให้กับผู้เล่นสามารถร่วมสนุกได้ตลอด 24 ชั่วโมงภายในเว็บไซต์เดียวอย่างครบครัน</p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 my-1">
                            <img data-src="./img/main-allbet789.webp" class="lazy img-max" width="485" height="437" alt="allbet-img">
                        </div>
                        <div class="col-12 my-3 bg-online" style="background-image: url(./img/bg-allbet-online.webp);">
                            <p class="mb-0">บริการความสนุก <strong>Allbet</strong> กับทางเว็บไซต์ที่เปิดให้บริการสำหรับผู้เล่นทุกวัน 365 วันได้ร่วมลุ้นสนุกกับเกมในรูปแบบต่างๆ อย่างไม่มีเบื่อเพื่ออรรถรสในการเข้าใช้บริการที่รวดเร็วเนื่องจากว่ามีระบบความมั่นคงปลอดภัย และเสถียรที่สุดกับทาง คาสิโนออนไลน์ มาพร้อมกับสุดยอดรูปแบบของ เกมคาสิโน คอยให้บริการสำหรับผู้เล่นไม่ว่าจะเป็น <em>คาสิโนออนไลน์</em> <em>สล็อตออนไลน์</em> <em>หวยออนไลน์</em> <em>บาคาร่าออนไลน์</em> ก็มีไว้บริการอย่างครบรสภายในเว็บไซต์ 789first เพื่อง่ายต่อการเข้าใช้บริการที่มีข้อดีหลากหลายข้อผ่านช่องทางออนไลน์ด้วยกัน</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-data-secon">
                <div class="container">
                    <img data-src="./img/allbet-online.webp" class="lazy img-max" width="1000" height="644" alt="บริการเกม Allbet online">
                    <div class="heading-text">
                        <h2>บริการเกม Allbet online</h2>
                    </div>
                    <p>รูปแบบของ เกมบาคาร่า คือหนึ่งในรูปแบบ <strong>Allbet</strong> ได้รับความนิยม โดยนักพนันหลายคนชื่นชอบเนื่องจากว่าเป็นเกมที่สร้างผลตอบแทนในการทำกำไรได้ดีจากเกมไพ่ที่มีวิธีการเล่นง่าย ซึ่งถ้าหากผู้เล่นนั่นมีเทคนิคในการเดิมพันก็สามารถเอาชนะรูปแบบของเกมผ่านระบบออนไลน์ได้ และสามารถค้นหาข้อมูลพร้อมเทคนิคต่างๆ ในการเดิมพันที่ดีกับ เกมบาคาร่าไลฟ์สด และแบบบนโต๊ะ ให้ผู้เล่นสามารถเข้าร่วมสนุกผ่านหน้าจอโทรศัพท์มือถือ บนบ่อนคาสิโนเสมือนจริงย่อส่วนมาให้กับผู้เล่นเข้ามาร่วมสนุกเพื่อพัฒนาการเข้าใช้บริการที่ดีด้วยภาพกราฟฟิกดีไซน์ลื่นไหล และสามารถใช้บริการได้กับทุกช่วงเวลาตามที่ต้องการมาพร้อมกับรูปแบบของเกมยอดนิยมให้กับผู้เล่นเข้าร่วมสนุกกันเป็นจำนวนมากดังต่อไปนี้</p>
                </div>
            </section>
            <section class="about-data-secon">
                <div class="container">
                    <div class="heading-text">
                        <h2>เกมหมวดต่างๆ บนค่ายเกม Allbet</h2>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <img data-src="./img/allbet-789-baccarat.webp" class="lazy img-max" width="338" height="318" alt="บาคาร่าออนไลน์">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <div class="box-neon">
                                <p><strong>บาคาร่าออนไลน์</strong> ที่จัดได้ว่าเป็น เกมบาคาร่า ยอดนิยม และสามารถเล่นได้ง่ายเหมาะสำหรับผู้เล่นที่ชื่นชอบกับการทายผลที่รวดเร็วเพียงแค่ผู้เล่นทำการทายผลการออกรางวัลของ บาคาร่า ว่าจะออกมาในลักษณะไหนซึ่งจะมีอยู่ 2 ฝั่งให้กับผู้เล่นได้เลือกนั่นคือ ฝั่งเจ้ามือ แล้วก็ฝั่งผู้เล่น ที่มาพร้อมกับสาวสวยสุดเซ็กซี่คอยทำการแจกไพ่เพื่อสร้างความสนุกและ ความตื่นตาตื่นใจในการเข้าใช้บริการได้เป็นอย่างดี</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <img data-src="./img/allbet-789-slot.webp" class="lazy img-max" width="338" height="318" alt="สล็อตออนไลน์">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <div class="box-neon">
                                <p><strong>สล็อตออนไลน์</strong> ถือว่าเป็นเกมยอดนิยมผ่านช่องทางออนไลน์ที่มีความหลากหลายของเกมให้แก่ผู้เล่นได้เข้าร่วมสนุกเป็นจำนวนมากกว่า 200 เกม ด้วยการหมุนสปินยิ่งถ้าหากผู้เล่นเพิ่ม bet ในการหมุนมากเท่าไหร่ก็ยิ่งจะมีโอกาสสร้างผลตอบแทนในการ ปั่นสล็อต เพิ่มมากยิ่งขึ้นเท่านั้น</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <img data-src="./img/allbet-789-sicbo.webp" class="lazy img-max" width="338" height="318" alt="ไฮโลออนไลน์">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <div class="box-neon">
                                <p><strong>ไฮโลออนไลน์</strong> บริการเกมไฮโล หรือ sicbo เป็นอีกหนึ่ง เกมคาสิโนออนไลน์ ที่ได้รับความนิยมทั้งในประเทศ และต่างประเทศที่สามารถร่วมลุ้นผลการออกรางวัลของลูกเต๋าว่าจะออกมาในลักษณะไหนด้วยการทายผล ถ้าหากทายถูกก็จะได้รับผลตอบแทนอย่างคุ้มค่าซึ่งถือได้ว่าสร้างความสนุกสนาน และเป็นเกมที่รวดเร็วอีกชนิดหนึ่ง</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <img data-src="./img/allbet-789-baccaratcow.webp" class="lazy img-max" width="338" height="318" alt="บาคาร่าวัววัว">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <div class="box-neon">
                                <p><strong>บาคาร่าวัววัว</strong> ที่เป็นบริการ เกมบาคาร่า จากค่าย <strong>Allbet</strong> ที่มีทั้งความสนุกและ ความตื่นเต้นในการเข้าใช้บริการได้เป็นอย่างดีให้กับผู้เล่นได้สัมผัสกับประสบการณ์ความสนุกสนานที่ท้าทายจากการเดิมพันด้วยการแจกไพ่ที่มีลักษณะการเล่นคล้ายคลึงกับบาคาร่าออนไลน์</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                            <img data-src="./img/allbet-789-tigerdragon.webp" class="lazy img-max" width="338" height="318" alt="เสือมังกร">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="box-neon">
                                <p><strong>เสือมังกร</strong> บริการ เกมคาสิโนออนไลน์ ที่ผู้เล่นไม่ควรพลาดกับการสร้างผลตอบแทนที่ง่าย และรวดเร็วซึ่งถือได้ว่าเป็นเกมที่ได้รับความนิยมและ สามารถทำกำไรให้กับผู้เล่น ได้ดีด้วยการทายผลของเกมไพ่โดยใช้ไพ่เพียงแค่ใบเดียวก็สามารถรู้ผล แพ้-ชนะ ซึ่งผู้เล่นสามารถทายผลเกมได้ว่า ฝั่งมังกร หรือเสือชนะนั่นเอง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-data-secon">
                <div class="container">
                    <div class="heading-text">
                        <h2>ความโดดเด่นของ Allbet</h2>
                    </div>
                    <p><strong>Allbet</strong> ได้รับความนิยม และถูกส่งตรงจากประเทศชั้นนำที่มีความหลากหลายของเกมให้กับผู้เล่นได้เลือกทำการเดิมพัน และได้รับลิขสิทธิ์ส่งตรงจากประเทศฟิลิปปินส์ ถือได้ว่าเป็นมาตรฐานสากลจากต่างประเทศให้การยอมรับ ให้สามารถเข้าใช้บริการผ่านอุปกรณ์อิเล็กทรอนิกส์ที่มีความทันสมัยโดยการถ่ายทอดสดด้วยกล้อง full hd กับการเข้าใช้บริการกับเกมชนิดต่างๆ ที่กำลังได้รับความนิยมมาพร้อมกับความโดดเด่นของระบบถ่ายทอดสดที่คมชัด ซึ่งสามารถปรับกล้องเพื่อทำการถ่ายทอดสดในการเพิ่มอรรถรสกับการเดิมพันที่มีสาวสวยสุดเซ็กซี่คอยทำการแจกไพ่ให้แก่ผู้เล่น ซึ่งสามารถสร้างความสนุกได้กับทุกช่วงเวลากับบริการเกมยอดนิยมให้กับผู้เล่นได้เลือกเดิมพันอย่างหลากหลายกับ ออบิด ออนไลน์ บนคาสิโน ที่ทางเราเว็บไซต์ <strong><em>789first</em></strong> ได้จัดเตรียมรูปแบบของเกมเหล่านั้นมาให้กับผู้เล่นได้ทำการเดิมพัน และร่วมสนุกดังต่อไปนี้</p>
                    <div class="row mb-2">
                        <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                            <div class="box-neon">
                                <p><strong>Allbet</strong> คือการบริการ เกมคาสิโนออนไลน์ ที่มีการถ่ายทอดสดมาอย่างยาวนานกว่า 10 ปีโดยผู้เชี่ยวชาญด้านเทคนิค และเจ้าหน้าที่มืออาชีพมากประสบการณ์ให้ความช่วยเหลือ และพัฒนาให้มีความทันสมัยในการเข้าใช้บริการจนถึงปัจจุบันนี้ กับความโดดเด่นด้วยระบบการถ่ายทอดสดที่คมชัด และสามารถเลือกระดับ HD ตามที่ผู้เล่นต้องการได้ พร้อมทั้งมุมกล้องในการทำงานของคาสิโนยังสามารถซูมและเพิ่มระดับตามความต้องการได้ซึ่งถือได้ว่าเป็นการเข้าใช้บริการเกม คาสิโนออนไลน์ ที่โปร่งใสไม่ทุจริตอย่างแน่นอนที่ผู้เล่นสามารถเข้าตรวจสอบกับการเดิมพันตามที่ต้องการได้</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                            <div class="box-neon">
                                <p>กับวิธีการเข้าใช้งานง่ายๆ โดยการสมัครสมาชิกผ่านทางหน้าเว็บไซต์หรือ ทางช่องทางการติดต่อ LINE ที่ผู้เล่นจะได้สัมผัสกับรูปแบบของเกมที่มีความสะดวกสบายในการเข้าถึงพร้อมทั้งยังมีรูปแบบของเกมชนิดต่างๆ ที่จะทำให้ผู้เล่นจะได้สัมผัสในการเข้าร่วมสนุกอย่างครบวงจรกับค่ายเกม <strong>Allbet</strong> ออนไลน์ที่เป็นกลุ่มผู้นำเทคโนโลยีจำลองเสมือนจริง พร้อมความเสถียรไม่มีกระตุกให้สามารถเข้าใช้งานได้อย่างลื่นไหลเพื่อเพิ่มอรรถรสในการเดิมพันกับบริการทุกรูปแบบอย่างครบวงจร</p>
                            </div>
                        </div>
                    </div>
                    <p><strong>Allbet</strong> บริการ เกมคาสิโน ที่ดีที่สุดจากแบรนด์ชั้นนำ ไปสู่ความสนุกสนานไม่ว่าจะเป็น <em>คาสิโน สล็อต แทงบอล</em> หรือรูปแบบกีฬาชนิดอื่นๆ รวมถึงเกมต่างๆ ให้กับผู้เล่นสามารถเล่นได้ผ่าน browser ด้วยการรองรับทั้งสมาร์ทโฟน และ iOS ภายใต้ระบบปฏิบัติการที่มีการพัฒนาให้มีความทันสมัยอยู่ตลอดเวลารวมถึงการสมัครสมาชิกใหม่ที่สร้างผลตอบแทนและ มีขั้นตอนวิธีการต่างๆ แนะนำในการเข้าใช้บริการกับเว็บไซต์ <strong><em>789first</em></strong> เพราะทางเรา คือใส่ใจทุกรายละเอียดในการเข้าใช้บริการไม่ว่าจะผู้เล่นจะเข้าใช้บริการผ่านอุปกรณ์ระบบใดก็ได้ และสามารถเล่นได้อย่างเพลิดเพลินกับทางทีมงานโปรแกรมเมอร์ที่พัฒนาปรับปรุงระบบให้มีความทันสมัยอยู่ตลอดเวลาเพื่อการเข้าใช้งานที่มีความมั่นคงและ สามารถเพิ่มอรรถรสในการเดิมพันได้ดีมากยิ่งขึ้น</p>
                </div>
            </section>
        </article>
        <article class="box-article-container ">
            <div class="container py-5">
                <p class="str-news text-center  mb-0"><a href="./all-articles/">บทความ/ข่าวสาร</a></p>
                <br>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    function DateThai($strDate)
                    {
                        $strYear = date("Y", strtotime($strDate));
                        $strMonth = date("n", strtotime($strDate));
                        $strDay = date("j", strtotime($strDate));
                        $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
                        $strMonthThai = $strMonthCut[$strMonth];
                        return "$strDay $strMonthThai $strYear ";
                    }
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <span class="textdate"><?php echo DateThai($resuret['create_at']); ?></span>
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img data-src="./backend/uploads/article-img/<?php echo $img; ?>" class="lazy img-fluid zoom" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-4">
            <div class="container">
                <div class="text-center ">
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    function DateThai($strDate)
                    {
                        $strYear = date("Y", strtotime($strDate));
                        $strMonth = date("n", strtotime($strDate));
                        $strDay = date("j", strtotime($strDate));
                        $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
                        $strMonthThai = $strMonthCut[$strMonth];
                        return "$strDay $strMonthThai $strYear ";
                    }
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <span class="textdate"><?php echo DateThai($resuret['create_at']); ?></span>
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img data-src="./backend/uploads/article-img/<?php echo $img; ?>" class="lazy img-fluid zoom" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="site-footer">
        <div class="container">
            <div class="text-box-footer">
                <img data-src="./img/logo-allbet789.webp" class="lazy img-fluid " width="285" height="120" alt="logo allbet789">
            </div>
            <div class="row mt-4 mb-2">
                <div class="col-lg-4 col-md-12 col-sm-12 my-1">
                    <p class="text-center h3" style="color: #81cafd;">รองรับทุกระบบ</p>
                    <img data-src="./img/footer-02.webp" class="lazy img-max" width="251" height="115" alt="รองรับทุกระบบ">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-1">
                    <p class="text-center h3" style="color: #81cafd;">ช่องทางการเงิน</p>
                    <img data-src="./img/footer-03.webp" class="lazy img-max" width="463" height="115" alt="ช่องทางการเงิน">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-1">
                    <p class="text-center h3" style="color: #81cafd;">ติดต่อ / สอบถาม</p>
                    <a href="https://line.me/ti/p/~@789First" rel="nofollow">
                        <img data-src="./img/footer-04.webp" class="lazy img-max" width="251" height="115" alt="ติดต่อ / สอบถาม">
                    </a>
                </div>
            </div>
            <hr>
            <a href="./backend/login.php" class="link_back">เข้าสู่ระบบ</a>
        </div>
    </footer>
    <div id="nav_moblie_footer">
        <a href="http://aff.789first.com/login"><img data-src="./img/icon/icon-nav02.webp" class="lazy img-fluid" width="35" height="35" alt="icon เข้าสู่ระบบ"><span>เข้าสู่ระบบ</span> </a>
        <a href="http://aff.789first.com/register"><img data-src="./img/icon/icon-nav03.webp" class="lazy img-fluid" width="35" height="35" alt="icon สมัครสมาชิก"><span>สมัครสมาชิก</span> </a>
        <a href="http://aff.789first.com/register"><img data-src="./img/icon/icon-nav04.webp" class="lazy img-fluid" width="35" height="35" alt="icon ลิงค์รับทรพย์"><span>ลิงค์รับทรพย์</span> </a>
        <a href="https://line.me/ti/p/~@789First"><img data-src="./img/icon/icon-nav05.webp" class="lazy img-fluid" width="35" height="35" alt="icon ติดต่อ"><span>ติดต่อ</span> </a>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>