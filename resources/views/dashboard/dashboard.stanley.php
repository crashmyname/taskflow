<div class="container-xl">

  <!-- PAGE HEADER -->
  <div class="page-header d-print-none mb-3">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          Dashboard
        </h2>

        <div class="text-secondary mt-1">
          Welcome back <?= auth()->user()->name?> Here's your team productivity today.
        </div>
      </div>

      <!-- <div class="col-auto ms-auto">
        <button class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg"
               class="icon"
               width="24"
               height="24"
               viewBox="0 0 24 24"
               stroke-width="2"
               stroke="currentColor"
               fill="none"
               stroke-linecap="round"
               stroke-linejoin="round">

            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 5l0 14"/>
            <path d="M5 12l14 0"/>
          </svg>

          New Task
        </button>
      </div> -->
    </div>
  </div>

  <!-- STATS -->
  <div class="row row-deck row-cards">

    <!-- TOTAL TASK -->
    <div class="col-sm-6 col-lg-3">
      <div class="card card-sm hover-shadow">
        <div class="card-body">
          <div class="row align-items-center">

            <div class="col-auto">
              <span class="bg-primary text-white avatar">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="icon"
                     width="24"
                     height="24"
                     viewBox="0 0 24 24"
                     stroke-width="2"
                     stroke="currentColor"
                     fill="none">

                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M9 11l3 3l8 -8"/>
                  <path d="M20 12v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h9"/>
                </svg>
              </span>
            </div>

            <div class="col">
              <div class="font-weight-medium">
                Total Tasks
              </div>

              <div class="text-secondary">
                All created tasks
              </div>
            </div>
          </div>

          <div class="mt-4 d-flex align-items-center justify-content-between">
            <div class="display-6 fw-bold">
              <?= $data['total_task'] ?>
            </div>

            <span class="badge bg-primary-lt">
              +12%
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- PENDING -->
    <div class="col-sm-6 col-lg-3">
      <div class="card card-sm hover-shadow">
        <div class="card-body">

          <div class="row align-items-center">

            <div class="col-auto">
              <span class="bg-yellow text-white avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-hourglass-high"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6.5 7h11" /><path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1" /><path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1" /></svg>
              </span>
            </div>

            <div class="col">
              <div class="font-weight-medium">
                Pending Tasks
              </div>

              <div class="text-secondary">
                Waiting progress
              </div>
            </div>
          </div>

          <div class="mt-4">

            <div class="d-flex justify-content-between mb-2">
              <div class="display-6 fw-bold">
                <?= $data['pending_task'] ?>
              </div>

              <div class="text-yellow">
                Pending
              </div>
            </div>

            <div class="progress progress-sm">
              <div class="progress-bar bg-yellow"
                   style="width: 65%">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- COMPLETED -->
    <div class="col-sm-6 col-lg-3">
      <div class="card card-sm hover-shadow">
        <div class="card-body">

          <div class="row align-items-center">

            <div class="col-auto">
              <span class="bg-green text-white avatar">
                ✓
              </span>
            </div>

            <div class="col">
              <div class="font-weight-medium">
                Completed
              </div>

              <div class="text-secondary">
                Finished tasks
              </div>
            </div>
          </div>

          <div class="mt-4">

            <div class="d-flex justify-content-between mb-2">
              <div class="display-6 fw-bold">
                <?= $data['completed_task'] ?>
              </div>

              <div class="text-green">
                Success
              </div>
            </div>

            <div class="progress progress-sm">
              <div class="progress-bar bg-green"
                   style="width: 85%">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- OVERDUE -->
    <div class="col-sm-6 col-lg-3">
      <div class="card card-sm hover-shadow border-danger">
        <div class="card-body">

          <div class="row align-items-center">

            <div class="col-auto">
              <span class="bg-danger text-white avatar">
                !
              </span>
            </div>

            <div class="col">
              <div class="font-weight-medium">
                Overdue Tasks
              </div>

              <div class="text-secondary">
                Need attention
              </div>
            </div>
          </div>

          <div class="mt-4 d-flex align-items-center justify-content-between">

            <div class="display-6 fw-bold text-danger">
              <?= $data['overdue_task'] ?>
            </div>

            <span class="badge bg-danger-lt">
              Urgent
            </span>

          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- SECOND ROW -->
  <div class="row row-deck row-cards mt-2">

    <!-- TEAM ACTIVITY -->
    <div class="col-lg-4">
      <div class="card h-100">

        <div class="card-header">
          <h3 class="card-title">
            Team Activity
          </h3>
        </div>

        <div class="card-body">

          <div class="divide-y">

            <div class="row py-3 align-items-center">
              <div class="col-auto">
                <span class="avatar bg-primary text-white">
                  F
                </span>
              </div>

              <div class="col">
                <div class="text-truncate">
                  Fervian completed task
                </div>

                <div class="text-secondary">
                  2 minutes ago
                </div>
              </div>
            </div>

            <div class="row py-3 align-items-center">
              <div class="col-auto">
                <span class="avatar bg-green text-white">
                  A
                </span>
              </div>

              <div class="col">
                <div class="text-truncate">
                  Added new project
                </div>

                <div class="text-secondary">
                  10 minutes ago
                </div>
              </div>
            </div>

            <div class="row py-3 align-items-center">
              <div class="col-auto">
                <span class="avatar bg-yellow text-white">
                  R
                </span>
              </div>

              <div class="col">
                <div class="text-truncate">
                  Commented on task
                </div>

                <div class="text-secondary">
                  30 minutes ago
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- RECENT COMMENTS -->
    <div class="col-lg-4">
      <div class="card h-100">

        <div class="card-header">
          <h3 class="card-title">
            Recent Comments
          </h3>
        </div>

        <div class="list-group list-group-flush">

          <div class="list-group-item">
            <div class="fw-bold">
              UI Dashboard
            </div>

            <div class="text-secondary small">
              "Please update the design before Friday."
            </div>
          </div>

          <div class="list-group-item">
            <div class="fw-bold">
              Backend API
            </div>

            <div class="text-secondary small">
              "Need optimization for query."
            </div>
          </div>

          <div class="list-group-item">
            <div class="fw-bold">
              HR Module
            </div>

            <div class="text-secondary small">
              "Attendance export already fixed."
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- UPCOMING DEADLINES -->
    <div class="col-lg-4">
      <div class="card h-100">

        <div class="card-header">
          <h3 class="card-title">
            Upcoming Deadlines
          </h3>
        </div>

        <div class="card-body">

          <div class="mb-4">

            <div class="d-flex justify-content-between">
              <div>
                Mobile App Release
              </div>

              <div class="text-danger">
                Today
              </div>
            </div>

            <div class="progress progress-sm mt-2">
              <div class="progress-bar bg-danger"
                   style="width:90%">
              </div>
            </div>

          </div>

          <div class="mb-4">

            <div class="d-flex justify-content-between">
              <div>
                Payroll System
              </div>

              <div class="text-warning">
                Tomorrow
              </div>
            </div>

            <div class="progress progress-sm mt-2">
              <div class="progress-bar bg-warning"
                   style="width:70%">
              </div>
            </div>

          </div>

          <div>

            <div class="d-flex justify-content-between">
              <div>
                ERP Integration
              </div>

              <div class="text-primary">
                3 Days
              </div>
            </div>

            <div class="progress progress-sm mt-2">
              <div class="progress-bar bg-primary"
                   style="width:45%">
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<style>
.hover-shadow {
  transition: all .25s ease;
}

.hover-shadow:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 30px rgba(0,0,0,.12);
}
</style>