{{-- resources/views/emails/password.blade.php --}}
 
Click aqui para cambiar tu clave: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a>