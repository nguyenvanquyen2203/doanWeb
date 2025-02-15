<!-- parameters: categories -->
<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <!-- search -->
        <div class="single-sidebar-widget search-widget">
            <h4 class="category-title">Search</h4>
            <form class="search-form mt-20" action="#">
                <search-dropdown/>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    <!-- categories -->
        <div class="single-sidebar-widget post-category-widget">
            <h4 class="category-title">Catgories</h4>
            <ul class="cat-list mt-20">
                <?php foreach($categories as $category):?>
                    <li>
                        <a href="category.php?c=<?=$category->category?>" class="d-flex justify-content-between">
                        <p><?=ucfirst($category->category)?></p>
                        <!-- <p>59</p> -->
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>

        <!-- <div class="single-sidebar-widget popular-post-widget">
            <h4 class="popular-title">Popular Posts</h4>
            <div class="popular-post-list">
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.php">
                        <h6>Retro-electric 1967 Ford Mustang 
                            revealed in Russia</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                    </div>
                </div>
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.php">
                        <h6>Unsettling trend of food safety at 
                            sports stadiums uncovered</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                    </div>
                </div>
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.php">
                        <h6>Christmas cottage from the Holiday
                            flick selling for people</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                    </div>
                </div>
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.php">
                        <h6>Home improvement advice every 
                            homeowner needs to know</h6>
                        </a>
                        <p>Mate Winston | Dec 15</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>