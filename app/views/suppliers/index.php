<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end text-center">
            <a href="<?= BASE_URL ?>/suppliers/create" class="btn btn-primary fw-bold">
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
                <td><b>COMPANY NAME</b></td>
                <td><b>CONTACT NAME</b></td>
                <td><b>PHONE NUMBER</b></td>
                <td><b>ADDRESS</b></td>
                <td colspan="2" ><b><center>ACTION</center></b></td>
            </tr>
        </thead>
        <tbody>                    
            <?php foreach ($data['suppliers'] as $key => $suppliers):?>
                <tr>
                    <td>
                        <?= $suppliers['id']?>
                    </td>
                    <td>
                        <?= $suppliers['company_name']?>
                    </td>
                    <td>
                        <?= $suppliers['contact_name']?>
                    </td>
                    <td>
                        <?= $suppliers['phone_number']?>
                    </td>
                    <td>
                        <?= $suppliers['address']?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL?>/suppliers/show/<?= $suppliers['id']?>" class="btn btn-primary"> Details</a>                        
                    </td>
                    <td>
                        <a href="<?= BASE_URL?>/suppliers/delete/<?= $suppliers['id']?>" class="btn btn-danger" onclick="return confirm('Apakah anda sudah yakin?')"> Delete</a>                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>        
    </table>
</div>