<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          Productivity Report
        </h2>

        <div class="text-secondary">
          Analyze productivity and task completion trends
        </div>

      </div>

      <div class="col-auto ms-auto">

        <div class="btn-list">

          <button class="btn btn-outline-primary">
            Export PDF
          </button>

          <button class="btn btn-primary">
            Generate Report
          </button>

        </div>

      </div>

    </div>

  </div>

  <!-- STATS -->
  <div class="row row-cards mb-4">

    <div class="col-sm-6 col-lg-3">

      <div class="card bg-primary text-white">

        <div class="card-body">

          <div class="h1">
            92%
          </div>

          <div>
            Productivity Score
          </div>

        </div>

      </div>

    </div>

    <div class="col-sm-6 col-lg-3">

      <div class="card bg-success text-white">

        <div class="card-body">

          <div class="h1">
            124
          </div>

          <div>
            Tasks Completed
          </div>

        </div>

      </div>

    </div>

    <div class="col-sm-6 col-lg-3">

      <div class="card bg-yellow text-white">

        <div class="card-body">

          <div class="h1">
            16
          </div>

          <div>
            Ongoing Tasks
          </div>

        </div>

      </div>

    </div>

    <div class="col-sm-6 col-lg-3">

      <div class="card bg-danger text-white">

        <div class="card-body">

          <div class="h1">
            5
          </div>

          <div>
            Overdue Tasks
          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- CHART -->
  <div class="row">

    <div class="col-lg-8">

      <div class="card">

        <div class="card-header">

          <h3 class="card-title">
            Monthly Productivity
          </h3>

        </div>

        <div class="card-body">

          <div id="productivity-chart"
               style="height:350px;">
          </div>

        </div>

      </div>

    </div>

    <!-- TOP USERS -->
    <div class="col-lg-4">

      <div class="card">

        <div class="card-header">

          <h3 class="card-title">
            Top Contributors
          </h3>

        </div>

        <div class="list-group list-group-flush">

          <div class="list-group-item">

            <div class="d-flex align-items-center">

              <span class="avatar bg-primary text-white me-3">
                F
              </span>

              <div class="flex-fill">

                <div class="fw-bold">
                  Fervian
                </div>

                <div class="text-secondary small">
                  42 tasks completed
                </div>

              </div>

              <div class="text-success fw-bold">
                98%
              </div>

            </div>

          </div>

          <div class="list-group-item">

            <div class="d-flex align-items-center">

              <span class="avatar bg-success text-white me-3">
                A
              </span>

              <div class="flex-fill">

                <div class="fw-bold">
                  Andi
                </div>

                <div class="text-secondary small">
                  35 tasks completed
                </div>

              </div>

              <div class="text-primary fw-bold">
                93%
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<script>
(function(){

    function initProductivityChart(){

        const el =
            document.querySelector("#productivity-chart");

        if(!el) return;

        if(el.chart){
            el.chart.destroy();
        }

        const options = {

            chart: {
                type: 'area',
                height: 350,
                toolbar: {
                    show: false
                }
            },

            series: [{
                name: 'Productivity',
                data: [72, 80, 85, 88, 90, 92]
            }],

            xaxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun'
                ]
            },

            stroke: {
                curve: 'smooth',
                width: 4
            },

            dataLabels: {
                enabled: false
            }

        };

        const chart =
            new ApexCharts(el, options);

        chart.render();

        el.chart = chart;
    }

    initProductivityChart();

    document.body.addEventListener('htmx:afterSwap', function(){

        initProductivityChart();

    });

})();
</script>