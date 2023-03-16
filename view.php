<!------- date --------------->
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
<?php
include './conn/connect.php';
$sql1 = "UPDATE articles SET  view=view+1   WHERE url_articles_seo='$_GET[url_articles_seo]'";
$query1 = mysqli_query($conn, $sql1);
?>

<!------------------end date ------------------>
<?php
include './conn/connect.php';
$url_articles_seo = $_GET["url_articles_seo"];
// รับข้อมูลจากตาราง
if (isset($url_articles_seo)) {

    $sql_query = "SELECT * FROM articles 
	WHERE url_articles_seo='$url_articles_seo'";
    $result_set = mysqli_query($conn, $sql_query) or die('ข้อผิดพลาด');
    $result = mysqli_fetch_array($result_set);
    $id = $result["id"];
    $category_id  =  $result["category_id"];
    $user_id  =  $result["user_id"];
    $topic_name  =  $result["topic_name"];
    $descripion  =  $result["descripion"];
    $image_banner  =  $result["image_banner"];
    $create_at  =  $result["create_at"];
    $update_at  =  $result["update_at"];
    $view  =  $result["view"];
    $keyword_seo  =  $result["keyword_seo"];
    $descripion_seo  =  $result["descripion_seo"];
    $url_articles_seo  =  stripslashes($result["url_articles_seo"]);
    $encode = urlencode($url_articles_seo);


    $sql_author = "SELECT * FROM articles LEFT join user on articles.user_id = user.id WHERE user.id ='$user_id' ";
    $query_article = mysqli_query($conn, $sql_author) or die("Error in query: $sql_author " . mysqli_error($conn));
    $author = mysqli_fetch_array($query_article);
    $authorName = $author["firstname"];
}

?>
<!DOCTYPE html>
<html lang="th">

<head>
    <title><?php echo $topic_name  ?></title>
    <meta name="title" content="<?php echo $topic_name  ?>" />
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="th" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $descripion_seo  ?>">
    <meta name="robots" content="index,follow" />
    <meta name="Author" content="<?php echo $authorName ?>">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $topic_name  ?>" />
    <meta property="og:description" content="<?php echo $descripion_seo  ?>" />
    <meta property="og:image" content="../backend/uploads/article-img/<?php echo $image_banner ?>" />
    <meta property="og:url" content="https://www.allbet-789.com/view/<?php echo $encode ?>" />
    <meta property="og:site_name" content="allbet" />

    <meta property="twitter:url" content="https://www.allbet-789.com/view/<?php echo $encode ?>">
    <meta property="twitter:image" content="../backend/uploads/article-img/<?php echo $image_banner ?>">
    <meta name="twitter:title" content="<?php echo $topic_name ?>" />
    <meta name="twitter:description" content="<?php echo $descripion_seo ?>" />
    <meta name="twitter:site" content="allbet" />
    <meta name="twitter:creator" content="allbet" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="alternate" href="https://www.allbet-789.com/<?php echo $encode ?>" hreflang="th-TH" />
    <link rel="canonical" href="https://www.allbet-789.com/<?php echo $encode ?>" />

    <link rel="shortcut icon" href="../favicon.webp" type="image/x-icon" />
    <link rel="icon" href="../favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../favicon.webp" />


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.allbet-789.com/view/<?php echo $encode ?>"
            },
            "headline": "<?php echo $topic_name  ?>",
            "image": [
                "https://www.allbet-789.com/backend/uploads/article-img/<?php echo $image_banner  ?>"
            ],
            "datePublished": "<?php echo $create_at ?>",
            "dateModified": "<?php echo $update_at ?>",
            "author": {
                "@type": "Person",
                "name": "allbet",
                "url": "https://www.allbet-789.com/view/<?php echo $encode ?>"
            },
            "publisher": {
                "@type": "Organization",
                "name": "allbet",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://www.allbet-789.com/view/<?php echo $encode ?>"
                }
            }
        }
    </script>
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
                "name": "บทความทั้งหมด",
                "item": "https://www.allbet-789.com/all-articles/"
            }],
            {
                "@type": "ListItem",
                "position": 3,
                "name": "<?php echo $topic_name ?>"
            }]
        }
    </script>

    <?php include('./link.php'); ?>
    <style>
        ol,
        ul,
        li {
            color: #ffffff;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .news-text {
            padding: 20px !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #ff00ff;
        }
    </style>
</head>

<body>
    <?php include('./component/header.php'); ?>
    <?php include('./about-img.php'); ?>
    <section id="bread-crumbs">
        <div class="container px-0">
            <nav aria-label="breadcrumb " class="nav-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="../all-articles/">บทความทั้งหมด</a></li>
                    <li class="breadcrumb-item active" aria-current="page" aria-disabled="page"><?php echo $topic_name  ?></li>
                </ol>
            </nav>
        </div>
    </section>
    <article class="view-container py-3" style="overflow-x: hidden;">
        <section class="view-show-blog container">
            <div class="container">
                <div class="text-center">
                    <img data-src="../backend/uploads/article-img/<?php echo $image_banner; ?>" class="lazy img-fluid">
                </div>
                <div class="heading-text">
                    <h1 class="text-center" style="margin: 0px;">
                        <?php echo $topic_name  ?>
                    </h1>
                </div>
                <div class=" text-center">
                    <aside class="site">
                        <?php
                        include './conn/connect.php';
                        $chack_tags = "SELECT tag.name ,tag.tag_url FROM (tag
                                     left join tag_log on tag.id = tag_log.tag_id)
                                     where articles_id = $id ";
                        $chacks_query = mysqli_query($conn, $chack_tags) or die("error in query:$chack_tags" . mysqli_error($conn));
                        ?>
                        <div class="my-2 socail">
                            <a href="http://www.facebook.com/sharer.php?u=https://www.allbet-789.com/view/<?php echo $encode ?>" target="_blank" class="share-facebook"><i class="fab fa-facebook-f"></i>แชร์</a>
                            <a href="http://twitter.com/share?text=<?php echo $topic_name  ?> &url=https://www.allbet-789.com/view/<?php echo $encode ?> &hashtags=<?php while ($rs = mysqli_fetch_array($chacks_query)) { ?><?php echo $rs['tag_url']; ?>,<?php } ?>" target="_blank" class="share-twitter"><i class="fab fa-twitter"></i>ทวีต</a>
                            <a href="https://social-plugins.line.me/lineit/share?url=https://www.allbet-789.com/view/<?php echo $encode ?>" target="_blank" class="share-line"><i class="fab fa-line"></i>แชร์</a>
                        </div>
                        <div class="potsnew">
                            <span class="date-news">
                                <?php
                                $strDate = $create_at;
                                echo "โพสเมื่อ : " . DateThai($strDate);
                                ?>
                            </span>
                            <span class="news-views">
                                <i class="fa fa-eye"></i> <?php echo $view  ?>
                            </span>
                            <span class="order_by">
                                BY : <a class="link_a" href="../author/<?php echo $authorName ?>"> <?php echo $authorName ?></a>
                            </span>
                        </div>
                    </aside>
                </div>
                <p class="news-text">
                    <?php echo $descripion  ?>
                </p>
                <div class="box-name-category">
                    <?php
                    $sql_category = "SELECT * FROM category WHERE id = $category_id";
                    $query_cate = mysqli_query($conn, $sql_category) or die("Error in query: $sql_category " . mysqli_error($conn));
                    $result_cate = mysqli_fetch_array($query_cate);

                    ?>
                    <p>Category : <a href="../category/<?php echo $result_cate['name']; ?>" rel="ugc"><?php echo $result_cate['name']; ?></a></p>
                </div>
                <div class="box-name-tag">
                    <p>Tags : </p>
                    <?php
                    include './conn/connect.php';
                    $chack_tag_log = "SELECT tag.name ,tag.tag_url FROM (tag
				left join tag_log on tag.id = tag_log.tag_id)
				where articles_id = $id ";
                    $chack_query = mysqli_query($conn, $chack_tag_log) or die("error in query:$chack_tag_log" . mysqli_error($conn));
                    while ($r = mysqli_fetch_array($chack_query)) {
                    ?>
                        <a href="../tag/<?php echo $r['tag_url']; ?>" class="link-tag" rel="ugc"><?php echo $r['name']; ?></a>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </article>
    <article class="article-container-card pt-4">
        <div class="container">
            <p class="str-news text-center mb-0"><a href="../all-articles/">บทความ/ข่าวสาร</a></p><br>
            <div class="row d-flex justify-content-center align-items-end">
                <?php
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
                            <a href="../view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                <span class="textdate"><?php echo DateThai($resuret['create_at']); ?></span>
                                <figure class="news-articles-img">
                                    <div class="bg-img">
                                        <img data-src="../backend/uploads/article-img/<?php echo $img; ?>" class="lazy img-fluid zoom" alt="<?php echo $d_topic ?>" width="100%" height="100%">
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
                                        <a href="../tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
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
    <?php include('./component/footer.php'); ?>
    <?php include('./import-js.php'); ?>
</body>

</html>