<?php
sleep(1);
include('./conn/connect.php');
if (isset($_POST['lastid'])) {
    $lastid = $_POST['lastid'];
    $name = $_POST['aaname'];

    $query = mysqli_query($conn, "SELECT * ,articles.id as id FROM articles LEFT join user on articles.user_id = user.id WHERE user.firstname ='$name' and articles.id > $lastid order by articles.id asc limit 9");
    if (mysqli_num_rows($query) > 0) {

?>
        <div class="row align-items-end">
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
            while ($row = mysqli_fetch_array($query)) {
                $article_id = $row['id'];
            ?>
                <div class="col-lg-4 col-md-6  col-sm-12 ">
                <div class="bg_articles my-2">
                                    <a href="../view/<?php echo $row['url_articles_seo']; ?>" class="article-link" rel="ugc">
                                        <span class="textdate"><?php echo DateThai($row['create_at']); ?></span>
                                        <figure class="news-articles-img">
                                            <div class="bg-img">
                                                <img src="../backend/uploads/article-img/<?php echo $row['image_banner']; ?>" class="img-fluid zoom" alt="<?php echo trim(strip_tags(mb_substr($row['topic_name'], 0, 30, 'utf-8'))); ?>" width="100%" height="100%">
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
                $aaname =  $name;
            } ?>
        </div>

        <div id="remove">
            <div style="height:10px;"></div>
            <div id="remove_row" class="row">
                <div class="col-lg-12">
                    <button type="button" name="loadmore" id="loadmore" data-id="<?php echo $lastid; ?>" data-aaname="<?php echo $aaname; ?>" class="btn-btn-success">ดูเพิ่มเติม</button>
                </div>
            </div>
        </div>
<?php
    }
}
?>
</div>