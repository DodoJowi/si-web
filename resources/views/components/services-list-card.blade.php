@php
  $datas = $datas = [
    ['image' => 'Ganti Ban','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Aki Drop','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image1.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Kunci Hilang','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image2.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Mobil Derek','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image3.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Tune Up','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image4.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Cuci Mobil','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image5.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Kaca Film','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image6.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Balancing','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image7.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'AC Mobil','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image8.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Perpanjang SIM','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image9.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Perpanjang STNK','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image10.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Asuransi','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image11.PNG  ', 'color' => '#FFFFFF']

  ];
@endphp

<div class="container  text-center" style="">
    <h1 class="mt-5">Layanan kami</h1>
    <div class="row mt-5 ">
        <?php foreach ( $datas as $data) : ?>
            <div class=" col-lg-3 " >
                <div class="card mt-5 text-start border" style="width: 255px; border-radius: 30px; background:{{$data['color']}}; border: 2px solid {{$data['color']}}; height:  494px; margin-right: 20px;">
                    <img class="card-img-top mx-auto" src="{{$data['img']}}" alt="Card image cap" style=" width:200px; height:200px; margin: 32px 0px;">
                    <div class="card-body p-0" style="margin: 0 32px 0 32px">
                        <h3 class="card-title"style="margin: 18px 0px; font-size: 28px;">{{$data['image']}}</h3>
                        <p class="card-text" style="margin: 18px 0px; font-size: 18px;">{{$data['text']}}</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>