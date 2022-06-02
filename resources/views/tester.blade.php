<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta nlinkame="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/js/app.js')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>Document</title>
    <style>
        
            img {
    height: 280px;
}
.owl-carousel .owl-nav {
  margin: 0 !important;
  overflow: hidden;
  height: 0px;
}
.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
  background: #5110e9;
}
.owl-theme .owl-dots {
  position: relative;
  bottom: 7em;
}
.owl-carousel .item {
  text-align: center;
}
.owl-carousel .nav-button {
  cursor: pointer;
  position: absolute;
  top: 110px !important;
}
.owl-carousel .owl-prev.disabled,
.owl-carousel .owl-next.disabled {
  pointer-events: none;
  opacity: 0.2;
}
.owl-carousel .owl-prev{

  right: 91rem;
}
.owl-carousel .owl-next{

left: 91.5rem;
}
.owl-theme .owl-nav [class*=owl-] {
  color: black;
  font-size: 50px;
  background: none;

}
.owl-theme .owl-nav [class*=owl-]:hover {
  background: none;
  color: black;
  text-decoration: none;
}
       
    </style>
</head>
<body>
    <x-Header--Mitra/>
    <x-Full-Width--Image/>
  <x-Services-Category-Card/>
  <x-Benefit-Card/>
  <x-Mitra--Story-Card/>
  <x-Jumbotron-Mitra/>
  <x-Footer/>
</body>
</html> 