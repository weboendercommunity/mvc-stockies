<div class="container">
       
    <div class="card">
        <div class="card-header">
            <h3>
            Create Suppliers
            </h3>            
        </div>
        <div class="card-body">
            <form action="<?=BASE_URL?>/suppliers/store" method="post">
                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name: </label>
                    <input 
                    type="text" 
                    name="company_name" 
                    id="company_name" 
                    aria-describedby="suppliersName" 
                    placeholder="Example Input"
                    class="form-control"
                    >
                    <br>
                    <label for="contact_name" class="form-label">Contact Name: </label>
                    <input 
                    type="text" 
                    name="contact_name" 
                    id="contact_name" 
                    aria-describedby="suppliersName" 
                    placeholder="Example Input"
                    class="form-control"
                    >
                    <br>
                    <label for="phone_number" class="form-label">Phone Number: </label>
                    <input 
                    type="number" 
                    name="phone_number" 
                    id="phone_number" 
                    aria-describedby="suppliersName" 
                    placeholder="Example Input"
                    class="form-control"
                    >
                    <br>
                    <label for="address" class="form-label">Address : </label>
                    <input 
                    type="text" 
                    name="address" 
                    id="address" 
                    aria-describedby="suppliersName" 
                    placeholder="Example Input"
                    class="form-control"
                    >
                </div>                            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add new Suppliers</button>
            </form>
        </div>

    </div>
</div>