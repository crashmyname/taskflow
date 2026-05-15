<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          Task Calendar
        </h2>

        <div class="text-secondary">
          Track task deadlines and schedules
        </div>

      </div>

      <div class="col-auto ms-auto">

        <button class="btn btn-primary">

          Add Event

        </button>

      </div>

    </div>

  </div>

  <div class="row">

    <!-- SIDEBAR -->
    <div class="col-lg-3">

      <div class="card mb-4">

        <div class="card-header">
          <h3 class="card-title">
            Upcoming Tasks
          </h3>
        </div>

        <div class="list-group list-group-flush">

          <div class="list-group-item">

            <div class="fw-bold">
              ERP Deployment
            </div>

            <div class="text-danger small">
              Today
            </div>

          </div>

          <div class="list-group-item">

            <div class="fw-bold">
              HR Meeting
            </div>

            <div class="text-warning small">
              Tomorrow
            </div>

          </div>

          <div class="list-group-item">

            <div class="fw-bold">
              API Review
            </div>

            <div class="text-primary small">
              3 Days
            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- CALENDAR -->
    <div class="col-lg-9">

      <div class="card">

        <div class="card-body">

          <!-- FULLCALENDAR -->
          <div id="calendar"
               style="min-height:750px;">

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<script>
(function(){

    function initCalendar() {

        const calendarEl =
            document.getElementById('calendar');

        // cegah double init
        if (!calendarEl) return;

        // destroy old instance jika ada
        if (calendarEl._calendar) {
            calendarEl._calendar.destroy();
        }

        const calendar =
            new FullCalendar.Calendar(calendarEl, {

            initialView: 'dayGridMonth',

            height: 'auto',

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },

            events: [

                {
                    title: 'ERP Deployment',
                    start: '2026-05-15'
                },

                {
                    title: 'Meeting HR',
                    start: '2026-05-18'
                },

                {
                    title: 'API Review',
                    start: '2026-05-20'
                }

            ]

        });

        calendar.render();

        // simpan instance
        calendarEl._calendar = calendar;
    }

    /*
    |--------------------------------------------------------------------------
    | INITIAL LOAD
    |--------------------------------------------------------------------------
    */
    initCalendar();

    /*
    |--------------------------------------------------------------------------
    | HTMX LOAD
    |--------------------------------------------------------------------------
    */
    document.body.addEventListener('htmx:afterSwap', function(evt){

        // hanya ketika content calendar di-load
        if(document.getElementById('calendar')){
            initCalendar();
        }

    });

})();
</script>