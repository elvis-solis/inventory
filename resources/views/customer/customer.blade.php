@extends('include.master') // Extiende el diseño desde el archivo 'include.master'. Esto significa que heredará la estructura y estilos definidos en ese archivo.

@section('title','Inventory | Clientes') // Define el título de la página.

@section('page-title','Todos los clientes') // Define el título de la página que se mostrará en el contenido.

@section('content') // Define una sección llamada 'content' que se puede llenar en otras partes del código.

        <div class="row clearfix">
        	
        	<create-customer></create-customer> // Incluye el componente 'create-customer' en el contenido.

        </div>


        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <h2>
                          	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-customer">
                                Cliente nuevo
                             </button>
                          </h2>
                        </div>

                        <view-customer></view-customer> // Incluye el componente 'view-customer' en el contenido.

                    </div>
                </div>
            </div>

@endsection // Finaliza la sección 'content'.

@push('script') // Agrega un script al stack 'script'.

<script type="text/javascript" src="{{ url('public/js/customer.js') }}"></script> // Incluye un archivo de script desde la URL especificada.

@endpush
