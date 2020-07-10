<!-- USER JA REGISTADO COMO EMPRESA E VERIFICADO -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7"> 
                <div class="custom-breadcrumbs">
                    <a href="/">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Perfil</strong></span>
                </div>
            </div>
        </div>
        <!-- PERFIL Preenchido? Sim:     -->
        @guest
            <h1>Faça login para ter acesso a esta página</h1>
        @else
            <div class="row">
                <h1  class="text-white font-weight-bold">Veja o seu perfil <a href="{{route('perfil')}}">aqui</a></h1>
            </div>
            <!-- PERFIL Preenchido? Nao:     -->
            <div class="row">
                <h1  class="text-white font-weight-bold">Crie o seu perfil <a href="{{route('Criar')}}">aqui</a></h1>
            </div>
        @endguest
    </div>
</section>