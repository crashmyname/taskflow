<div class="container-xl">

  <!-- HEADER -->
  <div class="page-header d-print-none mb-4">

    <div class="row align-items-center">

      <div class="col">

        <h2 class="page-title">
          Workspace Members
        </h2>

        <div class="text-secondary">
          Manage workspace collaboration members
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

            <path stroke="none"
                  d="M0 0h24v24H0z"
                  fill="none"/>

            <path d="M12 5l0 14"/>
            <path d="M5 12l14 0"/>

          </svg>

          Invite Member

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
                 placeholder="Search member...">

        </div>

        <div class="col-md-3">

          <select class="form-select">

            <option>All Roles</option>
            <option>Admin</option>
            <option>Manager</option>
            <option>Staff</option>

          </select>

        </div>

      </div>

    </div>

  </div>

  <!-- MEMBERS -->
  <div class="row row-cards">

    <!-- MEMBER -->
    <div class="col-md-6 col-xl-3">

      <div class="card workspace-member-card">

        <div class="card-body text-center">

          <span class="avatar avatar-xl bg-primary text-white mb-3">
            F
          </span>

          <h3 class="card-title mb-1">
            Fervian
          </h3>

          <div class="text-secondary mb-3">
            Backend Developer
          </div>

          <span class="badge bg-primary-lt mb-4">
            Workspace Admin
          </span>

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
                12
              </div>

              <div class="text-secondary small">
                Projects
              </div>

            </div>

          </div>

          <div class="d-flex gap-2">

            <button class="btn btn-primary w-100">
              Profile
            </button>

            <button class="btn btn-outline-secondary">
              Edit
            </button>

          </div>

        </div>

      </div>

    </div>

    <!-- MEMBER -->
    <div class="col-md-6 col-xl-3">

      <div class="card workspace-member-card">

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

          <span class="badge bg-yellow-lt mb-4">
            Project Manager
          </span>

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
                8
              </div>

              <div class="text-secondary small">
                Projects
              </div>

            </div>

          </div>

          <div class="d-flex gap-2">

            <button class="btn btn-primary w-100">
              Profile
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
.workspace-member-card{
    border:0;
    border-radius:20px;
    transition:.3s;
    box-shadow:0 4px 20px rgba(0,0,0,.05);
}

.workspace-member-card:hover{
    transform:translateY(-6px);
    box-shadow:0 14px 35px rgba(0,0,0,.12);
}
</style>