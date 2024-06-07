<div>   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booksModal" wire:click="resetForm">New</button>

    <!-- Borrow Form Modal -->
    <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="booksModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Books</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeForm">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Borrow form fields -->
                    <form wire:submit.prevent="saveBook"> <!-- Change 'books' to 'saveBook' -->
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select wire:model="category" class="form-control">
                                        <option value="">--Select Status--</option> 
                                        <option value="Mathematics">Mathematics</option> 
                                        <option value="Science and Technology">Science and Technology</option>
                                        <option value="Engineering">Engineering</option> 
                                        <option value="Historyd">History</option> 
                                    </select>
                            <!--input type="text" class="form-control" id="category" wire:model="category"-->
                        </div>
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" id="title" wire:model="title">
                        </div>
                        <div class="form-group">
                            <label for="Author">Author</label>
                            <input type="text" class="form-control" id="author" wire:model="author">
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <input type="text" class="form-control" id="status" wire:model="status">
                        </div>
                        <div class="form-group">
                            <label for="Tools">Tools</label>
                            <input type="text" class="form-control" id="tools" wire:model="tools">
                        </div>
                        <!-- Add more form fields as needed -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeForm">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
