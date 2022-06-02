@php
    $datas = $datas = [
        ['title' => 'Emergency','text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','img' =>  'asset/img/image(2).png ', 'color' => '#F8AF9E', 'margin-left' => ' 0;'],
        ['title' => 'After Sales','text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','img' =>  'asset/img/image(3).png ', 'color' => '#F9F498', 'margin-left' => '-1em;'],
        ['title' => 'Biro Jasa','text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','img' =>  'asset/img/image(4).png ', 'color' => '#D9F7A1', 'margin-left'=> ' -2em;']
    ];
@endphp

<h1 class="text-center pt-5 pb-5">Layanan mitra kami</h1>
<div class="desktop">
    <div class="container">
        <div class="row">
            <?php foreach ( $datas as $data) : ?>
                <div class="col-md-4 col-sm-12  ">
                    <div class="card" style="background: {{$data['color']}}; border-radius: 54px;">
                        <img class="img-responsive mx-md-auto mx-lg-auto mx-sm-auto mx-auto d-inline text-center" src="{{$data['img']}}" alt="Card image cap" style=" width:240px; height:238px;">
                        <div class="card-body">
                            <h3 class="card-title" style="margin: 1rem 2rem 24px 2rem"><b>{{$data['title']}}</b></h3>
                            <p class="card-text" style="margin: 0 2rem 47px 2rem">{{$data['text']}}</p>
                            <a href="#" class="btn" style="margin: 0 199px 35px 32px; border-radius:2em; background-color: #C50F1C; color: #ffffff; padding: .3em 1.5em;">Gabung</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="mobile">
    <div class="container-fluid " style="overflow: hidden">
        <div class="row gx-5">
            <div class="col-12 col-lg-12 mx-1">
                <div class="owl-carousel owl-theme">
                    <?php foreach ( $datas as $data) : ?>
                    <div class="item mb-4 mx-3 ">
                        <div class="card "style="border-radius:15px;background: {{$data['color']}}; width:178px; height:200px;">
                            <img class="card-img-top mx-auto d-block" src="{{$data['img']}}" alt="Card image cap" style=" width:60px; height:59.5px;">
                            <div class="card-body p-0">
                                <h3 class="card-title text-center" style="font-size: 15px"><b>{{$data['title']}}</b></h3>
                                <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-sm" style="margin:  -12px 0 35px 50px; border-radius:2em; background-color: #C50F1C; color: #ffffff;">Gabung</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.owl-carousel').owlCarousel({
  margin: 10,

  responsive: {
    0: {
      items: 2
    },

    600: {
      items: 2
    },

    1024: {
      items: 3
    },

    1366: {
      items: 3
    }
  }
});
</script> 