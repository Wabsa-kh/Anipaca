<section class="block_area block_area_category lazy-component glass-effect animate-fadeInUp" data-component="category">
    <div class="block_area-header">
        <div class="float-left bah-heading mr-4">
            <h2 class="cat-heading text-glow">Top Upcoming</h2>
        </div>
        <div class="float-right viewmore">
            <a class="btn hover-lift" href="/anime/top-upcoming">View more<i class="fas fa-angle-right ml-2"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="tab-content">
        <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
            <div class="film_list-wrap stagger-animation">
                <?php
                // Fetch JSON data
                $json = file_get_contents("$zpi/top-upcoming");
                $json = json_decode($json, true);

                // Check if 'results' and 'data' exist
                if (isset($json['results']['data']) && is_array($json['results']['data'])) {
                    $animeList = array_slice($json['results']['data'], 0, 12);
                    foreach ($animeList as $anime) {
                        $title = !empty($anime['title']) ? $anime['title'] : 'Unknown';
                        $jname = !empty($anime['jname']) ? $anime['jname'] : $title;
                ?>
                <div class="flw-item">
                    <div class="film-poster">
                        <!-- Age Indicator -->
                        <?php if (!empty($anime['adultContent'])) { ?>
                            <div class="tick ltr" style="position: absolute; top: 10px; left: 10px;">
                                <div class="tick-item tick-age amp-algn">18+</div>
                            </div>
                        <?php } ?>
                        <!-- Sub and Dub Counts -->
                        <div class="tick ltr" style="position: absolute; bottom: 10px; left: 10px;">
                            <?php if (!empty($anime['tvInfo']['sub'])): ?>
                                <div class="tick-item tick-sub amp-algn" style="text-align: left;">
                                    <i class="fas fa-closed-captioning"></i> <?= htmlspecialchars($anime['tvInfo']['sub']) ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($anime['tvInfo']['dub'])): ?>
                                <div class="tick-item tick-dub amp-algn" style="text-align: left;">
                                    <i class="fas fa-microphone"></i> <?= htmlspecialchars($anime['tvInfo']['dub']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- Anime Poster -->
                        <img class="film-poster-img lazyload"
                            data-src="<?= htmlspecialchars($anime['poster']) ?>"
                            src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                            alt="<?= htmlspecialchars($title) ?>">
                        <a class="film-poster-ahref"
                            href="/details/<?= htmlspecialchars($anime['id']) ?>"
                            title="<?= htmlspecialchars($title) ?>">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="film-detail">
                        <h3 class="film-name">
                            <a href="/details/<?= htmlspecialchars($anime['id']) ?>"
                               class="dynamic-name"
                               data-en="<?= htmlspecialchars($title) ?>"
                               data-jp="<?= htmlspecialchars($jname) ?>">
                                <?= htmlspecialchars($title) ?>
                            </a>
                        </h3>
                        <div class="fd-infor">
                            <?php if (!empty($anime['releaseDate'])): ?>
                                <span class="fdi-item"><i class="fas fa-calendar-alt"></i> <?= htmlspecialchars($anime['releaseDate']) ?></span>
                            <?php endif; ?>
                            <span class="fdi-item"><?= htmlspecialchars($anime['tvInfo']['showType'] ?? '') ?></span>
                            <span class="dot"></span>
                            <span class="fdi-item"><?= htmlspecialchars($anime['tvInfo']['duration'] ?? '') ?></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php
                    }
                } else {
                    echo "<p>No anime data available or invalid structure.</p>";
                }
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
