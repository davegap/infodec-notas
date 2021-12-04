@extends('home')
@section('contenido')
<div class="container w-25 border p-4" id="formulario">
    
    <form action="{{route('registrar')}}" method="POST" role="form" >
        @csrf
        <legend class="text-center">NOTAS</legend>
    
        <div class="form-group">
            <label for="">Nombres</label>
            <input 
            name="nombres" 
            type="text" 
            class="form-control"  
            placeholder="Registre nombre del estudiante..."
            value={{old('nombres')}}>
        </div>
        @error('nombres')
             <div class="alert alert-danger">
             Registro no cumple con criterio de aceptacion
            </div> 
        @enderror
        
 
        <div class="form-group">
            <label for="">Parcial 1</label>
            <input name="nota1" 
            id="nota1" 
            type="number" 
            step="0.1" 
            oninput="calcular()" 
            class="form-control" 
            placeholder="Nota primer parcial..." 
            value={{old('nota1')}}>
        </div>
        @error('nota1')
        <div class="alert alert-danger">
            Registro no cumple con criterio de aceptacion
        </div>
        @enderror

        <div class="form-group">
            <label for="">Parcial 2</label>
            <input name="nota2" 
            id="nota2" 
            type="number" 
            step="0.1" 
            oninput="calcular()"  
            class="form-control" 
            placeholder="Nota segundo parcial..."
            value={{old('nota2')}}
            >
        </div>
        @error('nota2')
        <div class="alert alert-danger">
            Registro no cumple con criterio de aceptacion
        </div>
        @enderror

        <div class="form-group">
            <label for="">Parcial 3</label>
            <input name="nota3" 
            id="nota3"
             type="number" 
             step="0.1" 
             oninput="calcular()" 
             class="form-control" 
             placeholder="Nota tercer parcial..."
             value={{old('nota3')}}
             >
        </div>
        @error('nota3')
        <div class="alert alert-danger">
            Registro no cumple con criterio de aceptacion
        </div>
        @enderror
        <br>
        
        <button type="submit" class="btn btn-success">Registrar</button>

        <div class="container text-center">
            Nota Final:
                <input  
                name="promedio" 
                id="promedio"
                type="text" 
                class="form-control text-center" 
                disabled="true"
                value={{old('promedio')}}
                >
            @error('promedio')
            <div class="alert alert-danger">
                Registro no cumple con criterio de aceptacion
            </div>
            @enderror
        </div>

    </form>

    @if (session('success'))
        
        <div class="alert alert-success">
           {{session('success')}}
        </div>
        
    @endif

    <div class="text-center">
        <a href="/">
            regresar
        </a>
    </div>
    
</div>
<script type="text/javascript">
    function calcular() {
        var nota1=parseFloat(document.getElementById("nota1").value)||0,
            nota2=parseFloat(document.getElementById("nota2").value)||0,
            nota3=parseFloat(document.getElementById("nota3").value)||0;

        document.getElementById("promedio").value=((nota1+nota2+nota3)/3).toFixed(1);
    }
</script>
@endsection

