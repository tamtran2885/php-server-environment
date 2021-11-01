<?php
    require_once(__DIR__ . "/config/app.php");
    include(__DIR__ . "/inc/_header.php");
?>
    <div class="center" >
        <h1>LogIn</h1>
        <form
            method="POST"
            action="<?php echo BASE_URL ?>modules/validate.php"
        >
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email"  name="email" value="" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" value="" name="password" >
            </div>
            <div class="alert alert-primary mb-3" role="alert"><?= (isset($_GET["logout"]) && $_GET["logout"]) ? "Log Out Correctly" : "Info Messages" ?></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
    include(__DIR__ . "/inc/_footer.php");
