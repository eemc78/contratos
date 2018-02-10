Estimado usuario {{ $user->name }},<br><br>

Sus credenciales han cambiado :<br><br>

Usuario: {{ $user->email }}<br>
Clave: {{ $password }}<br><br>

Usted puede acceder aqui: <a href="{{ url('/login') }}">{{ str_replace("http://", "", url('/login')) }}</a>.<br><br>

Nuestros mejores deseos,