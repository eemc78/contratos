Estimado Usuario {{ $user->name }},<br><br>

Usted se ha registrado {{ url('/') }}.<br><br>

Las credenciales de Acceso son :<br><br>

Usuario: {{ $user->email }}<br>
Clave: {{ $password }}<br><br>

Usted puede inicar sesion aqui: <a href="{{ url('/login') }}">{{ str_replace("http://", "", url('/login')) }}</a>.<br><br>

Esperamos sea grata su experiencia con nuestros productos,