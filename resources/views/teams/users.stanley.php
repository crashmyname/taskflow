<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          Team Members
        </h2>

        <div class="text-secondary">
          Manage users and collaboration teams
        </div>

      </div>

      <div class="col-auto ms-auto">

        <button class="btn btn-primary">

          Add User

        </button>

      </div>

    </div>

  </div>

  <!-- SEARCH -->
  <div class="card mb-4">

    <div class="card-body">

      <div class="row">

        <div class="col-md-4">

          <input type="text"
                 class="form-control"
                 placeholder="Search user...">

        </div>

      </div>

    </div>

  </div>

  <!-- USER GRID -->
  <div class="row row-cards">

    <!-- USER -->
    <div class="col-md-6 col-xl-3">

      <div class="card user-card">

        <div class="card-body text-center">

          <!-- AVATAR -->
          <span class="avatar avatar-xl bg-primary text-white mb-3">
            F
          </span>

          <!-- NAME -->
          <h3 class="card-title mb-1">
            Fervian
          </h3>

          <div class="text-secondary mb-3">
            Backend Developer
          </div>

          <!-- STATS -->
          <div class="row text-center mb-4">

            <div class="col">

              <div class="h2 mb-0">
                24
              </div>

              <div class="text-secondary small">
                Tasks
              </div>

            </div>

            <div class="col">

              <div class="h2 mb-0">
                92%
              </div>

              <div class="text-secondary small">
                Performance
              </div>

            </div>

          </div>

          <!-- STATUS -->
          <div class="mb-4">

            <span class="status status-green">
              Active
            </span>

          </div>

          <!-- ACTION -->
          <div class="d-flex gap-2">

            <button class="btn btn-primary w-100">
              View
            </button>

            <button class="btn btn-outline-secondary">
              Edit
            </button>

          </div>

        </div>

      </div>

    </div>

    <!-- USER -->
    <div class="col-md-6 col-xl-3">

      <div class="card user-card">

        <div class="card-body text-center">

          <span class="avatar avatar-xl bg-success text-white mb-3">
            A
          </span>

          <h3 class="card-title mb-1">
            Andi
          </h3>

          <div class="text-secondary mb-3">
            Frontend Developer
          </div>

          <div class="row text-center mb-4">

            <div class="col">

              <div class="h2 mb-0">
                18
              </div>

              <div class="text-secondary small">
                Tasks
              </div>

            </div>

            <div class="col">

              <div class="h2 mb-0">
                87%
              </div>

              <div class="text-secondary small">
                Performance
              </div>

            </div>

          </div>

          <div class="mb-4">

            <span class="status status-yellow">
              Busy
            </span>

          </div>

          <div class="d-flex gap-2">

            <button class="btn btn-primary w-100">
              View
            </button>

            <button class="btn btn-outline-secondary">
              Edit
            </button>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<style>
.user-card{
    border:0;
    border-radius:20px;
    transition:.3s;
    box-shadow:0 4px 20px rgba(0,0,0,.05);
}

.user-card:hover{
    transform:translateY(-6px);
    box-shadow:0 14px 35px rgba(0,0,0,.12);
}
</style>