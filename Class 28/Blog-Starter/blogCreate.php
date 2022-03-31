<?php
    @include './components/header.php';
    @include './database/configure.php';
?>

<!--Use the bellow code for modal-->
<div class="d-block bgLightBlue mt-5 pt-5">
    <section class="container bg-white card card-body shadow shadow-sm">
        <p class="font-weight-lighter text-center bg-light py-2 mb-4 h3">
            <strong>Create Post</strong>
        </p>
        <form class="container">
            <fieldset class="fieldset">
                <div class="form-group">
                    <label class="col-md-12 control-label">Name</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="" required />
                        <small class="text-secondary">Name of the article represents what your article is all
                            about.
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 control-label">Tags</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="" />
                        <small class="text-secondary">Add appropiate tags separated with comma (,) for better
                            search experience with the article.
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 control-label">Category</label>
                    <div class="col-md-12">
                        <select class="custom-select" required>
                            <option selected disabled>Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 control-label">Article</label>
                    <div class="col-md-12 col-sm-9 col-xs-12">
                        <textarea name="bio" cols="30" rows="20" class="form-control" required></textarea>
                        <small class="text-secondary">Write the full article.</small>
                    </div>
                </div>
                <div class="form-group px-3">
                    <figure class="col-md-2 offset-md-5">
                        <img class="rounded img-fluid shadow shadow-sm" src="./img/mahin.jpg" alt="" />
                    </figure>

                    <div class="col-md-6 offset-md-3 text-center pb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input outline-primary" id="customFile" />
                            <label class="custom-file-label bg-light" for="customFile">
                                <i class="fas fa-image text-primary"></i>
                                Choose file</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <hr />
            <div class="form-group">
                <div class="text-center">
                    <input class="btn btn-primary" type="submit" value="Create Article" />
                    <button class="btn btn-outline-danger px-3 ml-2">Cancel</button>
                </div>
            </div>
        </form>
    </section>
</div>

<!-- Footer -->
<?php
@include './components/footer.php';
?>