@extends('layouts.app')
@section('style1')
    {{ asset('css/login.css') }}
@endsection
@section('style2')
    {{ asset('css/calendar.css') }}
@endsection
@section('content')
<!---datos en general de todos se puede usar para admin y externo sin moverle nada-->
<section>
    <article>
                    <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <!-- The slideshow/carousel -->
            <div class="carousel-inner" style="max-height:40vh;">
            <div class="carousel-item active">
                <img src="https://a.espncdn.com/combiner/i?img=/photo/2023/1009/r1236333_2_1296x729_16-9.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="data:image/jpeg;base64,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" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://buenosaires.gob.ar/sites/default/files/styles/card_img_top/public/media/image/2020/11/20/7f211443570b111e8ebdc0bf97d42faf9e9c64e0.jpeg?itok=Nm8xEII6" alt="New York" class="d-block w-100">
            </div>
            </div>
        
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </article>
</section>

<div class="container mt-5">
<section class="container ">
    <article>
        <h1>EVENTOS DISPONIBLES</h1>
        <div class=" row ">
            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>
        
           
            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>    
            </div>

            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://s1.eestatic.com/2022/06/11/deportes/tenis/679442246_225025750_1706x960.jpg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Tenis</h1>
                            <h4>Evento Externo</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://imagenes.razon.com.mx/files/image_940_470/uploads/2022/04/28/626ab208d845e.jpeg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h1 class="card-title">Carrera Atletica</h1>
                            <h4>Evento interno</h4>
                            <h4>Categoria Deportivo</h4>
                            <h4>Costo: Gratuito</h4>
                            <button type="button"  class="btn btn-primary">Inscribirme</button>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </article>
 
 </section>
 <section>
</div>

@endsection
