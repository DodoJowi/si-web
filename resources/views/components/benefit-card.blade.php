@php
    $datas = $datas = [
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 !important;']

    ];
@endphp
<h1 class="text-center pt-5 pb-5">Keuntungan bergabung bersama kami</h1>
<div class="my-5">
    <div class="desktop">
        <div class="container ">
            <div class="row ">
                <?php foreach ( $datas as $data) : ?>
                    <div class="col-md-3 col-sm-3 col-lg-3">
                        <div class="card vw-70 h-100" >
                            <img src="{{$data['img']}}" alt="Card image cap" class="vw-30">
                            <div class="card-body">
                                <h3 class="card-title" style="margin: 2rem 1rem ">{{$data['title']}}</h3>
                                <p class="card-text" style="margin: 1vh 2.5vh">{{$data['text']}}</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="mobile">
        <div class="container-fluid p-0" style="overflow: hidden">
            <div class="row ">
                <div class="col-12">
                    <div class="owl-carousel owl-theme mr-3">
                        <?php foreach ( $datas as $data) : ?>
                        <div class="item mb-4" style="margin-left: 30px;">
                            <div class="card" style="width: 178px; height:320px;">
                                <img class="card-img-top mx-auto d-block" src="{{$data['img']}}" alt="Card image cap">
                                <div class="card-body p-0">
                                    <h3 class="card-title text-start " style="font-size: 15px;margin-left:23px"><b>{{$data['title']}}</b></h3>
                                    <p class="card-text text-start" style="font-size:14px;margin-left:23px">{{$data['text']}}</p>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.owl-carousel').owlCarousel({
  margin: 2,

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