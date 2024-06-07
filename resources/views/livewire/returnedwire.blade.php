<div>
        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Returned books</div>
        <div class="card mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Search bar -->
                <div class="d-flex justify-content-end">
                <div>
                    <input type="text" wire:model="searchTerm" placeholder="Search..." class="form-control">
                </div>
                </div>
            </div>
        </div>
        <div>
            <table class="table">
                <thead>
                    <th>Date</th>
                    <th>Students ID</th>
                    <th>Name</th>
                    <th>Title</th>
                </thead>
            </table>
        </div>
</div>
