 
        function buscarAutor(letra)
        {
          var librosAutores = ["Montoya Palacio Alberto","Oppenheimer Andres","Murray Robert K Mayes Peter A",
              "Munari Bruno","Blackword","Barker F Scott","Barrera Diaz Carlos Eduardo","Pollit Burga Ernesto",
              "Calvi Bettina","Castillo Malpartida Polo Humberto","Mercado H Salvador","Unesco",
              "Ferrero Muñoz Ignacio","Pozo Sánchez Julio","Gurfinkel De Wendy Liliana"];

          for(i=0; i<librosAutores.length; i++)
          {
            ocultarDiv(document.getElementById(librosAutores[i]))
          }

          for(i=0; i<librosAutores.length; i++)
          {
            var palabras = librosAutores[i].trim();

            for(j=0; j<palabras.length; j++)
            {
              if(palabras[j].charAt(0) == letra)
              {
                aparecerDiv(document.getElementById(librosAutores[i]));
              }
            }
            
          }

        }

        function ocultarDiv(x)
        {
            x.style.display = "none";
        }

        function aparecerDiv(x)
        {
            x.style.display = "block";
        }

      