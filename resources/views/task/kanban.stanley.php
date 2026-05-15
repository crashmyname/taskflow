<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          Kanban Board
        </h2>

        <div class="text-secondary">
          Visualize project workflow and task progress
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

  <!-- BOARD -->
  <div class="row flex-nowrap overflow-auto pb-3">

    <!-- TODO -->
    <div class="col-12 col-md-4 col-xl-3">

      <div class="card kanban-column">

        <div class="card-header bg-primary-lt">

          <div class="w-100 d-flex justify-content-between align-items-center">

            <h3 class="card-title">
              Todo
            </h3>

            <span class="badge bg-primary text-white">
              5
            </span>

          </div>

        </div>

        <div class="card-body kanban-list">

          <!-- TASK -->
          <div class="card kanban-task mb-3">

            <div class="card-body">

              <div class="d-flex justify-content-between mb-3">

                <span class="badge bg-danger-lt">
                  High
                </span>

                <div class="dropdown">

                  <a href="#"
                     class="btn-action"
                     data-bs-toggle="dropdown">

                    ⋮

                  </a>

                  <div class="dropdown-menu dropdown-menu-end">

                    <a class="dropdown-item">
                      Edit
                    </a>

                    <a class="dropdown-item text-danger">
                      Delete
                    </a>

                  </div>

                </div>

              </div>

              <h3 class="card-title">
                Fix Login API
              </h3>

              <div class="text-secondary small mb-3">
                Improve authentication performance and token validation.
              </div>

              <div class="d-flex justify-content-between align-items-center">

                <div class="avatar-list avatar-list-stacked">

                  <span class="avatar avatar-xs bg-primary text-white">
                    F
                  </span>

                  <span class="avatar avatar-xs bg-success text-white">
                    A
                  </span>

                </div>

                <div class="small text-danger fw-bold">
                  Today
                </div>

              </div>

            </div>

          </div>

          <!-- TASK -->
          <div class="card kanban-task mb-3">

            <div class="card-body">

              <span class="badge bg-yellow-lt mb-3">
                Medium
              </span>

              <h3 class="card-title">
                UI Dashboard
              </h3>

              <div class="text-secondary small">
                Create analytics dashboard layout.
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- IN PROGRESS -->
    <div class="col-12 col-md-4 col-xl-3">

      <div class="card kanban-column">

        <div class="card-header bg-yellow-lt">

          <div class="w-100 d-flex justify-content-between">

            <h3 class="card-title">
              In Progress
            </h3>

            <span class="badge bg-yellow text-white">
              3
            </span>

          </div>

        </div>

        <div class="card-body kanban-list">

          <div class="card kanban-task mb-3">

            <div class="card-body">

              <span class="badge bg-primary-lt mb-3">
                Backend
              </span>

              <h3 class="card-title">
                Payroll API
              </h3>

              <div class="text-secondary small mb-3">
                Build payroll calculation service.
              </div>

              <div class="progress progress-sm">

                <div class="progress-bar bg-primary"
                     style="width:70%">
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- REVIEW -->
    <div class="col-12 col-md-4 col-xl-3">

      <div class="card kanban-column">

        <div class="card-header bg-blue-lt">

          <div class="w-100 d-flex justify-content-between">

            <h3 class="card-title">
              Review
            </h3>

            <span class="badge bg-blue text-white">
              2
            </span>

          </div>

        </div>

        <div class="card-body kanban-list">

          <div class="card kanban-task mb-3">

            <div class="card-body">

              <span class="badge bg-success-lt mb-3">
                Review
              </span>

              <h3 class="card-title">
                Attendance Module
              </h3>

              <div class="text-secondary small">
                Waiting QA validation.
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- DONE -->
    <div class="col-12 col-md-4 col-xl-3">

      <div class="card kanban-column">

        <div class="card-header bg-success-lt">

          <div class="w-100 d-flex justify-content-between">

            <h3 class="card-title">
              Done
            </h3>

            <span class="badge bg-success text-white">
              12
            </span>

          </div>

        </div>

        <div class="card-body kanban-list">

          <div class="card kanban-task border-success">

            <div class="card-body">

              <span class="badge bg-success-lt mb-3">
                Completed
              </span>

              <h3 class="card-title text-success">
                Employee CRUD
              </h3>

              <div class="text-secondary small">
                Successfully deployed.
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<style>
.kanban-column{
    min-height:700px;
    border-radius:20px;
    border:0;
}

.kanban-task{
    border-radius:16px;
    cursor:grab;
    transition:.25s;
    border:0;
    box-shadow:0 4px 15px rgba(0,0,0,.05);
}

.kanban-task:hover{
    transform:translateY(-4px);
    box-shadow:0 12px 30px rgba(0,0,0,.12);
}

.kanban-list{
    min-height:600px;
}
</style>