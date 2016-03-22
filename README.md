# Amigo Secreto
Aplicación básica para jugar al Amigo Secreto, juego que consiste en dar un regalo a un amigo elegido de forma aleatoria.

# How to use
Basicamente necesitas 2 elementos, Amigos(suena triste, pero no todos tienen) y el juego.

Para agregar amigos:
```php
$amigo = new AmigoSecreto\Amigo('Amigo Imaginario');
$yo = new AmigoSecreto\Amigo('Yo');
```

Una vez que tienes tus amigos, los agregamos al juego:
```php
$juego = new AmigoSecreto\AmigoSecreto();
$juego->addPlayer($yo);
$juego->addPlayer($amigo);
```

Y que empiece el sorteo:
```php
$result = $juego->letsPlay();
```
Ver resultados:
```php
foreach ($result as $secret) {
	echo $secret->Confess().'<br />';
}
```

ToDO
+ Notificar a cada jugador a quien le toco en el sorteo.
+ Ejemplo con registros de Base de datos
