<div class="deslide-wrap animate-fadeInScale">
    <div class="container">
        <div id="slider" class="slider-container swiper-container glass-effect">
            <div class="swiper-wrapper">
                <?php foreach ($data['spotlights'] as $index => $anime): ?>
                    <div class="swiper-slide">
                        <div class="deslide-item">
                            <div class="deslide-cover">
                                <div class="deslide-cover-img">
                                    <img class="film-poster-img lazyload hover-scale" src="<?= $anime['poster'] ?>" alt="<?= htmlspecialchars($anime['title']) ?>" fetchpriority="high" loading="eager">
                                </div>
                            </div>
                            <div class="deslide-item-content">
                                <div class="desi-sub-text text-gradient animate-delay-1">#<?= $index + 1 ?> Spotlight</div>
                                <div class="desi-head-title dynamic-name text-glow animate-delay-2" data-title="<?= htmlspecialchars($anime['title']) ?>" data-jname="<?= htmlspecialchars($anime['jname']) ?>"><?= htmlspecialchars($anime['title']) ?></div>
                                <div class="sc-detail">
                                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>&nbsp;<?= htmlspecialchars($anime['tvInfo']['showType']) ?></div>
                                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>&nbsp;<?= htmlspecialchars($anime['tvInfo']['duration']) ?></div>
                                    <div class="scd-item m-hide"><i class="fa-solid fa-calendar-days mr-1"></i>&nbsp;<?= htmlspecialchars($anime['tvInfo']['releaseDate']) ?></div>
                                    <div class="scd-item mr-1"><span class="quality">&nbsp;<?= htmlspecialchars($anime['tvInfo']['quality']) ?></span></div>
                                    <div class="scd-item">
                                        <div class="tick">
                                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i> <?= htmlspecialchars($anime['tvInfo']['episodeInfo']['sub']) ?></div>
                                            <?php if (!empty($anime['tvInfo']['episodeInfo']['dub'])): ?>
                                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i> <?= htmlspecialchars($anime['tvInfo']['episodeInfo']['dub']) ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="desi-description"><?= htmlspecialchars($anime['description']) ?></div>
                                <div class="desi-buttons">
                                    <a href="/watch/<?= htmlspecialchars($anime['id']) ?>?ep=1" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                                    <a href="/details/<?= htmlspecialchars($anime['id']) ?>" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            <div class="swiper-navigation">
                <div class="swiper-button swiper-button-next"><i class="fas fa-angle-right"></i></div>
                <div class="swiper-button swiper-button-prev"><i class="fas fa-angle-left"></i></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
