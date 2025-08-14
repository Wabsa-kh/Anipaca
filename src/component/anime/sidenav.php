<?php

$apiUrl = $zpi . "/top-ten";
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

if ($data['success']) {
    $todayResults = $data['results']['today'];
    $weekResults = $data['results']['week'];
    $monthResults = $data['results']['month'];
}
?>

<div id="main-sidebar">
    <section class="block_area block_area_sidebar block_area-genres">
        <div class="block_area-header">
            <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">Genres</h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="block_area-content">
            <div class="cbox cbox-genres">
                <ul class="ulclear color-list sb-genre-list sb-genre-less">
                    <li class="nav-item"> <a class="nav-link" href="../genre/action" title="Action">Action</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/adventure" title="Adventure">Adventure</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/cars" title="Cars">Cars</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/comedy" title="Comedy">Comedy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/dementia" title="Dementia">Dementia</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/demons" title="Demons">Demons</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/drama" title="Drama">Drama</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/ecchi" title="Ecchi">Ecchi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/fantasy" title="Fantasy">Fantasy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/game" title="Game">Game</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/harem" title="Harem">Harem</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/historical" title="Historical">Historical</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/horror" title="Horror">Horror</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/josei" title="Josei">Josei</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/kids" title="Kids">Kids</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/magic" title="Magic">Magic</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/martial-arts" title="Martial Arts">Martial Arts</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/mecha" title="Mecha">Mecha</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/military" title="Military">Military</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/music" title="Music">Music</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/mystery" title="Mystery">Mystery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/parody" Title="Parody">Parody</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/police" title="Police">Police</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/psychological" title="Psychological">Psychological</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/romance" title="Romance">Romance</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/samurai" title="Samurai">Samurai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/school" title="School">School</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/sci-fi" title="Sci Fi">Sci Fi</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/seinen" title="Seinen">Seinen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shoujo" title="Shoujo">Shoujo</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shoujo-ai" title="Shoujo Ai">Shoujo Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shounen" title="Shounen">Shounen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/shounen-Ai" title="Shounen Ai">Shounen Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/slice-of-life" title="Slice of Life">Slice of Life</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/space" title="Space">Space</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/sports" title="Sports">Sports</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/super-power" title="Super Power">Super Power</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/supernatural" title="Supernatural">Supernatural</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/thriller" title="Thriller">Thriller</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/vampire" title="Vampire">Vampire</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/yaoi" title="Yaoi">Yaoi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../genre/yuri" title="Yuri">Yuri</a></li>
                </ul>
                <div class="clearfix"></div>
                <button class="btn btn-sm btn-block btn-showmore mt-2"></button>
            </div>
        </div>
    </section>
      <section class="block_area block_area_sidebar block_area-realtime glass-effect">
    
    <div class="block_area-header">
        <div class="float-left bah-heading mr-2">
            <h2 class="cat-heading text-glow">Top 10</h2>
        </div>
        <div class="float-right bah-tab-min">
            <ul class="nav nav-pills nav-fill nav-tabs anw-tabs">
                <li class="nav-item"><a data-toggle="tab" href="#top-viewed-day" class="nav-link active hover-lift">Today</a>
                </li>
                <li class="nav-item"><a data-toggle="tab" href="#top-viewed-week" class="nav-link hover-lift">Week</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#top-viewed-month" class="nav-link hover-lift">Month</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="block_area-content">
        <div class="cbox cbox-list cbox-realtime stagger-animation">
            <div class="cbox-content">
                <div class="tab-content">
                    <div id="top-viewed-day" class="anif-block-ul anif-block-chart tab-pane active">
                        <ul class="ulclear">
                            <?php foreach ($data['results']['today'] as $anime): ?>
                            <li class="<?php echo $anime['number'] <= 3 ? 'item-top' : ''; ?>">
                                <div class="film-number"><span><?php echo $anime['number']; ?></span></div>
                                <div class="film-poster item-qtip" data-id="<?php echo $anime['id']; ?>">
                                    <img src="<?= $websiteUrl ?>/public/images/no_poster.jpg" data-src="<?php echo $anime['poster']; ?>" class="film-poster-img lazyload" alt="<?php echo $anime['jname']; ?>">
                                </div>
                                <div class="film-detail">
                                     <h3 class="film-name">
                                        <a href="/details/<?php echo $anime['id']; ?>" title="<?php echo $anime['jname']; ?>" 
                                           class="dynamic-name" data-title="<?php echo htmlspecialchars($anime['title']); ?>" data-jname="<?php echo htmlspecialchars($anime['jname']); ?>">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if (isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo $anime['tvInfo']['sub']; ?>
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo $anime['tvInfo']['dub']; ?>
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($anime['tvInfo']['eps'])): ?>
                                            <div class="tick-item tick-eps"><?php echo $anime['tvInfo']['eps']; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div id="top-viewed-week" class="anif-block-ul anif-block-chart tab-pane">
                        <ul class="ulclear">
                            <?php foreach ($data['results']['week'] as $anime): ?>
                            <li class="<?php echo $anime['number'] <= 3 ? 'item-top' : ''; ?>">
                                <div class="film-number"><span><?php echo $anime['number']; ?></span></div>
                                <div class="film-poster item-qtip" data-id="<?php echo $anime['id']; ?>">
                                    <img src="<?= $websiteUrl ?>/public/images/no_poster.jpg" data-src="<?php echo $anime['poster']; ?>" class="film-poster-img lazyload" alt="<?php echo $anime['jname']; ?>">
                                </div>
                                <div class="film-detail">
                                     <h3 class="film-name">
                                        <a href="/details/<?php echo $anime['id']; ?>" title="<?php echo $anime['jname']; ?>" 
                                           class="dynamic-name" data-title="<?php echo htmlspecialchars($anime['title']); ?>" data-jname="<?php echo htmlspecialchars($anime['jname']); ?>">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if (isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo $anime['tvInfo']['sub']; ?>
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo $anime['tvInfo']['dub']; ?>
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($anime['tvInfo']['eps'])): ?>
                                            <div class="tick-item tick-eps"><?php echo $anime['tvInfo']['eps']; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div id="top-viewed-month" class="anif-block-ul anif-block-chart tab-pane">
                        <ul class="ulclear">
                            <?php foreach ($data['results']['month'] as $anime): ?>
                            <li class="<?php echo $anime['number'] <= 3 ? 'item-top' : ''; ?>">
                                <div class="film-number"><span><?php echo $anime['number']; ?></span></div>
                                <div class="film-poster item-qtip" data-id="<?php echo $anime['id']; ?>">
                                    <img src="<?= $websiteUrl ?>/public/images/no_poster.jpg" data-src="<?php echo $anime['poster']; ?>" class="film-poster-img lazyload" alt="<?php echo $anime['jname']; ?>">
                                </div>
                                <div class="film-detail">
                                     <h3 class="film-name">
                                        <a href="/details/<?php echo $anime['id']; ?>" title="<?php echo $anime['jname']; ?>" 
                                           class="dynamic-name" data-title="<?php echo htmlspecialchars($anime['title']); ?>" data-jname="<?php echo htmlspecialchars($anime['jname']); ?>">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if (isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo $anime['tvInfo']['sub']; ?>
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo $anime['tvInfo']['dub']; ?>
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($anime['tvInfo']['eps'])): ?>
                                            <div class="tick-item tick-eps"><?php echo $anime['tvInfo']['eps']; ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
</div>
