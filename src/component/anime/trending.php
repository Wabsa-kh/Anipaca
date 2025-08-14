<div id="anime-trending" class="animate-fadeInUp">
        <div class="container">
            <section class="block_area block_area_trending glass-effect">
                <div class="block_area-header">
                    <div class="bah-heading">
                        <h2 class="cat-heading text-glow">Trending</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="block_area-content">
                    <div class="trending-list" id="trending-home">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal stagger-animation">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <?php foreach ($data['trending'] as $item): ?>
                                    <div class="swiper-slide item-qtip hover-lift" data-id="<?= htmlspecialchars($item['id']) ?>" style="width: 209px; margin-right: 15px;">
                                        <div class="item glass-card interactive">
                                            <div class="number hover-pulse">
                                                <span><?= htmlspecialchars($item['number']) ?></span>
                                            </div>
                                            <div class="film-title dynamic-name text-gradient" data-title="<?= htmlspecialchars($item['title']) ?>" data-jname="<?= htmlspecialchars($item['jname']) ?>">
                                                <?= htmlspecialchars($item['title']) ?>
                                            </div>
                                        <a href="/details/<?= htmlspecialchars($item['id']) ?>" class="film-poster hover-glow">
                                            <img data-src="<?= htmlspecialchars($item['poster']) ?>" class="film-poster-img lazyloaded hover-scale" alt="<?= htmlspecialchars($item['title']) ?>" src="<?= htmlspecialchars($item['poster']) ?>">
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="clearfix"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="trending-navi">
                            <div class="navi-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-angle-right"></i></div>
                            <div class="navi-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true"><i class="fas fa-angle-left"></i></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>