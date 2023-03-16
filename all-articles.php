<?php
include 'script-login.php'; 
function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate));
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear ";
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <title>บทความทั้งหมด allbet </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all" />
    <meta name="Author" content="allbet">

    <link rel="shortcut icon" href="../favicon.webp" type="image/x-icon" />
    <link rel="icon" href="../favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../favicon.webp" />

    <?php include('./link.php'); ?>
    <link rel="canonical" href="https://www.allbet-789.com/all-articles/" />
    <link rel="alternate" href="https://www.allbet-789.com/all-articles/" hreflang="th-TH" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "หน้าแรก",
                "item": "https://www.allbet-789.com/"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "บทความทั้งหมด"
            }]
        }
    </script>
</head>

<body>
    <?php include('./component/header.php'); ?>
    <?php include('./about-img.php'); ?>
    <section id="bread-crumbs">
        <div class="container px-0">
            <nav aria-label="breadcrumb " class="nav-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page" aria-disabled="page">บทความทั้งหมด</li>
                </ol>
            </nav>
        </div>
    </section>
    <article class="article-container-card">
        <div class="container px-0 text-center">
            <div class="heading-bg-secon" >
                <h1>บทความทั้งหมด</h1>
            </div>
        </div>
        <div class="container">
            <div>

                <div id="loadtable">
                    <?php
                    $lastid = '';
                    include('./conn/connect.php');
                    $query = mysqli_query($conn, "SELECT * FROM articles order by id asc limit 9"); ?>
                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                            $article_id = $row['id'];
                        ?>

                            <div class="col-lg-4 col-md-6  col-sm-12">
                                <div class="bg_articles my-2">
                                    <a href="../view/<?php echo $row['url_articles_seo']; ?>" class="article-link" rel="ugc">
                                        <span class="textdate"><?php echo DateThai($row['create_at']); ?></span>
                                        <figure class="news-articles-img">
                                            <div class="bg-img">
                                                <img data-src="../backend/uploads/article-img/<?php echo $row['image_banner']; ?>" class="lazy img-fluid zoom" alt="<?php echo trim(strip_tags(mb_substr($row['topic_name'], 0, 30, 'utf-8'))); ?>" width="100%" height="100%">
                                            </div>
                                        </figure>
                                        <div class="px-2">
                                            <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($row['topic_name'], 0, 30, 'utf-8'))); ?></strong>
                                            <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($row['descripion_seo'], 0, 120, 'utf-8'))); ?></p>
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
                                                <a href="../tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                    <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $lastid = $row['id'];
                        } ?>
                    </div>
                    <div id="remove">
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" name="loadmore" id="loadmore" data-id="<?php echo $lastid; ?>" class="btn-btn-success">ดูเพิ่มเติม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </article>
    <?php include('./component/footer.php'); ?>
    <?php include('./import-js.php'); ?>
    <?php include('./custom.php'); ?>
</body>

</html>