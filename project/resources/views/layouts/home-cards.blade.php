<div class="row">
    @role('admin')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            @lang('headings.Total Users')
                        </div>
                        <div class="text-xs text-primary mb-1">
                            @lang('headings.All users who have access to the system')
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-left">
                            {{@total_users_count()}}
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-right">
                            <h2><i class="fa fa-users"></i></h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endrole

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            @lang('headings.Total Collection')
                        </div>
                        <div class="text-xs text-success mb-1">
                            @lang('headings.All registered books')
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-left">
                            {{@total_books_count()}}
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-right">
                            <h2><i class="fa fa-book"></i></h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            @lang('headings.Total Loans')
                        </div>
                        <div class="text-xs text-info mb-1">
                            @lang('headings.Loans from all users of the system')
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-left">
                            {{ @total_loans_count()}}
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-right">
                            <h2><i class="fa fa-calendar"></i></h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body" id="books_loan">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            @lang('headings.Your loans')
                        </div>
                        <div class="text-xs text-warning mb-1">
                            @lang('headings.All loans linked to your account')
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-left">
                            {{@user_loan_count()}}
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 float-right">
                            <h2><i class="fa fa-clipboard"></i></h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
