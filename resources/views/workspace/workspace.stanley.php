    <div class="container-xl">
        <div class="card">
            <div class="col-md-3 mb-2 mt-2 p-2">
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-workspace">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                    Create new workspace
                  </a>
            </div>
            <div class="card-header">
                <h3 class="card-title">Workspace</h3>
                <div class="card-actions">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" id="search" class="form-control"
                                   placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="card-body">
                <div id="card-container" class="row row-cards">
                    
                </div>
            </div>
        
            <div class="card-footer">
                <ul class="pagination m-0 ms-auto" id="pagination"></ul>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-workspace" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New Workspace</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" id="formworkspace" enctype="multipart/form-data">
            <?= csrf()?>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="workspace" id="workspace" placeholder="Your workspace name">
                </div>
              </div>
          </form>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <button class="btn btn-primary ms-auto" id="addworkspace" type="button">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
              Create new workspace
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- SCRIPT SETUP -->
    <script>
        
        ;(function(){
            let currentPage = 1;
            function loadData(page = 1, search = '') {
    
                $.get(`/taskflow/workspace/data?page=${page}&search=${search}`, function(res) {

                let html = '';

                if (!res.data.data || res.data.data.length === 0) {

                    html = `
                        <div class="col-12">
                            <div class="empty py-5">
                                <div class="empty-img mb-3">
                                    <img src="https://tabler.io/static/illustrations/undraw_printing_invoices_5r4r.svg"
                                        height="180">
                                </div>

                                <p class="empty-title fs-2">
                                    Workspace not found
                                </p>

                                <p class="empty-subtitle text-secondary">
                                    Tidak ada workspace yang ditemukan.
                                </p>

                                <div class="empty-action">
                                    <button class="btn btn-primary">
                                        + Create Workspace
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;

                    $('#card-container').html(html);
                    $('#pagination').html('');
                    return;
                }

                res.data.data.forEach(item => {

                    const randomProgress = Math.floor(Math.random() * 100);

                    html += `
                        <div class="col-md-6 col-xl-4">

                            <div class="card workspace-card border-0">

                                <!-- TOP -->
                                <div class="card-body">

                                    <div class="d-flex justify-content-between align-items-start">

                                        <div class="d-flex align-items-center">

                                            <!-- ICON -->
                                            <span class="avatar avatar-lg workspace-avatar me-3">
                                                ${item.name.charAt(0).toUpperCase()}
                                            </span>

                                            <div>

                                                <h3 class="card-title mb-1">
                                                    ${item.name}
                                                </h3>

                                                <div class="text-secondary small">
                                                    Workspace Team Collaboration
                                                </div>

                                            </div>
                                        </div>

                                        <!-- DROPDOWN -->
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
                                                    Open Workspace
                                                </a>

                                                <a class="dropdown-item" href="#">
                                                    Edit
                                                </a>

                                                <a class="dropdown-item text-danger" href="#">
                                                    Delete
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- STATS -->
                                    <div class="row mt-4 text-center">

                                        <div class="col">
                                            <div class="h2 mb-0">
                                                10
                                            </div>

                                            <div class="text-secondary small">
                                                Projects
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="h2 mb-0">
                                                9
                                            </div>

                                            <div class="text-secondary small">
                                                Members
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="h2 mb-0">
                                                ${randomProgress}%
                                            </div>

                                            <div class="text-secondary small">
                                                Progress
                                            </div>
                                        </div>

                                    </div>

                                    <!-- PROGRESS -->
                                    <div class="mt-4">

                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="small fw-bold">
                                                Workspace Progress
                                            </div>

                                            <div class="small text-primary">
                                                ${randomProgress}%
                                            </div>
                                        </div>

                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                                style="width:${randomProgress}%">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- MEMBERS -->
                                    <div class="mt-4 d-flex justify-content-between align-items-center">

                                        <div class="avatar-list avatar-list-stacked">

                                            <span class="avatar avatar-xs rounded">
                                                A
                                            </span>

                                            <span class="avatar avatar-xs rounded bg-primary text-white">
                                                F
                                            </span>

                                            <span class="avatar avatar-xs rounded bg-green text-white">
                                                R
                                            </span>

                                            <span class="avatar avatar-xs rounded bg-yellow text-white">
                                                +6
                                            </span>

                                        </div>

                                        <a href="/taskflow/workspace/${item.id}"
                                        class="btn btn-primary btn-sm">

                                            Open Workspace

                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    `;
                });

                $('#card-container').html(html);

                renderPagination(res);
            });
            }
    
            function renderPagination(res) {
                let pagination = '';
    
                for (let i = 1; i <= res.data.pagination.last_page; i++) {
                    pagination += `
                        <li class="page-item ${i === res.data.pagination.current_page ? 'active' : ''}">
                            <a class="page-link" href="#" data-page="${i}">
                                ${i}
                            </a>
                        </li>
                    `;
                }
    
                $('#pagination').html(pagination);
            }
    
            $(document).on('click', '.page-link', function(e) {
                e.preventDefault();
                let page = $(this).data('page');
                currentPage = page;
                loadData(page, $('#search').val());
            });
    
            let typingTimer;
            let doneTypingInterval = 500;
    
            $('#search').on('keyup', function() {
    
                clearTimeout(typingTimer);
    
                let value = $(this).val();
    
                typingTimer = setTimeout(function() {
                    loadData(1, value);
                }, doneTypingInterval);
            });
    
            function crud(){
                $('#addworkspace').on('click', function(){
                    var formData = new FormData($('#formworkspace')[0])
                    $.ajax({
                        url: '<?= route('create.workspace')?>',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response){
                            console.log(response)
                        }
                    })
                })
            }
    
            $(document).ready(function() {
                loadData();
                // approve();
                crud()
            });
        })()
    </script>

    <!-- STYLE SETUP -->
    <style>
        .workspace-card{
            border-radius: 20px;
            overflow: hidden;
            transition: all .25s ease;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0,0,0,.05);
        }

        .workspace-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 14px 35px rgba(0,0,0,.12);
        }

        .workspace-avatar{
            background: linear-gradient(
                135deg,
                #206bc4,
                #4299e1
            );

            color: white;
            font-size: 24px;
            font-weight: 700;
        }

        .progress{
            border-radius: 999px;
        }

        .progress-bar{
            border-radius: 999px;
        }

        .card-title{
            font-weight: 700;
        }

        .avatar-list .avatar{
            border: 2px solid #fff;
        }
    </style>