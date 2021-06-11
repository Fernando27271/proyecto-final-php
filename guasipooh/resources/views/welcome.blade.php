@extends('base')
@section('main')
    <main>
      <aside id="mensaje">
        <div class="container">
            <div id="welcome" class="row">
                <div class="gridable-col col-6 column-wrapper">
                    <article class="column">
                        <h2>Lorem ipsum dolor</h2>
                        <h1>WELCOME</h1>
                        <p class="intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reprehenderit non, suscipit repudiandae nulla debitis deleniti voluptatibus. Voluptatem veritatis, perferendis soluta reiciendis alias repellat doloribus reiciendis alias repellat doloribus.</p>
                        <p><a class="btn-link" href="#">RESERVATIONS</a></p>
                    </article>
                </div>
                <div class="gridable-col col-6 column-wrapper">
                    <figure>
                            <img src="{{URL::asset('/images/images-squares/cuadrado-1.jpg')}}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div><!-- container -->
      </aside><!-- mensaje -->

      <div id="zone1">
        <div class="container-fluid">
          <h3 class="text-center">tasteful</h3>
          <h4 class="text-center">recipes</h4>
        </div>
      </div><!-- Zone -->

      <article id="videos">
        <div class="container">
            <div class="row">
                <div class="gridable-col column-wrapper">
                    <article class="column">
                        <h2>Lorem ipsum dolor</h2>
                        <h1>VIDEOS</h1>
                        <div class="row videoss">
                          <P class="intro">
                            <div class="col-xl ratio ratio-16x9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/osQcO4BIWHM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-xl ratio ratio-16x9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/HO_Y66Oi4uw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                          </P>
                        </div>
                        <p><a class="btn-link" href="#">PRODUCTIONS</a></p>
                    </article>
                </div>
            </div>
        </div><!-- container -->
      </article><!-- videos -->

      <div id="zone2">
        <div class="container-fluid">
          <h3 class="text-center">discover</h3>
          <h4 class="text-center">our story</h4>
        </div>
      </div><!-- Zone -->

      <aside id="noticias">
        <div class="container">
            <div id="welcome" class="row">
              <div class="gridable-col col-6 column-wrapper">
                <figure>
                  <img src="{{URL::asset('/images/images-squares/cuadrado-2.jpg')}}" alt="" class="pad-img img-fluid">
                  <img src="{{URL::asset('/images/images-squares/cuadrado-3.jpg')}}" alt="" class="pad-img img-fluid">
                  <img src="{{URL::asset('/images/images-squares/cuadrado-4.jpg')}}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="gridable-col col-6 column-wrapper">
                  <article class="column">
                      <h2>Lorem ipsum dolor</h2>
                      <h1>NOTICIAS</h1>
                      <div class="row">
                        <article class="col-xxl blockquote">
                          <P class="intro">Lorem ipsum dolor si amet consectetur adipisicing elit. Reprehenderit non, suscipit repudiandae nulla debitis voluptatibus.</P>
                        </article>
                        <article class="col-xxl blockquote">
                          <P class="intro">Lorem ipsum dolor si amet consectetur adipisicing elit. Reprehenderit non, suscipit repudiandae nulla debitis voluptatibus.</P>
                        </article>
                        <article class="col-xxl blockquote">
                          <P class="intro">Lorem ipsum dolor si amet consectetur adipisicing elit. Reprehenderit non, suscipit repudiandae nulla debitis voluptatibus.</P>
                        </article>
                      </div>
                      <p><a class="btn-link" href="#">FUNCTIONS</a></p>
                  </article>
              </div>
            </div>
        </div><!-- container -->
      </aside><!-- mensaje -->

      <div id="zone3">
        <div class="container-fluid">
          <h3 class="text-center">special</h3>
          <h4 class="text-center">functions</h4>
        </div>
      </div><!-- Zone -->

      <article id="nosotros">
        <div class="container">
            <div class="row">
                <div class="gridable-col column-wrapper">
                    <article class="column">
                        <h2>Lorem ipsum dolor</h2>
                        <h1>ABOUT</h1>
                        <div class="row">
                          <div class="col-xl row">
                            <article class="col-xxl">
                              <p>Reprehenderit soluta impedit illo vero consectetur veniam, laudantium esse quo nam! Impedit consequatur placeat id aliquid? Quasi sequi, dignissimos laudantium illo repellendus eligendi a impedit vel error dolore. Quidem, odio!</p>
                              <p>Esse ex voluptate culpa obcaecati, fugiat exercitationem beatae dolorem nesciunt voluptatum unde ut accusantium! Vero veritatis voluptas similique nihil ducimus ipsam sequi. Ipsum magni placeat.</p>
                            </article>
                            <article class="col-xxl">
                              <p>Velit, sint ratione dolore blanditiis animi neque quod eveniet quibusdam ad recusandae nostrum ducimus dignissimos minima veniam molestias obcaecati molestiae eos eligendi, dolor cumque ipsa voluptate, sapiente nihil. Odio, ratione.</p>
                              <p>Eaque vitae eius ratione reiciendis minima cumque eos voluptates earum odio fuga, perspiciatis voluptatum ea odit, dignissimos optio temporibus quaerat quae.</p>
                            </article>
                          </div>
                          
                          <article class="col-xl-6">
                            <div class="col ratio ratio-16x9">
                              <video src="{{URL::asset('/images/videos/video.mp4')}}" controls></video>
                            </div>
                        </article>
                    </div><!-- row -->
                        <p><a class="btn-link" href="#">PRODUCTIONS</a></p>
                    </article>
                </div>
            </div>
        </div><!-- container -->
      </article><!-- videos -->

      <div id="zone4">
        <div class="container-fluid">
          <h3 class="text-center">tasteful</h3>
          <h4 class="text-center">recipes</h4>
        </div>
      </div><!-- Zone -->

      <article id="galeria">
        <div class="container">
            <div class="row">
                <div class="gridable-col column-wrapper">
                    <article class="column">
                        <h2>Lorem ipsum dolor</h2>
                        <h1>GALERY</h1>
                        <div class="row g-0">
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto1.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto2.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto3.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto4.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto5.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto6.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto7.jpg')}}" alt="" class="img-fluid"></figure>
                          <figure class="col-figura col-3"><img src="{{URL::asset('/images/fotos/foto8.jpg')}}" alt="" class="img-fluid"></figure>
                        </div><!-- row -->
                        <p><a class="btn-link" href="#">FUNCTIONS</a></p>
                    </article>
                </div>
            </div>
        </div><!-- container -->
      </article><!-- videos -->

      <div id="mapa" class="ratio" style="--aspect-ratio: 36%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.180493659478!2d-77.0387515855774!3d-12.099792946182692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c843aa6f30d9%3A0xf7b389e9c6c5e785!2sDon%20Mamino%20Panes%2C%20Postres%20%26%20Caf%C3%A9!5e0!3m2!1ses!2spe!4v1608862332893!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div><!-- mapa -->
    </main>  
@endsection    