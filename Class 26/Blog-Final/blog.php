<!-- Header -->
<?php
  @include './components/header.php';
  @include './database/configure.php';
?>

<!-- Body -->
<div class="d-block bgLightBlue mt-5">
  <section class="container bg-white card card-body shadow shadow-sm">
    <div class="col-lg-12">
      <div class="mb-5" style="width: 100%; max-height: 250px; overflow: hidden">
        <img src="https://mdbootstrap.com/img/Photos/Others/photo13.jpg" alt="Image" class="img-fluid w-100" />
      </div>
      <h1 class="mb-4">News Needs to Meet Its Audiences Where They Are</h1>
      <div class="d-flex mb-5">
        <div class="mr-3">
          <img src="./img/mahin.jpg" alt="Image" class="img-fluid rounded shadow shadow-sm" style="max-width: 60px" />
        </div>
        <div class="vcard">
          <span class="d-block"><a href="#" class="text-dark font-weight-bold">Dave Rogers</a>
            in
            <a href="#" class="text-dark font-weight-bold">News</a></span>
          <span class="date-read">Jun 14 <span class="mx-1">•</span> 3 min ago
            <span class="icon-star2"></span></span>
        </div>
      </div>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit
        officia neque beatae at inventore excepturi numquam sint commodi
        alias, quam consequuntur corporis ex, distinctio eaque sapiente
        pariatur iure ad necessitatibus in quod obcaecati natus consequatur.
        Sed dicta maiores, eos culpa.
      </p>
      <p>
        Voluptatum animi, voluptate sint aperiam facere a nam, ex reiciendis
        eum nemo ipsum nobis, rem illum cupiditate at quaerat amet qui
        recusandae hic, atque laboriosam perspiciatis? Esse quidem minima,
        voluptas necessitatibus, officia culpa quo nulla, cupiditate iste
        vel unde magni.
      </p>
      <p>
        Nulla nesciunt eligendi ratione, atque, hic, ullam suscipit quos
        enim vitae fugiat ducimus, dolore delectus iste id culpa. Ducimus,
        iste magnam sed reprehenderit architecto perferendis odio voluptas
        molestiae quidem ab numquam debitis, dolorem incidunt, tempore a
        quod qui nobis. Voluptates!
      </p>
      <p>
        Blanditiis, ipsum sed odio reprehenderit sequi ut vitae, dolor
        minima ab! Architecto nesciunt nemo sint est aspernatur fugit
        consequatur, magnam suscipit asperiores illo eum repellendus officia
        dolorem, molestiae commodi nam voluptatem quis quia vel cumque quos,
        aliquam ex incidunt sapiente!
      </p>
      <p>
        Suscipit, officiis, vero! Perferendis accusamus quos voluptatum
        culpa, provident maiores! Illo itaque ullam fugit molestiae, eaque
        accusamus impedit autem numquam. Placeat molestias tempore eaque
        ipsam vel voluptatum velit enim quam iusto maxime delectus, sint
        sapiente ea, quo excepturi nisi! Quia.
      </p>
      <p>
        Dolores debitis excepturi maxime earum sapiente totam, quos dolore
        inventore tempore illum. Dolores explicabo sed amet aut atque,
        facere aliquid repudiandae quod possimus quo hic similique et
        voluptates fugit iure dolore quam ipsa numquam assumenda corporis?
        Dignissimos expedita fugit sapiente.
      </p>
      <p>
        Cupiditate ut, aspernatur labore obcaecati, eveniet aut velit nulla
        facere suscipit est recusandae vel error itaque earum doloremque hic
        necessitatibus dignissimos dolores libero laudantium ducimus! Rem
        dolorem ratione officia et, fugit non, fuga suscipit eos veritatis
        enim perspiciatis, magni sit!
      </p>
      <div class="pt-5">
        <p>
          Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags:
          <a href="#">#html</a>, <a href="#">#trends</a>
        </p>
      </div>
      <!--All comment-->
      <div class="pt-5">
        <div class="section-title">
          <h2 class="mb-5">6 Comments</h2>
        </div>
        <!--Comment-->
        <div class="container my-3 px-0 px-md-5">
          <div class="row">
            <div class="col-md-2 col-3 m-auto">
              <img src="./img/mahin.jpg" alt="" class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-10 col-9 card card-body bg-light">
              <a href="#" class="h3 text-primary">Abdur Rakib</a>
              <span class="float-right font-weight-bold">30/5/2020</span>
              <p class="py-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Omnis deleniti doloremque soluta voluptatum, aliquid
                repellat minus aliquam tenetur. Amet, dolorem.
              </p>
              <button class="col-md-2 col-3 btn btn-sm btn-outline-primary">
                Reply
              </button>
            </div>
          </div>

        </div>
      </div>
      <!--Comment END-->
      <!--All Comment END-->

      <div class="card card-body shadow shadow-sm bg-light mt-5">
        <form action="#" class="">
          <div class="form-group">
            <h2 class="mb-4">Leave a comment</h2>
            <textarea name="" id="message" cols="30" rows="8" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Post Comment" class="btn btn-primary py-3" />
          </div>
        </form>
      </div>
    </div>
</div>
</section>
</div>


<!-- Footer -->
<?php
@include './components/footer.php';
?>