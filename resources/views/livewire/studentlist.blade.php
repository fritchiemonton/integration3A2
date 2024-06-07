<div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                List info.
                            </div>
                            <div>
                                <input type="text" wire:model="searchTerm" placeholder="Search..." class="form-control">
                            </div>
                        </div>
                    </div>
                <!-- search bar end-->

                <!-- Livewire component end -->

                <table class="table">
                    <thead>
                        <th>QRcode</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Suffix</th>
                        <th>Date of Birth</th>
                        <th>Place of Birth</th>
                        <th>Civil Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                            @foreach($residents as $resident)
                                <tr>
                                    <td>{!! QrCode::size(40)->generate($resident->FirstName . ' ' . $resident->MiddleName . ' ' . $resident->LastName )!!}</td>
                                    <td>{{ $resident->FirstName }}</td>
                                    <td>{{ $resident->MiddleName }}</td>
                                    <td>{{ $resident->LastName }}</td>
                                    <td>{{ $resident->Suffix }}</td>
                                    <td>{{ $resident->DOB }}</td>
                                    <td>{{ $resident->PlaceOfBirth }}</td>
                                    <td>{{ $resident->CivilStatus }}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"
                                        wire:click="update('{{ $resident->id }}')">
                                        Edit</button>

                                        <button class="btn btn-danger btn-sm"
                                        wire:click="delete('{{ $resident->id }}')">
                                        Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>

                {{ $residents->links() }}

                <div>
                </div>
                </hr>
