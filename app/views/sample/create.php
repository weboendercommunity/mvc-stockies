<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
            Create sample
            </h3>            
        </div>
        <div class="card-body">
            <form action="<?=BASE_URL?>/sample/store" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name: </label>
                    <input 
                    type="text" 
                    name="sample" 
                    id="name" 
                    aria-describedby="sampleName" 
                    placeholder="Example Input"
                    class="form-control"
                    >
                </div>                            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add new Sample</button>
            </form>
        </div>
    </div>
</div>