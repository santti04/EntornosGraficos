<!-- Este codigo se debe colocar al inicio de todas las paginas web en las que deseemos contar la cantidad de visitas que tiene el mismo. -->
<?php
session_start();

// Verificar si existe una variable de sesión para contar las páginas visitadas
if (!isset($_SESSION['paginas_visitadas'])) {
    // Si no existe, se inicializa a 1
    $_SESSION['paginas_visitadas'] = 1;
} else {
    // Si existe, incrementar el contador en 1
    $_SESSION['paginas_visitadas']++;
}
?>


<!-- El siguiente codigo es para mostrar esas visitas que fueron contabilizas con el codigo anterior.   -->
<?php
echo "Páginas visitadas: " . $_SESSION['paginas_visitadas'];
?>
