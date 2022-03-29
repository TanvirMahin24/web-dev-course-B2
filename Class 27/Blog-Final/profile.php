<!-- Header -->
<?php
  @include './components/header.php';
  @include './database/configure.php';
?>

<!--Body-->
<div class="d-block">
  <section class="container bg-white card card-body shadow shadow-sm">
    <p class="font-weight-lighter text-center bg-light py-2 mb-4 h3">
      <strong>Edit Profile</strong>
    </p>
    <form class="container">
      <fieldset class="fieldset">
        <h3 class="font-weight-lighter textBlue">Personal Info</h3>
        <div class="form-group row">
          <figure class="col-md-2 col-sm-3 col-xs-12">
            <img class="img-rounded img-fluid" src="./img/user.jpeg" alt="" />
            <small class="text-secondary">Your image will be visible publically with your article.
            </small>
          </figure>
          <div class="col-md-10 col-sm-9 col-xs-12 d-flex align-items-end pb-3">
            <input type="file" class="float-left" />
            <button type="submit" class="btn btn-sm btn-primary flaot-left">
              Update Image
            </button>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-12 col-sm-3 col-xs-12 control-label">Full Name</label>
          <div class="col-md-12 col-sm-9 col-xs-12">
            <input type="text" class="form-control" value="" />
            <small class="text-secondary">Your name will be visible publically with your article.
            </small>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-12 col-sm-3 col-xs-12 control-label">Email</label>
          <div class="col-md-12 col-sm-9 col-xs-12">
            <input type="email" class="form-control" value="" />
            <small class="text-secondary">You can build a community with the institution.
            </small>
          </div>
        </div>
      </fieldset>

      <hr />
      <div class="form-group">
        <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0 text-center">
          <input class="btn btn-primary" type="submit" value="Update Profile" />
        </div>
      </div>
    </form>
  </section>
</div>

<!-- Footer -->
<?php
@include './components/footer.php';
?>