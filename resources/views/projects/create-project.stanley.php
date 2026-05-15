<div class="container-xl">

  <!-- PAGE HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          Create Project
        </h2>

        <div class="text-secondary">
          Create and organize a new project workspace
        </div>

      </div>

    </div>

  </div>

  <div class="row">

    <!-- FORM -->
    <div class="col-lg-8">

      <form class="card">

        <div class="card-body">

          <!-- PROJECT NAME -->
          <div class="mb-4">

            <label class="form-label">
              Project Name
            </label>

            <input type="text"
                   class="form-control form-control-lg"
                   placeholder="Enter project name">

          </div>

          <!-- DESCRIPTION -->
          <div class="mb-4">

            <label class="form-label">
              Description
            </label>

            <textarea class="form-control"
                      rows="5"
                      placeholder="Project description..."></textarea>

          </div>

          <div class="row">

            <!-- START DATE -->
            <div class="col-md-6 mb-4">

              <label class="form-label">
                Start Date
              </label>

              <input type="date"
                     class="form-control">

            </div>

            <!-- DEADLINE -->
            <div class="col-md-6 mb-4">

              <label class="form-label">
                Deadline
              </label>

              <input type="date"
                     class="form-control">

            </div>

          </div>

          <div class="row">

            <!-- PRIORITY -->
            <div class="col-md-6 mb-4">

              <label class="form-label">
                Priority
              </label>

              <select class="form-select">

                <option>Low</option>
                <option selected>Medium</option>
                <option>High</option>

              </select>

            </div>

            <!-- STATUS -->
            <div class="col-md-6 mb-4">

              <label class="form-label">
                Status
              </label>

              <select class="form-select">

                <option selected>Planning</option>
                <option>In Progress</option>
                <option>Completed</option>

              </select>

            </div>

          </div>

          <!-- MEMBERS -->
          <div class="mb-4">

            <label class="form-label">
              Team Members
            </label>

            <select class="form-select"
                    multiple>

              <option>Fervian</option>
              <option>Andi</option>
              <option>Rian</option>
              <option>Dimas</option>

            </select>

          </div>

          <!-- TAGS -->
          <div class="mb-4">

            <label class="form-label">
              Tags
            </label>

            <input type="text"
                   class="form-control"
                   placeholder="ERP, Backend, HR">

          </div>

        </div>

        <!-- FOOTER -->
        <div class="card-footer text-end">

          <button type="button"
                  class="btn btn-link">

            Cancel

          </button>

          <button type="submit"
                  class="btn btn-primary">

            Create Project

          </button>

        </div>

      </form>

    </div>

    <!-- SIDEBAR -->
    <div class="col-lg-4">

      <div class="card">

        <div class="card-header">

          <h3 class="card-title">
            Project Tips
          </h3>

        </div>

        <div class="card-body">

          <div class="divide-y">

            <div class="py-3">

              <div class="fw-bold">
                Define Clear Goals
              </div>

              <div class="text-secondary small">
                Set measurable objectives.
              </div>

            </div>

            <div class="py-3">

              <div class="fw-bold">
                Assign Team Members
              </div>

              <div class="text-secondary small">
                Collaborate efficiently.
              </div>

            </div>

            <div class="py-3">

              <div class="fw-bold">
                Set Deadlines
              </div>

              <div class="text-secondary small">
                Avoid overdue projects.
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>