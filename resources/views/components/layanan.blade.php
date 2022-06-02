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

<h1 class="text-center pt-5 pb-5 mt-5">Kami memberikan pelayanan yang lengkap</h1>
<div class="mt-5">
    <div class="desktop">
        <div class="container ">
            <div class="row ">
                <?php foreach ( $datas as $data) : ?>
                    <div class="col-md-3 col-sm-3 col-lg-3 mb-5">
                        <div class="card vw-70 h-100 " >
                            <img src="{{$data['img']}}" alt="Card image cap" class="w-75 h-auto m-4">
                            <div class="card-body">
                                <h3 class="card-title" style="margin: 2rem 1rem;">{{$data['image']}}</h3>
                                <p class="card-text" style="margin: 1vh 2.5vh">{{$data['text']}}</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

@php
  $datas = $datas = [
    ['image' => 'Ganti Ban','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Aki Drop','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image1.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Kunci Hilang','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image2.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Mobil Derek','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image3.PNG  ', 'color' => '#FFFFFF'],
  ];
@endphp


    <h1 class="mt-5 "style="margin-left: 118px;" >Emergency</h1>
    <p class="mt-4" style="margin-left: 118px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
    <div class="mt-5">
    <div class="desktop">
        <div class="container ">
            <div class="row ">
                <?php foreach ( $datas as $data) : ?>
                    <div class="col-md-3 col-sm-3 col-lg-3 mb-5">
                        <div class="card vw-70 h-100 " >
                            <img src="{{$data['img']}}" alt="Card image cap" class="w-75 h-auto m-4">
                            <div class="card-body">
                                <h3 class="card-title" style="margin: 2rem 1rem;">{{$data['image']}}</h3>
                                <p class="card-text" style="margin: 1vh 2.5vh">{{$data['text']}}</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
</div>

@php
  $datas = $datas = [
    ['image' => 'Tune Up','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image4.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Cuci Mobil','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image5.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Kaca Film','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image6.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Balancing','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image7.PNG  ', 'color' => '#FFFFFF']
  ];
@endphp


    <h1 class="mt-5" style="margin-left: 118px;">After Sales</h1>
    <p class="mt-4" style="margin-left: 118px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
    <div class="mt-5">
    <div class="desktop">
        <div class="container ">
            <div class="row ">
                <?php foreach ( $datas as $data) : ?>
                    <div class="col-md-3 col-sm-3 col-lg-3 mb-5">
                        <div class="card vw-70 h-100 " >
                            <img src="{{$data['img']}}" alt="Card image cap" class="w-75 h-auto m-4">
                            <div class="card-body">
                                <h3 class="card-title" style="margin: 2rem 1rem;">{{$data['image']}}</h3>
                                <p class="card-text" style="margin: 1vh 2.5vh">{{$data['text']}}</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


@php
  $datas = $datas = [
    ['image' => 'AC Mobil','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image8.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Perpanjang SIM','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image9.PNG ', 'color' => '#FFFFFF'],
    ['image' => 'Perpanjang STNK','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image10.PNG  ', 'color' => '#FFFFFF'],
    ['image' => 'Asuransi','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image11.PNG  ', 'color' => '#FFFFFF']

  ];
@endphp

    <h1 class="mt-5" style="margin-left: 118px;">Biro Jasa</h1>
    <p class="mt-4" style="margin-left: 118px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor</p>
    <div class="mt-5">
    <div class="desktop">
        <div class="container ">
            <div class="row ">
                <?php foreach ( $datas as $data) : ?>
                    <div class="col-md-3 col-sm-3 col-lg-3 mb-5">
                        <div class="card vw-70 h-100 " >
                            <img src="{{$data['img']}}" alt="Card image cap" class="w-75 h-auto m-4">
                            <div class="card-body">
                                <h3 class="card-title" style="margin: 2rem 1rem;">{{$data['image']}}</h3>
                                <p class="card-text" style="margin: 1vh 2.5vh">{{$data['text']}}</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

