function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("regTable");
  switching = true;
  // Asignar la direccion de ordenado a ascendiente
  dir = "asc";
  while (switching) {
    // Ponemos switching a falso
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Recorrer todas las lineas de la table */
    for (i = 1; i < (rows.length - 1); i++) {
      // Ponemos shouldSwitch a falso
      shouldSwitch = false;
      /* Cogemos un elemento de la linea donde estamos y otro de la siguiente para
      compararlos */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Comprobamos si las dos filas comparadas deben de cambiar el posicion
      y si es de forma ascendente o descendiente */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // si es asi, marcas el shouldSwitch y salimos
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // si es asi, marcas el shouldSwitch y salimos
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* Si el switch ha sido marcado, lo hacemos
      y marcamos que se ha hecho */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Cada vez que se hace un cambio, subimos el switch count en 1
      switchcount++;
    } else {
      /* Si no se hace cambio y la direccion es ascendiente, la marcamos como descendiente */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
