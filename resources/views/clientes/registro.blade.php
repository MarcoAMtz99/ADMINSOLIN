@extends('layouts.static.template')

@section('content')
<div class="section">

 <div class="row">
    <form class="col s12" method="POST" action="{{ route('cliente.store') }}" enctype="multipart/form-data">

       @csrf
      <div class="row">
        <div class="input-field col s12 m4">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="name" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
           <div class="input-field col s12 m4">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="paterno" class="validate">
          <label for="icon_prefix">Paterno</label>
        </div>
           <div class="input-field col s12 m4">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix2" type="text" name="materno" class="validate">
          <label for="icon_prefix2">Materno</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12 m4">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" name="telefono" class="validate">
          <label for="icon_telephone">Telefono</label>
        </div>
         <div class="input-field col s12 m4">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" name="celular" class="validate">
          <label for="icon_telephone">Celular</label>
        </div>
        <div class="input-field col s12 m4">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m4">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="rfc" class="validate">
          <label for="icon_prefix">Rfc</label>
        </div>

         <div class="input-field col s12 m4">
           <i class="material-icons prefix">password</i>
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
         <div class="input-field col s12 m4">
           <i class="material-icons prefix">password</i>
          <input id="password" type="password" name="password_confirmation" class="validate">
          <label for="password">Confirm Password</label>
        </div>

      </div>
      <div class="row">

                <div class="input-field col s12 m6">
                              <div class="card">
                                 <label for="ine_front">Ine Trasera</label>
                               <input id="ine_back" type="file" class="" name="ine_back"  accept="image/jpeg,image/png" >
                              </div>
                </div>
               <div class="input-field col s12 m6">
                          <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ine delantera') }}</label> 
                          --> 
                          <div class="card">
                        
                            <label for="ine_front">Ine delantera</label>
                           
                                <input id="ine_front" type="file" class="" name="ine_front" required  accept="image/jpeg,image/png">
                                  </div>


               </div>
               
                <!-- <a class="btn" onclick="M.toast({html: 'I am a toast'})">Toast!</a>  -->
      </div>
      <div class="row">
         <div class="input-field col s12 m4 right">
                    <button class="btn-large waves-effect waves-light right red" type="submit" >Registrar
                    <i class="material-icons right">send</i>
                  </button>
               </div> 
      </div>



    </form>
  </div>
</div>
 <script>
    // M.toast({html: 'I am a toast!', classes: 'rounded'});

    // Get toast DOM Element, get instance, then call dismiss function
  // var toastElement = document.querySelector('.toast');
  // var toastInstance = M.Toast.getInstance(toastElement);
  // toastInstance.dismiss();
 </script>
@endsection







