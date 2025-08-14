<div id="schedule-block" class="animate-fadeInUp"><section class="block_area block_area_sidebar block_area-schedule schedule-full glass-effect">
    <div class="block_area-header">
        <div class="float-left bah-heading mr-4">
            <h2 class="cat-heading text-glow">Estimated Schedule</h2>
        </div>
        <div class="float-left bah-time">
            <span class="current-time text-gradient">
                <span id="timezone"></span> 
                <span id="current-date"></span> 
                <span id="clock"></span>
            </span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="block_area-content">
        <div class="table_schedule">
            <div class="table_schedule-date">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" id="schedule-dates">
                        <!-- Date slides will be populated dynamically -->
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="ts-navigation">
                    <button class="btn tsn-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-angle-right"></i></button>
                    <button class="btn tsn-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><i class="fas fa-angle-left"></i></button>
                </div>
            </div>
            <div class="clearfix"></div>
            <ul class="ulclear table_schedule-list limit-8" id="schedule-items">
                <!-- Schedule items will be populated dynamically -->
            </ul>
            <button id="scl-more" class="btn btn-sm btn-block btn-showmore" style="display: none;"></button>
        </div>
    </div>
</section>
</div>
<script>
const API_BASE_URL = '<?=$zpi?>';

function generateDates() {
    const dates = [];
    const today = new Date();
    
    for(let i = 0; i < 31; i++) {
        const date = new Date();
        date.setDate(today.getDate() + i);
        
        const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        
        dates.push({
            dayName: dayNames[date.getDay()],
            monthName: monthNames[date.getMonth()],
            date: date.getDate(),
            fullDate: date.toISOString().split('T')[0]
        });
    }
    return dates;
}


function renderDates(dates) {
    const container = document.getElementById('schedule-dates');
    const today = new Date().toISOString().split('T')[0];
    
    dates.forEach(date => {
        const isActive = date.fullDate === today;
        container.innerHTML += `
            <div class="swiper-slide day-item" data-date="${date.fullDate}" style="width: 163.8px; margin-right: 10px;">
                <div class="tsd-item ${isActive ? 'active' : ''}">
                    <span>${date.dayName}</span>
                    <div class="date">${date.monthName} ${date.date}</div>
                </div>
            </div>
        `;
    });
}

async function fetchSchedule(date) {
    try {
        const tzOffset = new Date().getTimezoneOffset();
        const response = await fetch(`${API_BASE_URL}/schedule?date=${date}&tzOffset=${tzOffset}`);
        const data = await response.json();
        const scheduleItems = data.results;
        
        const container = document.getElementById('schedule-items');
        container.innerHTML = '';
        
        scheduleItems.forEach(item => {
            container.innerHTML += `
                <li>
                    <a href="/details/${item.id}" class="tsl-link">
                        <div class="time">${item.time}</div>
                        <div class="film-detail">
                            <h3 class="film-name dynamic-name" data-jname="${item.jname}">${item.title}</h3>
                            <div class="fd-play">
                                <button type="button" class="btn btn-sm btn-play">
                                    <i class="fas fa-play mr-2"></i>Episode ${item.episode_no}
                                </button>
                            </div>
                        </div>
                    </a>
                </li>
            `;
        });

        if (scheduleItems.length > 7) {
            document.getElementById('scl-more').style.display = 'block';
        } else {
            document.getElementById('scl-more').style.display = 'none';
        }
    } catch (error) {
        console.error('Error fetching schedule:', error);
    }
}

function updateTime() {
    const now = new Date();
    
    // Format the time in locale-specific format
    const currentTime = now.toLocaleTimeString([], {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    });
    
    // Date and Timezone
    const timezoneOffset = -now.getTimezoneOffset() / 60;
    const timezone = `GMT${timezoneOffset >= 0 ? '+' : ''}${timezoneOffset}:00`;
    
    // Update DOM
    document.getElementById('clock').textContent = currentTime;
    document.getElementById('current-date').textContent = now.toLocaleDateString();
    document.getElementById('timezone').textContent = `(${timezone})`;
}

document.addEventListener('DOMContentLoaded', async function() {
    const dates = generateDates();
    renderDates(dates);
    
    // Initialize time updates
    setInterval(updateTime, 1000);
    updateTime();
    
    // Initialize Swiper after dates are rendered
    const scheduleSw = new Swiper('.schedule-full .table_schedule-date .swiper-container', {
        slidesPerView: 7,
        spaceBetween: 10,
        navigation: {
            nextEl: '.schedule-full .tsn-next',
            prevEl: '.schedule-full .tsn-prev',
        },
        breakpoints: {
            320: { slidesPerView: 3, spaceBetween: 10 },
            360: { slidesPerView: 3, spaceBetween: 10 },
            480: { slidesPerView: 3, spaceBetween: 10 },
            640: { slidesPerView: 4, spaceBetween: 10 },
            768: { slidesPerView: 5, spaceBetween: 10 },
            1024: { slidesPerView: 7, spaceBetween: 13 },
        },
    });

    // Schedule more button
    document.getElementById('scl-more')?.addEventListener('click', function() {
        this.parentElement.querySelector('.limit-8')?.classList.toggle('active');
        this.classList.toggle('active');
    });
    
    // Date item clicks
    document.querySelectorAll('.day-item').forEach(item => {
        item.addEventListener('click', async function() {
            const tzOffset = new Date().getTimezoneOffset();
            document.querySelectorAll('.tsd-item').forEach(el => el.classList.remove('active'));
            this.querySelector('.tsd-item').classList.add('active');
            await fetchSchedule(this.dataset.date);
        });
    });
    
    // Initial schedule fetch
    fetchSchedule(new Date().toISOString().split('T')[0]);
    
    // Slide to active item
    const activeIndex = Array.from(document.querySelectorAll('.tsd-item'))
        .findIndex(item => item.classList.contains('active'));
    if (activeIndex !== -1) {
        scheduleSw.slideTo(activeIndex, 1000);
    }
});
</script>