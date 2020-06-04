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
                <form action="">
                @csrf
                    <!-- EMAIL -->
                    <div class="form-group">
                        <label for="titulo">Email Empresarial</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message}}.
                            </div>
                        @enderror
                    </div>
                    <!-- MORADA -->
                    <div class="form-group">
                        <label for="titulo">Morada</label>
                        <input type="text" class="form-control" id="morada" name="morada" value="{{old('morada')}}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message}}.
                            </div>
                        @enderror
                    </div>
                    <!-- CODIGO POSTAL -->
                    <div class="form-group">
                        <label for="titulo">Codigo Postal</label>
                        <input type="text" class="form-control" id="cdpostal" name="cdpostal" value="{{old('cdpostal')}}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message}}.
                            </div>
                        @enderror
                    </div>
                    <!-- PESSOA DE CONTACTO -->
                    <div class="form-group">
                        <label for="titulo">Representante</label>
                        <input type="text" class="form-control" id="pessoa_contacto" name="pessoa_contacto" value="{{old('pessoa_contacto')}}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message}}.
                            </div>
                        @enderror
                    </div>
                    <!-- NUMERO CONTRIBUINTE EMPRESARIAL -->
                    <div class="form-group">
                        <label for="titulo">Nº Contribuinte</label>
                        <input type="text" class="form-control" id="nContribuinte" name="nContribuinte" value="{{old('nContribuinte')}}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message}}.
                            </div>
                        @enderror
                    </div>
                    <!--DESCRIÇÃO DA EMPRESA -->
                    <div class="form-group">
                        <label for="titulo">Descreva a sua empresa</label>
                        <!-- TEXT AREA ??? -->
                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{old('descricao')}}">
                        @error('post')
                            <div class="invalid-feedback">
                                {{ $message}}.
                            </div>
                        @enderror
                    </div>
                    <input type="submit" value="Confirmar" class="btn btn-sm btn-success">
                </form>
            </div>
        </div>
    </div>
</section>