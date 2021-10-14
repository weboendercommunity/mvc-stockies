<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end text-center">
            <a href="<?= BASE_URL ?>/sample/create" class="btn btn-primary fw-bold">
                Create
            </a>
        </div> 
    </div>

    <div class="row">
              <?php Flasher::flash();?>
        </div>
        
    <table class="table">
        <thead>
            <tr>
                <td><b> ID</b></td>
                <td><b>SAMPLE NAME</b></td>
                <td><b>ACTION</b></td>
            </tr>
        </thead>
        <tbody>                    
            <?php foreach ($data['samples'] as $key => $sample):?>
                <tr>
                    <td>
                        <?= $sample['id']?>
                    </td>
                    <td>
                        <?= $sample['name']?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL?>/sample/show/<?= $sample['id']?>" class="btn btn-primary"> Details</a>                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>        
    </table>
</div>