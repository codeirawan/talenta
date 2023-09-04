<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>
Sign In |
<?= $this->endSection() ?>

<?= $this->section('header') ?>
Sign In to Account
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="form-group">
    <input type="email"
        class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>"
        name="email" value="<?= old('email') ?>" required autocomplete="email" placeholder="Email Address">

    <?php if (isset($validation) && $validation->hasError('email')): ?>
        <span class="invalid-feedback" role="alert">
            <strong>
                <?= $validation->getError('email') ?>
            </strong>
        </span>
    <?php endif; ?>
</div>

<div class="form-group">
    <input type="password"
        class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>"
        name="password" required placeholder="Password">

    <?php if (isset($validation) && $validation->hasError('password')): ?>
        <span class="invalid-feedback" role="alert">
            <strong>
                <?= $validation->getError('password') ?>
            </strong>
        </span>
    <?php endif; ?>

    <span>
        <a href="<?= route_to('password.request') ?>" class="kt-link kt-link--brand mt-2">Forgot Password?</a>
    </span>
</div>

<div class="form-group d-none">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
        <label class="form-check-label" for="remember">Remember Me</label>
    </div>
</div>

<div class="kt-login-v2__actions">
    <button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Sign In</button>
</div>
<?= $this->endSection() ?>

<?= $this->section('image') ?>
<div class="kt-login-v2__image">
    <img src="<?= base_url('images/auth/login.svg') ?>" alt="Login">
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript">
    $('#kt_login_form').attr('action', "<?= route_to('login') ?>");
</script>
<?= $this->endSection() ?>