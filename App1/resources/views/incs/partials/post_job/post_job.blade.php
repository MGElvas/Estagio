<section class="site-section">
    <div class="container">
      @guest
        <h1>Faça login para ter acesso a esta página</h1>
      @else
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Crie um cargo</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" method="post">
              @csrf
              <h3 class="text-black mb-5 border-bottom pb-2">Detalhes</h3>
              <div class="form-group">
                <label for="job-title">Titulo do cargo</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Product Designer">
              </div>
              <div class="form-group">
                <label for="job-title">Condição do cargo</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Full-time">
              </div>
              <div class="form-group">
                <label for="job-title">Localização</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Los Angeles">
              </div>
              <br>
              <div class="form-group">
                <p>Descriçao do cargo:</p>
                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10" value="{{old('descricao')}}"></textarea>
              </div>
              
            </form>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="{{route('tstore')}}" type="submit" class="btn btn-block btn-primary btn-md">Guardar</a>
              
              </div>
            </div>
          </div>
        <div class="row align-items-center mb-5">
          <div class="col-lg-4 ml-auto">
            <div class="row">
      
            </div>
          </div>
        </div>
      @endguest

        
    </div>
  </section>
