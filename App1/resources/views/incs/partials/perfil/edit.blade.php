<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Perfil</h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Edit</strong></span>
                </div>
            </div>
        </div>
    </div>
    <form action="{{route('categorias.update',$categoria->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control
            @if ($errors->any())
                @if ($errors->has('categoria'))
                    is-invalid
                @else
                    is-valid
                @endif
            @endif
            " id="categoria" name="categoria" value="{{$categoria->categoria}}">
            @error('categoria')
                <div class="invalid-feedback">
                    {{ $message }}.
                </div>
            @enderror
        </div>
        <input type="submit" value="Confirmar" class="btn btn-sm btn-success">
    </form>
</section>