@extends('layouts.static.template')

@section('content')


  <div class="section">
                      <div class="row">
                         <h1 class="header center blue-text">¡TE RESPONDEREMOS EN BREVE!</h1>
                                <div class="col s12 m6">
                                     
                                       
                                        <div class="row">
                                        <form class="col s12">
                                          <div class="row">
                                            <div class="input-field col s6">
                                              <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                              <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                              <input id="last_name" type="text" class="validate">
                                              <label for="last_name">Last Name</label>
                                            </div>
                                          </div>
                                         
                                         
                                          <div class="row">
                                            <div class="input-field col s12">
                                              <input id="email" type="email" class="validate">
                                              <label for="email">Email</label>
                                            </div>
                                          </div>
                                           <div class="row">
                                               <form class="col s12">
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                    <label for="textarea1">Textarea</label>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>
                                             <div class="row">
                                              <div class="col s4 m4 ">
                                                <div class="btn-floating  waves-effect waves-light blue ">
                                                     <i class="material-icons right">facebook</i>
                                                </div>
                                                <div class="btn-floating  waves-effect waves-light red ">
                                                     <i class="material-icons right">whatsapp</i>
                                                </div>
                                                
                                                 
                                              </div>

                                               <div class="col s8 m8">
                                               <button class="btn-large waves-effect waves-light red right" type="submit" onclick="M.toast({html: 'Te contactaremos pronto'})"name="action">Enviar
                                                <i class="material-icons right">send</i>
                                              </button>
                                              </div>    
                                             </div>                                          
                                        </form>
                                      </div>
                                        <br><br>
                                        <br><br>
                                        <br><br>
                                </div>
                                <div class="col s12 m6">
                                  
                                        <div class="card">
                                          <div class="card-image">
                                            <img src="{{ asset('img/FONDO.jpg') }}">
                                            <!-- <span class="card-title"></span> -->
                                            <!-- <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a> -->
                                          </div>
                                          <div class="card-content">
                                            <p>ESTAMOS PARA SERVIRTE.</p>
                                          </div>
                                        </div>
                                      
                                </div>
                  </div>
    </div>
@endsection
