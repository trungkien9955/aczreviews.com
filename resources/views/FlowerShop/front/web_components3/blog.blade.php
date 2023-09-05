
<?php
include('includes/connect.php');
?>
<section class = "blockSection blogHome">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 left-article">
                <div class="wapperBlogHome">
                    <div class="blockTitle">
                        <h2>Tin tức khuyến mãi</h2>
                        <a href="" class="btn-more">XEM TẤT CẢ</a>
                    </div>
                    <div class="blogsList">
                        <div class="slideblogHome owl-carousel owl-carousel-blog">
                        <?php
                                        $article_query = 'select * from article';
                                        $article_result = mysqli_query($con, $article_query);
                                        while($article_row = mysqli_fetch_assoc($article_result)) {
                                            $article_img = $article_row['article_img'];
                                            $article_title = $article_row['article_title'];
                                            $article_description = $article_row['article_description'];


                                            echo "
                                            <div class='artileItem'>
                                            <div class='insArticleLoop'>
                                                <div class='articlePostBody bg_w'>
                                                    <div class='postThumbIMG relative imageHover'>
                                                        <a href=''>
                                                            <img src='img/article_img/$article_img' alt='' class='insImageLoad w-100'>
                                                        </a>
                                                        <div class='createdInfo'>
                                                            <ul class='notStyle'>
                                                                <li class = 'post'>
                                                                    <i class='fa-solid fa-pen'></i>
                                                                    <span>Đinh Trí Nghĩa</span>
                                                                </li>
                                                                <li class = 'time'>
                                                                    <i class='fa fa-calendar'></i>
                                                                </li>
                                                                <li class = 'comment'>
                                                                    <i class='fa-regular fa-comment'></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class='postDetail'>
                                                        <div class='detail clearfix'>
                                                            <h3>
                                                                <a href='' class=''>
                                                                $article_title
                                                                </a>
                                                            </h3>
                                                            <p class = 'article_des'>$article_description</p>
                                                            <a href='' class='view'>Xem thêm
                                                                <i class='fa fa-angle-double-right'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                               ";
                                        }
                                        ?>
                                        
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 righ-banner">
                <a href="">
                    <img src="img/article_img/banner_blog_index.webp" alt="" class = "w-100">
                </a>
            </div>
        </div>
    </div>
</section>