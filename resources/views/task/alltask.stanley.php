<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          All Tasks
        </h2>

        <div class="text-secondary">
          Monitor all task activity across projects
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

          Create Task

        </button>

      </div>

    </div>

  </div>

  <!-- FILTER -->
  <div class="card mb-4">

    <div class="card-body">

      <div class="row g-3">

        <div class="col-md-4">

          <input type="text"
                 class="form-control"
                 placeholder="Search task...">

        </div>

        <div class="col-md-2">

          <select class="form-select">
            <option>Status</option>
          </select>

        </div>

        <div class="col-md-2">

          <select class="form-select">
            <option>Priority</option>
          </select>

        </div>

        <div class="col-md-2">

          <select class="form-select">
            <option>Project</option>
          </select>

        </div>

      </div>

    </div>

  </div>

  <!-- TABLE -->
  <div class="card">

    <div class="table-responsive">

      <table class="table table-vcenter table-hover card-table">

        <thead>

          <tr>

            <th>Task</th>
            <th>Project</th>
            <th>Assignee</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Progress</th>
            <th>Due Date</th>
            <th></th>

          </tr>

        </thead>

        <tbody>

          <!-- ITEM -->
          <tr>

            <td>

              <div class="fw-bold">
                Fix Authentication API
              </div>

              <div class="text-secondary small">
                Backend improvement
              </div>

            </td>

            <td>

              <span class="badge bg-primary-lt">
                ERP System
              </span>

            </td>

            <td>

              <div class="d-flex align-items-center">

                <span class="avatar avatar-sm bg-primary text-white me-2">
                  F
                </span>

                Fervian

              </div>

            </td>

            <td>

              <span class="badge bg-danger">
                High
              </span>

            </td>

            <td>

              <span class="status status-blue">
                In Progress
              </span>

            </td>

            <td style="width:220px;">

              <div class="d-flex justify-content-between mb-1">

                <small>75%</small>

              </div>

              <div class="progress progress-sm">

                <div class="progress-bar bg-primary"
                     style="width:75%">
                </div>

              </div>

            </td>

            <td>

              <span class="text-danger fw-bold">
                Today
              </span>

            </td>

            <td>

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
                    View
                  </a>

                  <a class="dropdown-item" href="#">
                    Edit
                  </a>

                  <a class="dropdown-item text-danger" href="#">
                    Delete
                  </a>

                </div>

              </div>

            </td>

          </tr>

          <!-- ITEM -->
          <tr>

            <td>

              <div class="fw-bold">
                UI Dashboard Design
              </div>

              <div class="text-secondary small">
                Frontend task
              </div>

            </td>

            <td>

              <span class="badge bg-success-lt">
                HR System
              </span>

            </td>

            <td>

              <div class="d-flex align-items-center">

                <span class="avatar avatar-sm bg-success text-white me-2">
                  A
                </span>

                Andi

              </div>

            </td>

            <td>

              <span class="badge bg-yellow">
                Medium
              </span>

            </td>

            <td>

              <span class="status status-green">
                Completed
              </span>

            </td>

            <td style="width:220px;">

              <div class="progress progress-sm">

                <div class="progress-bar bg-success"
                     style="width:100%">
                </div>

              </div>

            </td>

            <td>

              <span class="text-success fw-bold">
                Finished
              </span>

            </td>

            <td>

              <button class="btn btn-sm btn-success">
                Detail
              </button>

            </td>

          </tr>

        </tbody>

      </table>

    </div>

  </div>

</div>