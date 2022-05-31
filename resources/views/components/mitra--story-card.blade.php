@php
    $datas = $datas = [
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'asset/img/image(12).png ', 'margin' => '0 !important;']

    ];
@endphp
<div class="container-fluid p-0" style="overflow: hidden">
    <div class="row ">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme me-md-4 ">
                <?php foreach ( $datas as $data) : ?>
                <div class="item mb-4 me-md-5">
                    <div class="card" style="width: 488px; height:480px;">
                        <img class="card-img-top mx-auto d-block" src="{{$data['img']}}" alt="Card image cap" style="height: 312px">
                        <div class="card-body p-0">
                            <h3 class="card-title text-start pt-3 ms-md-4" style="font-size:30px;"><b>Lorem ipsum dolor sit amet. Lorem ipsum</b></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script>
$('.owl-carousel').owlCarousel({
    margin: 15,
    center: true,
    navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
</script>
</body>

</html>