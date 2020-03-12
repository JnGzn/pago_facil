<h1>Crear producto</h1>
<form action="{{url('guardarproducto')}}" method="POST">
    @csrf
    nombre: <input type="text" name="nomProducto">
    valor unitario: <input type="text" name="valorUnitario">
    <button type="submit">guardar</button>

</form>