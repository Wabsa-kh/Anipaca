<div class="container animate-fadeInUp">
    <div class="anif-blocks stagger-animation">
        <div class="row">
            <?php
            if (!empty($data['topAiring'])) {
                $data['topAiring'] = array_slice($data['topAiring'], 0, 5);
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-01 glass-effect hover-lift">
                    <div class="anif-block-header text-gradient">Top Airing</div>
                    <div class="anif-block-ul">
                        <ul class="ulclear space-y-2">
                            <?php foreach ($data['topAiring'] as $index => $anime): ?>
                            <li>
                                <div class="film-poster item-qtip" data-id="<?php echo $anime['id']; ?>">
                                <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>">
                                        <img data-src="<?php echo htmlspecialchars($anime['poster']); ?>" 
                                             class="film-poster-img lazyload"
                                             src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                                             alt="<?php echo htmlspecialchars($anime['title']); ?>">
                                    </a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a href="/details/<?php echo $anime['id']; ?>"
                                           title="<?php echo htmlspecialchars($anime['title']); ?>"
                                           class="dynamic-name anime-toggle"
                                           data-en="<?php echo htmlspecialchars($anime['title']); ?>"
                                           data-jp="<?php echo htmlspecialchars($anime['jname']); ?>"
                                           style="opacity: 1;">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if(isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo $anime['tvInfo']['sub']; ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if(isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo $anime['tvInfo']['dub']; ?>
                                            </div>
                                            <?php endif; ?>

                                            <div>
                                                <span class="dot"></span><?php echo $anime['tvInfo']['showType']; ?>
                                                
                                                <?php if(isset($anime['tvInfo']['duration'])): ?>
                                                <span class="fdi-item"><?php echo $anime['tvInfo']['duration']; ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more"><a href="/anime/top-airing">View more <i class="fas fa-angle-right ml-2"></i></a></div>
                </div>
            </div>
            <?php } ?>
            <?php
            if (!empty($data['mostPopular'])) {
                $data['mostPopular'] = array_slice($data['mostPopular'], 0, 5);
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-04">
                    <div class="anif-block-header">Most Popular</div>
                    <div class="anif-block-ul">
                        <ul class="ulclear">
                            <?php foreach($data['mostPopular'] as $anime): ?>
                            <li>
                                <div class="film-poster item-qtip" data-id="<?php echo htmlspecialchars($anime['id']); ?>">
                                <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>">
                                        <img data-src="<?php echo htmlspecialchars($anime['poster']); ?>" 
                                             class="film-poster-img lazyload"
                                             src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                                             alt="<?php echo htmlspecialchars($anime['title']); ?>">
                                    </a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>"
                                           title="<?php echo htmlspecialchars($anime['title']); ?>"
                                           class="dynamic-name anime-toggle"
                                           data-en="<?php echo htmlspecialchars($anime['title']); ?>"
                                           data-jp="<?php echo htmlspecialchars($anime['jname']); ?>"
                                           style="opacity: 1;">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if(isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo htmlspecialchars($anime['tvInfo']['sub']); ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if(isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo htmlspecialchars($anime['tvInfo']['dub']); ?>
                                            </div>
                                            <?php endif; ?>

                                            <div>
                                                <span class="dot"></span><?php echo htmlspecialchars($anime['tvInfo']['showType']); ?>
                                                <?php if(isset($anime['tvInfo']['duration'])): ?>
                                                <span class="fdi-item"><?php echo htmlspecialchars($anime['tvInfo']['duration']); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more"><a href="/anime/most-popular">View more <i class="fas fa-angle-right ml-2"></i></a></div>
                </div>
            </div>
            <?php } ?>
            <?php
            if (!empty($data['mostFavorite'])) {
                $data['mostFavorite'] = array_slice($data['mostFavorite'], 0, 5);
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-04">
                    <div class="anif-block-header">Most Favorite</div>
                    <div class="anif-block-ul">
                        <ul class="ulclear">
                            <?php foreach($data['mostFavorite'] as $anime): ?>
                            <li>
                                <div class="film-poster item-qtip" data-id="<?php echo htmlspecialchars($anime['id']); ?>">
                                <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>">
                                        <img data-src="<?php echo htmlspecialchars($anime['poster']); ?>" 
                                             class="film-poster-img lazyload"
                                             src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                                             alt="<?php echo htmlspecialchars($anime['title']); ?>">
                                    </a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>"
                                           title="<?php echo htmlspecialchars($anime['title']); ?>"
                                           class="dynamic-name anime-toggle"
                                           data-en="<?php echo htmlspecialchars($anime['title']); ?>"
                                           data-jp="<?php echo htmlspecialchars($anime['jname']); ?>"
                                           style="opacity: 1;">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if(isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo htmlspecialchars($anime['tvInfo']['sub']); ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if(isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo htmlspecialchars($anime['tvInfo']['dub']); ?>
                                            </div>
                                            <?php endif; ?>

                                            
                                            
                                            <span class="dot"></span><?php echo htmlspecialchars($anime['tvInfo']['showType']); ?>
                                            <?php if(isset($anime['tvInfo']['duration'])): ?>
                                            <span class="fdi-item"><?php echo htmlspecialchars($anime['tvInfo']['duration']); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more">
                        <a href="/anime/most-favorite">View more <i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php
            if (!empty($data['latestCompleted'])) {
                $data['latestCompleted'] = array_slice($data['latestCompleted'], 0, 5);
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="anif-block anif-block-01">
                    <div class="anif-block-header">Latest Completed</div>
                    <div class="anif-block-ul">
                        <ul class="ulclear">
                            <?php foreach($data['latestCompleted'] as $anime): ?>
                            <li>
                                <div class="film-poster item-qtip" data-id="<?php echo htmlspecialchars($anime['id']); ?>">
                                    <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>">
                                        <img data-src="<?php echo htmlspecialchars($anime['poster']); ?>" 
                                             class="film-poster-img lazyload"
                                             src="<?= $websiteUrl ?>/public/images/no_poster.jpg"
                                             alt="<?php echo htmlspecialchars($anime['title']); ?>">
                                    </a>
                                </div>
                                <div class="film-detail">
                                    <h3 class="film-name">
                                        <a href="/details/<?php echo htmlspecialchars($anime['id']); ?>"
                                           title="<?php echo htmlspecialchars($anime['title']); ?>"
                                           class="dynamic-name anime-toggle"
                                           data-en="<?php echo htmlspecialchars($anime['title']); ?>"
                                           data-jp="<?php echo htmlspecialchars($anime['jname']); ?>"
                                           style="opacity: 1;">
                                            <?php echo htmlspecialchars($anime['title']); ?>
                                        </a>
                                    </h3>
                                    <div class="fd-infor">
                                        <div class="tick">
                                            <?php if(isset($anime['tvInfo']['sub'])): ?>
                                            <div class="tick-item tick-sub">
                                                <i class="fas fa-closed-captioning mr-1"></i><?php echo htmlspecialchars($anime['tvInfo']['sub']); ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if(isset($anime['tvInfo']['dub'])): ?>
                                            <div class="tick-item tick-dub">
                                                <i class="fas fa-microphone mr-1"></i><?php echo htmlspecialchars($anime['tvInfo']['dub']); ?>
                                            </div>
                                            <?php endif; ?>

                                            
                                            
                                            <span class="dot"></span><?php echo htmlspecialchars($anime['tvInfo']['showType']); ?>
                                            <?php if(isset($anime['tvInfo']['duration'])): ?>
                                            <span class="fdi-item"><?php echo htmlspecialchars($anime['tvInfo']['duration']); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="more">
                        <a href="/anime/completed">View more <i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php } ?>
</div>
