<!-- Header -->
<?php
@include './components/header.php';
@include './database/configure.php';
?>

<section class="topHeader pt-5 pt-md-0 mt-5">
    <div class="container-fluid bg-light pb-3">
        <br>
        <h1 class="text-center textBlue50 font-weight-lighter py-2">
            <strong>Blog</strong> CMS
        </h1>
        <p class="text-center mb-4 text-uppercase">A platform to show your talent</p>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-5">
                <p class="text-secondary text-center">
                    <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, voluptates ratione eos
                        explicabo, sed quis architecto ad consequuntur sit commodi tenetur eum perspiciatis suscipit
                        quam modi illum qui. Aliquam, accusamus?</em>
                </p>
            </div>
        </div>
</section>
<main class="bgLightBlue">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 mt-1">
                <div class="container mt-3 mb-4">
                    <h2 class="text-center font-weight-light pb-3"><i class="fas fa-crown"></i> Article of the month
                    </h2>
                    <div class="card w-100 shadow shadow-sm mb-2">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(126).jpg" alt="Article image">
                        <div class="card-body p-3">
                            <h4 class="">Lorem ipsum dolor sit amet</h4>
                            <hr>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem molestiae
                                voluptatibus, libero numquam vel nobis dicta omnis! Repellat itaque ullam iure
                                deleniti, fugiat assumenda culpa sequi laborum nam minima modi sapiente doloribus
                                voluptatem eveniet enim quia. Deleniti fuga alias exercitationem quam sapiente
                                consequuntur perspiciatis sunt libero vitae, dolorem ab quis, quo minima placeat?
                                Amet praesentium sint cumque quos laboriosam distinctio? ...
                            </p>
                            <div class="row">
                                <div class="col-6">
                                    <h6>27/04/2020</h6>
                                    <h6><span class="font-weight-light">by</span> Tanvir Mahin</h6>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-end">
                                    <a href="#" class="h6 textBlue">READ MORE <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--All Article-->
                    <h2 class="text-center font-weight-light py-3"><i class="fas fa-newspaper"></i> Articles</h2>
                    <div class="container">
                        <div class="row">
                            <!--All post single item-->
                            <div class="col-md-6 mb-4">
                                <div class="card text-left singleCardAllPost shadow shadow-sm">
                                    <div class="view overlay">
                                        <a href="#">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body mx-4">
                                        <a href="" class="textBlue text-center text-uppercase font-small">
                                        </a>
                                        <h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                <strong>Category</strong>
                                            </a><a class="text-secondary font-small"> - 14.09.2018</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <strong>Title of the news</strong>
                                        </h4>
                                        <hr>
                                        <p class="text-secondary mb-4">Sed ut perspiciatis unde omnis iste natus
                                            error
                                            sit voluptatem
                                            accusantium doloremque
                                            laudantium, totam aperiam.</p>

                                        <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                            <a href="#" class="textBlue">read more
                                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--All post single item END-->
                            <div class="col-md-6 mb-4">
                                <div class="card text-left singleCardAllPost shadow shadow-sm">
                                    <div class="view overlay">
                                        <a href="#">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body mx-4">
                                        <a href="" class="textBlue text-center text-uppercase font-small">
                                        </a>
                                        <h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                <strong>Category</strong>
                                            </a><a class="text-secondary font-small"> - 14.09.2018</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <strong>Title of the news</strong>
                                        </h4>
                                        <hr>
                                        <p class="text-secondary mb-4">Sed ut perspiciatis unde omnis iste natus
                                            error
                                            sit voluptatem
                                            accusantium doloremque
                                            laudantium, totam aperiam.</p>

                                        <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                            <a href="#" class="textBlue">read more
                                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card text-left singleCardAllPost shadow shadow-sm">
                                    <div class="view overlay">
                                        <a href="#">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body mx-4">
                                        <a href="" class="textBlue text-center text-uppercase font-small">
                                        </a>
                                        <h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                <strong>Category</strong>
                                            </a><a class="text-secondary font-small"> - 14.09.2018</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <strong>Title of the news</strong>
                                        </h4>
                                        <hr>
                                        <p class="text-secondary mb-4">Sed ut perspiciatis unde omnis iste natus
                                            error
                                            sit voluptatem
                                            accusantium doloremque
                                            laudantium, totam aperiam.</p>

                                        <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                            <a href="#" class="textBlue">read more
                                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card text-left singleCardAllPost shadow shadow-sm">
                                    <div class="view overlay">
                                        <a href="#">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body mx-4">
                                        <a href="" class="textBlue text-center text-uppercase font-small">
                                        </a>
                                        <h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                <strong>Category</strong>
                                            </a><a class="text-secondary font-small"> - 14.09.2018</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <strong>Title of the news</strong>
                                        </h4>
                                        <hr>
                                        <p class="text-secondary mb-4">Sed ut perspiciatis unde omnis iste natus
                                            error
                                            sit voluptatem
                                            accusantium doloremque
                                            laudantium, totam aperiam.</p>

                                        <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                            <a href="#" class="textBlue">read more
                                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card text-left singleCardAllPost shadow shadow-sm">
                                    <div class="view overlay">
                                        <a href="#">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body mx-4">
                                        <a href="" class="textBlue text-center text-uppercase font-small">
                                        </a>
                                        <h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                <strong>Category</strong>
                                            </a><a class="text-secondary font-small"> - 14.09.2018</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <strong>Title of the news</strong>
                                        </h4>
                                        <hr>
                                        <p class="text-secondary mb-4">Sed ut perspiciatis unde omnis iste natus
                                            error
                                            sit voluptatem
                                            accusantium doloremque
                                            laudantium, totam aperiam.</p>

                                        <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                            <a href="#" class="textBlue">read more
                                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card text-left singleCardAllPost shadow shadow-sm">
                                    <div class="view overlay">
                                        <a href="#">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body mx-4">
                                        <a href="" class="textBlue text-center text-uppercase font-small">
                                        </a>
                                        <h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                <strong>Category</strong>
                                            </a><a class="text-secondary font-small"> - 14.09.2018</a>
                                        </h6>
                                        <h4 class="card-title">
                                            <strong>Title of the news</strong>
                                        </h4>
                                        <hr>
                                        <p class="text-secondary mb-4">Sed ut perspiciatis unde omnis iste natus
                                            error
                                            sit voluptatem
                                            accusantium doloremque
                                            laudantium, totam aperiam.</p>

                                        <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                            <a href="#" class="textBlue">read more
                                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--All Article END-->
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<!-- Footer -->
<?php
@include './components/footer.php';
?>