<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Perfil</h1>
                <div class="custom-breadcrumbs">
                    <a href="/perfil">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Create</strong></span>
                </div>
            </div>
        </div>
        <!-- FORMULARIO PERFIL EMPRESARIAL -->
        <div class="row">
            <div class="col-md-4">
                <form action="create" method="POST">
                @csrf
                    <!-- NOME -->
                    <div class="form-group">
                        <label for="titulo">Nome Empresarial</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}">
                    </div>
                    <!-- EMAIL -->
                    <div class="form-group">
                        <label for="titulo">Email Empresarial</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    <!-- NOME -->
                    <div class="form-group">
                        <label for="titulo">Numero Telemovel</label>
                        <input type="text" class="form-control" id="nTelemovel" name="nTelemovel" value="{{old('nTelemovel')}}">
                    </div>
                    <!-- MORADA -->
                    <div class="form-group">
                        <label for="titulo">Morada</label>
                        <input type="text" class="form-control" id="morada" name="morada" value="{{old('morada')}}">
                    </div>
                    <!-- CODIGO POSTAL -->
                    <div class="form-group">
                        <label for="titulo">Codigo Postal</label>
                        <input type="text" class="form-control" id="cdpostal" name="cdpostal" value="{{old('cdpostal')}}">
                    </div>
                    <!-- PESSOA DE CONTACTO -->
                    <div class="form-group">
                        <label for="titulo">Representante</label>
                        <input type="text" class="form-control" id="pessoa_contacto" name="pessoa_contacto" value="{{old('pessoa_contacto')}}">
                    </div>
                    <!-- NUMERO CONTRIBUINTE EMPRESARIAL -->
                    <div class="form-group">
                        <label for="titulo">Nº Contribuinte</label>
                        <input type="text" class="form-control" id="nContribuinte" name="nContribuinte" value="{{old('nContribuinte')}}">

                    </div>
                    <!--DESCRIÇÃO DA EMPRESA -->
                    <div class="form-group">
                        <label for="titulo">Descreva a sua empresa</label>
                        <!-- TEXT AREA ??? -->
                        <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10" value="{{old('descricao')}}"></textarea>
                    </div>
                    <input type="submit" value="Confirmar" class="btn btn-sm btn-success">
                </form>
            </div>
        </div>
    </div>
</section>