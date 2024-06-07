<div>
    
            <div class="card mb-4">
            <div class="d-flex justify-content-between align-items-center">
                @include('livewire.borrow-form')
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
                <!--th>Date</th-->
                <th>Students ID</th>
                <th>Name</th>
                <th>Title</th>
            </thead>
            <tbody>
            @foreach($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->studentId }}</td>
                    <td>{{ $borrow->name }}</td>
                    <td>{{ $borrow->title }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
</div>

    