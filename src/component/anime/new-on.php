<section class="block_area block_area_category lazy-component glass-effect animate-fadeInUp" data-component="category">
                        <div class="block_area-header">

                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading text-glow">New on <?= $websiteTitle ?></h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn hover-lift" href="/anime/recently-added">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                                <div class="film_list-wrap stagger-animation">
                                    
                                    <?php
                                    // Fetch JSON data
                                    $ch = curl_init();
                                    curl_setopt($ch, CURLOPT_URL, "$zpi/recently-added");
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    $json = curl_exec($ch);
                                    curl_close($ch);
                                    $json = json_decode($json, true);

                                    // Check if 'results' and 'data' exist
                                    if (isset($json['results']['data']) && is_array($json['results']['data'])) {
                                        $animeList = array_slice($json['results']['data'], 0, 12);
                                        foreach ($animeList as $anime) { ?>
                                            <?php if (!empty($anime['tvInfo']['sub'])): ?>
                                            <div class="flw-item">
                                                <div class="film-poster">
                                                    <!-- Age Indicator -->
                                                    <?php if ($anime['adultContent']) { ?>
                                                        <div class="tick ltr" style="position: absolute; top: 10px; left: 10px;">
                                                            <div class="tick-item tick-age amp-algn">18+</div>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- Sub and Dub Counts -->
                                                    <div class="tick ltr" style="position: absolute; bottom: 10px; left: 10px;">
                                                        <div class="tick-item tick-sub amp-algn" style="text-align: left;">
                                                            <i class="fas fa-closed-captioning"></i> &nbsp; <?= isset($anime['tvInfo']['sub']) ? htmlspecialchars($anime['tvInfo']['sub']) : '' ?>
                                                        </div>
                                                        <?php if(!empty($anime['tvInfo']['dub'])): ?>
                                                        <div class="tick-item tick-dub amp-algn" style="text-align: left;">
                                                            <i class="fas fa-microphone"></i> &nbsp; <?= isset($anime['tvInfo']['dub']) ? htmlspecialchars($anime['tvInfo']['dub']) : '' ?>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <!-- Anime Poster -->
                                                    <img class="film-poster-img lazyload"
                                                        data-src="<?= $anime['poster'] ?>"
                                                        src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                                                        alt="<?= $anime['title'] ?>">
                                                    <a class="film-poster-ahref"
                                                        href="/details/<?= $anime['id'] ?>"
                                                        title="<?= $anime['title'] ?>"
                                                        data-jname="<?= $anime['title'] ?>"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="film-detail">
                                                    <h3 class="film-name">
                                                        <a href="/details/<?= $anime['id'] ?>"
                                                            class="dynamic-name"
                                                            data-title="<?= htmlspecialchars($anime['title']) ?>" data-jname="<?= htmlspecialchars($anime['jname']) ?>"><?= htmlspecialchars($anime['title']) ?></a>
                                                        </h3>
                                                    <div class="fd-infor">
                                                        <span class="fdi-item"><?= htmlspecialchars($anime['tvInfo']['showType']) ?></span>
                                                        <span class="dot"></span>
                                                        <span class="fdi-item"><?= htmlspecialchars($anime['tvInfo']['duration']) ?></span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <?php endif; ?>
                                    <?php }
                                    } else {
                                        echo "<p>No anime data available or invalid structure.</p>";
                                    } ?>

                                </div>
                                <div class="clearfix"></div>
        
                            </div>
                        </div>
                    </section>
