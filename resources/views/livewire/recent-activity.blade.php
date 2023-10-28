<div>
    <div class="card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>
        @if ($activities->isNotEmpty())
            <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| {{ $activities->first()->created_at->format('Y-m-d') }} - {{ $activities->last()->created_at->format('Y-m-d') }}</span></h5>

                <div class="activity">
                    @foreach ($activities as $item)
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{ $item->created_at }}</div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                                Success Login <label class="fw-bold text-dark">{{ $item->user->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
