<!-- Button trigger modal -->

<span type="button" class="d-flex flex-row gap-2 border-0 bg-white" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-plus-square"></i>
    <div>Create</div>
</span>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">Create Story</h5>
                <button type="button" class="close border-0 bg-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./stroymodel-data.php" method="POST" enctype="multipart/form-data">

                    <label for="">Caption</label>
                    <input type="text" name="caption" class="form-control" id="" placeholder="Enter a caption">
                    <label for="">Upload Image</label>
                    <input class="form-control" type="file" name="image" id="">
                    <button class="my-2 rounded-3 border-0 w-100 text-white fw-medium"
                        style="background: linear-gradient(red,purple,orange) ">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>