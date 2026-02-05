<!-- CALENDARIO DE CURSOS -->
<section class="calendar-section">
    <div class="calendar-container">
        <div class="calendar-header">
            <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
            <div class="calendar-title-wrapper">
                <h2 class="calendar-title">Upcoming Courses</h2>
                <p class="calendar-subtitle">Find the perfect date for your training</p>
            </div>
            <div class="calendar-legend">
                <span class="legend-item">
                    <span class="legend-dot legend-dot--peru"></span>
                    Perú
                </span>
                <span class="legend-item">
                    <span class="legend-dot legend-dot--default"></span>
                    Cuba
                </span>
            </div>
        </div>
        
        <div class="calendar-wrapper">
            <div id="coursesCalendar"></div>
        </div>
        
        <!-- Tooltip para mostrar info al hover -->
        <div id="calendarTooltip" class="calendar-tooltip">
            <div class="tooltip-content">
                <h4 class="tooltip-title"></h4>
                <p class="tooltip-location"></p>
                <p class="tooltip-spots"></p>
            </div>
        </div>
    </div>
</section>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('coursesCalendar');
    const tooltip = document.getElementById('calendarTooltip');
    
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'en',
        headerToolbar: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        buttonText: {
            today: 'Today'
        },
        firstDay: 1, // Monday
        fixedWeekCount: false,
        showNonCurrentDates: true,
        dayMaxEvents: 2,
        moreLinkText: 'more',
        
        // Fetch events from API
        events: {
            url: '/api/calendar/events',
            method: 'GET',
            failure: function() {
                console.error('Error loading calendar events');
            }
        },
        
        // Click event - redirect to course
        eventClick: function(info) {
            if (info.event.url) {
                info.jsEvent.preventDefault();
                window.location.href = info.event.url;
            }
        },
        
        // Hover events for tooltip
        eventMouseEnter: function(info) {
            const props = info.event.extendedProps;
            
            tooltip.querySelector('.tooltip-title').textContent = info.event.title;
            tooltip.querySelector('.tooltip-location').textContent = '📍 ' + props.location;
            tooltip.querySelector('.tooltip-spots').textContent = props.spots + ' spots available';
            
            // Position tooltip
            const rect = info.el.getBoundingClientRect();
            const calendarRect = calendarEl.getBoundingClientRect();
            
            tooltip.style.left = (rect.left - calendarRect.left + rect.width / 2) + 'px';
            tooltip.style.top = (rect.top - calendarRect.top - 10) + 'px';
            tooltip.classList.add('visible');
        },
        
        eventMouseLeave: function() {
            tooltip.classList.remove('visible');
        },
        
        // Responsive
        windowResize: function(view) {
            if (window.innerWidth < 768) {
                calendar.setOption('dayMaxEvents', 1);
            } else {
                calendar.setOption('dayMaxEvents', 2);
            }
        }
    });
    
    calendar.render();
    
    // Initial responsive check
    if (window.innerWidth < 768) {
        calendar.setOption('dayMaxEvents', 1);
    }
});
</script>