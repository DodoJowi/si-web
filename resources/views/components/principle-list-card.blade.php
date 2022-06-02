@php
    $datas = $datas = [
        ['title' => 'Humble','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(5).png '],
        ['title' => 'Responsible','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(6).png '],
        ['title' => 'Serious','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(7).png '],
        ['title' => 'Care','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(8).png '],
        ['title' => 'Trust','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(9).png '],
        ['title' => 'Integrity','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(10).png '],
        ['title' => 'Honest','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(11).png '],
        ['title' => 'Comitment','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png '],
        ['title' => 'Loyalty','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(13).png ']

    ];
@endphp
<div class="my-5">
    <div class="desktop">
        <div class="container">
            <h1 class="text-center">9 Prinsip Nino</h1>
                <div class="row pt-5">
                    <?php foreach ( $datas as $data) : ?>
                        <div class="col-md-4 col-sm-4 col-lg-4 pt-4">
                            <div class="card" >
                                <img src="{{$data['img']}}" alt="Card image cap" style=" width:279px; height:241px; margin: 0 40px">
                                <div class="card-body">
                                    <h3 class="card-title" style="margin: 42px 40px 18px 40px"><b>{{$data['title']}}</b></h3>
                                    <p class="card-text" style="margin: 0 40px 72px 40px">{{$data['text']}}</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        </div>
    </div>
</div>
<div class="mobile">
    <div class="container-fluid p-0" style="overflow: hidden">
        <div class="row ">
            <div class="col-12">
                <div class="owl-carousel owl-theme ">
                    <?php foreach ( $datas as $data) : ?>
                    <div class="item mb-4">
                        <div class="card"style="width:260px; height:339px;">
                            <img class="card-img-top mx-auto d-block" src="{{$data['img']}}" alt="Card image cap" style=" width:260px; height:207px;">
                            <div class="card-body p-0">
                                <h3 class="card-title text-start" style="font-size: 15px; margin-left:15px"><b>{{$data['title']}}</b></h3>
                                <p class="card-text text-start" style="margin-left:15px">{{$data['text']}}</p>
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
  center: true,
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