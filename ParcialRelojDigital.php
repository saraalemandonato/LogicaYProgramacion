<html>
<head>
<title>problema</title>
</head>
<body>
<?php

def reloj_digital():
    try:
        while True:
            os.system('cls' if os.name == 'nt' else 'clear')  # Limpiar pantalla
            hora_actual = time.strftime("%H:%M:%S")  # Obtener la hora actual
            print(f"\n    {hora_actual}    \n")  # Mostrar la hora en formato HH:MM:SS
            time.sleep(1)  # Esperar 1 segundo
    except KeyboardInterrupt:
        print("\nReloj detenido.")

if __name__ == "__main__":
    reloj_digital()
?>
</body>
</html>