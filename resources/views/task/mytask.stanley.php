<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">
    <div class="row align-items-center">

      <div class="col">
        <h2 class="page-title">
          My Tasks
        </h2>

        <div class="text-secondary">
          Manage your personal tasks and productivity
        </div>
      </div>

      <div class="col-auto ms-auto">

        <button class="btn btn-primary">

          <svg xmlns="http://www.w3.org/2000/svg"
               class="icon"
               width="24"
               height="24"
               viewBox="0 0 24 24"
               stroke-width="2"
               stroke="currentColor"
               fill="none">

            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 5l0 14"/>
            <path d="M5 12l14 0"/>

          </svg>

          Add Task

        </button>

      </div>

    </div>
  </div>

  <!-- FILTER -->
  <div class="card mb-4">

    <div class="card-body">

      <div class="row">

        <div class="col-md-4">

          <div class="input-icon">

            <span class="input-icon-addon">

              <svg xmlns="http://www.w3.org/2000/svg"
                   class="icon"
                   width="24"
                   height="24"
                   viewBox="0 0 24 24"
                   stroke-width="2"
                   stroke="currentColor"
                   fill="none">

                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/>
                <path d="M21 21l-6 -6"/>

              </svg>

            </span>

            <input type="text"
                   class="form-control"
                   placeholder="Search task...">

          </div>

        </div>

        <div class="col-md-3">

          <select class="form-select">
            <option>All Priority</option>
            <option>High</option>
            <option>Medium</option>
            <option>Low</option>
          </select>

        </div>

        <div class="col-md-3">

          <select class="form-select">
            <option>All Status</option>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Completed</option>
          </select>

        </div>

      </div>

    </div>

  </div>

  <!-- TASK LIST -->
  <div class="row row-cards">

    <!-- TASK ITEM -->
    <div class="col-md-6">

      <div class="card task-card">

        <div class="card-body">

          <div class="d-flex justify-content-between">

            <div class="form-check">

              <input class="form-check-input"
                     type="checkbox">

            </div>

            <div class="dropdown">

              <a href="#"
                 class="btn-action"
                 data-bs-toggle="dropdown">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="24"
                     height="24"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2">

                  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>
                  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"/>

                </svg>

              </a>

              <div class="dropdown-menu dropdown-menu-end">

                <a class="dropdown-item" href="#">
                  Edit
                </a>

                <a class="dropdown-item" href="#">
                  Detail
                </a>

                <a class="dropdown-item text-danger" href="#">
                  Delete
                </a>

              </div>

            </div>

          </div>

          <div class="mt-3">

            <h3 class="card-title mb-2">
              Fix Authentication API
            </h3>

            <div class="text-secondary">
              Improve login validation and optimize backend API authentication flow.
            </div>

          </div>

          <!-- BADGES -->
          <div class="mt-4 d-flex gap-2 flex-wrap">

            <span class="badge bg-danger-lt">
              High Priority
            </span>

            <span class="badge bg-primary-lt">
              In Progress
            </span>

            <span class="badge bg-yellow-lt">
              Backend
            </span>

          </div>

          <!-- PROGRESS -->
          <div class="mt-4">

            <div class="d-flex justify-content-between mb-2">

              <div class="small fw-bold">
                Progress
              </div>

              <div class="small text-primary">
                75%
              </div>

            </div>

            <div class="progress progress-sm">

              <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                   style="width:75%">
              </div>

            </div>

          </div>

          <!-- FOOTER -->
          <div class="mt-4 d-flex justify-content-between align-items-center">

            <div class="avatar-list avatar-list-stacked">

              <span class="avatar avatar-sm rounded bg-primary text-white">
                F
              </span>

              <span class="avatar avatar-sm rounded bg-success text-white">
                A
              </span>

            </div>

            <div class="text-danger small fw-bold">
              Due Today
            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- TASK ITEM -->
    <div class="col-md-6">

      <div class="card task-card">

        <div class="card-body">

          <div class="d-flex justify-content-between">

            <div class="form-check">

              <input class="form-check-input"
                     type="checkbox"
                     checked>

            </div>

            <span class="badge bg-success-lt">
              Completed
            </span>

          </div>

          <div class="mt-3">

            <h3 class="card-title mb-2 text-decoration-line-through text-secondary">
              Design Dashboard UI
            </h3>

            <div class="text-secondary">
              Create modern dashboard layout for ERP application.
            </div>

          </div>

          <div class="mt-4">

            <div class="progress progress-sm">

              <div class="progress-bar bg-success"
                   style="width:100%">
              </div>

            </div>

          </div>

          <div class="mt-4 d-flex justify-content-between align-items-center">

            <div class="text-success fw-bold small">
              Completed
            </div>

            <div class="text-secondary small">
              2 hours ago
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<style>
.task-card{
    border:0;
    border-radius:20px;
    transition:all .3s ease;
    box-shadow:0 4px 20px rgba(0,0,0,.05);
}

.task-card:hover{
    transform:translateY(-5px);
    box-shadow:0 12px 35px rgba(0,0,0,.12);
}

.progress{
    border-radius:999px;
}

.progress-bar{
    border-radius:999px;
}
</style>