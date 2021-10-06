<div class="container">
    <div class="card">    
        <div class="card-body">            
        <div class="card-title"><h3>Details</h3></div>
        <hr>
            <p><b>ID: </b><?= $data['sample']['id']?></p>
            <p><b>NAME: </b><?= $data['sample']['name']?></p>
        </div>
        <div class="card-footer">
            <a href="<?=BASE_URL?>/sample" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>