@php
  $datas = $datas = [
    ['image' => '150+','text' => 'MITRA','img' =>  'asset/img/office.PNG ', 'color' => '#95EFF7'],
    ['image' => '1000+','text' => 'Jumlah Unduh','img' =>  'asset/img/card.PNG ', 'color' => '#D9F7A1'],
    ['image' => '33','text' => '25 Kabupaten dan 8 Kota','img' =>  'asset/img/sumut2.PNG  ', 'color' => '#F9F498']

  ];
@endphp

<div class="container  text-center" style="margin: 120px">
    <h1>Siapa Kami</h1>
    <div class="row mt-5 ">
        <?php foreach ( $datas as $data) : ?>
            <div class=" col-md-4">
                <div class="card mt-5 text-start" style="width: 351px; border-radius: 54px; background:{{$data['color']}}; border: 1px solid {{$data['color']}}; height: 525px;">
                    <img class="card-img-top mx-auto" src="{{$data['img']}}" alt="Card image cap" style=" width:240px; height:238px;">
                    <div class="card-body p-0" style="margin: 0 32px 0 32px">
                        <h3 class="card-title"style="margin-top: 18px; font-size: 28px;">{{$data['image']}}</h3>
                        <p class="card-text" style="margin: 24px 0px; font-size: 18px; ">{{$data['text']}}</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div> 