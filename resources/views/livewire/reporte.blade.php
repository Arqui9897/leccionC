<div>
    <h1>Jugadores</h1>

    <table>
        <thead>
            <th>
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                cedula
            </th>

            <th>
                NCamiseta
            </th>
            <th>
                posicion
            </th>
            <th>
                Equipo
            </th>
            <thead>
                <tbody>    
                @foreach ($jugadores as $item)
                    <tr>
                    <td>
                        {{$item->nombreJug}}
                    </td>
                    <td>
                        {{$item->apellidoJug}}
                    </td>
                    <td>
                        {{$item->cedulaJug}}
                    </td>        
                    <td>
                        {{$item->numerocam}}
                    </td>      
                    <td>
                        {{$item->posicion}}
                    </td>
                </tr>

                    
                      
                @endforeach


                {{-- @foreach ($jugadores as $jugadores)
                @if ($jugadores->id == $item->id_jugaodres)
                <td>
                    {{$jugadores->jugadores}}
                </td>
                @endif
                @endforeach --}}
            </tbody>
            
    </table>
</div>


<p><a href="reportepdf">agarra tu reporte</a></p>



{{-- <td>
    {{$item->nombreJug}}
</td>
<td>
    {{$item->apellidoJug}}
</td>
<td>
    {{$item->cedulaJug}}
</td>        
<td>
    {{$item->numerocam}}
</td>      
<td>
    {{$item->posicion}}
</td> --}}