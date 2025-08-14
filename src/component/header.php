


<div id="sidebar_menu">
    <button class="btn btn-radius btn-sm btn-secondary toggle-sidebar"><i class="fas fa-angle-left mr-2"></i>Close
        menu</button>
    <div class="sb-setting">
        <div class="header-setting">
            <div class="hs-toggles">
               
                <a href="<?= $websiteUrl ?>/anime/most-popular" class="hst-item" data-toggle="tooltip"
                    data-original-title="Popular Anime List">
                    <div class="hst-icon"><i class="fas fa-star"></i></div>
                    <div class="name"><span>Popular</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/random" rel="nofollow" class="hst-item" data-toggle="tooltip"
                    data-original-title="Select Random Anime">
                    <div class="hst-icon"><i class="fas fa-random"></i></div>
                    <div class="name"><span>Random</span></div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <ul class="nav sidebar_menu-list">
    <li class="nav-item active"><a class="nav-link" href="/home" title="Home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/subbed-anime" title="Subbed Anime">Subbed Anime</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/dubbed-anime" title="Dubbed Anime">Dubbed Anime</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/most-popular" title="Most Popular">Most Popular</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/movie" title="Movies">Movies</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/tv" title="TV Series">TV Series</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/ova" title="OVAs">OVAs</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/ona" title="ONAs">ONAs</a></li>
        <li class="nav-item"><a class="nav-link" href="/anime/special" title="Specials">Specials</a></li>
       <!-- <li class="nav-item"><a class="nav-link" href="https://anipaca-app.netlify.app" title="Events"><?= $websiteTitle ?> App</a></li> -->
      
       
        <li class="nav-item">
            <div class="nav-link" title="Genre"><strong><i class="fa fa-angle-down"></i> Genre</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_genre">
                <ul class="nav color-list sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/action"
                            title="Action">Action</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/adventure"
                            title="Adventure">Adventure</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/cars" title="Cars">Cars</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/comedy"
                            title="Comedy">Comedy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/dementia"
                            title="Dementia">Dementia</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/demons"
                            title="Demons">Demons</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/drama"
                            title="Drama">Drama</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/ecchi"
                            title="Ecchi">Ecchi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/fantasy"
                            title="Fantasy">Fantasy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/game" title="Game">Game</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/harem"
                            title="Harem">Harem</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/historical"
                            title="Historical">Historical</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/horror"
                            title="Horror">Horror</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/josei"
                            title="Josei">Josei</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/kids" title="Kids">Kids</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/magic"
                            title="Magic">Magic</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/martial-arts"
                            title="Martial Arts">Martial Arts</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/mecha"
                            title="Mecha">Mecha</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/military"
                            title="Military">Military</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/music"
                            title="Music">Music</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/mystery"
                            title="Mystery">Mystery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/parody"
                            Title="Parody">Parody</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/police"
                            title="Police">Police</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/psychological"
                            title="Psychological">Psychological</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/romance"
                            title="Romance">Romance</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/samurai"
                            title="Samurai">Samurai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/school"
                            title="School">School</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/sci-fi" title="Sci Fi">Sci
                            Fi</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/seinen"
                            title="Seinen">Seinen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shoujo"
                            title="Shoujo">Shoujo</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shoujo-ai"
                            title="Shoujo Ai">Shoujo Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shounen"
                            title="Shounen">Shounen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shounen-Ai"
                            title="Shounen Ai">Shounen Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/slice-of-life"
                            title="Slice of Life">Slice of Life</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/space"
                            title="Space">Space</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/sports"
                            title="Sports">Sports</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/super-power"
                            title="Super Power">Super Power</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/supernatural"
                            title="Supernatural">Supernatural</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/thriller"
                            title="Thriller">Thriller</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/vampire"
                            title="Vampire">Vampire</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/yaoi" title="Yaoi">Yaoi</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/yuri" title="Yuri">Yuri</a>
                    </li>
                    <li class="nav-item nav-more">
                        <a class="nav-link"><i class="fas fa-plus mr-2"></i>More</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>

<style>
    .sidebar_menu-sub {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.sidebar_menu-sub.show {
    max-height: 1000px;
}

.nav-more {
    cursor: pointer;
}

.nav-more:hover {
    background-color: rgba(0,0,0,0.1);
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {

    const genreToggle = document.querySelector('.nav-item .nav-link[title="Genre"]');
    const genreSubmenu = document.getElementById('sidebar_subs_genre');
    
    if (genreToggle && genreSubmenu) {
        genreToggle.addEventListener('click', function(e) {
            e.preventDefault();
            genreSubmenu.classList.toggle('show');
            
            const icon = this.querySelector('i.fa');
            if (genreSubmenu.classList.contains('show')) {
                icon.classList.remove('fa-angle-down');
                icon.classList.add('fa-angle-up');
            } else {
                icon.classList.remove('fa-angle-up');
                icon.classList.add('fa-angle-down');
            }
        });
    }
    
    const moreButton = document.querySelector('.nav-more .nav-link');
    if (moreButton) {
        moreButton.addEventListener('click', function(e) {
            e.preventDefault();
            const genreItems = document.querySelectorAll('#sidebar_subs_genre .nav-item:not(.nav-more)');
            let hiddenItemsShown = false;
            
            genreItems.forEach(item => {
                if (item.style.display === 'none') {
                    hiddenItemsShown = true;
                }
            });
            

            genreItems.forEach((item, index) => {
                if (index >= 10) {
                    if (hiddenItemsShown) {
                        item.style.display = 'none';
                        moreButton.innerHTML = '<i class="fas fa-plus mr-2"></i>More';
                    } else {
                        item.style.display = 'block';
                        moreButton.innerHTML = '<i class="fas fa-minus mr-2"></i>Less';
                    }
                }
            });
        });
        
        const genreItems = document.querySelectorAll('#sidebar_subs_genre .nav-item:not(.nav-more)');
        genreItems.forEach((item, index) => {
            if (index >= 10) {
                item.style.display = 'none';
            }
        });
    }
});
</script>
                    
<div id="header" class="header-home ">
    <div class="container">
        <div id="mobile_menu"><i class="fa fa-bars"></i></div>
        <a href="<?= $websiteUrl ?>/home" id="logo" title="<?= $websiteTitle ?>">
            <img src="<?= $websiteLogo ?>" width="100%" height="auto" alt="<?= $websiteTitle ?>">
            <div class="clearfix"></div>
        </a>
        <div id="search" class="">
            <div class="search-content">
                <form action="/search" autocomplete="off">
                    <a href="/filter" class="filter-icon">Filter</a>
                    <input type="text" class="form-control search-input" name="keyword" placeholder="Search anime..." required="">
                    <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                </form>
                <div class="nav search-result-pop" id="search-suggest" style="display: none;">
                    <div class="loading-relative" id="search-loading" style="display: none;">
                        <div class="loading">
                            <div class="span1"></div>
                            <div class="span2"></div>
                            <div class="span3"></div>
                        </div>
                    </div>
                    <div class="result" style="display:none;"></div>
                </div>
            </div>
        </div>
        <div class="header-group">
        <div class="anw-group">
                <div class="zrg-list">
                    <div class="item"><a href="<?= $discord ?>" target="_blank" class="zr-social-button dc-btn"><i class="fa-brands fa-discord"></i></a></div>
                    <div class="item"><a href="<?= $github ?>" target="_blank" class="zr-social-button tl-btn"><i class="fa-brands fa-github"></i></i></a></div>
                    <div class="item"><a href="<?= $telegram ?>" target="_blank" class="zr-social-button tw-btn"><i class="fa-brands fa-telegram"></i></a></div>
                    <div class="item"><a href="<?= $instagram ?>" target="_blank" class="zr-social-button rd-btn"><i class="fa-brands fa-instagram"></i></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header-setting">
            <div class="hs-toggles">
                
            <a href="<?= $websiteUrl ?>/anime/most-popular" class="hst-item hover-lift" data-toggle="tooltip"
                    data-original-title="Popular Anime List">
                    <div class="hst-icon"><i class="fa-solid fa-fire"></i></div>
                    <div class="name"><span>Popular</span></div>
                </a>

                <div class="hst-item hover-lift" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Select language of anime name to display.">
                    <div class="select-anime-name toggle-lang"><span class="en">EN</span><span class="jp">JP</span></div>
                    <div class="name"><span class="lang-display">English</span></div>
                </div>

                <a href="<?= $websiteUrl ?>/anime/movie" class="hst-item hover-lift" data-toggle="tooltip"
                    data-original-title="Anime Movies">
                    <div class="hst-icon"><i class="fa-solid fa-clapperboard"></i></div>
                    <div class="name"><span>Movie</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/anime/completed" class="hst-item hover-lift" data-toggle="tooltip"
                    data-original-title="Anime Movies">
                    <div class="hst-icon"><i class="fa-solid fa-hourglass-end"></i></div>
                    <div class="name"><span>Completed</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/random" class="hst-item hover-lift wave-animation" data-toggle="tooltip"
                    data-original-title="Select Random Anime">
                    <div class="hst-icon"><i class="fas fa-random"></i></div>
                    <div class="name"><span>Random</span></div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
       
        <?php
        if (isset($_COOKIE['userID'])) {
            $user_id = $_COOKIE['userID'];
            $select = "SELECT * FROM users WHERE id = '$user_id'";
            $result = mysqli_query($conn, $select);
            if (mysqli_num_rows($result) > 0) {
                $fetch = mysqli_fetch_assoc($result);
        ?>
                <div id="header_right">
                    <div id="user-slot">
                        <div class="header_right-user logged">
                            <div class="dropdown">
                                <div class="btn-user-avatar" role="button">
                                    <div class="profile-avatar">
                                         <?php if (!empty($fetch['image'])): ?>
                                            <img id="avatar" src="<?= htmlspecialchars($fetch['image']) ?>" alt="Profile Picture">
                                         <?php else: ?>
                                           <img id="avatar" src="<?= htmlspecialchars($fetch['avatar_url']) ?>" alt="Default Avatar">
                                     <?php endif; ?>   
                                    </div>
                                </div>
                                <div id="user_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item dropdown-item-user">
                                        <div class="user-detail">
                                            <div class="name"><strong><?= $fetch['username'] ?></strong></div>
                                            <div class="mail"><a class="__cf_email__"><?= $fetch['email'] ?></a></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="grid-menu">
                                        <a class="dropdown-item" href="<?= $websiteUrl ?>/profile"><i class="fas fa-user mr-2"></i>Profile</a>
                                        <a class="dropdown-item" href="<?= $websiteUrl ?>/continue-watching"><i class="fas fa-history mr-2"></i>Continue Watching</a>
                                        <a class="dropdown-item" href="<?= $websiteUrl ?>/watchlist"><i class="fas fa-heart mr-2"></i>Watch List</a>
                                        <a class="dropdown-item" href="<?= $websiteUrl ?>/changepass"><i class="fas fa-cog mr-2"></i>Change Password</a>
                                        <a class="dropdown-item" href="#" onclick="showToast('(＞︿＜)', 'Please let me finish my homework first, I will develop this page later, baka!', 'info')"><i class="fas fa-cog mr-2"></i>Settings</a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <a class="dropdown-item text-right text-white" href="<?= $websiteUrl ?>/src/user/logout.php">Logout<i class="fas fa-arrow-right ml-2 mr-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
        ?>
            <div id="header_right">
                <div id="user-slot">
                    <div class="header_right-user">
                        <a href="<?= $websiteUrl ?>/login" class="btn-user btn btn-sm btn-primary btn-login">
                          Login
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div id="mobile_search" class="mobile-search"><i class="fa fa-search"></i></div>
        <div class="clearfix"></div>
    </div>
</div>

