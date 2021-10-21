<div class="container">
    <div class="card">    
        <div class="card-body">            
        <div class="card-title"><h3>Details</h3></div>
        <br>
            <p><b>ID: </b><?= $data['suppliers']['id']?></p>
            <p><b>COMPANY NAME: </b><?= $data['suppliers']['company_name']?></p>
            <p><b>CONTACT NAME: </b><?= $data['suppliers']['contact_name']?></p>
            <p><b>PHONE NUMBER: </b><?= $data['suppliers']['phone_number']?></p>
            <p><b>ADDRESS: </b><?= $data['suppliers']['address']?></p>            
        </div>
        <div class="card-footer">
            <a href="<?=BASE_URL?>/suppliers" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>