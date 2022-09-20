<div class="container mt-2 container-form d-flex justify-content-center">
    <h1>Login</h1>
    <form class="mt-3 mb-5">
        <div class="form-group mt-2">
            <label for="input-email">Email address</label>
            <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp"
                placeholder="Enter email" name="email" required >
        </div>
        <div class="form-group mt-2">
            <label for="input-password">Password</label>
            <input type="password" class="form-control" id="input-password" placeholder="Password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
        <p>No account yet? <a href="<?= base_url('Home/signup') ?>">Sign Up</a> here</p>
        
    </form>
</div>